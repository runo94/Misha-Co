<?php /* Template Name: Contact Page */ get_header(); ?>
<div class="contact_page">
	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="contact_info">
					<div class="col-md-8 col-sm-12 col-md-offset-4">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="row">
									<div class="col-md-3 col-sm-2 col-xs-2">
										<div class="row">
											<img src="<?php echo the_field('first_info_field_image'); ?>"  />
										</div>										
									</div>
									<div class="col-md-9 col-sm-10 col-xs-10">
										<div class="row">
										<div class="title">
											<p>
												<?php echo get_post_meta($post->ID, 'first_info_field_title', true); ?>
											</p>											
										</div>	
										<div class="info">
											<p>
												<?php echo get_post_meta($post->ID, 'first_info_field_content', true); ?>
											</p>
										</div>									
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-xs-12">
								<div class="row">
									<div class="col-md-3 col-sm-2 col-xs-2">
										<div class="row">
											<img src="<?php echo the_field('seccond_info_field_image'); ?>"  />
										</div>										
									</div>
									<div class="col-md-9 col-sm-10 col-xs-10">
										<div class="row">
										<div class="title">
											<p>
												<?php echo get_post_meta($post->ID, 'seccond_info_field_title', true); ?>
											</p>											
										</div>	
										<div class="info">
											<p>
												<?php echo get_post_meta($post->ID, 'seccond_info_field_content', true); ?>
											</p>
										</div>									
										</div>
									</div>
								</div>
							</div>
						</div>						
					</div>
						<div class="clearfix"></div>
				</div>
			</div>	
		</div>
	</div>
	<br>
<!-- 	<div class="container-fluid">
		<div class="row">
			<div class="map">
				<?php echo get_post_meta($post->ID, 'map', true); ?>
			</div>
		</div>
	</div> -->
			<!-- <main role="main">
				<section>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>

						<?php comments_template( '', true ); // Remove if you don't want comments ?>

						<br class="clear">

						<?php edit_post_link(); ?>

					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>

				<?php endif; ?>

				</section>
			</main> -->
		</div>
</div>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
