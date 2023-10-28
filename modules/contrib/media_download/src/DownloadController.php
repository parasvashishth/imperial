<?php

namespace Drupal\media_download;

use Drupal\Core\Cache\CacheableMetadata;
use Drupal\Core\Controller\ControllerBase;

use Drupal\file\FileInterface;
use Drupal\media\MediaInterface;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

/**
 * Provide support for the direct download of media entities.
 *
 * Copyright (C) 2021  Library Solutions, LLC (et al.).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
class DownloadController extends ControllerBase {

  /**
   * Attempt to retrieve a file from the supplied media.
   *
   * This method will only return a file if all of the following conditions are
   * satisfied by the supplied media entity:
   *
   * 1. A source field can be determined
   * 2. The source field exists on the supplied media entity
   * 3. At least one field delta references a file that exists on disk
   *
   * @param \Drupal\media\MediaInterface $media
   *   The media from whicfh to retrieve a file entity.
   *
   * @return \Drupal\file\FileInterface|null
   *   A file on success, otherwise NULL.
   *
   * @throws \RuntimeException
   *   If the supplied media entity has no source field.
   */
  protected function getFile(MediaInterface $media) {
    // Ensure that the source field can be determined for this media.
    if (empty($source_field = $media->getSource()->getConfiguration()['source_field'] ?? NULL) || !$media->hasField($source_field)) {
      throw new \RuntimeException("No source field available for the requested entity.");
    }

    // Attempt to locate a valid file in the source field.
    foreach ($media->{$source_field} as $item) {
      // Skip this field item if it doesn't reference a file entity.
      if (!$item->entity instanceof FileInterface) {
        continue;
      }

      // Skip this field item if the referenced file doesn't exist.
      if (!file_exists($item->entity->getFileUri())) {
        continue;
      }

      return $item->entity;
    }

    return NULL;
  }

  /**
   * Download the primary file resource referenced by the supplied media entity.
   *
   * By default, an inline content disposition is used to allow the media file
   * to be viewed in the browser. If `dl=1` is passed as a query parameter, then
   * the browser will be instructed to save the file to disk.
   *
   * @param \Drupal\media\MediaInterface $media
   *   The media entity for which to initiate a file download.
   * @param \Symfony\Component\HttpFoundation\Request $request
   *   The current request.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
   *   When a valid file cannot be found for the supplied media entity.
   *
   * @return \Drupal\media_download\CacheableBinaryFileResponse
   *   A cacheable binary file response.
   */
  public function save(MediaInterface $media, Request $request) {
    $cacheability = new CacheableMetadata();

    // Ensure that a file is referenced by the source field, and it exists.
    if (empty($file = $this->getFile($media))) {
      throw new NotFoundHttpException("There is no file associated with the requested entity.");
    }

    // Add both the media entity and the file entity that it references as
    // cacheable dependencies for this response.
    $cacheability->addCacheableDependency($file);
    $cacheability->addCacheableDependency($media);
    // Since the content disposition header depends on the query string, ensure
    // that the query string is part of the cache metadata.
    $cacheability->addCacheContexts(['url.query_args:dl']);

    // Create a new response object to download the requested file.
    $response = new CacheableBinaryFileResponse($file->getFileUri());
    $response->addCacheableDependency($cacheability);
    // Force a direct download if dl=1 is in the query string.
    if ($request->query->get('dl') === '1') {
      $response->setContentDisposition('attachment');
    }
    else {
      $response->setContentDisposition('inline');
    }

    // Use a default MIME type of 'application/octet-stream'.
    $response->headers->set('Content-Type', 'application/octet-stream');

    // If the file has an associated MIME type, include it in the response.
    if (!empty($mime_type = $file->getMimeType())) {
      $response->headers->set('Content-Type', $mime_type);
    }

    // Clear the Cache-Control header so it can be calculated automatically.
    $response->headers->set('Cache-Control', '');

    // Automatically calculate the ETag and Last-Modified headers.
    $response->setAutoEtag();
    $response->setAutoLastModified();

    return $response;
  }

}
