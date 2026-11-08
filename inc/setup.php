<?php
/**
 * Theme supports, styles, pattern category and the speed work.
 *
 * Everything that affects page weight lives here, so the performance budget
 * in tests/perf has one file to blame.
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

add_action( 'after_setup_theme', 'steeped_lite_setup' );

/**
 * Theme supports and the editor stylesheet.
 */
function steeped_lite_setup() {
	load_theme_textdomain( 'steeped-lite', STEEPED_LITE_DIR . '/languages' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'responsive-embeds' );
	add_editor_style( 'assets/css/theme.css' );

	register_block_style(
		'core/paragraph',
		array(
			'name'  => 'eyebrow',
			'label' => __( 'Eyebrow', 'steeped-lite' ),
		)
	);
}

add_action( 'wp_enqueue_scripts', 'steeped_lite_styles' );

/**
 * The theme's own CSS is small (a few KB), so it is printed inline after the
 * global styles instead of costing a render-blocking request of its own.
 */
function steeped_lite_styles() {
	$css = file_get_contents( STEEPED_LITE_DIR . '/assets/css/theme.css' ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- local theme file, not a remote URL.
	if ( false !== $css ) {
		wp_add_inline_style( 'global-styles', $css );
	}
}

add_action( 'wp_head', 'steeped_lite_preload_fonts', 1 );

/**
 * Preload the font files the first screen is drawn in, so the headline does
 * not wait for the stylesheet to discover them. Only these; preloading every
 * weight would compete with the hero image for bandwidth.
 */
function steeped_lite_preload_fonts() {
	foreach ( array( 'cardo-latin-700-normal.woff2', 'figtree-latin-400-normal.woff2' ) as $file ) {
		printf(
			'<link rel="preload" href="%s" as="font" type="font/woff2" crossorigin>' . "\n",
			esc_url( STEEPED_LITE_URI . '/assets/fonts/' . $file )
		);
	}
}

add_action( 'init', 'steeped_lite_pattern_category' );

/**
 * One pattern category, so the theme's sections are easy to find in the
 * inserter next to core's.
 */
function steeped_lite_pattern_category() {
	register_block_pattern_category(
		'steeped-lite',
		array( 'label' => __( 'Steeped', 'steeped-lite' ) )
	);
}

add_filter( 'styles_inline_size_limit', 'steeped_lite_inline_block_styles' );

/**
 * Print the per-block core stylesheets inline rather than as <link>s. With
 * the default 20 KB allowance the navigation and cover styles were two
 * render-blocking requests on the front page. Cover (20 KB) and navigation
 * (21 KB) are core's two largest; 120 KB covers every block the theme uses,
 * and gzipped it is about 15 KB of HTML instead of two blocking round trips.
 *
 * @return int Bytes.
 */
function steeped_lite_inline_block_styles() {
	return 120000;
}

add_action( 'init', 'steeped_lite_no_emoji_script' );

/**
 * WordPress loads a 22 KB script on every page so very old systems can draw
 * emoji as images. Every browser this theme supports draws them natively.
 * (A WordPress.org-listed theme may not do this; none of these themes is
 * listed there.)
 */
function steeped_lite_no_emoji_script() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'emoji_svg_url', '__return_false' );
}
