<section class="global-contact">
	<div class="container">
		<div class="row">
			<div class="col-md-8 clear aos-init" data-aos="fade-right">
				<div class="section-heading">
					<h2>contact</h2>
					<p>we will get back<br/>to you</p>
				</div>
				<div class="contactform-wrapper">
					<?php echo do_shortcode('[ninja_form id=1]');?>
				</div>
			</div><!-- col md 8-->
			<div class="col-md-4 aos-init" data-aos="fade-left">
				<ul class="global-contact__details wo-dots">
					<li class="clear">
						<i class="fas fa-map-marker-alt">&#xf3c4;</i>
						<a href="https://goo.gl/maps/4FvCsF97ft62"><?php echo the_field('insight_address', 13);?></a>
					</li>
					<li>
						<i class="fas fa-phone">&#xf095;</i>
						<a href="tel:<?php echo the_field('insight_phone_number', 13);?>"><?php echo the_field('insight_phone_number', 13);?></a>
					</li>
					<li>
						<i class="fas fa-envelope">&#xf0e0;</i>
						<a href="mailto:<?php echo the_field('insight_email_address', 13);?>"><?php echo the_field('insight_email_address', 13);?></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>