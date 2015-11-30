<?php
/**
 * Alcatraz Child functions and definitions.
 */

define( 'ALCATRAZ_CHILD_VERSION', '1.0.0' );
define( 'ALCATRAZ_CHILD_PATH', trailingslashit( get_stylesheet_directory() ) );
define( 'ALCATRAZ_CHILD_URL', trailingslashit( get_stylesheet_directory_uri() ) );

add_action( 'wp_enqueue_scripts', 'alcatraz_child_enqueue_scripts' );
/**
 * Enqueue scripts and stylesheets.
 */
function alcatraz_child_enqueue_scripts() {

	// Include the parent theme's stylesheet.
	wp_enqueue_style(
		'alcatraz-style',
		get_template_directory_uri() . '/style.css',
		array(),
		ALCATRAZ_CHILD_VERSION
	);

	// Include this theme's stylesheet with the parent stylesheet
	// set as a dependency so it loads first.
	wp_enqueue_style(
		'alcatraz-child-style',
		get_stylesheet_uri(),
		array( 'alcatraz-style' ),
		ALCATRAZ_CHILD_VERSION
	);
}
