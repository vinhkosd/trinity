<?php

/**
 * Include shortcodes file.
 *
 * @package  itcthemes
 * @since    1.0
 */
$shortcodes = 'gallery, image_banner';
$shortcodes = explode( ',', $shortcodes );
$shortcodes = array_map( 'trim', $shortcodes );

foreach ( $shortcodes as $shortcode ) {
	require_once dirname( __FILE__ ) . '/shortcodes/' . $shortcode . '.php';
	add_shortcode( 'themedefault_' . $shortcode, 'themedefault_' . $shortcode );
}

/**
 * Remove automatics - wpautop and support shortcode on widget.
 *
 * @package  itcthemes
 * @since    1.0
 */
if ( ! function_exists( 'themedefault_pre_shortcode' ) ) {
	function themedefault_pre_shortcode( $shortcode_content ) {
		$shortcodes = 'gallery, image_banner';
		$shortcodes = explode( ',', $shortcodes );
		$shortcodes = array_map( 'trim', $shortcodes );

		global $shortcode_tags;

		// Backup current registered shortcodes and clear them all out
		$orig_shortcode_tags = $shortcode_tags;
		$shortcode_tags = array( );

		foreach ( $shortcodes as $shortcode ) {
			add_shortcode( 'themedefault_' . $shortcode, 'themedefault_' . $shortcode );
		}
		// Do the shortcode (only the one above is registered)
		$shortcode_content = do_shortcode( $shortcode_content );

		// Put the original shortcodes back
		$shortcode_tags = $orig_shortcode_tags;

		return $shortcode_content;
	}
	add_filter( 'widget_text', 'themedefault_pre_shortcode', 7 );
	add_filter( 'the_content', 'themedefault_pre_shortcode', 7 );
}
