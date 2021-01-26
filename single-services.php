<?php
/**
* Template Name: Services
**/
get_header('inner');
while ( have_posts() ) : the_post();
?>
<section class="service service-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 aos-init" data-aos="fade-right">
				<h1 class="pagetitle">
					<?php $title = get_the_title();
						echo $title;
					?>
				</h1>
				<span class="section-divider gray-divider"></span>
				<div class="service-overview">
					<p>
						<?php $content = get_the_content(); 
						echo $content;?>
					</p>
				</div>
				
			</div>
			<div class="col-md-6 aos-init" data-aos="fade-left">
				<div class="service-contact__formheading">
					<h2>need help?</h2>
					<span class="section-divider gray-divider"></span>
					<h5 class="secondary-heading">fill in your contact details and we'll be in touch shortly</h5>
				</div>
				
				<div class="service-contact__form form-in-red" >
					<?php 
          	$IDpost = get_the_ID();
          	if($IDpost = 597){
          		echo do_shortcode('[ninja_form id=10]');
            }else{
          		echo do_shortcode('[ninja_form id=3]');
            }
          ?>
				</div><!-- service contact form -->
			</div>
		</div><!--row -->
	</div>
</section><!-- service page header -->
<section class="service service-benefits">
	<div class="container">
		<div class="row section-heading text-center">
			<h2>benefits with insight</h2>
			<span class="section-divider gray-divider"></span>
		</div>
		<div class="row service-benefits__list">
			<?php
				// check if the repeater field has rows of data
				if( have_rows('benefits_list', 150) ):

				 	// loop through the rows of data
				    while ( have_rows('benefits_list',150) ) : the_row(); 
				    	// display a sub field value
				        $icon = get_sub_field('benefit_icon',150);
			?>
			<div class="col-md-2 text-center">
				<div class="img-wrapper">
					<img src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
				</div>
				<h6 class="secondary-heading"><?php echo the_sub_field('benefit_label',150);?></h6>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<section class="service service-list">
	<div class="container">
		<div class="row section-heading text-center">
			<h2>you may also consider</h2>
			<span class="section-divider gray-divider"></span>
		</div>
		<div class="row service-list__list">
			<?php

				$services = theLoop(array('post_type'=>'services', 'post_not_in'=>array(get_the_ID()),'posts_per_page'=>5,'orderby'=>'rand'),'posts');

				// /print_r($services);
				foreach($services as $s):
					$img = wp_get_attachment_image_src( get_post_thumbnail_id( $s->ID ), 'single-post-thumbnail' );
			?>
			<a href="<?php echo get_permalink($s->ID);?>">
				<div class="col-md-2 text-center <?php echo $s->post_name;?>">
					<div class="img-wrapper">
						<img src="<?php echo $img[0]?>"/>
					</div>
					<h6 class="secondary-heading"><?php echo $s->post_title;?></h6>
				</div>
			</a>
			<?php endforeach;?>
		</div>
	</div>
</section>
<?php endwhile; get_footer('inner');?>