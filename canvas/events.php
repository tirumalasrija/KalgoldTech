<?php

/* Template Name: Events
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>
		<!-- Page Title
		============================================= -->
		<section id="page-title">
			<div class="container clearfix">
				<h1>Events List</h1>
				<span>Showcase of Events in Right Sidebar Layout</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="active">Events</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div class="postcontent nobottommargin">

						<div id="posts" class="events small-thumbs">

								 <?php 
    query_posts(array( 
        'post_type' => 'event',
        'showposts' => -1 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>

							<div class="entry clearfix">
								<div class="entry-image">
									<a href="#">
									<?php the_post_thumbnail('full'); ?>
										<div class="entry-date">16<span>Jun</span></div>
									</a>
								</div>
								<div class="entry-c">
									<div class="entry-title">
										<h2><a href="#"><?php the_title(); ?></a></h2>
									</div>
									<ul class="entry-meta clearfix">
										<li><span class="label label-warning">Private</span></li>
										<li><a href="#"><i class="icon-time"></i> 12:00 - 18:00</a></li>
										<li><a href="#"><i class="icon-map-marker2"></i> New York</a></li>
									</ul>
									<div class="entry-content">
										<p><?php the_content(); ?></p>
										
									</div>
								</div>
							</div>
	<?php endwhile;   ?>
						</div>

						<!-- Pagination
						============================================= -->
						<!-- <ul class="pager nomargin">
							<li class="previous"><a href="#">&larr; Older</a></li>
							<li class="next"><a href="#">Newer &rarr;</a></li>
						</ul><!-- .pager end --> 

					</div>

					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget clearfix">

								<h4>Upcoming Events</h4>
								<div id="post-list-footer">

									<div class="spost clearfix">
										<div class="entry-image">
											<a href="#" class="nobg"><img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-image">
											<a href="#" class="nobg"><img src="<?php echo get_template_directory_uri(); ?>/images/2.jpg" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

									<div class="spost clearfix">
										<div class="entry-image">
											<a href="#" class="nobg"><img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt=""></a>
										</div>
										<div class="entry-c">
											<div class="entry-title">
												<h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
											</div>
											<ul class="entry-meta">
												<li>10th July 2014</li>
											</ul>
										</div>
									</div>

								</div>

							</div>

							<div class="widget clearfix">

								<h4>Events</h4>
								<div id="oc-portfolio-sidebar" class="owl-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000">

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="#">
													<img src="<?php echo get_template_directory_uri(); ?>/images/3.jpg" alt="Mac Sunglasses">
												</a>
												<div class="portfolio-overlay">
													<a href="http://vimeo.com/89396394" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single-video.php">Inventore voluptates velit totam ipsa tenetur</a></h3>
												<span><a href="#">Melbourne, Australia</a></span>
											</div>
										</div>
									</div>

									<div class="oc-item">
										<div class="iportfolio">
											<div class="portfolio-image">
												<a href="portfolio-single.php">
													<img src="<?php echo get_template_directory_uri(); ?>/images/1.jpg" alt="Open Imagination">
												</a>
												<div class="portfolio-overlay">
													<a href="<?php echo get_template_directory_uri(); ?>/images/1.jpg" class="center-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
												</div>
											</div>
											<div class="portfolio-desc center nobottompadding">
												<h3><a href="portfolio-single.php">Nisi officia adipisci molestiae aliquam</a></h3>
												<span><a href="#">Perth, Australia</a></span>
											</div>
										</div>
									</div>

								</div>


							</div>

							<div class="widget clearfix">

								<h4>Recent Event in Video</h4>
								<iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

							</div>

							<div class="widget quick-contact-widget clearfix">

								<h4>Quick Contact</h4>
								<div class="quick-contact-form-result"></div>
								<form id="quick-contact-form" name="quick-contact-form" action="include/quickcontact.php" method="post" class="quick-contact-form nobottommargin">
									<div class="form-process"></div>

									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-3d nomargin" value="submit">Send Email</button>
								</form>


							</div>

						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

	
<?php get_footer(); ?>