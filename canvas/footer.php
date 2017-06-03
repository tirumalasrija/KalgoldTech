
	<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					<div class="col_two_third">

						<div class="col_one_third">

							<div class="widget clearfix">

								<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="" class="footer-logo">

								<p>We believe in <strong>Simple</strong>, <strong>Creative</strong> &amp; <strong>Flexible</strong> Design Standards.</p>


							</div>

						</div>

						<div class="col_one_third">
<?php dynamic_sidebar( 'sidebar_1'); ?>

							</div>

						</div>

						<div class="col_one_third col_last">

							<div class="widget clearfix">
							<?php wp_nav_menu( array(
										'theme_location' => 'secondary')); ?>
					
							</div>

						</div>

					</div>

					<div class="col_one_third col_last">
					<h4>Follow US</h4>
						<div class="widget clearfix" style="margin-bottom: -20px;">

								<div class="fright clearfix">
							<a href="#" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-gplus">
								<i class="icon-gplus"></i>
								<i class="icon-gplus"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-pinterest">
								<i class="icon-pinterest"></i>
								<i class="icon-pinterest"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-vimeo">
								<i class="icon-vimeo"></i>
								<i class="icon-vimeo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-github">
								<i class="icon-github"></i>
								<i class="icon-github"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-yahoo">
								<i class="icon-yahoo"></i>
								<i class="icon-yahoo"></i>
							</a>

							<a href="#" class="social-icon si-small si-borderless si-linkedin">
								<i class="icon-linkedin"></i>
								<i class="icon-linkedin"></i>
							</a>
						</div>
</div>
					

					


					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="col_half">
						Copyrights &copy; All Rights Reserved by KalGoldTech Inc. Designed by <a href="http://www.webmobilez.com/">WebMobileZ.com</a>
					</div>

					
						<div class="clear"></div>
					</div>

			

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->


	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	
	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/js/parallax.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
	<script>
	$('.parallax-window').parallax({imageSrc: '<?php echo get_template_directory_uri(); ?>/images/bg2.jpg'});
	</script>
	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/functions.js"></script>
	
	<!-- Particles Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/particles/particles.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/particles/particlesRun.js"></script>

</body>
</html>