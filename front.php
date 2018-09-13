<?php 
/**
* Template Name: Front Page
**/
get_header();
?>
<section class="home-service">
	<div class="container">
		<div class="text-center home-service__text">
			<span class="section-divider aos-init" data-aos="fade-down"></span>
			<div class="aos-init" data-aos="fade-down">
				<?php echo the_field('services_overview');?>
			</div>
		</div><!-- text center -->
		
		<div class="home-service__list row">
			<?php
				// check if the repeater field has rows of data
				if( have_rows('services') ):

				 	// loop through the rows of data
				    while ( have_rows('services') ) : the_row(); 
				    	// display a sub field value
				        $icon = get_sub_field('service_icon');
			?>
			<div class="text-center col-md-3 aos-init" data-aos="fade-up">
				<img src="<?php echo $icon['url'];?>" alt="">
				<h5><?php the_sub_field('service_name'); ?></h5>
			</div>
			<?php
				    endwhile;
				endif;
			?>
		</div><!-- home service list -->
		
	</div>
</section>
<?php get_template_part('template-parts/content','testimonials');?>
<section class="home-partners">
	<div class="container">
		<div class="row">
			<div class="section-heading">
				<h2>partners</h2>
			</div>
			<ul class="clear wo-dots">
				<?php 
					$partnerslogo = theLoop(array('post_type'=>'partners'), 'posts');

					foreach( $partnerslogo as $p ):
						if( has_post_thumbnail( $p->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $p->ID ), 'single-post-thumbnail' );
						endif; // background image hero
				?>
				<li class="<?php echo $p->post_title;?>" style="background: url('<?php echo $image['0'];?>') no-repeat center center;"></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</section>
<?php get_template_part('template-parts/content','contact');?>
<?php get_footer('inner'); ?>