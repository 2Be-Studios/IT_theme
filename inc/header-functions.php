<?php
/**
 * Core functionalities related in header section.
 * 
 */
if(!function_exists('charternet_the_custom_logo')):
	function charternet_the_custom_logo() {
		if ( function_exists( 'the_custom_logo' ) ) {
			the_custom_logo();
		}
	}
endif;

?>