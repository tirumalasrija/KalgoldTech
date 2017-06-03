<?php

/* Template Name: Team
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
  get_permalink( get_page_by_path( 'Home' ) ) ?>
<section id="page-title">

			<div class="container clearfix">
				<h1>Team</h1>
				<span>List of People who matter in Our Company</span>
				<ol class="breadcrumb">
					<li><a href="<?php echo home_url(); ?>">Home</a></li>					
					<li class="active">Team</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

			
			
					<div class="fancy-title title-border">
						<h3>Team Members</h3>
					</div>

					<div class="row">
 <?php 
    query_posts(array( 
        'post_type' => 'team',
        'showposts' => -1 
    ) );  
?>
                                     <?php while (have_posts()) : the_post(); ?>
                            
						<div class="col-md-6 bottommargin">

							<div class="team team-list clearfix">
								<div class="team-image">
									<?php the_post_thumbnail('full'); ?>
								</div>
								<div class="team-desc">
									<div class="team-title"><h4><?php the_title(); ?></h4><span>CEO</span></div>
									<div class="team-content">
										<p><?php the_content(); ?>.</p>
									</div>
									<a href="#" class="social-icon si-rounded si-small si-facebook">
										<i class="icon-facebook"></i>
										<i class="icon-facebook"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-twitter">
										<i class="icon-twitter"></i>
										<i class="icon-twitter"></i>
									</a>
									<a href="#" class="social-icon si-rounded si-small si-gplus">
										<i class="icon-gplus"></i>
										<i class="icon-gplus"></i>
									</a>
								</div>
							</div>

						</div>
<?php endwhile;   ?>
					</div>

		</div>

			</div>

		</section><!-- #content end -->

<?php get_footer(); ?>