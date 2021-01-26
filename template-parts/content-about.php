<section class="global-page-header about-page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center aos-init" data-aos="fade-down">
				<h1 class="pagetitle">
					<?php 
						$title = theLoop(array('pagename'=>'about'), 'title');
						echo $title;
					?>	
				</h1>
				<div class="section-divider gray-divider"></div>
				<div class="global-page-header__desc">
					<?php
						$title = theLoop(array('pagename'=> 'about'), 'content');

						echo $title;
					?>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section class="about-team bg-color-overlay">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2>our team</h2>
			</div>
		</div>
		<div class="section-divider gray-divider"></div>
		<div class="about-team__slider">
			<?php

				$team = theLoop(array(
						'post_type'=>'team',
						'order'=> 'ASC',
						'orderby'=>'meta_value_num',
						'meta_key'=> 'slide_position',
						'nopaging'=>true),'posts');

				foreach($team as $t ):
					if( has_post_thumbnail( $t->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $t->ID ), 'single-post-thumbnail' );
						endif; // background image hero
			?>
				<div class="col-md-1">
					<div class="img-wrapper" style="background-image: url('<?php echo $image['0'];?>');">
						<!--img src="<?php// echo $image['0'];?>" alt=""-->
					</div>
					<h5 class="secondary-heading"><?php echo $t->post_title;?></h5>
					<p><?php echo the_field('role', $t->ID);?></p>
				</div>
			<?php endforeach;?>
		</div>
		<div class="about-team__slider_nav"></div>
	</div>
</section>
<?php get_template_part('template-parts/content','testimonials');?>
<section class="about-partners">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2>partnerships</h2>
				<div class="section-divider gray-divider"></div>
			</div>
		</div>
		<div class="row">
			<?php 
				$partners = theLoop(array('post_type'=>'partners'), 'posts');

				foreach( $partners as $partner ):
					if( has_post_thumbnail( $partner->ID ) ):
							$image = wp_get_attachment_image_src( get_post_thumbnail_id( $partner->ID ), 'single-post-thumbnail' );
						endif; // background image hero
			?>
			<div class="col-md-4 aos-init about-partners__item <?php echo $partner->post_title;?>" data-aos="fade-up'">
				<div class="img-wrapper">
					<img src="<?php echo $image['0']?>" alt="">
				</div>
				<div class="about-partners__desc">
					<p><?php echo $partner->post_content;?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>