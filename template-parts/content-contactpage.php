<section class="global-page-header contact-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="pagetitle">
					<?php 
						$title = theLoop(array('pagename'=>'contact'), 'title');
						echo $title;
					?>	
				</h1>
				<div class="section-divider gray-divider"></div>
				<div class="global-page-header__desc">
					<?php
						$content = theLoop(array('pagename'=> 'contact'), 'content');
						echo $content;
					?>
					<ul class="contact-details wo-dots aos-init" data-aos="fade-down">
						<li class="clear">
							<i class="fa fa-map-marker-alt"></i>
							<a href="https://goo.gl/maps/4FvCsF97ft62"><?php echo the_field('insight_address', 13);?></a>
						</li>
						<li>
							<i class="fas fa-phone">&#xf095;</i>
							<a href="tel:<?php echo the_field('insight_phone_number', 13);?>"><?php echo the_field('insight_phone_number', 13);?></a>
						</li>
						<li>
							<i class="fas fa-fax">&#xf1ac;</i>
							<p><?php echo the_field('insight_fax_number', 13);?></p>
						</li>
					</ul><!-- contact details -->
					<ul class="contact-social__list wo-dots">
						<li>
							<a href="<?php echo the_field('insight_facebook', 13);?>" class="diamond-shape aos-init" target="_blank" data-aos="flip-right">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li>
							<a href="<?php echo the_field('insight_twitter', 13);?>" class="diamond-shape aos-init" target="_blank" data-aos="flip-right">
								<i class="fab fa-twitter">&#xf099;</i>
							</a>
						</li>
						<li>
							<a href="<?php echo the_field('insight_linkedin', 13);?>" class="diamond-shape aos-init" target="_blank" data-aos="flip-right">
								<i class="fab fa-linkedin-in">&#xf0e1;</i>
							</a>
						</li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section><!-- page header -->
<section class="contact-secondary__form">
	<div class="container">
		<div class="row">
			<div class="col-md-4 form-in-red aos-init" data-aos="fade-right">
				<?php echo do_shortcode('[ninja_form id=2]');?>
			</div>
			<div class="col-md-8 aos-init" data-aos="fade-left">
				<?php
					$img = theLoop(array('pagename'=> 'contact'), 'posts');

					foreach($img as $i):
						if( has_post_thumbnail( $i->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $i->ID ), 'single-post-thumbnail' );
						endif; // background image hero

				?>
				<div class="img-wrapper">
					<img src="<?php echo $image['0'];?>" alt="">
				</div>
				<?php endforeach;?>
			</div><!-- col md 8 -->
		</div>
	</div>
</section>
<section class="contact-map">
	<?php
		$location = get_field('insight_map');

		if( !empty($location) ):
	?>
	<div class="acf-map">
		<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>	
	</div>
	<?php endif; ?>
</section>