<?php
/**
 * Title: Visit
 * Slug: steeped-lite/visit
 * Categories: steeped-lite
 * Description: Address, contact details, directions and opening hours.
 * Keywords: visit, hours, address, location, contact
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
<!-- wp:paragraph {"placeholder":"Open now status (filled in from the hours above)","className":"is-style-open-status"} -->
<p class="is-style-open-status"></p>
<!-- /wp:paragraph -->
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
