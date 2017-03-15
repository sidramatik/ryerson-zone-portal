<?php

/* Template Name: Homepage */ 

get_header();

?>

<main id="main" class="site-main" role="main">
	<div class="container-fluid">
  
	
	<!-- Carousel -->
    ================================================== 
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators  -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
     <!-- End Indicators -->


      <div class="carousel-inner" role="listbox">
        
        <!-- First Slide -->
        <div class="item active">
        <?php $args = array(
        'numberposts' => -1,
        'showposts' => 1,
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => 'feature_on_homepage',
            'value' => 'YES',
            'compare' => 'LIKE'     
          )
      )
      );  
      // get results
      $the_query = new WP_Query( $args );
       ?>

      <?php if( $the_query->have_posts() ): ?>

       <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
          <div class="first-slide" alt="First slide" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)"></div>
          
          <div class="container">
          <a href="<?php the_permalink(); ?>">
            <div class="carousel-captions row">
              <div class="category">FEATURED</div>
              <div class="slide-title"><?php the_title(); ?></div>
              <div class="slide-desc"><?php the_excerpt(); ?></div>
              <a class="btn btn-flat" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            </a>
          </div>
        </div>
	     <?php endwhile; ?>

      <?php endif; ?>

       <?php wp_reset_query(); ?>


	     <!-- End First Slide -->

                <!-- First Slide -->
        <div class="item">
        <?php $args = array(
        'numberposts' => 1,
        'showposts' => 1,
        'offset' => 1,
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => 'feature_on_homepage',
            'value' => 'YES',
            'compare' => 'LIKE'     
          )
      )
      );  
      // get results
      $the_query = new WP_Query( $args );
       ?>

      <?php if( $the_query->have_posts() ): ?>

       <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
          <div class="second-slide" alt="Second slide" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)"></div>
          
          <div class="container">
          <a href="<?php the_permalink(); ?>">
            <div class="carousel-captions row">
              <div class="category">FEATURED</div>
              <div class="slide-title"><?php the_title(); ?></div>
              <div class="slide-desc"><?php the_excerpt(); ?></div>
              <a class="btn btn-flat" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            </a>
          </div></div>

       <?php endwhile; ?>

      <?php endif; ?>

       <?php wp_reset_query(); ?>

            
                <!-- First Slide -->
        <div class="item">
        <?php $args = array(
        'numberposts' => 1,
        'showposts' => 1,
        'offset' => 2,
        'meta_query' => array(
          'relation' => 'OR',
          array(
            'key' => 'feature_on_homepage',
            'value' => 'YES',
            'compare' => 'LIKE'     
          )
      )
      );  
      // get results
      $the_query = new WP_Query( $args );
       ?>

      <?php if( $the_query->have_posts() ): ?>

       <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  
          <div class="third-slide" alt="third slide" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)"></div>
          
          <div class="container">
          <a href="<?php the_permalink(); ?>">
            <div class="carousel-captions row">
              <div class="category">FEATURED</div>
              <div class="slide-title"><?php the_title(); ?></div>
              <div class="slide-desc"><?php the_excerpt(); ?></div>
              <a class="btn btn-flat" href="<?php the_permalink(); ?>">Read More</a>
            </div>
            </a>
          </div></div>

       <?php endwhile; ?>

      <?php endif; ?>

       <?php wp_reset_query(); ?>

            
            

       
        </div>

      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel 
			</div> -->


<div class="container primary-content">

<h3 class="text-center">Upcoming Events &amp; Listings</h3><br/>
	
  <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
	<!-- Three columns of text below the carousel -->
  <div class="row">
 
    <?php query_posts('showposts=20');
    while (have_posts()) : the_post();
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
                
                <div class="card-action" style="padding: 0px 25px 20px 25px">
            <!-- Displays category with background colour -->
<?php
    $categories = get_the_category();
    $output = '';
    if($categories){
        foreach($categories as $category) {
                $rl_category_color = rl_color($category->cat_ID);
            $output .= '<button type="button" class="btn btn-xs" style="margin-right: 6px !important; color:#ffffff !important; background-color:'.$rl_category_color.' !important;">'.$category->cat_name.'</button>'.$separator;
        }
    echo trim($output, $separator);
    }
?>
                </div>
            </div>
        </a>
         
    </div><!-- End Card -->

<?php
endwhile;
?>

      </div><!-- /.row --></div>


      <div class="row">
      	
      	<div class="col-sm-12">
      	<div class="explain">
      		<span>What is Zone Learning?</span>
      		<p style="font-size: 14px !important;
    line-height: 25px; ">
Zone learning provides Ryerson students with valuable opportunities and resources designed to help you take your ideas from concept, draft, and prototype stages to commercial viability and sustainable new businesses or civic and social ventures. Working alongside other forward-thinking people in zone environments that are emerging throughout the university, you’ll have the chance to receive mentorship from faculty and leading industry professionals.</p>
      		<a href="/ryerson/about" class="btn">Read More</a>
      	</div>
      	</div>

      </div>

</div>

					</main>
				</div>
<?php get_footer(); ?> 