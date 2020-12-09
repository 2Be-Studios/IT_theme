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
			<div class="col-md-4">
				<ul class="global-contact__details wo-dots">
					<li class="clear">
						<i class="fa fa-map-marker-alt"></i>
						<a href="https://goo.gl/maps/4FvCsF97ft62"><?php echo the_field('insight_address', 13);?></a>
					</li>
					<li>
						<i class="fas fa-phone"></i>
						<a href="tel:<?php echo the_field('insight_phone_number', 13);?>"><?php echo the_field('insight_phone_number', 13);?></a>
					</li>
					<li>
						<i class="fas fa-envelope"></i>
						<a href="mailto:<?php echo the_field('insight_email_address', 13);?>"><?php echo the_field('insight_email_address', 13);?></a>
					</li>
          
				</ul>
        <a href="#" class="bttn bttn-contact" data-toggle="modal" data-target="#newsletter"><i class="fal fa-envelope">&#xf0e0;</i> <span>Sign up to our newsletter</span></a>
			</div>
		</div>
	</div>
</section>
<div class="modal fade newsletter" tabindex="-1" role="dialog" id="newsletter">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Stay informed</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form-in-red">
	<?php echo do_shortcode('[ninja_form id=11]');?>
      </div>
    </div>
  </div>
</div>