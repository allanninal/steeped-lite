<?php
/**
 * Title: Afternoon tea
 * Slug: steeped-lite/afternoon-tea
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
<section class="wp-block-group alignfull st-section" id="afternoon-tea">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'The Ritual', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Afternoon Tea Service', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"st-lede st-muted"} -->
<p class="has-text-align-center st-lede st-muted"><?php echo esc_html__( 'Served Tuesday to Sunday from 12:00 – 16:00. Booking recommended 48 hours in advance for parties of 2 or more.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":"20rem"},"className":"st-cards"} -->
<div class="wp-block-group st-cards">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-set"} -->
<div class="wp-block-group st-card st-set">
<!-- wp:paragraph {"className":"st-badge"} -->
<p class="st-badge"><?php echo esc_html__( 'Most Loved', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'The timeless ritual', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-set__name"} -->
<h3 class="wp-block-heading st-set__name"><?php echo esc_html__( 'Classic Afternoon Tea', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Our flagship experience — an unhurried hour or more with the classic three-tier stand, served with quiet elegance at your own pace.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"st-checks"} -->
<ul class="wp-block-list st-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Finger sandwiches (smoked salmon, cucumber &amp; cream cheese, egg &amp; cress)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Freshly baked plain &amp; raisin scones with clotted cream &amp; house-made jam', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal pastries &amp; miniature cakes (chef\'s selection)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'One pot of tea from our full list, with free top-up', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"className":"st-set__foot"} -->
<div class="wp-block-group st-set__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo wp_kses_post( __( '<span class="st-set__price">£28</span> per person', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_visit__"><?php echo esc_html__( 'Book Now', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-set"} -->
<div class="wp-block-group st-card st-set">
<!-- wp:paragraph {"className":"st-badge"} -->
<p class="st-badge"><?php echo esc_html__( 'Celebration', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Elevated with champagne', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-set__name"} -->
<h3 class="wp-block-heading st-set__name"><?php echo esc_html__( 'Royal High Tea', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Perfect for celebrations, birthdays, or simply an occasion that deserves something extra. Pre-booking essential, 48-hour notice required.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"st-checks"} -->
<ul class="wp-block-list st-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Everything in Classic Afternoon Tea', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Glass of rosé Champagne on arrival', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Smoked salmon &amp; crème fraîche blinis', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Extended pastry selection (6 pieces per person)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Commemorative Willow &amp; Leaf card', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"className":"st-set__foot"} -->
<div class="wp-block-group st-set__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo wp_kses_post( __( '<span class="st-set__price">£48</span> per person', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_visit__"><?php echo esc_html__( 'Book Now', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-set"} -->
<div class="wp-block-group st-card st-set">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'For little guests (under 12)', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-set__name"} -->
<h3 class="wp-block-heading st-set__name"><?php echo esc_html__( 'Children\'s Tea', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'A gentle introduction to the tea room tradition. Children are warmly welcomed when accompanied by adults.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"st-checks"} -->
<ul class="wp-block-list st-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Mini sandwiches (cheese, jam, or honey)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Warm scone with strawberry jam &amp; butter', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Selection of colourful petit fours', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Fruit tisane or warm apple &amp; cinnamon drink', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"className":"st-set__foot"} -->
<div class="wp-block-group st-set__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo wp_kses_post( __( '<span class="st-set__price">£14</span> per child', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_visit__"><?php echo esc_html__( 'Book Now', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-set"} -->
<div class="wp-block-group st-card st-set">
<!-- wp:paragraph {"className":"is-style-eyebrow"} -->
<p class="is-style-eyebrow"><?php echo esc_html__( 'Fully plant-based', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"level":3,"className":"st-set__name"} -->
<h3 class="wp-block-heading st-set__name"><?php echo esc_html__( 'Garden Afternoon Tea', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Everything you love about afternoon tea, thoughtfully crafted without any animal products. Please mention when booking.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"className":"st-checks"} -->
<ul class="wp-block-list st-checks">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Plant-based finger sandwiches (avocado &amp; tomato, hummus &amp; roasted pepper, cucumber &amp; herb cream)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Oat-milk scones with coconut cream &amp; berry compote', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Seasonal vegan cakes &amp; pastries', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'One pot of tea (all herbal &amp; green teas are naturally vegan)', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
</ul>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"},"className":"st-set__foot"} -->
<div class="wp-block-group st-set__foot">
<!-- wp:paragraph {"className":"st-muted"} -->
<p class="st-muted"><?php echo wp_kses_post( __( '<span class="st-set__price">£30</span> per person', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons -->
<div class="wp-block-buttons">
<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="__PAGE_visit__"><?php echo esc_html__( 'Book Now', 'steeped-lite' ); ?></a></div>
<!-- /wp:button -->
</div>
<!-- /wp:buttons -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","fontSize":"small","className":"st-muted st-allergens"} -->
<p class="has-text-align-center has-small-font-size st-muted st-allergens"><?php echo esc_html__( 'Our kitchen handles wheat, oats, milk, eggs, fish, almonds and sesame, so we cannot promise any item is free of them, even those marked vegan or plant-based. Please tell us about any allergy when you book or order.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
