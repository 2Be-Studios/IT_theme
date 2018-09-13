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
</head>
<body <?php body_class();?>>
	<header class="page-nav__inner">
		<nav class="page-nav__nav clear">
			<div class="float-left clear">
				<a href="<?php echo get_home_url();?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/insight-logo-white.png" alt="" class="logo" /></a>
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