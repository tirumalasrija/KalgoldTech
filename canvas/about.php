<?php

/* Template Name: about
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

get_header();
?>
<div class="page">
	<section class="container-fluid">
		<div class="regular-page">
			<div class="container">
				<ol class="breadcrumb">
                                    <li><a href="<?php echo get_permalink( get_page_by_path( 'Home' ) ) ?>">Home</a></li>
					<li class="active">About Us</li>
				</ol>
				<h2 class="section-title double-title">
					<span>About</span>Woodpecker 
				</h2>
			  <?php   global $wp_query; ?>
                            <?php echo $wp_query->post->post_content; ?>
			</div>
		</div>						
		
	</section>
</div>


<?php get_footer(); ?>