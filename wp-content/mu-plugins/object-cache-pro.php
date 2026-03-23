<?php
/*
 * Plugin Name: Object Cache Pro
 * Plugin URI: https://objectcache.pro
 * Description: A business class Redis object cache backend for WordPress.
 * Version: 1.25.2
 * Author: Rhubarb Group
 * Author URI: https://rhubarb.group
 * License: Proprietary
 * Update URI: false
 * Network: true
 * Requires PHP: 7.2
 */

require(WPMU_PLUGIN_DIR . '/object-cache-pro/object-cache-pro.php');

add_filter( 'objectcache_omit_settings_pointer', '__return_true' );

