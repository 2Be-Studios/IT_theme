<?php
/**
* Template Name: Blog
**/
get_header('inner');
?>

<section class="blog-list">
	<div class="container">
		<div class="row">
			<div class="col-md-12 section-heading text-center">
				<h2>Resources</h2>
				<span class="section-divider gray-divider"></span>
			</div>
		</div>
		<div class="vidoe-list aos-init aos-animate" data-aos="fade-left">
		<style type="text/css">
			.resourcesvideos {
				margin: 0 -15px:
			}
			.videoitem {
				margin: 15px;
			}

			.video-container {
				position: relative;
				padding-bottom: 56.25%;
				padding-top: 30px; height: 0; overflow: hidden;
			}

			.video-container iframe,
			.video-container object,
			.video-container embed {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}

			.resource-slider__nav {
				text-align: center;
			}

			.resource-slider__nav li {
				display: inline-block;
			}

			.resource-slider__nav li button {
				-webkit-appearance: media-slider;
				background: transparent;
				font-size: 12px;
				border: none;
				font-family: "AvertaBold";
				background-color: transparent;
			}

			.resource-slider__nav li.slick-active button {
				color: #e30040;
			}

		</style>
			<div class="row">
				<h2 style="margin-bottom: 30px;">Videos</h2> <br />
			</div>
			<div class="row" style="margin-left: -5px; margin-right: -5px;">
				<div class="resourcesvideos">

				<?php // WP_Query arguments
					$args = array(
						'post_type'              => array( 'Videos' ),
						'post_status'            => array( 'publish' ),
						'posts_per_page'         => '50',
					);

					// The Query
					$query = new WP_Query( $args ); ?>
					<?php if ( $query->have_posts() ): ?>
						<?php while ( $query->have_posts() ): ?>
							<?php $query->the_post(); ?>
							<div class="videoitem">
								<div class="entry-video">
									<a href="#" data-toggle="modal" data-target="#<?php echo $post->post_name; ?>" style="pointer-events: auto;">
										<?php
										$youtubeid = get_field( 'youtube_url_id' );
										?>
										<img style="width: 100%;" src="https://img.youtube.com/vi/<?php echo $youtubeid; ?>/mqdefault.jpg">
									</a><br />
									<h4 class="video-title" style="font-size: 16px;line-height: initial;font-weight: normal;font-family: 'AvertaRegular';"><?php the_title(); ?></h4><!-- /.video-title -->
								</div><!-- /.entry-video -->
							</div><!-- /.col-md-3 -->
						<?php endwhile; ?>
					<?php endif; ?>
					<?php wp_reset_postdata(); ?>
				</div><!-- /.row -->
				<div class="resource-slider__nav"></div><!-- /.resource-slider__nav -->
			</div><!-- /.row -->
		</div>
		<div class="row">
			<div class="col-md-12 section-heading">
				<h2>Blog</h2>
			</div>
		</div>
		<div class="row">

			<?php //query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>

			<?php //if( have_posts() ): ?>

				<?php echo do_shortcode('[ajax_load_more id="3870481395" container_type="div" css_classes="row" post_type="post" posts_per_page="6" images_loaded="true"]');?>

			<?php //else: ?>

			<div id="post-404" class="noposts">

				<p><?php // _e('None found.','example'); ?></p>

			</div><!-- /#post-404 -->

			<?php //endif; wp_reset_query(); ?>
		</div><!-- row -->
	</div><!-- /#container -->
</section>
<?php if ( $query->have_posts() ): ?>
	<?php while ( $query->have_posts() ): ?>
		<?php $query->the_post(); ?>
			<div class="modal fade" tabindex="-1" role="dialog" id="<?php echo $post->post_name; ?>">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content" style="margin-top: 100px;">
						<div class="modal-body" style="padding: 0">
							<div class="video-container">
								<?php the_content(); ?>
							</div><!-- /.video-container -->
							<div class="btn-video text-center">
								<a class="btn" href="https://www.youtube.com/channel/UClL8yDWwKZF7dYSYK0n1U-A/" target="_blank"><i class="fa fa-play-circle"></i> Subscribe</a>
							</div><!-- /.btn-video text-center -->
						</div><!-- /.modal-body -->
					</div>
				</div>
			</div>
	<?php endwhile; ?>
<?php endif; ?>
<style type="text/css">
	.btn-video a.btn{
		background: #e30040;
		color: #fff;
		padding: 10px 17px;
		text-transform: uppercase;
		font-size: 15px;
		font-weight: bold;
		display: block;
		letter-spacing: 1px;
	}
</style>
<?php wp_reset_postdata(); ?>
<?php get_template_part('template-parts/content','contact');
get_footer('inner');?>