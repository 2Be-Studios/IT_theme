<section class="home-testimonials about-testimonials">
	<div class="container">
		<div class="row">
			<div class="col-md-4 section-heading aos-init" data-aos="fade-right">
				<h2>testimonials</h2>
				<p>What people have said <br/>about us</p>
			</div><!-- section heading -->
			<div class="col-md-8">
				<div class="home-testimonials__col8wrapper aos-init" data-aos="fade-left">
					<span class="section-divider gray-divider"></span>
					<div class="testimonial-slider__wrapper">
						<div class="testimonial-slider">
							<?php
								$comments = theLoop(array('post_type'=>'testi'), 'posts');

								foreach($comments as $comment):

									$logo = get_field('clients_company_logo', $comment->ID);
							?>
								<div>
									<blockquote>
										"<?php echo $comment->post_content;?>"
									</blockquote>
									<h5 class="secondary-heading">- <?php echo $comment->post_title;?></h5>
									
									<ul class="testi-client__details wo-dots">
										<li>
											<div class="img-wrapper">
												<img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
											</div>
										</li>
										<li>
											<p><?php echo the_field('clients_position', $comment->ID);?></p>
											<p>
												<?php echo the_field('clients_company', $comment->ID);?>
											</p>
										</li>
										
									</ul>
								</div>
							<?php endforeach;?>
						</div>
					</div><!-- testimonial slider wrapper -->
					<div class="testimonial-slider__nav"></div>
				</div><!-- home testimonials col 8 wrapper -->
			</div>
		</div>
	</div>
</section>