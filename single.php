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
					<a href="#" class="bttn bttn-contact" data-toggle="modal" data-target="#newsletter" style="
    margin: 1% 5% 7%;
    background: #e30040;
"><svg class="svg-inline--fa fa-envelope fa-w-16" aria-hidden="true" data-prefix="fal" data-icon="envelope" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg=""><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg><!-- <i class="fal fa-envelope"></i> --> <span style="
    padding: 13px;
">Sign up to our newsletter</span></a>
				</div>
				
			</div><!-- offset -->
		</div>
	</div>
</section>
<?php 
get_template_part('template-parts/content','related');
get_template_part('template-parts/content','contact');
endwhile; get_footer('inner');?>