<?php
get_header('inner');

global $post;
$pageID =  $post->ID;

// if about page
if( $pageID == 9){
	get_template_part('template-parts/content', 'about');

}elseif ( $pageID ==  13) {
	// else contact page
	get_template_part('template-parts/content', 'contactpage');
}else {
	get_template_part('template-parts/content','page');
}
get_template_part('template-parts/content','contact');
get_footer('inner');
?>