<?php

namespace Drupal\media_download;

use Drupal\Core\Cache\CacheableResponseInterface;
use Drupal\Core\Cache\CacheableResponseTrait;

use Symfony\Component\HttpFoundation\BinaryFileResponse;

/**
 * Provide a binary file response class that is cacheable by Drupal.
 *
 * Copyright (C) 2021  Library Solutions, LLC (et al.).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
class CacheableBinaryFileResponse extends BinaryFileResponse implements CacheableResponseInterface {

  use CacheableResponseTrait;

}
