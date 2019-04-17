<?php
/**
 * LSX Starter Child functions
 *
 * @package 	lsx-demo
 */

/**
 * Sets up theme defaults
 *
 * @package 	lsx-demo
 * @subpackage	setup
 */
function lsx_sct_child_setup() {
	load_child_theme_textdomain( 'lsx-demo', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'lsx_sct_child_setup', 11 );

/**
 * Enqueues the parent and the child theme styles.
 *
 * @package 	lsx-demo
 * @subpackage	setup
 */
function lsx_sct_child_scripts() {
	// Fonts from LSX Theme. Add these lines if your website will use a different font.
	//wp_dequeue_style( 'lsx-header-font' );
	//wp_dequeue_style( 'lsx-body-font' );
	//wp_dequeue_style( 'lsx_font_scheme' );
	
	// Google Fonts. Add these lines if your website will use a different font.
	//wp_enqueue_style( 'lsx-demo-quattrocento-sans', 'https://fonts.googleapis.com/css?family=Quattrocento+Sans:400,400i,700,700i' );

	wp_enqueue_script( 'lsx-demo-scripts', get_stylesheet_directory_uri() . '/assets/js/custom.min.js', array( 'jquery' ) );
}
add_action( 'wp_enqueue_scripts', 'lsx_sct_child_scripts', 11 );
