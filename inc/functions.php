<?php
/**
 * Insight LANDING functions and definitions
 *
 */

add_action( 'wp_enqueue_scripts' , 'insight_stylesheets' );

function insight_stylesheets(){

  // font
  // wp_enqueue_style('insight_font', 'https://fonts.googleapis.com/css?family=Playfair+Display:700');
  wp_enqueue_style('insight_font', 'https://fonts.googleapis.com/css?family=Orbitron');
  // aos animation library css
  wp_enqueue_style( 'insight_aos', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css' );

  // fontawesome
  wp_enqueue_script( 'insight-fontawesomsvg', INSIGHT_JS_URL . '/all.min.js' );

	// insight main stylesheet
  wp_enqueue_style( 'insight_main', INSIGHT_PARENT_URL . '/style.css', null, '2.1.5' );

}

add_action( 'wp_head' , 'insight_extra_head_configs');

function insight_extra_head_configs(){
  echo '<meta charset="utf-8">';
	echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />';
	echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
}

/**
 * Remove extra emojicons stylesheet and scripts
 */

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) {
	return array_diff( $plugins, array( 'wpemoji' ) );
  } else {
	return array();
  }
}

function disable_wp_emojicons() {

  // all actions related to emojis
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

  // filter to remove TinyMCE emojis
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}

/**
  * Register Custom Post Types
  */
function reg_post_types(){

	/* TESTIMONIALS*/
	register_post_type( 'testi',
	  array(
		'labels' => array(
			'name' => __( 'Testimonials' ),
			'singular_name' => __( 'Testimonial' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'menu_icon' => 'dashicons-testimonial',
		  'supports' => array('title', 'editor', 'thumbnail')
	  )
	);

	/* partners*/
	register_post_type( 'partners',
	  array(
		'labels' => array(
			'name' => __( 'Partners' ),
			'singular_name' => __( 'Partner' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'menu_icon' => 'dashicons-groups',
		  'supports' => array('title', 'editor', 'thumbnail')
	  )
	);

	/* services*/
	register_post_type( 'services',
	  array(
		'labels' => array(
			'name' => __( 'Services' ),
			'singular_name' => __( 'Service' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'menu_icon' => 'dashicons-screenoptions',
		  'supports' => array('title', 'editor', 'thumbnail')
	  )
	);

	/* TEAM */
	register_post_type( 'team',
	  array(
		'labels' => array(
			'name' => __( 'Team' ),
			'singular_name' => __( 'Team' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'menu_icon' => 'dashicons-admin-users',
		  'supports' => array('title', 'editor', 'thumbnail')
	  )
	);

	 /* hero slider */
	register_post_type( 'heroslider',
	  array(
		'labels' => array(
			'name' => __( 'Hero Slider' ),
			'singular_name' => __( 'Slider' )
		  ),
		  'public' => true,
		  'has_archive' => true,
		  'menu_icon' => 'dashicons-format-gallery',
		  'supports' => array('title', 'thumbnail')
	  )
	);

}

add_action('init', 'reg_post_types');

// register api key

function my_acf_init() {

  acf_update_setting('google_api_key', 'AIzaSyC5zXrI6V-5QPt5MOjtC1vqMXIugDTZpYU');
}

add_action('acf/init', 'my_acf_init');

?>
