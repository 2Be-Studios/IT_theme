<?php
/**
* Contains all the functions and components related for
* the whole document and esp. footer section.
*/

add_action( 'wp_footer', 'insight_script' );

function insight_script(){

	// jquery
	wp_enqueue_script('insight_jquery','https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js');

	// aoa script
	wp_enqueue_script('insight_aoa', 'https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js', array(), '');

	// slick js
	wp_enqueue_script('insight_slick','https://cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js');

	// bootstrap
	wp_enqueue_script('insight_bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js');

	// main js
	wp_enqueue_script('insight_main', INSIGHT_JS_URL . '/main.js', array(),'');

	// google api key
	wp_enqueue_script( 'insight_map_key', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC5zXrI6V-5QPt5MOjtC1vqMXIugDTZpYU' );

	// map js
	wp_enqueue_script( 'insight_map',INSIGHT_JS_URL. '/acf-map.js', array(),'');

}

?>