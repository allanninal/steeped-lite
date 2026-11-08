<?php
/**
 * Title: Hours and location
 * Slug: steeped-lite/location
 * Categories: steeped-lite
 * Description: Address, phone, email and how to get there.
 * Keywords: location, address, contact, directions, map
 * Viewport Width: 1400
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"st-section"} -->
<section class="wp-block-group alignfull st-section" id="location">
<!-- wp:columns -->
<div class="wp-block-columns">
<!-- wp:column {"width":"55%"} -->
<div class="wp-block-column" style="flex-basis:55%">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Find Us', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Hours &amp; Location', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-hours"} -->
<div class="wp-block-group st-hours">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-hours__row"} -->
<div class="wp-block-group st-hours__row">
<!-- wp:paragraph {"className":"st-hours__day"} -->
<p class="st-hours__day"><?php echo esc_html__( 'Tuesday – Friday', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-hours__time"} -->
<p class="st-hours__time"><?php echo esc_html__( '10:00 – 17:30', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-hours__row"} -->
<div class="wp-block-group st-hours__row">
<!-- wp:paragraph {"className":"st-hours__day"} -->
<p class="st-hours__day"><?php echo esc_html__( 'Saturday', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-hours__time"} -->
<p class="st-hours__time"><?php echo esc_html__( '09:30 – 18:00', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-hours__row"} -->
<div class="wp-block-group st-hours__row">
<!-- wp:paragraph {"className":"st-hours__day"} -->
<p class="st-hours__day"><?php echo esc_html__( 'Sunday', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-hours__time"} -->
<p class="st-hours__time"><?php echo esc_html__( '10:30 – 16:30', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-hours__row"} -->
<div class="wp-block-group st-hours__row">
<!-- wp:paragraph {"className":"st-hours__day"} -->
<p class="st-hours__day"><?php echo esc_html__( 'Monday', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-hours__time"} -->
<p class="st-hours__time"><?php echo esc_html__( 'Closed', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
<!-- wp:column {"width":"45%","verticalAlignment":"center"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card"} -->
<div class="wp-block-group st-card">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Find Us', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph -->
<p><?php echo esc_html__( '14 Victoria Terrace, Edinburgh, EH1 2JL', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="tel:+441314960123">+44 131 496 0123</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph -->
<p><?php echo wp_kses_post( __( '<a href="mailto:hello@willowandleaf.example">hello@willowandleaf.example</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_visit__"><?php echo esc_html__( 'Book a Table', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:column -->
</div>
<!-- /wp:columns -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
