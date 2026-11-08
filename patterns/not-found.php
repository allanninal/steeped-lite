<?php
/**
 * Title: Page not found
 * Slug: steeped-lite/not-found
 * Categories: steeped-lite
 * Description: Message and link back home for pages that do not exist.
 * Keywords: 404, not found
 * Viewport Width: 1400
 * Inserter: no
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html__( 'This page is not on the menu', 'steeped-lite' ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( 'The page you were looking for has moved or never existed.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__HOME__"><?php echo esc_html__( 'Back to the home page', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
