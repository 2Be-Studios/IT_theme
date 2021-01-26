<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="google-site-verification" content="BfdIhYPJAE2Ncn1R8wDHXIpQYM-LcGbhP0EFXaeJbe4" />
	<?php wp_head();?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112683242-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config', 'UA-112683242-1');
	</script>
</head>
<body <?php body_class();?>>
	<header class="home-nav__wrapper">
		<nav class="home-nav clear">
			<div class="float-left clear">
				<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/insight-logo-white.png" alt="" class="logo"></a>
				
				<button class="menu-toggle hide-desktop" onclick="menuToggle(this);">
					<i class="fal fa-bars"></i>
				</button>

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
<header class="home-hero bg-color-overlay" style="    height: auto;">
	<video autoplay loop muted src="<?php echo get_template_directory_uri(); ?>/assets/video/hero-bg.mp4" 
		type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' >

	</video>
	<div class="home-hero__content">
		<div class="container aos-init" data-aos="fade-right">
			<div class="row">
				<?php if ( is_page(26134) ): ?>					
					<div class="col-md-8">
						<blockquote><br/>Your not quite<br/> in house,<br/>but<p>always<br/>available</p><br/>IT DEPARTMENT</blockquote>
						<div class="action-btns">
							<a href="/about/" class="bttn bttn-learnmore"> <i class="fas fa-info">&#xf129;</i> <span>learn more</span></a>
							<a href="/contact/" class="bttn bttn-contact"><i class="fal fa-envelope">&#xf0e0;</i> <span>contact us now</span></a>
						</div>
						<p class="home-hero__phone" style="display: none;">
							<a href="tel:<?php echo the_field('insight_phone_number', 13);?>">
								<i class="fas fa-phone">&#xf095;</i>
								<span><?php echo the_field('insight_phone_number', 13);?></span>
							</a>
						</p>
					</div>
					<div class="col-md-4">
						<div class="hero-contact">
							<style>
								.nf-form-title {
									display: none;
								}
								.hero-contact input[type="button"]{
									padding: 11px 25px;
									font-size: 13px;
									text-align: center;
									text-transform: uppercase;
									font-family: avertabold;
									background: #e30040;
									border: none;
									color: #fff;
								}

                                @media (max-width: 992px) {
                                  .hero-contact h5 {
										margin-bottom: 0;
									}
									.scroll-down {
										display: none;
									}
                                   #nf-form-13-cont .nf-field-container {
										margin-bottom: 5px;
									}
								}
							</style>
							<h5 style="color: #fff; text-transform: uppercase;font-family: avertasemibold;"> Need IT Support? Call <span style="color: #e30040;">1300 911 000</span> or request a call</h5>
							<div class="global-contact" style="    background: none;">							
								<?php echo do_shortcode('[ninja_form id=13]'); ?>
							</div>
						</div>
					</div>
				<?php elseif ( is_page(26294) ): ?>	
					<style>
						.home-hero__content blockquote{
							font-size: 35px !important;
							text-transform: none !important;
							line-height: 30px !important;
							letter-spacing: 0px;
							margin: 0 !important;
						}
						
						.home-hero__content blockquote .caps{
							text-transform: uppercase;
						}
						.home-hero__content blockquote h1{
							font-size: 65px !important;
							text-transform: none !important;
							line-height: 50px;
						}

						.home-hero__content blockquote:before {
							content: '' !important;
						}

						.action-btns a:first-child {
							margin: 0 10px 10px 0 !important;
						}

						.fa-phone-volume{
							font-size: 16px;
							color: #EA1F3C;
						}
					
						.hero{
							text-align: center;
						}

						.action-btns {
							margin: 50px 0 0 20px !important;
						}

						@media (max-width: 768px) {
							.action-btns {
								text-align:left;
								margin-right: 25px;
							}
							blockquote h1{
							line-height: 70px;
							}
						}
						
						.customers{
							background: #fff;
							text-align:center;
							padding-bottom: 150px;
						}


						@media (min-width: 768px) {
						.bx-controls-direction{
						display: none !important; 
						}
						}

						.gs_logo_single {
						width: auto !important;
						padding: 0 10px;
						}

						.gs_logo_area{
						padding: 0 50px;
						}

						.bx-clone{
						display: none;
						}

						.gs_logo_area .bx-wrapper{
						display: grid !important;
						justify-content: center !important;
						align-items: center !important;
						} 

						.red{
						border: 1px solid #EA1F3C;
						}

						.red span {
						border-left: 1px solid #EA1F3C !important;
						}

						.red span:hover {
						border-left: 1px solid #FFF !important;
						}
					</style>
					<div class="col-md-12 hero">
							<blockquote><br/><span class="caps">Australia’s Leading IT</span><h1>Experts in Real Estate</h1>Trusted experienced & available for over 20 years</blockquote>
							<div class="action-btns">
								<a href="#" class="bttn"> <i class="fal fa-comments-alt"></i> <span>Live chat</span></a>
								<a href="tel:<?php echo the_field('insight_phone_number', 13);?>" class="bttn red" style="margin-bottom:10px;"><i class="fal fa-phone-volume"></i> <span>Call us</span></a>
								<a href="mailto:<?php echo the_field('insight_email_address', 13);?>" class="bttn"><i class="fal fa-envelope"></i> <span>Email us</span></a>
							</div>							
						</div>
				<?php else: ?>
						<div class="col-md-12">
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
				<?php endif; ?>
				</div>
			</div>
			<span class="scroll-down"></span>
		</div>
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
				</div> <!--home hero slider -->
			</div><!-- slider wrapper -->

		</header>
		<div>
		</div>
