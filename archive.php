<?php
/**
* Template Name: Blog
**/
get_header('inner');
?>
<section class="blog-list">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2>blog</h2>
				<span class="section-divider gray-divider"></span>
			</div>
		</div>
		<div class="row">

        	<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

			<?php if( have_posts() ): ?>

	        	<?php echo do_shortcode('[ajax_load_more id="2454627808" container_type="div" css_classes="row" post_type="post" posts_per_page="6" images_loaded="true"]');?>

			<?php else: ?>

			<div id="post-404" class="noposts">

			    <p><?php _e('None found.','example'); ?></p>

		    </div><!-- /#post-404 -->

			<?php endif; wp_reset_query(); ?>
		</div><!-- row -->
	</div><!-- /#container -->
</section>

<?php get_template_part('template-parts/content','contact');
get_footer('inner');?>