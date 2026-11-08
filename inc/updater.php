<?php
/**
 * Updates from the theme's GitHub releases (allanninal/steeped-lite).
 *
 * @package steeped-lite
 */

defined( 'ABSPATH' ) || exit;

/**
 * The latest release: version, zip and page, cached for 12 hours.
 *
 * @return array Empty when there is none or GitHub could not be reached.
 */
function steeped_lite_latest_release() {
	$release = get_transient( 'steeped_lite_release' );
	if ( is_array( $release ) ) {
		return $release;
	}
	$release  = array();
	$response = wp_remote_get(
		'https://api.github.com/repos/allanninal/steeped-lite/releases/latest',
		array(
			'timeout' => 10,
			'headers' => array( 'Accept' => 'application/vnd.github+json' ),
		)
	);
	if ( ! is_wp_error( $response ) && 200 === wp_remote_retrieve_response_code( $response ) ) {
		$body    = json_decode( wp_remote_retrieve_body( $response ), true );
		$version = isset( $body['tag_name'] ) ? ltrim( (string) $body['tag_name'], 'v' ) : '';
		$assets  = isset( $body['assets'] ) && is_array( $body['assets'] ) ? $body['assets'] : array();
		foreach ( $assets as $asset ) {
			$url = isset( $asset['browser_download_url'] ) ? (string) $asset['browser_download_url'] : '';
			if ( isset( $asset['name'] ) && preg_match( '/^steeped-lite-[0-9.]+\.zip$/', (string) $asset['name'] ) && 0 === strpos( $url, 'https://github.com/allanninal/steeped-lite/releases/download/' ) ) {
				$release = array(
					'version' => $version,
					'package' => $url,
					'url'     => isset( $body['html_url'] ) ? (string) $body['html_url'] : 'https://github.com/allanninal/steeped-lite/releases',
				);
			}
		}
		if ( ! preg_match( '/^[0-9]+(\.[0-9]+)*$/', $version ) ) {
			$release = array();
		}
	}
	set_transient( 'steeped_lite_release', $release, 12 * HOUR_IN_SECONDS );
	return $release;
}

/**
 * Offer a newer release in WordPress's own theme updates.
 *
 * @param object $transient The update_themes transient.
 * @return object
 */
function steeped_lite_offer_update( $transient ) {
	if ( ! is_object( $transient ) || empty( $transient->checked ) ) {
		return $transient;
	}
	$theme   = basename( STEEPED_LITE_DIR );
	$release = steeped_lite_latest_release();
	if ( ! empty( $release['version'] ) && version_compare( $release['version'], STEEPED_LITE_VERSION, '>' ) ) {
		$transient->response[ $theme ] = array(
			'theme'        => $theme,
			'new_version'  => $release['version'],
			'url'          => $release['url'],
			'package'      => $release['package'],
			'requires'     => '6.6',
			'requires_php' => '8.1',
		);
	}
	return $transient;
}
add_filter( 'pre_set_site_transient_update_themes', 'steeped_lite_offer_update' );
