<?php
/**
 * Title: Book a table
 * Slug: steeped-lite/book
 * Categories: steeped-lite
 * Viewport Width: 1400
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","backgroundColor":"surface","className":"st-section"} -->
<section class="wp-block-group has-surface-background-color has-background alignfull st-section" id="reservations">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Book Your Visit', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Reserve a Table', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"st-lede st-muted"} -->
<p class="has-text-align-center st-lede st-muted"><?php echo esc_html__( 'We recommend booking at least 48 hours ahead, especially for weekend afternoon tea. Walk-ins are welcome for tea by the cup.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-book"} -->
<div class="wp-block-group st-card st-book">
<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php echo esc_html__( 'Send us your name, the date, the number of guests and any dietary notes. We confirm within 24 hours.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="mailto:hello@willowandleaf.example?subject=Table%20reservation"><?php echo esc_html__( 'Email to Book', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="tel:+441314960123"><?php echo esc_html__( 'Call +44 131 496 0123', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
