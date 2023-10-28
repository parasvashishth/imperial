<?php

namespace Drupal\media_download;

use Drupal\Core\Routing\RouteSubscriberBase;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Replaces the core-provided canonical media entity route.
 *
 * Copyright (C) 2021  Library Solutions, LLC (et al.).
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 */
class RouteSubscriber extends RouteSubscriberBase {

  /**
   * {@inheritdoc}
   */
  protected function alterRoutes(RouteCollection $collection) {
    $collection->remove('entity.media.canonical');
    $collection->add('entity.media.canonical', new Route('/media/{media}', [
      '_controller' => DownloadController::class . '::save',
    ], [
      '_entity_access' => 'media.view',
    ]));
  }

}
