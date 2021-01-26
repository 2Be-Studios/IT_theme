<section class="related-posts blog-list">
	<div class="container">
		<div class="row section-heading">
			<div class="col-md-12 text-center">
				<h2>here are some articles you might be interested in</h2>
				<span class="section-divider gray-divider"></span>
			</div>
		</div>
		<div class="row">
			<?php

					// exclude current article
			$related = theLoop(array(
				'post_type'=> 'post',
				'category__in' => wp_get_post_categories(get_the_ID()), 
				'post__not_in'=>array(get_the_ID()), 
				'posts_per_page'=> 3,
				'orderby'=> 'rand'), 
			'posts');

			foreach($related as $r):
				$blogHeader = wp_get_attachment_image_src( get_post_thumbnail_id( $r->ID ), 'single-post-thumbnail' );
				?>

				<div id="post-<?php echo $r->ID; ?>" class="col-md-4 blog-list__item aos-init" data-aos="fade-up">
					<div class="wrapper">
						<a href="<?php echo get_permalink( $r->ID ); ?>">
							<div class="img-wrapper">
								<img src="<?php echo $blogHeader[0];?>" alt="">
							</div>
						</a>

						<div class="item-details">

							<h2><a href="<?php echo get_permalink($r->ID); ?>" class="blog-list__heading"><?php echo wp_trim_words($r->post_title,8,'..'); ?></a></h2>

							<p class="item-date"><?php echo get_the_date(null,$r);?></p>
							<?php 
							$content = wp_trim_words($r->post_content, 15,'...'); 

							echo '<p class="item-content">' . $content . '</p>';
							the_tags( '<ul class="clear blog-tags__list wo-dots"><li>', '</li><li>', '</li></ul>' ); 
							?>
						</div>

					</div><!-- wrapper -->

				</div><!-- blog list item wrapper -->
			<?php endforeach;?>
		</div>
	</div>
</section>