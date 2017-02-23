<?php

/* Template Name: Single Zone Homepage */ 

get_header();

?>

				
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
       <div class="header-image" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">

        <div class="container-fluid gradient">
          <h2 class="container"><?php the_title(); ?></h2>
        </div>
        </div>
        <div class="content">
        <div class="container">



          <main id="main" class="site-main" role="main">
            
            

<?php  endwhile; endif; //ends the loop
 ?>



<div class="container primary-content">
	  <div class="row">

    <div class="col-md-3">
    <h3>What is the <?php the_title(); ?>?</h3>
    <p style="margin: 0 0 20px 0;
    font-size: 12px;
    line-height: 22px;
    color: #666666;"><?php the_excerpt(); ?></p>
    <a href="/ryerson/about-<?php echo basename(get_permalink()); ?>
" class="btn btn-default">Learn More</a>
    </div>
    <div class="col-md-9 row">
    <h3 style="padding-left:15px">Resources &amp; Events</h3>

    <div class="grid" data-masonry='{ "itemSelector": ".grid-item" }'>
<!-- Zone1-->
    <?php
if (is_page( 'biomedical-zone' ) ): ?>

<?php query_posts('category_name=biomedical-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
   <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>
<!-- Zone1-->
    <?php
if (is_page( 'design-fabrication-zone' ) ): ?>

<?php query_posts('category_name=design-fabrication-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>
<!-- Zone1-->
    <?php
if (is_page( 'digital-media-zone' ) ): ?>

<?php query_posts('category_name=dmz&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
 <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'startup-school' ) ): ?>

<?php query_posts('category_name=startup-school&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'fashion-zone' ) ): ?>

<?php query_posts('category_name=fashion-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'iboost' ) ): ?>

<?php query_posts('category_name=iboost&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'science-discovery-zone' ) ): ?>

<?php query_posts('category_name=science-discovery-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'icue' ) ): ?>

<?php query_posts('category_name=icue&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'launch-zone' ) ): ?>

<?php query_posts('category_name=launch-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
 <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>

<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'legal-innovation-zone' ) ): ?>

<?php query_posts('category_name=legal-innovation-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
 <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'socialventures-zone' ) ): ?>

<?php query_posts('category_name=socialventures-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
  <!-- Start Card -->
    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 grid-item">
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>


<?php endif;
?>

<!-- Zone1-->
    <?php
if (is_page( 'transmedia-zone' ) ): ?>

<?php query_posts('category_name=transmedia-zone&showposts=100');
while (have_posts()) : the_post();
  // do whatever you want

?>
 <div class="col-lg-4 col-md-6 col-sm-6 grid-item">
  <!-- Start Card -->
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
        </a>
         
    </div><!-- End Card -->
<?php
endwhile;
?>
<?php endif;
?>




    
      
      </div><!-- /.row -->

</div>

					</main>
				</div>
<?php get_footer(); ?> 