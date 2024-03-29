<?php
/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Astra Child
 * @since 1.0.0
 */


define( 'CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0' );

function child_enqueue_styles()
 {
	 wp_enqueue_style(
		 'astra-child-theme-css',
		 get_stylesheet_directory_uri() . '/style.css',
		 array('astra-theme-css'),
		 wp_get_theme()->get('Version')
	 );
 }
 add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);



 function load_child_scripts() {
    wp_enqueue_script('titre-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'load_child_scripts');

