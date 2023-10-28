<?php

namespace Drupal\Tests\media_download\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Tests\system\Functional\Cache\AssertPageCacheContextsAndTagsTrait;

/**
 * Tests that the download functionality works as expected.
 *
 * Copyright (C) 2021  Library Solutions, LLC (et al.).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * @group media_download
 */
class DownloadTest extends BrowserTestBase {

  use AssertPageCacheContextsAndTagsTrait;

  /**
   * The media entity.
   *
   * @var \Drupal\media\Entity\Media
   */
  protected $media;

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'media_download',
  ];

  /**
   * The file owner account.
   *
   * @var \Drupal\Core\Session\AccountInterface
   */
  protected $owner;

  /**
   * Used to ensure that the 'Document' media type is installed by default.
   *
   * {@inheritdoc}
   */
  protected $profile = 'standard';

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    // Ensure that no user can view media by default.
    foreach (\Drupal::entityTypeManager()->getStorage('user_role')->loadMultiple() as $role) {
      $role->revokePermission('view media');
      $role->save();
    }

    $this->owner = $this->drupalCreateUser([
      'administer media',
    ]);

    $file_storage = \Drupal::entityTypeManager()->getStorage('file');
    $file_name = $this->randomMachineName();

    file_put_contents("public://{$file_name}.txt", "{$file_name}.txt");

    $file = $file_storage->create([
      'uid' => [['target_id' => $this->owner->id()]],
      'uri' => "public://{$file_name}.txt",
    ]);
    $file->save();

    $media_storage = \Drupal::entityTypeManager()->getStorage('media');
    $media_name = $this->randomMachineName();

    $this->media = $media_storage->create([
      'bundle' => [['target_id' => 'document']],
      'field_media_document' => [['entity' => $file]],
      'name' => [['value' => $media_name]],
      'uid' => [['entity' => $this->owner]],
      'path' => [
        [
          'alias' => "/{$media_name}",
        ],
      ],
    ]);
    $this->media->save();
  }

  /**
   * Tests that media access works as expected.
   *
   * Media access is delegated entirely to the Media module by placing an
   * _entity_access requirement on the overridden canonical route.
   *
   * This test case has the side effect of testing the page cache response
   * policy, as without it there would normally be an error due to the attempted
   * serialization of the response by Drupal's page cache module(s).
   *
   * @covers \Drupal\media_download\PageCacheResponsePolicy
   * @covers \Drupal\media_download\RouteSubscriber
   */
  public function testMediaDownloadAccess() {
    $allowed = $this->drupalCreateUser(['view media']);
    $forbidden = $this->drupalCreateUser();

    $this->drupalLogin($forbidden);

    // Users without the 'view media' permission can expect to be met with a 403
    // Forbidden status code for all media downloads.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(403);

    $this->drupalLogin($allowed);

    // Users allowed access to media can expect to be met with a 200 OK.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(200);

    $this->media->status->value = FALSE;
    $this->media->save();

    // Setting the media as unpublished should prevent everyone but the owner
    // from accessing it.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(403);

    $this->drupalLogin($this->owner);

    // The owner should still be able to access the media.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(200);
  }

  /**
   * Tests that the correct content is returned by Drupal on media download.
   *
   * @covers \Drupal\media_download\DownloadController::save
   */
  public function testMediaDownloadContent() {
    $file = $this->media->field_media_document->entity;
    $this->assertNotNull($file);

    $file_name = $file->filename->value ?? '';
    $this->assertNotNull($file_name);
    $this->assertGreaterThan(0, strlen($file_name));

    $file_name_regex = '/^' . preg_quote($file_name, '/') . '$/';
    $this->drupalLogin($this->owner);

    // Ensure that the correct data is returned for this response.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->responseMatches($file_name_regex);
  }

  /**
   * Tests that a 404 is returned when the target file is missing on disk.
   *
   * @covers \Drupal\media_download\DownloadController::getFile
   */
  public function testMediaDownloadFileMissingOnDisk() {
    $file = $this->media->field_media_document->entity;
    $this->assertNotNull($file);

    unlink($file->getFileUri());

    $this->drupalLogin($this->owner);

    // Ensure that a 404 is returned.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(404);
  }

  /**
   * Tests that the response is cacheable and contains the correct disposition.
   *
   * @covers \Drupal\media_download\CacheableBinaryFileResponse
   * @covers \Drupal\media_download\DownloadController::getFile
   */
  public function testMediaDownloadHeaders() {
    $this->drupalLogin($this->owner);

    // Ensure that a 404 is returned.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->responseHeaderNotEquals('Cache-Control', '');
    $this->assertSession()->responseHeaderContains('Content-Disposition', 'inline');
    $this->assertSession()->responseHeaderContains('Content-Disposition', 'filename=');
  }

  /**
   * Tests that a 404 is returned when the media entity has no associated file.
   *
   * @covers \Drupal\media_download\DownloadController::getFile
   */
  public function testMediaDownloadNoFileReference() {
    $this->media->field_media_document->entity = NULL;
    $this->media->save();

    $this->drupalLogin($this->owner);

    // Ensure that a 404 is returned.
    $this->drupalGet($this->media->toUrl('canonical')->toString());
    $this->assertSession()->statusCodeEquals(404);
  }

  /**
   * Tests that media can be downloaded as an attachment.
   *
   * @covers \Drupal\media_download\DownloadController::save
   */
  public function testMediaDownloadAsAttachment() {
    $this->drupalLogin($this->owner);

    $url = $this->media->toUrl('canonical', [
      'query' => [
        'dl' => 1,
      ],
    ]);
    $this->drupalGet($url);
    $assert_session = $this->assertSession();
    $assert_session->responseHeaderContains('Content-Disposition', 'attachment');
    $assert_session->responseHeaderContains('Content-Disposition', 'filename=');
    $this->assertCacheContext('url.query_args:dl');

    // Ensure that the download is inline if the 'dl' query string parameter is
    // anything other than 1.
    $url = $this->media->toUrl('canonical', [
      'query' => [
        'dl' => 'yes',
      ],
    ]);
    $this->drupalGet($url);
    $assert_session->responseHeaderContains('Content-Disposition', 'inline');
  }

}
