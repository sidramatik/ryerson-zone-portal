<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?> 

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
			<div class="header-image" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
 
				<div class="container-fluid gradient">
					<div class="container">
					<div class="header-title"><?php the_title(); ?></div>
					</div>
				</div>
				</div>
				<div class="content">
				<div class="container">



					<main id="main" class="site-main" role="main">
						
						

					
						 <?php the_content(); ?>
<?php  endwhile; endif; //ends the loop
 ?>

					</main>
				</div> 
				</div>

<?php get_footer(); ?> 