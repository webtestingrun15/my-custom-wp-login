<?php
/**
 * Plugin Name: My Custom WP Login
 * Version: 0.1
 * Author: Sheldon Francis
 * License: GPL2+
 * Text Domain: mcwpl
 **/

add_action( 'login_enqueue_scripts', 'mcwpl_login_stylesheet' );
/**
 * Load custom on login page
 */
function mcwpl_login_stylesheet() {
	// load stylesheet.
	wp_enqueue_style( 'mcwpl-custom-stylesheet', plugin_dir_url( __FILE__ ) . 'login-styles.css' );
}

// with no message
// add_filter( 'login_errors', __return_null );
// with a message.
add_filter( 'login_errors', 'mcwpl_error_message' );
/**
 * Returns a custom error message
 */
function mcwpl_error_message() {
	return 'Well, that was not it!';
}

add_action( 'login_head', 'mcwpl_remove_shake' );
/**
 * Remove login Shake
 */
function mcwpl_remove_shake() {
	remove_action( 'login_head', 'wp_shake_js', 12 );
}
