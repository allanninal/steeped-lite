<?php
/**
 * Title: Hero
 * Slug: steeped-lite/hero
 * Categories: steeped-lite
 * Description: The opening section: headline, introduction, buttons and key facts.
 * Keywords: hero, header, banner, intro
 * Viewport Width: 1400
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:cover {"url":"__SRC_hero__","id":"__ID_hero__","alt":"Sunlit interior of the tea room","dimRatio":80,"overlayColor":"bg","isUserOverlayColor":true,"minHeight":560,"minHeightUnit":"px","sizeSlug":"full","align":"full","className":"st-hero","layout":{"type":"constrained","contentSize":"72rem"}} -->
<div id="hero" class="wp-block-cover alignfull st-hero" style="min-height:560px"><span aria-hidden="true" class="wp-block-cover__background has-bg-background-color has-background-dim-80 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-__ID_hero__ size-full" alt="<?php echo esc_attr__( 'Sunlit interior of the tea room', 'steeped-lite' ); ?>" src="__SRC_hero__" data-object-fit="cover"/><div class="wp-block-cover__inner-container">
<!-- wp:group {"layout":{"type":"default"},"className":"st-hero__inner"} -->
<div class="wp-block-group st-hero__inner">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Edinburgh · Since 2018', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":1,"textAlign":"center"} -->
<h1 class="wp-block-heading has-text-align-center"><?php echo wp_kses_post( __( 'A quiet place.<br><span class="st-accent">A perfect cup.</span>', 'steeped-lite' ) ); ?></h1>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","fontSize":"large","className":"st-lede st-muted"} -->
<p class="has-text-align-center has-large-font-size st-lede st-muted"><?php echo esc_html__( 'Curated teas from the world\'s finest gardens, afternoon tea service, and a still corner of Edinburgh where time moves slowly.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_afternoon-tea__"><?php echo esc_html__( 'Afternoon Tea', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_our-teas__"><?php echo esc_html__( 'Explore Teas', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div></div>
<!-- /wp:cover -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
