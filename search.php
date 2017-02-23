<?php
/**
 * The template for displaying search results.
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
?>
<br/>
<main id="main" class="site-main" role="main">
	<div class="container-fluid">

		<div class="container primary-content">



  <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
  <!-- Three columns of text below the carousel -->
  <div class="row">
 
 
        <?php if ( have_posts() ) : ?>
 
            <header class="page-header">
                <h3 class="search-page-title"><?php printf( esc_html__( 'Search Results for: %s', stackstar ), '' . get_search_query() . '' ); ?></h3>
            </header><!-- .page-header -->
 			<div class="row">
            <?php /* Start the Loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
            

<div class="col-sm-6" style="margin-bottom: 10px">

 		<a href="<?php the_permalink(); ?>">

 		<div class="card">
          
           <!-- If post exists, show. Else, don't show card-image -->

            

         <div class="card-container">
          <h3><?php the_title(); ?></h3>
          <p><?php the_excerpt(); ?></p><br/>
          </div></div></a>
         
        </div><!-- /.col-lg-4 -->


 
            <?php endwhile; ?>
 
            <?php //the_posts_navigation(); ?>
 
        <?php else : ?>
 
            <?php //get_template_part( 'template-parts/content', 'none' ); ?>
 
        <?php endif; ?>
 
 </div>
        </main><!-- #main -->



<?php get_footer(); ?> 