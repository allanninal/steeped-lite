<?php
/**
 * Title: Brew guide
 * Slug: steeped-lite/brew-guide
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
<section class="wp-block-group alignfull st-section" id="brew">
<!-- wp:paragraph {"align":"center","className":"is-style-eyebrow"} -->
<p class="has-text-align-center is-style-eyebrow"><?php echo esc_html__( 'Brew Guide', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__( 'Brew it as we do', 'steeped-lite' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","className":"st-lede st-muted"} -->
<p class="has-text-align-center st-lede st-muted"><?php echo esc_html__( 'Water that is too hot is the most common mistake: it makes green tea bitter. Weigh the leaf, heat the water to the temperature below, and take the leaf out when the time is up.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:list {"ordered":true,"className":"st-steps"} -->
<ol class="wp-block-list st-steps">
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Warm the pot or cup with hot water, then pour it away.', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Weigh the leaf: the amount for one 250 ml cup is below.', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Heat the water to the temperature for that tea. Off the boil works for black and herbal teas.', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Steep for the time below, then take the leaf out so it does not over-steep.', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
<!-- wp:list-item -->
<li><?php echo esc_html__( 'Oolong and green leaves can be steeped-lite again: add a minute each time.', 'steeped-lite' ); ?></li>
<!-- /wp:list-item -->
</ol>
<!-- /wp:list -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guides"} -->
<div class="wp-block-group st-guides">
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-guide"} -->
<div class="wp-block-group st-card st-guide">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Green', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Delicate &amp; vegetal', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"8rem"},"className":"st-guide__facts"} -->
<div class="wp-block-group st-guide__facts">
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Water', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '60–75°C / 140–167°F', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Time', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '1.5–2 min', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Leaf', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '3–5 g per 250 ml cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Re-steep', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Up to 3 times', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Medium caffeine or High caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo wp_kses_post( __( 'On our list: Dragon Well (Longjing), Gyokuro, Bi Luo Chun. <a href="__PAGE_our-teas__">See each tea</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-guide"} -->
<div class="wp-block-group st-card st-guide">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Black', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Robust &amp; warming', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"8rem"},"className":"st-guide__facts"} -->
<div class="wp-block-group st-guide__facts">
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Water', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '90–95°C / 194–203°F', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Time', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '3–4 min', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Leaf', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '2.5–3 g per 250 ml cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Medium caffeine or High caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo wp_kses_post( __( 'On our list: Darjeeling First Flush, Yunnan Gold, Earl Grey Classic. <a href="__PAGE_our-teas__">See each tea</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-guide"} -->
<div class="wp-block-group st-card st-guide">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Oolong', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Complex &amp; layered', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"8rem"},"className":"st-guide__facts"} -->
<div class="wp-block-group st-guide__facts">
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Water', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '85–90°C / 185–194°F', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Time', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '3 min', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Leaf', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '4 g per 250 ml cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Re-steep', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Up to 5 times', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo wp_kses_post( __( 'On our list: Tie Guan Yin, Dong Ding. <a href="__PAGE_our-teas__">See each tea</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-guide"} -->
<div class="wp-block-group st-card st-guide">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Herbal', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Caffeine-free &amp; gentle', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"8rem"},"className":"st-guide__facts"} -->
<div class="wp-block-group st-guide__facts">
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Water', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '100°C / 212°F', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Time', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '5 min', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Leaf', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '2–3 g per 250 ml cup', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Caffeine-free', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo wp_kses_post( __( 'On our list: Chamomile &amp; Honey Bush, Garden Peppermint, Hibiscus &amp; Rose. <a href="__PAGE_our-teas__">See each tea</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-card st-guide"} -->
<div class="wp-block-group st-card st-guide">
<!-- wp:heading {"level":3,"className":"st-card__title"} -->
<h3 class="wp-block-heading st-card__title"><?php echo esc_html__( 'Matcha', 'steeped-lite' ); ?></h3>
<!-- /wp:heading -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo esc_html__( 'Stone-ground &amp; vivid', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:group {"layout":{"type":"grid","columnCount":5,"minimumColumnWidth":"8rem"},"className":"st-guide__facts"} -->
<div class="wp-block-group st-guide__facts">
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Water', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '65–70°C / 149–158°F', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Time', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'Whisked, not steeped', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Leaf', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( '2 g per bowl', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
<!-- wp:group {"layout":{"type":"default"},"className":"st-guide__fact"} -->
<div class="wp-block-group st-guide__fact">
<!-- wp:paragraph {"className":"st-guide__k"} -->
<p class="st-guide__k"><?php echo esc_html__( 'Caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:paragraph {"className":"st-guide__v"} -->
<p class="st-guide__v"><?php echo esc_html__( 'High caffeine or Medium caffeine', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"className":"st-muted","fontSize":"small"} -->
<p class="has-small-font-size st-muted"><?php echo wp_kses_post( __( 'On our list: Ceremonial Matcha, Willow Matcha Latte. <a href="__PAGE_our-teas__">See each tea</a>', 'steeped-lite' ) ); ?></p>
<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->
<!-- wp:paragraph {"align":"center","fontSize":"small","className":"st-muted"} -->
<p class="has-text-align-center has-small-font-size st-muted"><?php echo esc_html__( 'Caffeine varies with the leaf, how much you use, the water temperature and the steep time, so the level shown is a guide.', 'steeped-lite' ); ?></p>
<!-- /wp:paragraph -->
</section>
<!-- /wp:group -->
<?php
echo steeped_lite_media( ob_get_clean() ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
