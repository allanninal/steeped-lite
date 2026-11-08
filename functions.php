<?php
/**
 * Steeped Lite — theme bootstrap.
 *
 * The free edition of Steeped, made by tools/build-lite.mjs from the paid
 * build. Edit the generator, not this file.
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

define( 'STEEPED_LITE_VERSION', '1.0.0' );
define( 'STEEPED_LITE_DIR', get_template_directory() );
define( 'STEEPED_LITE_URI', get_template_directory_uri() );

require STEEPED_LITE_DIR . '/inc/setup.php';
require STEEPED_LITE_DIR . '/inc/media.php';
require STEEPED_LITE_DIR . '/inc/lite.php';
require STEEPED_LITE_DIR . '/inc/updater.php';
