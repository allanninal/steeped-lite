<?php
/**
 * Title: Gallery
 * Slug: steeped-lite/gallery
 * Categories: steeped-lite
 * Description: A grid of captioned photos.
 * Keywords: gallery, photos, images
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
<section class="wp-block-group has-surface-background-color has-background alignfull st-section" id="gallery">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'The Space', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Inside Willow &amp; Leaf', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"14rem"},"className":"st-gallery"} -->
<div class="wp-block-group st-gallery">
<!-- wp:image {"id":"__ID_tearoom__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_tearoom__" alt="<?php echo esc_attr__( 'Main tea room — window tables', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_tearoom__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_matcha__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_matcha__" alt="<?php echo esc_attr__( 'Ceremonial matcha preparation', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_matcha__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_tiers__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_tiers__" alt="<?php echo esc_attr__( 'Afternoon tea three-tier stand', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_tiers__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_jars__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_jars__" alt="<?php echo esc_attr__( 'Tea garden selection jars', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_jars__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_teaware__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_teaware__" alt="<?php echo esc_attr__( 'Handmade ceramic teaware', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_teaware__"/></figure>
<!-- /wp:image -->
<!-- wp:image {"id":"__ID_terrace__","sizeSlug":"large","linkDestination":"none","className":"st-photo"} -->
<figure class="wp-block-image size-large st-photo"><img src="__SRC_terrace__" alt="<?php echo esc_attr__( 'Garden terrace in summer', 'steeped-lite' ); ?>" loading="lazy" decoding="async" class="wp-image-__ID_terrace__"/></figure>
<!-- /wp:image -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
