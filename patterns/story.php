<?php
/**
 * Title: Our story
 * Slug: steeped-lite/story
 * Categories: steeped-lite
 * Description: The story behind the business, with a few key numbers.
 * Keywords: about, story, history, numbers
 * Viewport Width: 1400
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

// Buffered, then the image and link tokens in the markup are resolved; every
// string inside is already escaped where it is printed.
ob_start();
?>
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"st-section st-story"} -->
<section class="wp-block-group alignfull st-section st-story" id="story">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Our Story', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading -->
<h2 class="wp-block-heading"><?php echo esc_html__( 'Tea Brought Home from Far Away', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Margaret Sinclair opened Willow &amp; Leaf in 2018 after a decade spent travelling through China, Japan, and India, learning the art of tea at its source. She returned to Edinburgh with suitcases of samples and a conviction that the city deserved a proper tea room.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'The name comes from the two things every tea begins with: the willow-green leaves plucked at first light, and the leaf itself — unremarkable until it meets hot water, at which point something extraordinary happens.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Today, Willow &amp; Leaf sources directly from small farms and specialist importers. Every tea on the list is one Margaret has tasted herself, often many times, before it earns a place in the collection.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-quote"} -->
<div class="wp-block-group st-quote">
<!-- wp:paragraph {"className":"st-quote__text"} -->
<p class="st-quote__text"><?php echo esc_html__( '&quot;There is a tea for every mood, every hour, every kind of quiet.&quot;', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-quote__by"} -->
<p class="st-quote__by"><?php echo esc_html__( '— Margaret Sinclair, Founder', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
