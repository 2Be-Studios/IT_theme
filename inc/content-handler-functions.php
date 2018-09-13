<?php

function theLoop($queryParams, $fill){
	$result = "";

	$query = new WP_query($queryParams);
	if( $query->have_posts() ):
		while( $query->have_posts() ): $query->the_post();
			switch($fill){
				case 'title':
					$result = the_title();
					break;
				case 'content':
					$result = the_content();
					break;
				case 'posts':
					$result = $query->get_posts();
					break;
			}
		endwhile;
	endif;
	wp_reset_query();
	return $result;
}


?>