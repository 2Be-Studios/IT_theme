<?php get_header('inner');
	while ( have_posts() ) : the_post();
?>
<section class="single-post singlee">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 single-post__wrapper">
				<div class="section-heading single-heading text-center">
					<?php
						the_title('<h2 class="single-title__heading">', '</h2>');
					?>
					<span class="section-divider gray-divider"></span>
					<p class="single-date__heading"><?php echo get_the_date();?></p>
					<?php the_tags( '<ul class="clear single-tags__list wo-dots"><li>', '</li><li>', '</li></ul>' );  ?>
				</div><!-- section heading -->
				<div class="wrapper">
					<div class="img-wrapper single-img-wrapper" style="background-image:url('<?php the_post_thumbnail_url('')?>')">
						<?php //the_post_thumbnail('full'); ?>
					</div>

					<div class="single-content">
						<h2><?php the_title('<h2 class="single-title">', '</h2>'); ?></h2>
						<p class="single-date"><?php echo get_the_date();?></p>
						<p> <?php the_content(); ?></p>
					</div><!-- single content -->
					<hr/>
					<div class="single-share single-share-header">
						<p>Share article</p>
					</div>
					<div class="single-share single-share-content">
						<?php echo do_shortcode('[social_warfare]');?>
						<a href="mailto:?subject=<?php the_title();?>&amp;body=<?php the_permalink();?>" title="Send this article to a friend!" class="single-share__email">
							<i class="fas fa-envelope">&#xf0e0;</i>
						</a>
					</div>
				</div>
				
			</div><!-- offset -->
		</div>
	</div>
</section>
<?php 
get_template_part('template-parts/content','related');
get_template_part('template-parts/content','contact');
endwhile; get_footer('inner');?>