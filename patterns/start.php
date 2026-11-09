<?php
/**
 * Title: Three ways to start
 * Slug: steeped-lite/start
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"ladder-section"} -->
<section class="wp-block-group alignfull ladder-section" id="start">
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Three ways to start', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"},"className":"ladder"} -->
<div class="wp-block-group ladder">
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '1', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Try a cup', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Any tea on the list, brewed for you at the right temperature.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From £3.20 a cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_our-teas__"><?php echo esc_html__( 'See the teas', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '2', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Share a pot', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'A pot for the table, with free hot-water top-ups.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From £5.80 a pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_our-teas__"><?php echo esc_html__( 'See the teas', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"ladder__step"} -->
<div class="wp-block-group ladder__step">
<!-- wp:paragraph {"className":"ladder__n"} -->
<p class="ladder__n"><?php echo esc_html__( '3', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"ladder__title"} -->
<h3 class="wp-block-heading ladder__title"><?php echo esc_html__( 'Book afternoon tea', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size"><?php echo esc_html__( 'Sandwiches, scones and cakes on the three-tier stand, with a pot of your choice.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"ladder__price"} -->
<p class="ladder__price"><?php echo esc_html__( 'From £28 per person', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_afternoon-tea__"><?php echo esc_html__( 'Afternoon tea', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
