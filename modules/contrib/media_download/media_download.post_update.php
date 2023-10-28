<?php

/**
 * @file
 * Post-update functions for this module.
 */

use Drupal\Core\Cache\Cache;

/**
 * Invalidates the http_response cache tag.
 */
function media_download_post_update_invalidate_http_response_cache_tag() {
  Cache::invalidateTags(['http_response']);
}
