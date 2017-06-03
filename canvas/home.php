<?php

/* Template Name: home
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>


<?php get_header(); ?>
	
<!-- new -->
		<section id="slider" class="slider-parallax swiper_wrapper full-screen clearfix">
			<div class="slider-parallax-inner">
			
				<div id="particles-js"></div><!-- /.particles div -->
				
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">
					 <?php 
    query_posts(array( 
        'post_type' => 'slide',
        'showposts' => -1 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
						<div class="swiper-slide dark">
							<div class="container clearfix">
								<div class="slider-caption slider-caption-center">
									<h2 data-caption-animate="fadeInUp"> <?php the_title(); ?></h2>
									<p data-caption-animate="fadeInUp" data-caption-delay="200">
										<?php the_content(); ?>
									</p>
								</div>
							</div>
						</div>

	<?php endwhile;   ?>
					</div>
					<div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>

				<a href="#" data-scrollto="#content" data-offset="100" class="dark one-page-arrow"><i class="icon-angle-down infinite animated fadeInDown"></i></a>

			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wra">
				<div class="section orangebg nobottommargin nomargin">
					<div class="container clear-bottommargin clearfix">
						<div class="row topmargin-sm clearfix">
							<div class="col-md-4 bottommargin text-center">
								<!--<i class="i-plain i-large icon-line2-screen-desktop inline-block" style="margin-bottom: 15px;"></i>-->
								<i class="fa fa-sitemap fa-4x" aria-hidden="true"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<!--<span class="before-heading">Scalable on Devices.</span>-->
									<h4>Shared</h4>
								</div>
								<p>Blockchains have little value within a single organization. The more organizations or companies that participate, even competitors, the more streamlined the process will be and the greater the value.</p>
							</div>

							<div class="col-md-4 bottommargin text-center">
								<!--<i class="i-plain i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>-->
								<i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<!--<span class="before-heading">Smartly Coded &amp; Maintained.</span>-->
									<h4>Ledger</h4>
								</div>
								<p>A write once, read many database that is an immutable record of every transaction. If a mistake is made, you must post a compensating transaction to correct it – no updating or deleting is allowed.</p>
							</div>

							<div class="col-md-4 bottommargin text-center">
								<!--<i class="i-plain i-large icon-line2-energy inline-block" style="margin-bottom: 15px;"></i>-->
								<i class="fa fa-lock fa-4x" aria-hidden="true"></i>
								<div class="heading-block nobottomborder" style="margin-bottom: 15px;">
									<!--<span class="before-heading">Smartly Coded &amp; Maintained.</span>-->
									<h4>Cryptographically secure</h4>
								</div>
								<p>Blockchain applies tried-and-true digital signature technology to create transactions that reduce fraud and establishes trust and accountability.</p>
							</div>
						</div>

					</div>
				</div>
				<!-- -->
				<hr>
				<div class="container-fluid marketing">
				 <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your mind.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo get_template_directory_uri(); ?>/images/blockchain-02.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
          <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo get_template_directory_uri(); ?>/images/block.png" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading">And lastly, this one. <span class="text-muted">Checkmate.</span></h2>
          <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" src="<?php echo get_template_directory_uri(); ?>/images/swift.png" alt="Generic placeholder image">
        </div>
      </div>
</div>
   

				<div class="row clearfix bottommargin-lg common-height">

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #515875;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-directions"></i>
							<div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K</div>
							<h5>Lines of Codes</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #576F9E;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-graph"></i>
							<div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>
							<h5>KBs of HTML Files</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #6697B9;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
							<div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span></div>
							<h5>No. of Templates</h5>
						</div>
					</div>

					<div class="col-md-3 col-sm-6 dark center col-padding" style="background-color: #88C3D8;">
						<div>
							<i class="i-plain i-xlarge divcenter icon-line2-clock"></i>
							<div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>
							<h5>Hours of Coding</h5>
						</div>
					</div>

				</div>
<!-- -->
			<div class="parallax-window " data-parallax="scroll"></div>





				<div class="clear"></div>

				<a href="portfolio.php" class="button button-full button-dark center tright bottommargin-lg">
					<div class="container clearfix">
						More than 100+ predefined Portfolio Grid Layouts. <strong>See More</strong> <i class="icon-caret-right" style="top:4px;"></i>
					</div>
				</a>

				<div class="container clearfix">

					<div class="col_one_third bottommargin-sm center">
						<img data-animate="fadeInLeft" src="<?php echo get_template_directory_uri(); ?>/images/blockchain-02.png" alt="Iphone">
					</div>

					<div class="col_two_third bottommargin-sm col_last">

						<div class="heading-block topmargin-sm">
							<h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>
						</div>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>

						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>

						

					</div>

				</div>

				

			</div>

		</section><!-- #content end -->

		<!-- Footer
		============================================= -->


<?php get_footer(); ?>