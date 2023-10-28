<?php

namespace Drupal\Tests\media_download\Kernel;

use Drupal\KernelTests\KernelTestBase;

use Drupal\media_download\DownloadController;

/**
 * Tests the side effects introduced by this module to the Media module.
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
class MediaTest extends KernelTestBase {

  /**
   * {@inheritdoc}
   */
  protected static $modules = [
    'media',
  ];

  /**
   * {@inheritdoc}
   */
  protected function setUp(): void {
    parent::setUp();

    $this->installConfig(['media']);
  }

  /**
   * Test that the canonical route is overridden when this module is installed.
   *
   * @covers \Drupal\media_download\RouteSubscriber
   */
  public function testCanonicalRouteOverride() {
    $media_download_controller = '/^\\\\?' . preg_quote(DownloadController::class, '/') . '::save$/';

    $controller = \Drupal::service('router.route_provider')->getRouteByName('entity.media.canonical')->getDefault('_controller');
    $this->assertDoesNotMatchRegularExpression($media_download_controller, $controller ?? '');

    $this->enableModules(['media_download']);

    $controller = \Drupal::service('router.route_provider')->getRouteByName('entity.media.canonical')->getDefault('_controller');
    $this->assertMatchesRegularExpression($media_download_controller, $controller);
  }

  /**
   * Test that the media settings override service is working as expected.
   *
   * @covers \Drupal\media_download\MediaSettingsOverride
   */
  public function testMediaSettingsOverride() {
    $this->enableModules(['media_download']);

    \Drupal::configFactory()->getEditable('media.settings')
      ->set('standalone_url', FALSE)
      ->save();

    $config = \Drupal::config('media.settings');
    $this->assertNotEquals($config->getOriginal('standalone_url', FALSE), $config->get('standalone_url'));

    $entity_type = \Drupal::entityTypeManager()->getDefinition('media');
    $this->assertSame('/media/{media}', $entity_type->getLinkTemplate('canonical'));
  }

}
