<?php
/**
* Template Name: Services
**/
get_header('inner');
?>
<section class="service service-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-6 aos-init" data-aos="fade-right">
				<h2>
					<?php $title = theLoop(array('pagename'=>'our-services'),'title');
						echo $title;
					?>
				</h2>
				<span class="section-divider gray-divider"></span>
				<div class="service-overview">
					<p>
						<?php $content = theLoop(array('pagename'=>'our-services'),'content'); echo $content;?>
					</p>
				</div>
				
			</div>
			<div class="col-md-6 aos-init" data-aos="fade-left">
				<div class="service-contact__formheading">
					<h2>need help?</h2>
					<span class="section-divider gray-divider"></span>
					<h5 class="secondary-heading">fill in your contact details and we'll be in touch shortly</h5>
				</div>
				<?php
        	global $post;
					$IDpost = $post->ID;
        ?>
				<div class="service-contact__form form-in-red" id="<?php echo $IDpost;?>">
					<?php echo do_shortcode('[ninja_form id=3]');?>
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
				if( have_rows('benefits_list') ):

				 	// loop through the rows of data
				    while ( have_rows('benefits_list') ) : the_row(); 
				    	// display a sub field value
				        $icon = get_sub_field('benefit_icon');
			?>
			<div class="col-md-2 text-center">
				<div class="img-wrapper">
					<img src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
				</div>
				<h6 class="secondary-heading"><?php echo the_sub_field('benefit_label');?></h6>
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
				// check if the repeater field has rows of data
			if( have_rows('services_list') ):

				 	// loop through the rows of data
				    while ( have_rows('services_list') ) : the_row(); 
				    	// display a sub field value
				        $icon = get_sub_field('service_icon');
			?>
			<div class="col-md-2 text-center">
				<div class="img-wrapper">
					<img src="<?php echo $icon['url']?>" alt="<?php echo $icon['alt']?>">
				</div>
				<h6 class="secondary-heading"><?php echo the_sub_field('service_label');?></h6>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>
</section>
<?php get_footer('inner');?>