<?php
/**
 * Demo images: where a pattern's image comes from.
 *
 * Patterns are written with tokens (__SRC_hero__, __ID_hero__). Before the
 * demo is imported a token resolves to the optimised file shipped in the
 * theme, so the site looks finished the moment it is activated. After import
 * it resolves to the Media Library copy, and WordPress then adds srcset,
 * sizes, width, height and lazy loading on its own.
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

/**
 * Imported attachment IDs: none in the Lite edition, which has no demo.
 *
 * @return array<string,int>
 */
function steeped_lite_demo_attachments() {
	return array();
}

/**
 * Resolve the image tokens in a block of pattern markup.
 *
 * The markup is the theme's own nowdoc, not user input; the only values
 * inserted are integers and esc_url() output.
 *
 * @param string $markup Pattern markup containing __SRC_x__ / __ID_x__ tokens.
 * @return string
 */
function steeped_lite_media( $markup ) {
	return steeped_lite_media_resolve( $markup, steeped_lite_demo_attachments() );
}

/**
 * Do the replacement for every image the markup names.
 *
 * @param string            $markup Markup.
 * @param array<string,int> $ids    Imported attachment IDs.
 * @return string
 */
function steeped_lite_media_resolve( $markup, $ids ) {
	preg_match_all( '/__SRC_([a-z0-9-]+)__/', $markup, $m );
	foreach ( array_unique( $m[1] ) as $name ) {
		$id  = isset( $ids[ $name ] ) ? (int) $ids[ $name ] : 0;
		$url = $id ? wp_get_attachment_image_url( $id, 'full' ) : false;

		if ( $url ) {
			$markup = str_replace(
				array( '"id":"__ID_' . $name . '__"', 'wp-image-__ID_' . $name . '__' ),
				array( '"id":' . $id, 'wp-image-' . $id ),
				$markup
			);
		} else {
			// Before the import: the theme's own art for this slot, or its
			// placeholder panel. The demo photos themselves are not in the theme.
			$file   = is_readable( STEEPED_LITE_DIR . '/assets/images/' . $name . '.webp' ) ? $name : 'placeholder';
			$url    = STEEPED_LITE_URI . '/assets/images/' . $file . '.webp';
			$markup = str_replace(
				array( '"id":"__ID_' . $name . '__",', ' class="wp-image-__ID_' . $name . '__"', ' wp-image-__ID_' . $name . '__' ),
				'',
				$markup
			);
		}
		$markup = str_replace( '__SRC_' . $name . '__', esc_url( $url ), $markup );
	}
	// Links: never a literal "/" or "/menu/" (both break on a WordPress in a
	// subdirectory, and a page link 404s before the demo creates the page).
	$markup = str_replace( '__HOME__', esc_url( home_url( '/' ) ), $markup );
	return preg_replace_callback(
		'/__PAGE_([a-z0-9|-]+)__/',
		static function ( $m ) {
			// "shop|menu": the first page that exists, so a link can prefer
			// WooCommerce's shop and still lead somewhere useful without it.
			foreach ( explode( '|', $m[1] ) as $slug ) {
				$page = get_page_by_path( $slug );
				if ( $page && 'publish' === $page->post_status ) {
					return esc_url( get_permalink( $page ) );
				}
			}
			return esc_url( home_url( '/' ) );
		},
		$markup
	);
}

add_filter( 'image_editor_output_format', 'steeped_lite_webp_uploads' );

/**
 * Store resized JPEGs as WebP. Every size WordPress generates from an upload
 * is then roughly a third smaller, which matters more on a photo-led theme
 * than anything else here. Only applies where the server's image library can
 * write WebP.
 *
 * @param array<string,string> $formats Mime type map.
 * @return array<string,string>
 */
function steeped_lite_webp_uploads( $formats ) {
	if ( wp_image_editor_supports( array( 'mime_type' => 'image/webp' ) ) ) {
		$formats['image/jpeg'] = 'image/webp';
	}
	return $formats;
}

add_filter( 'render_block_core/cover', 'steeped_lite_prioritise_first_cover', 10, 2 );

/**
 * The first cover image on a page is almost always the Largest Contentful
 * Paint element, and WordPress does not give a cover's background image the
 * fetchpriority hint it gives the first content image. Without it the
 * browser discovers the hero late and loads it at normal priority.
 *
 * @param string              $html  Rendered block.
 * @param array<string,mixed> $block Parsed block.
 * @return string
 */
function steeped_lite_prioritise_first_cover( $html, $block ) {
	if ( ! empty( $GLOBALS['steeped_lite_has_hero'] ) || is_admin() || empty( $block['attrs']['url'] ) ) {
		return $html;
	}
	return steeped_lite_mark_hero( $html, $block, 'wp-block-cover__image-background' );
}

