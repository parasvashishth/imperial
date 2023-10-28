<?php

namespace Drupal\media_download;

use Drupal\Core\PageCache\ResponsePolicyInterface;

use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;

/**
 * Deny caching of BinaryFileResponse and StreamedResponse class hierarchies.
 *
 * Copyright (C) 2021  Library Solutions, LLC (et al.).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
class PageCacheResponsePolicy implements ResponsePolicyInterface {

  /**
   * {@inheritdoc}
   */
  public function check(Response $response, Request $request) {
    // Currently it is not possible to cache binary file or streamed responses.
    // @see https://github.com/symfony/symfony/issues/9128#issuecomment-25088678
    if ($response instanceof BinaryFileResponse || $response instanceof StreamedResponse) {
      return static::DENY;
    }
  }

}
