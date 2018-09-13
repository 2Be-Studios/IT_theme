<div id="post-<?php get_the_ID(); ?>" class="col-md-4 blog-list__item aos-init" data-aos="fade-up">
	<div class="wrapper">
		<a href="<?php the_permalink(); ?>">
			<div class="img-wrapper">
				<?php the_post_thumbnail('full'); ?>
			</div>
		</a>
		
		<div class="item-details">
			
			<h2><a href="<?php the_permalink(); ?>" class="blog-list__heading"><?php echo wp_trim_words(get_the_title(),20,'..'); ?></a></h2>

    		<p class="item-date"><?php echo get_the_date();?></p>
			<?php 
				$content = wp_trim_words(get_the_content(), 20,'...'); 

				echo '<p class="item-content">' . $content . '</p>';
			 	the_tags( '<ul class="clear blog-tags__list wo-dots"><li>', '</li><li>', '</li></ul>' ); 
			 ?>
		</div>
        
	</div><!-- wrapper -->
	
</div><!-- blog list item wrapper -->