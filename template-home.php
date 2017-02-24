<?php /* Template Name: Home Page */ get_header(); ?>


<div class="home_page">
	<div class="container-fluid">
		<div class="row">
			<div class="header_bg_image">
				<img src="<?php echo the_field('home_header_bg'); ?>"  />
			</div>
		</div>
	</div>

	<div class="container">
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
				<div class="page_title">
					<h2>What we do</h2>
				</div>
				<div class="col-md-6  col-sm-12 col-xs-12">
					<div class="first_field">
					<div class="title">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="row">
										<img src="<?php echo the_field('first_field_image'); ?>"  />
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div class="row">								
										<h3><?php echo get_post_meta($post->ID, 'first_field_title', true); ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="content">
						<p>
							<?php echo get_post_meta($post->ID, 'first_field_content', true); ?>
						</p>
					</div>					
					</div>
				</div>	
		<div class="divider-mobile"></div>
				<div class="col-md-6  col-sm-12 col-xs-12">
					<div class="seccond_field">
					<div class="title">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="row">
										<img src="<?php echo the_field('seccond_field_image'); ?>"  />
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">	
									<div class="row">							
										<h3><?php echo get_post_meta($post->ID, 'seccond_field_title', true); ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="content">
						<p>
							<?php echo get_post_meta($post->ID, 'seccond_field_content', true); ?>
						</p>
					</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="divider"></div>
		<div class="col-md-12 col-sm-12 col-xs-12">
			<div class="row">
			<div class="col-md-6  col-sm-12">
				<div class="third_field">
					<div class="title">
						<div class="col-md-12  col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="row">
									<img src="<?php echo the_field('third_field_image'); ?>"  />
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">
									<div class="row">								
									<h3><?php echo get_post_meta($post->ID, 'third_field_title', true); ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="content">
						<p>
							<?php echo get_post_meta($post->ID, 'third_field_content', true); ?>
						</p>
					</div>
				</div>
			</div>	
		<div class="divider-mobile"></div>
			<div class="col-md-6  col-sm-12">
				<div class="forth_field">
					<div class="title">
						<div class="col-md-12  col-sm-12 col-xs-12">
							<div class="row">
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="row">
										<img src="<?php echo the_field('forth_field_image'); ?>"  />
									</div>
								</div>
								<div class="col-md-9 col-sm-9 col-xs-12">	
									<div class="row">							
										<h3><?php echo get_post_meta($post->ID, 'forth_field_title', true); ?></h3>
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="content">
						<p>
							<?php echo get_post_meta($post->ID, 'forth_field_content', true); ?>
						</p>
					</div>
				</div>
			</div>	
		</div>
		</div>
	</div>
	<div class="container">
			<div class="col-md-12 col-sm-12 testimonials">
				<div class="row">
					<div class="page_title">
						<h2>Testimonials</h2>
					</div>
<!--					<div class="col-md-8 col-sm-12">
						<div class="testimonials_content">
							<div class="col-md-6">
								<p>
									<?php echo get_post_meta($post->ID, 'testimonials_content_column_first', true); ?>
								</p>
							</div>
							<div class="col-md-6">
								<p>
									<?php echo get_post_meta($post->ID, 'testimonials_content_column_seccond', true); ?>
								</p>
							</div>
						<div class="clearfix"></div>
						</div>
					</div>
 					<div class="col-md-4 col-sm-12"> 
						<div class="image">
							<img src="<?php echo the_field('testimonials_photo'); ?>"  />
						</div>
						<div class="clearfix"></div>
						<div class="author_info">
							<p><span>
								<?php echo get_post_meta($post->ID, 'testimonials_name', true); ?>
							</span></p>
							<p>
								<?php echo get_post_meta($post->ID, 'testimonials_role', true); ?>
							</p>
							
						</div>

					</div> -->
				<?php echo do_shortcode("[metaslider id=1070]"); ?>
				</div>

			</div>	
		</div>
	</div>
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

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>
      <div class="modal-body">
      	<div><img src="http://mikshcompany.com/wp-content/uploads/2017/02/Make-IT-Work-logo-02.png"></div>
        <?php echo do_shortcode('[contact-form-7 id="1075" title="Contact form 1"]'); ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php // get_sidebar(); ?>

<?php get_footer(); ?>
