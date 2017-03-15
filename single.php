<?php
/**
 * Template for displaying pages
 * 
 * @package bootstrap-basic
 */

get_header();

?> 

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				
<div class="header-image" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">
	<!-- Gets the custom post banner -->
	<div class="container-fluid gradient">
	<div class="container">
		<div class="header-title">
			<?php the_title(); ?>
		</div>
	</div>
	</div>
</div>

<div class="content">
	<div class="container">
		<main id="main" class="site-main" role="main">
			<div class="content-container">

				<div class="breadcrumb">
					<a href="/ryerson">Home</a>
					&nbsp; > &nbsp;
				</div>
		
				<div class="row">
					<?php
						 if ( in_category( 'event' )) { ?>

						 	<div class="sidebar col-sm-3">
						 	<p>
						 	<strong>Event Start</strong><br/>
						 	<?php the_field('start-date'); ?>
						 	</p>
						 	<p>
						 	<strong>Event End</strong><br/>
						 	<?php the_field('end-date'); ?>
						 	</p>
						 	<p>
						 	<strong>Location</strong><br/>
						 	<?php the_field('location'); ?>
						 	</p>
						 	<p>
						 	<b>
						 	<?php the_field('rsvp'); ?></b>
						 	</p>
						 	</div>

						 	<div class="col-sm-9">
						 	<?php 
						} else { ?>
						<div class="col-sm-12">

						<?php }
						?>

						<?php
						if(has_tag()) { ?>
							<div class="tags">
						    <?php the_tags(); ?>
						    </div>
						<?php } else {
						    //Article untagged
						}
						?>

						 <?php the_content(); ?>

						 </div>
							<?php  endwhile; endif; //ends the loop
							 ?>
					</main>
				</div> 
				</div>

<?php get_footer(); ?> 