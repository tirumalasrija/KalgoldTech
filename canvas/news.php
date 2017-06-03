<?php

/* Template Name: News
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
				<span>Our Latest News in Grid Layout</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>
					<li class="active">News</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<!-- Posts
					============================================= -->
					<div id="posts" class="post-grid grid-container grid-2 clearfix" data-layout="fitRows">

							 <?php 
    query_posts(array( 
        'post_type' => 'new',
        'showposts' => -1 
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>
						<div class="entry clearfix">
							<div class="entry-image">
								<?php the_post_thumbnail('full'); ?>
							</div>
							<div class="entry-title">
								<h2><a href="blog-single-full.php"><?php the_title(); ?></a></h2>
							</div>
							<ul class="entry-meta clearfix">
								<li><i class="icon-calendar3"></i><?php the_time('l, F jS, Y') ?> </li>
								
							</ul>
							<div class="entry-content">
								<p><?php the_content(); ?></p>
							
							</div>
						</div>

	<?php endwhile;   ?>

					</div><!-- #posts end -->

					<!-- Pagination
					============================================= -->
					

				</div>

			</div>

		</section><!-- #content end -->

	
<?php get_footer(); ?>