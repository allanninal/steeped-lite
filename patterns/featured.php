<?php
/**
 * Title: House favourites
 * Slug: steeped-lite/featured
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
<!-- wp:group {"layout":{"type":"constrained","contentSize":"72rem"},"tagName":"section","align":"full","className":"st-section"} -->
<section class="wp-block-group alignfull st-section" id="featured">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'House Favourites', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Teas We Love', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"grid","columnCount":4,"minimumColumnWidth":"14rem"},"className":"st-cards"} -->
<div class="wp-block-group st-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card"} -->
<div class="wp-block-group st-card">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Green', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Dragon Well (Longjing)', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Hangzhou, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Fresh grass', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Toasted chestnut', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Honey', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'One of China\'s most revered green teas, hand-pressed in a wok to produce flat, jade-green leaves with a gentle, sustained sweetness.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-card__foot"} -->
<div class="wp-block-group st-card__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-price"} -->
<p class="st-price"><?php echo esc_html__( '£4.20', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card"} -->
<div class="wp-block-group st-card">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Black', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Darjeeling First Flush', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Darjeeling, India', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Muscatel grape', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Spring flowers', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Light astringency', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'The champagne of teas — harvested in March from steep mountain gardens, producing a pale amber cup of extraordinary delicacy.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-card__foot"} -->
<div class="wp-block-group st-card__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-price"} -->
<p class="st-price"><?php echo esc_html__( '£4.80', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card"} -->
<div class="wp-block-group st-card">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Oolong', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Tie Guan Yin', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Anxi, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Orchid', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Toasted butter', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Honey', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Iron Goddess of Mercy — a lightly oxidised oolong with famously complex floral top notes and a long, sweet aftertaste.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-card__foot"} -->
<div class="wp-block-group st-card__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-price"} -->
<p class="st-price"><?php echo esc_html__( '£4.60', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card"} -->
<div class="wp-block-group st-card">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Matcha', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Ceremonial Matcha', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Uji, Japan', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Umami', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Creamy', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Fresh spring greens', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Stone-ground from the youngest shaded leaves, our ceremonial grade matcha is whisked to order — intensely green, silky, and profoundly alive.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap"},"className":"st-card__foot"} -->
<div class="wp-block-group st-card__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo esc_html__( 'Cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-price"} -->
<p class="st-price"><?php echo esc_html__( '£5.80', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"className":"st-more"} -->
<div class="wp-block-buttons st-more">
<!-- wp:button {"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="__PAGE_our-teas__"><?php echo esc_html__( 'See every tea', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
