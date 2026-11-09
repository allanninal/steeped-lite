<?php
/**
 * Title: Tea collection
 * Slug: steeped-lite/teas
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
<section class="wp-block-group has-surface-background-color has-background alignfull st-section" id="teas">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'The Full List', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Our Tea Collection', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"st-lede st-muted"} -->
<p class="has-text-align-center st-lede st-muted"><?php echo esc_html__( 'Every tea on our list is sourced directly or through small specialist importers. All pots include free hot-water top-ups.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"},"className":"st-cat"} -->
<div class="wp-block-group st-cat">
<!-- wp:heading {"level":3,"className":"st-cat__title"} -->
<h3 class="wp-block-heading st-cat__title" id="teas-green"><?php echo esc_html__( 'Green', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-cat__sub st-muted"} -->
<p class="st-cat__sub st-muted"><?php echo esc_html__( 'Delicate &amp; vegetal', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"},"className":"st-cards st-cards\u002d\u002dteas"} -->
<div class="wp-block-group st-cards st-cards--teas">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Dragon Well (Longjing)', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£4.20 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£7.50 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Hangzhou, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'One of China\'s most revered green teas, hand-pressed in a wok to produce flat, jade-green leaves with a gentle, sustained sweetness.', 'steeped-lite' ); ?></p>
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
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>75°C / 167°F</strong> · Steep <strong>2 min</strong> · Leaf <strong>3 g</strong> per cup · Re-steep <strong>3×</strong>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Gyokuro', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£5.50 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£9.80 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Uji, Japan', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Shade-grown for three weeks before harvest, gyokuro develops an extraordinary depth of umami rarely found in any other tea.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Marine umami', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Sweet seaweed', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Cream', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>60°C / 140°F</strong> · Steep <strong>2 min</strong> · Leaf <strong>5 g</strong> per cup · Re-steep <strong>3×</strong>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-high"} -->
<p class="st-caffeine is-high"><?php echo esc_html__( 'High caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Bi Luo Chun', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£4.50 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£8.00 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Jiangsu, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Tightly spiral-rolled tender buds harvested in early spring beside fruit orchards — the proximity lends a subtle stone-fruit perfume.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Floral', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Fruity', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Delicate vegetal', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>70°C / 158°F</strong> · Steep <strong>1.5 min</strong> · Leaf <strong>3 g</strong> per cup · Re-steep <strong>3×</strong>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"},"className":"st-cat"} -->
<div class="wp-block-group st-cat">
<!-- wp:heading {"level":3,"className":"st-cat__title"} -->
<h3 class="wp-block-heading st-cat__title" id="teas-black"><?php echo esc_html__( 'Black', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-cat__sub st-muted"} -->
<p class="st-cat__sub st-muted"><?php echo esc_html__( 'Robust &amp; warming', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"},"className":"st-cards st-cards\u002d\u002dteas"} -->
<div class="wp-block-group st-cards st-cards--teas">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Darjeeling First Flush', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£4.80 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£8.50 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Darjeeling, India', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'The champagne of teas — harvested in March from steep mountain gardens, producing a pale amber cup of extraordinary delicacy.', 'steeped-lite' ); ?></p>
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
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>90°C / 194°F</strong> · Steep <strong>3 min</strong> · Leaf <strong>2.5 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Yunnan Gold', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£5.00 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£8.80 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Yunnan, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Made exclusively from golden-tipped buds of ancient Yunnan trees, this tea produces a rich, warming cup without any bitterness.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Chocolate', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Pepper', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Malt', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>95°C / 203°F</strong> · Steep <strong>3 min</strong> · Leaf <strong>3 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-high"} -->
<p class="st-caffeine is-high"><?php echo esc_html__( 'High caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Earl Grey Classic', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£3.80 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£6.80 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Blend (Assam base)', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Our house Earl Grey uses a full-bodied Assam base balanced with true bergamot oil from Calabria — bright, aromatic, and wonderfully familiar.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Bergamot citrus', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Brisk malt', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Floral finish', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>95°C / 203°F</strong> · Steep <strong>4 min</strong> · Leaf <strong>3 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"},"className":"st-cat"} -->
<div class="wp-block-group st-cat">
<!-- wp:heading {"level":3,"className":"st-cat__title"} -->
<h3 class="wp-block-heading st-cat__title" id="teas-oolong"><?php echo esc_html__( 'Oolong', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-cat__sub st-muted"} -->
<p class="st-cat__sub st-muted"><?php echo esc_html__( 'Complex &amp; layered', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"},"className":"st-cards st-cards\u002d\u002dteas"} -->
<div class="wp-block-group st-cards st-cards--teas">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Tie Guan Yin', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£4.60 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£8.20 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Anxi, China', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Iron Goddess of Mercy — a lightly oxidised oolong with famously complex floral top notes and a long, sweet aftertaste.', 'steeped-lite' ); ?></p>
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
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>85°C / 185°F</strong> · Steep <strong>3 min</strong> · Leaf <strong>4 g</strong> per cup · Re-steep <strong>5×</strong>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Dong Ding', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£4.80 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£8.50 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Nantou County, Taiwan', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'A medium-roast oolong from the Frozen Summit mountain. The slow charcoal-roasting develops caramel richness while preserving a fruity core.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Roasted caramel', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Stone fruit', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Warm oak', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>90°C / 194°F</strong> · Steep <strong>3 min</strong> · Leaf <strong>4 g</strong> per cup · Re-steep <strong>5×</strong>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"},"className":"st-cat"} -->
<div class="wp-block-group st-cat">
<!-- wp:heading {"level":3,"className":"st-cat__title"} -->
<h3 class="wp-block-heading st-cat__title" id="teas-herbal"><?php echo esc_html__( 'Herbal', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-cat__sub st-muted"} -->
<p class="st-cat__sub st-muted"><?php echo esc_html__( 'Caffeine-free &amp; gentle', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"},"className":"st-cards st-cards\u002d\u002dteas"} -->
<div class="wp-block-group st-cards st-cards--teas">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Chamomile &amp; Honey Bush', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£3.50 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£6.20 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Egypt / South Africa', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'A twilight blend — whole chamomile flowers with naturally sweet honey bush from the Cape. Caffeine-free and gentle.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Apple blossom', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Honey', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Warm vanilla', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>100°C / 212°F</strong> · Steep <strong>5 min</strong> · Leaf <strong>3 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-none"} -->
<p class="st-caffeine is-none"><?php echo esc_html__( 'Caffeine-free', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Garden Peppermint', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£3.20 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£5.80 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Norfolk, England', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Single-origin British peppermint grown in the Norfolk fens. Vibrantly fresh, intensely minty, and welcome at any hour.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Crisp mint', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Cool finish', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Clean', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>100°C / 212°F</strong> · Steep <strong>5 min</strong> · Leaf <strong>2 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-none"} -->
<p class="st-caffeine is-none"><?php echo esc_html__( 'Caffeine-free', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Hibiscus &amp; Rose', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£3.50 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-faint st-tea__pot"} -->
<p class="st-faint st-tea__pot"><?php echo esc_html__( '£6.20 pot', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Blend (Egypt / Bulgaria)', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'A ruby-red cup of dried hibiscus flowers and whole Damask rose petals. Vibrant and tart, beautiful served iced in summer.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Tart cherry', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Rose petal', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Summer berries', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>100°C / 212°F</strong> · Steep <strong>5 min</strong> · Leaf <strong>3 g</strong> per cup', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-none"} -->
<p class="st-caffeine is-none"><?php echo esc_html__( 'Caffeine-free', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","verticalAlignment":"bottom"},"className":"st-cat"} -->
<div class="wp-block-group st-cat">
<!-- wp:heading {"level":3,"className":"st-cat__title"} -->
<h3 class="wp-block-heading st-cat__title" id="teas-matcha"><?php echo esc_html__( 'Matcha', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-cat__sub st-muted"} -->
<p class="st-cat__sub st-muted"><?php echo esc_html__( 'Stone-ground &amp; vivid', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"grid","columnCount":3,"minimumColumnWidth":"17rem"},"className":"st-cards st-cards\u002d\u002dteas"} -->
<div class="wp-block-group st-cards st-cards--teas">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Ceremonial Matcha', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£5.80 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Uji, Japan', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Stone-ground from the youngest shaded leaves, our ceremonial grade matcha is whisked to order — intensely green, silky, and profoundly alive.', 'steeped-lite' ); ?></p>
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
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>70°C / 158°F</strong> · Method <strong>Whisked</strong> · Leaf <strong>2 g</strong> per bowl', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-high"} -->
<p class="st-caffeine is-high"><?php echo esc_html__( 'High caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-tea"} -->
<div class="wp-block-group st-card st-tea">
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"nowrap","verticalAlignment":"top"},"className":"st-tea__head"} -->
<div class="wp-block-group st-tea__head">
<!-- wp:heading {"level":4,"className":"st-tea__name"} -->
<h4 class="wp-block-heading st-tea__name"><?php echo esc_html__( 'Willow Matcha Latte', 'steeped-lite' ); ?></h4>
<!-- /wp:heading -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-tea__prices"} -->
<div class="wp-block-group st-tea__prices">
<!-- wp:paragraph {"className":"st-price st-tea__cup"} -->
<p class="st-price st-tea__cup"><?php echo wp_kses_post( __( '£5.20 <span>cup</span>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-faint","fontSize":"small"} -->
<p class="has-small-font-size st-faint"><?php echo esc_html__( 'Uji, Japan', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Ceremonial matcha whisked with a splash of hot water, then finished with your choice of oat, almond, or whole milk, lightly steamed.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap"},"className":"st-notes"} -->
<div class="wp-block-group st-notes">
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Creamy', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Subtly sweet', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-note"} -->
<p class="st-note"><?php echo esc_html__( 'Earthy green', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted st-brew"} -->
<p class="st-muted st-brew"><?php echo wp_kses_post( __( 'Water <strong>65°C / 149°F</strong> · Method <strong>Whisked</strong> · Leaf <strong>2 g</strong> per bowl', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-caffeine is-medium"} -->
<p class="st-caffeine is-medium"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-muted st-contains","fontSize":"small"} -->
<p class="has-small-font-size st-muted st-contains"><?php echo wp_kses_post( __( '<strong>Contains:</strong> milk', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","fontSize":"small","className":"st-muted"} -->
<p class="has-text-align-center has-small-font-size st-muted"><?php echo esc_html__( 'Caffeine varies with the leaf, how much you use, the water temperature and the steep time, so the level shown is a guide.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"align":"center","fontSize":"small","className":"st-muted st-allergens"} -->
<p class="has-text-align-center has-small-font-size st-muted st-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, oats, milk, eggs, fish, almonds and sesame, so we cannot promise any item is free of them, even those marked vegan or plant-based. Please tell us about any allergy when you book or order.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
