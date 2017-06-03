<?php

/* Template Name: Blogpage
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
				<h1>Blog</h1>
				<span>Our Latest News</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="active">Blog</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin clearfix">

						<!-- Posts
						============================================= -->
						<div id="posts">

	 <?php 
    query_posts(array( 
        'post_type' => 'post',
        'showposts' => -1 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
						   <div class="entry clearfix">
								<div class="entry-image">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="entry-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<ul class="entry-meta clearfix">
									<li><i class="icon-calendar3"></i> <?php the_time('l, F jS, Y') ?> </li>
									
								</ul>
								<div class="entry-content">
									<p><?php the_content(); ?></p>
									
								</div>
							</div>

	<?php endwhile;   ?>
							
						


						</div><!-- #posts end -->

						<!-- Pagination
						============================================= -->
						

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last clearfix">
						<div class="sidebar-widgets-wrap">

							<div class="widget widget-twitter-feed clearfix">

								<h4>Twitter Feed</h4>
								<ul class="iconlist twitter-feed" data-username="envato" data-count="2">
									<li></li>
								</ul>

								<a href="#" class="btn btn-default btn-sm fright">Follow Us on Twitter</a>

							</div>

							<div class="widget clearfix">

								<h4>Flickr Photostream</h4>
								<div id="flickr-widget" class="flickr-feed masonry-thumbs" data-id="613394@N22" data-count="16" data-type="group" data-lightbox="gallery"></div>

							</div>


						</div>

					</div><!-- .sidebar end -->

				</div>

			</div>

		</section><!-- #content end -->

	
	
<?php get_footer(); ?>