add_filter( 'render_block_core/image', 'steeped_lite_prioritise_hero_image', 10, 2 );

/**
 * The same for a hero that is an image beside the text rather than a cover
 * behind it (a split hero). Only an image block the theme marked with the
 * is-hero class qualifies; WordPress's own heuristic handles every other
 * first image.
 *
 * @param string              $html  Rendered block.
 * @param array<string,mixed> $block Parsed block.
 * @return string
 */
function steeped_lite_prioritise_hero_image( $html, $block ) {
	if ( ! empty( $GLOBALS['steeped_lite_has_hero'] ) || is_admin() || ! str_contains( ' ' . ( $block['attrs']['className'] ?? '' ) . ' ', ' is-hero ' ) ) {
		return $html;
	}
	return steeped_lite_mark_hero( $html, $block, '' );
}

/**
 * Give the page's hero image fetchpriority=high, never lazy, and remember it
 * for the preload. Whichever hero renders first wins.
 *
 * @param string              $html  Rendered block.
 * @param array<string,mixed> $block Parsed block.
 * @param string              $img_class Class of the <img>, or '' for the block's first <img>.
 * @return string
 */
function steeped_lite_mark_hero( $html, $block, $img_class ) {
	$p = new WP_HTML_Tag_Processor( $html );
	if ( $p->next_tag( $img_class ? array( 'class_name' => $img_class ) : array( 'tag_name' => 'img' ) ) ) {
		$p->set_attribute( 'fetchpriority', 'high' );
		$p->set_attribute( 'decoding', 'async' );
		$p->remove_attribute( 'loading' );
		// srcset is not on the tag yet (WordPress adds it after blocks render),
		// so it is computed from the attachment, exactly as WordPress will.
		$id = (int) ( $block['attrs']['id'] ?? 0 );

		$GLOBALS['steeped_lite_has_hero'] = array(
			'src'    => $p->get_attribute( 'src' ),
			'srcset' => $id ? wp_get_attachment_image_srcset( $id, 'full' ) : '',
			'sizes'  => $id ? wp_get_attachment_image_sizes( $id, 'full' ) : '',
		);
	}
	return $p->get_updated_html();
}

add_filter( 'wp_get_loading_optimization_attributes', 'steeped_lite_lazy_after_hero', 10, 3 );

/**
 * Once a page has a hero cover, every other image on it is below the fold
 * and lazy. WordPress's own heuristic leaves the first few template images
 * eager, which on the front page meant six gallery photos (~420 KB) loading
 * alongside the hero and pushing Largest Contentful Paint from about 2 s to
 * 4.8 s on Lighthouse's mobile profile.
 *
 * Pages without a hero cover keep WordPress's default behaviour, so a post
 * whose first image IS the largest element still gets it eagerly.
 *
 * @param array<string,string> $attrs Loading attributes WordPress chose.
 * @param string               $tag   Tag name.
 * @param array<string,mixed>  $attr  The tag's attributes.
 * @return array<string,string>
 */
function steeped_lite_lazy_after_hero( $attrs, $tag, $attr ) {
	if ( 'img' !== $tag || empty( $GLOBALS['steeped_lite_has_hero'] ) || ( isset( $attr['fetchpriority'] ) && 'high' === $attr['fetchpriority'] ) ) {
		return $attrs;
	}
	unset( $attrs['fetchpriority'] );
	$attrs['loading'] = 'lazy';
	return $attrs;
}

add_action( 'wp_head', 'steeped_lite_preload_hero', 2 );

/**
 * Preload the hero image from <head>.
 *
 * A block theme renders the page before it prints <head>, so by now the
 * cover filter above knows exactly which image is the hero. Without this
 * the browser only finds it after reading every inline stylesheet, which
 * Lighthouse measured as a full second of "load delay" on the front page.
 * srcset/sizes go along, so the preload fetches the same file the <img>
 * will use. (The first version sent the bare src, and the browser fetched
 * the 2000px original as well as the 768px file the <img> chose: 204 KB
 * downloaded for nothing, and LCP got worse, not better.)
 */
function steeped_lite_preload_hero() {
	$hero = $GLOBALS['steeped_lite_has_hero'] ?? null;
	if ( empty( $hero['src'] ) ) {
		return;
	}
	printf(
		'<link rel="preload" as="image" href="%s"%s fetchpriority="high">' . "\n",
		esc_url( $hero['src'] ),
		$hero['srcset'] ? ' imagesrcset="' . esc_attr( $hero['srcset'] ) . '" imagesizes="' . esc_attr( $hero['sizes'] ) . '"' : ''
	);
}
