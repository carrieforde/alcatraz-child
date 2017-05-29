<?php
/**
 * Alcatraz Child functions and definitions.
 */

define( 'ALCATRAZ_CHILD_VERSION', '1.0.0' );
define( 'ALCATRAZ_CHILD_PATH', trailingslashit( get_stylesheet_directory() ) );
define( 'ALCATRAZ_CHILD_URL', trailingslashit( get_stylesheet_directory_uri() ) );

add_action( 'wp_enqueue_scripts', 'alcatraz_child_enqueue_scripts', 15 );
/**
 * Enqueue scripts and stylesheets.
 */
function alcatraz_child_enqueue_scripts() {

	$google_fonts = '//fonts.googleapis.com/css?family=Source+Code+Pro|Source+Sans+Pro:400,400i,700,700i';
	$google_fonts = str_replace( ',', '%2C', $google_fonts );
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';

	// Google fonts.
	wp_enqueue_style(
		'google-fonts',
		$google_fonts,
		array(),
		ALCATRAZ_CHILD_VERSION
	);

	// Include this theme's stylesheet.
	wp_enqueue_style(
		'alcatraz-child-style',
		ALCATRAZ_CHILD_URL . 'style' . $min . '.css',
		array(),
		ALCATRAZ_CHILD_VERSION
	);

	// Include this theme's JS.
	wp_enqueue_script(
		'alcatraz-child-scripts',
		ALCATRAZ_CHILD_URL . 'assets/scripts/alcatraz-child-theme' . $min . 'js',
		array( 'jquery' ),
		ALCATRAZ_CHILD_VERSION
	);
}
