<?php 
	while ( have_posts() ) : the_post();
?>
<section class="global-page-header about-page-header default-page__layout">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center aos-init" data-aos="fade-down">
				
				<?php 
					the_title('<h2>','</h2>');
				?>	
				
				<div class="section-divider gray-divider"></div>
				
			</div>
		</div>
	</div>
</section>
<section class="default-page__layout">
	<div class="container">
		<div class="row">
			<div class="col-md-12 form-in-red">
				<?php the_content();?>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>