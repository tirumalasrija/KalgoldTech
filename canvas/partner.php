<?php

/* Template Name: Partner
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();?>
  <?php   global $wp_query; ?>
  <?php  $wp_query->post->post_title; ?>
  		<!-- Page Title
		============================================= -->
		<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 250px 0; background-image: url('<?php echo get_template_directory_uri(); ?>/images/img.jpg'); background-size: cover; background-position: center center;" data-stellar-background-ratio="0.4">

			<div class="container clearfix">
				<h1>About Us</h1>
				<span>Everything you need to know about our Company</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
				
					<li class="active">About Us</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">
				<div class="container clearfix">
					<div class="clear"></div>
					<div class="heading-block center">
						<h4>Our Clients</h4>
					</div>
					<ul class="clients-grid grid-6 nobottommargin clearfix">
						 <?php 
    query_posts(array( 
        'post_type' => 'partner',
        'showposts' => -1 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
				<li><a href="#"><?php the_post_thumbnail('full'); ?></a></li>	

	<?php endwhile;   ?>
	
						
					</ul>

				</div>

				<div class="section footer-stick">

					<h4 class="uppercase center">What <span>Clients</span> Say?</h4>

					<div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">
						<div class="flexslider">
							<div class="slider-wrap">
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/3.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>
										<div class="testi-meta">
											Steve Jobs
											<span>Apple Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/2.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
										<div class="testi-meta">
											Collis Ta'eed
											<span>Envato Inc.</span>
										</div>
									</div>
								</div>
								<div class="slide">
									<div class="testi-image">
										<a href="#"><img src="http://canvashtml-cdn.semicolonweb.com/images/testimonials/1.jpg" alt="Customer Testimonails"></a>
									</div>
									<div class="testi-content">
										<p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
										<div class="testi-meta">
											John Doe
											<span>XYZ Inc.</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- #content end -->

	
<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>