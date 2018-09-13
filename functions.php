<?php

/**
 * Insight functions related to defining constants, adding files and Wordpress core functionality.
 *
 * Defining some constants, loading all the required files and
 * Adding some core functionality.
 *
 * @uses  register_nav_menu() To add support for navigation menu.
 */

/**
 * All setup functionalities
 *
 * @since  1.0
 */

add_action( 'after_setup_theme', 'insight_setup' );

if(!function_exists('insight_setup')):
	function insight_setup(){
		// This theme uses Featured Images (also known as post thumbnails) for per-post/per-page.
		add_theme_support( 'post-thumbnails' );

		// Registering navigation menu.
		register_nav_menus( array(
				'primary_menu' => 'Primary Menu'
			));

		/*
		 * Enable support for custom logo.
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		) );

		/*
	    * Let WordPress manage the document title.
	    * By adding theme support, we declare that this theme does not use a
	    * hard-coded <title> tag in the document head, and expect WordPress to
	    * provide it for us.
	    */
	   	add_theme_support('title-tag');
	   	add_post_type_support( 'page', 'excerpt' );
}
endif;

// directory and uri
define( 'INSIGHT_PARENT_URL', get_template_directory_uri() );
define( 'INSIGHT_PARENT_DIR', get_template_directory() );

//stylesheets and script uri
define( 'INSIGHT_DEFAULT_CSS_URL', get_stylesheet_uri() );
define( 'INSIGHT_CSS_URL', INSIGHT_PARENT_URL . '/assets/styles');
define( 'INSIGHT_JS_URL', INSIGHT_PARENT_URL . '/assets/scripts');

// functions
define( 'INSIGHT_INCLUDES_DIR', INSIGHT_PARENT_DIR.'/inc');

require_once( INSIGHT_INCLUDES_DIR . '/functions.php');
require_once( INSIGHT_INCLUDES_DIR . '/header-functions.php');
require_once( INSIGHT_INCLUDES_DIR . '/content-handler-functions.php');
require_once( INSIGHT_INCLUDES_DIR . '/footer-functions.php');