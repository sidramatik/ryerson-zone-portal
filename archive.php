<?php 
/**
 * Displaying archive page (category, tag, archives post, author's post)
 * 
 * @package bootstrap-basic
 */

get_header(); 

/**
 * determine main column size from actived sidebar
 */
?> 


<?php if (have_posts()) { ?> 
	

	<div class="header-image" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);background-size:cover; height:50vh">

				<div class="container-fluid gradient">
					<h2 class="container" style="margin-top: calc(50vh - 60px); background: none">Tag: 
						
	<?php
								if (is_category()) :
									single_cat_title();

								elseif (is_tag()) :
									single_tag_title();

								elseif (is_author()) :
									/* Queue the first post, that way we know
									 * what author we're dealing with (if that is the case).
									 */
									the_post();
									printf(__('Author: %s', 'bootstrap-basic'), '<span class="vcard">' . get_the_author() . '</span>');
									/* Since we called the_post() above, we need to
									 * rewind the loop back to the beginning that way
									 * we can run the loop properly, in full.
									 */
									rewind_posts();

								elseif (is_day()) :
									printf(__('Day: %s', 'bootstrap-basic'), '<span>' . get_the_date() . '</span>');

								elseif (is_month()) :
									printf(__('Month: %s', 'bootstrap-basic'), '<span>' . get_the_date('F Y') . '</span>');

								elseif (is_year()) :
									printf(__('Year: %s', 'bootstrap-basic'), '<span>' . get_the_date('Y') . '</span>');

								elseif (is_tax('post_format', 'post-format-aside')) :
									_e('Asides', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-image')) :
									_e('Images', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-video')) :
									_e('Videos', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-quote')) :
									_e('Quotes', 'bootstrap-basic');

								elseif (is_tax('post_format', 'post-format-link')) :
									_e('Links', 'bootstrap-basic');

								else :
									_e('Archives', 'bootstrap-basic');

								endif;
								?> 

					</h2>
				</div>
				</div>
				<div class="content">
				<div class="container">

		<?php 
						/* Start the Loop */
						while (have_posts()) {
							the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */

						} //endwhile; 
						?> 

					

  <!-- Start Card -->
    <div class="col-md-4 col-sm-6 col-xs-12 grid-item">
         <a href="<?php the_permalink(); ?>">
              
     		<div class="card"  style="margin-bottom: 20px">

                <!-- If post exists, show. Else, don't show card-image -->

                <?php
// Must be inside a loop.
 
if ( has_post_thumbnail() ) {
    ?>
 <div class="card-image" style="background-image:url(<?php echo the_post_thumbnail_url( 'large' ); ?>)">
                    </div>

    <?php 
}
else {
    echo ' ';
}
?>

               
                
                <div class="card-content" style="padding:10px 25px 5px 25px">
                  <h3><?php the_title(); ?></h3>
                  <span><?php the_field('start-date'); ?></span>
                   <p><?php the_excerpt(); ?></p>
                </div>
                
                </div>
                
              
            </div>
        </a>
         
    </div><!-- End Card -->


						<?php } else { ?> 

						<?php get_template_part('no-results', 'archive'); ?> 
							No posts in this category, sorry!
						<?php } //endif; ?> 
					</main>
				</div>
<?php get_footer(); ?> 