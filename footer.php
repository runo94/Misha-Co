			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- <p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					<a href="//wordpress.org" title="WordPress">WordPress</a> &amp; <a href="//html5blank.com" title="HTML5 Blank">HTML5 Blank</a>.
				</p> -->

				<div class="footer-widgets">
				<div class="container">
					<div class="widget-left col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0">
						<?php if ( is_active_sidebar( 'footer_left_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_left_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
					<div class="widget-center col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0">
						<?php if ( is_active_sidebar( 'footer_center_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_center_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
					<div class="widget-right col-lg-4 col-md-4 col-sm-5 col-sm-offset-3  col-md-offset-0 col-lg-offset-0" >
						<?php if ( is_active_sidebar( 'footer_right_wid' ) ) : ?>
							<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer_right_wid' ); ?>
							</div><!-- #primary-sidebar -->
						<?php endif; ?>
					</div>
				</div>
				</div>

				
			</footer>
			<!-- /footer -->

		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
