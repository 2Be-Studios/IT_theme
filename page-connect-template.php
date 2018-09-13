<?php
/**
* Template Name: Landing Page
**/
get_header('connect');
?>
	<header class="bg-color-overlay connect-hero">
		<video autoplay loop muted src="<?php echo get_template_directory_uri(); ?>/assets/video/timelapse.mp4" 
          type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"' >
				
			</video>
		
		<div class="aos-init home-hero__content connect-hero__content" data-aos="fade-right">
			<blockquote><p>Get ahead of<br/>
				Your office<br/>
			Move</p></blockquote>
			<div class="action-btns">
				<button class="bttn bttn-learnmore" data-toggle="modal" data-target="#businessOwner"> <i class="fal fa-briefcase">&#xf0b1;</i> <span>business owner</span></button>
				<button class="bttn bttn-contact" data-toggle="modal" data-target="#ComPropManager"><i class="fal fa-user-tie">&#xf508;</i> <span>commercial property manager</span></button>
			</div>
		</div>
	</header>
	<section class="connect-intro text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p>Setting up a new office can be stressful and technology is often overlooked until the last minute, Insight Connect will take the time to plan out your IT infrastrucutre for a seamless transition to your new space.</p>
				</div>
			</div>
		</div>
		

	</section>
	<section class="som">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center section-heading">
					<h2>Your Standard Office Move</h2>
				</div>
			</div>
		</div>
		<div>
			<ul>
				<li>
					<label for="">8 - 10 weeks</label>
					<p>Internet Connection</p>
				</li>
				<li>
					<label for="">6 weeks</label>
					<p>Relocating phone lines to new address</p>
				</li>
				<li>
					<label for="">3 weeks</label>
					<p>Phone systems and handsets purchased</p>
				</li>
				<li>
					<label for="">2 weeks</label>
					<p>Data electrical cabling completed</p>
				</li>
				<li>
					<label for="">MOVE IN</label>
				</li>
			</ul>
		</div>
	</section>
	<section class="help-with">
		<div class="container">
			<div class="row">
				<div class="section-heading col-md-12 text-center">
					<h2>We Can Help With</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<ul>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/cloudbasedsolutions.png" alt="">
							</div>
							<p>Cloud based solutions</p>
						</li>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/openedemail.png" alt="">
							</div>
							<p>Email systems</p>
						</li>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/cloudbasedsolutions.png" alt="">
							</div>
							<p>Software support</p>
						</li>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/antivirus.png" alt="">
							</div>
							<p>Antivirus</p>
						</li>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/webhosting.png" alt="">
							</div>
							<p>Web hosting</p>
						</li>
						<li>
							<div class="img-wrapper">
								<img src="<?php echo get_template_directory_uri();?>/assets/images/chart.png" alt="">
							</div>
							<p>Tech strategy</p>
						</li>
					</ul>
				</div>
			</div>
		</div>
		
	</section>
<?php 
get_template_part('template-parts/content','contact'); ?>
<div class="modal fade" tabindex="-1" role="dialog" id="businessOwner">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Business Owner</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form-in-red">
        <?php echo do_shortcode('[ninja_form id=7]');?>
      </div>
    </div>
  </div>
</div>
<div class="modal fade" tabindex="-1" role="dialog" id="ComPropManager">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Commercial Property Manager</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body form-in-red">
	<?php echo do_shortcode('[ninja_form id=8]');?>
      </div>
    </div>
  </div>
</div>
<?php get_footer('inner');?>