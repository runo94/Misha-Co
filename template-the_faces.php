<?php 
/* 
 * Template Name: The Faces 
 */ 

get_header(); ?>


<div class="the_face_page">
<div class="white_space" style="height: 250px; color: transparent; width: 100%;"></div>
			<?php
            $args = array(
                   'post_type' => 'the_faces',
                   'publish' => true,
                   'paged' => get_query_var('paged'),
               );
            
            query_posts($args);

            $idx = 1;

            if ( have_posts() ) :  while (have_posts()) : the_post(); ?>

	<!-- article -->
<?php if( $idx % 2 == 1) { ?>
		
		<div class="container">
			<div class="col-md-12 col-sm-12 face_one">
				<div class="row">
					<div class="col-md-4 col-sm-12"> 
						<div class="face_one_image">
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<?php the_post_thumbnail(array(500,500)); // Declare pixel size you need inside the array ?>
							<?php endif; ?>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-8 col-sm-12">
						<div class="face_one_content">
							<div class="col-md-12">
								<h2><?php the_title(); ?></h2>
								<h3><?php echo get_post_meta($post->ID, 'post', true); ?></h3>
								<p>
								<?php the_content();// Build your custom callback length in functions.php ?>
								</p>
							</div>
						<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>	
		</div>

<?php } else {  ?>
		
		<div class="container">
			<div class="col-md-12 col-sm-12 face_two">
				<div class="row">
					<div class="col-md-4 col-sm-12 hidden-md hidden-lg visible-sm visible-xs"> 
						<div class="face_two_image">
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<?php the_post_thumbnail(array(500,500)); // Declare pixel size you need inside the array ?>
							<?php endif; ?>
						</div>
						<div class="clearfix"></div>
					</div>

					<div class="col-md-8 col-sm-12">
						<div class="face_two_content">
							<div class="col-md-12">
								<h2><?php the_title(); ?></h2>
								<h3><?php echo get_post_meta($post->ID, 'post', true); ?></h3>
								<p>
								<?php the_content();// Build your custom callback length in functions.php ?>
								</p>
							</div>
						<div class="clearfix"></div>
						</div>
					</div>

					<div class="col-md-4 col-sm-12  visible-md visible-lg hidden-sm hidden-xs"> 
						<div class="face_two_image">
							<?php if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
									<?php the_post_thumbnail(array(500,500)); // Declare pixel size you need inside the array ?>
							<?php endif; ?>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>	
		</div>


<?php }; ?>

<?php 
$idx++;
endwhile; 
?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>

			<?php get_template_part('pagination'); ?>

</div>

<?php get_footer(); ?>
