<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<?php wp_head();?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112683242-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-112683242-1');
</script>
<link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
</head>
<body <?php body_class();?>>
	<header class="home-nav__wrapper">
		<nav class="home-nav clear">
			<div class="float-left clear">
				<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/insight-logo-white.png" alt="" class="logo"></a>
				<i class="fal fa-bar menu-toggle hide-desktop">&#xf0c9;</i>
			</div>
			<?php
				wp_nav_menu(array(
						'theme_location' => 'primary_menu',
						'container'=> 'nav',
						'container_class'=> 'float-right menu-wrapper',
						'container_id'=> ''
					)
				);
			?>
		</nav>
	</header>
	<header class="home-hero bg-color-overlay">
		<div class="home-hero__slider_nav"></div>
		<div class="home-hero__slider_wrapper">
			<div class="home-hero__slider">
				<?php
					$home_slider = theLoop(
								array(
									'post_type'=>'heroslider',
									'order'=>'ASC',
									'orderby'=>'date'
								), 'posts' );


					foreach($home_slider as $slider):
						if( has_post_thumbnail( $slider->ID ) ):
							$bg = wp_get_attachment_image_src( get_post_thumbnail_id( $slider->ID ), 'single-post-thumbnail' );
						endif; // background image hero

				?>
				<div>
					<div style="background-image: url('<?php echo $bg[0];?>');" class="slider_bg"></div>

				</div>
				<?php endforeach; ?>
			</div><!-- home hero slider -->
		</div><!-- slider wrapper -->
		<div class="home-hero__content">
			<div class="container aos-init" data-aos="fade-right">
				<blockquote><br/>Your not quite<br/> in house,<br/>but<p>always<br/>available</p><br/>IT DEPARTMENT</blockquote>
				<div class="action-btns">
					<a href="/about/" class="bttn bttn-learnmore"> <i class="fas fa-info">&#xf129;</i> <span>learn more</span></a>
					<a href="/contact/" class="bttn bttn-contact"><i class="fal fa-envelope">&#xf0e0;</i> <span>contact us now</span></a>
				</div>
				<p class="home-hero__phone">
					<a href="tel:<?php echo the_field('insight_phone_number', 13);?>">
						<i class="fas fa-phone">&#xf095;</i>
						<span><?php echo the_field('insight_phone_number', 13);?></span>
					</a>
				</p>
			</div>
			<span class="scroll-down"></span>
		</div>
	</header>