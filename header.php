<?php
/**
 * The theme header
 * 
 * @package Ryerson-Zone-Portal-V1
 */
?>

<!DOCTYPE html>
<!--[if lt IE 7]>  <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>     <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>     <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
    <head>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width">

        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
        <script src="https://npmcdn.com/imagesloaded@4.1/imagesloaded.pkgd.min.js"></script>

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="57x57" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/ryerson/wp-content/themes/Ryerson-Zone-Portal-V1/img/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">

     <script>

var $container = $('.grid');

$container.imagesLoaded(function(){
  $container.masonry({
    itemSelector: '.grid-item',
    animate: true,
  isFitWidth: true
  });
});

</script>

       

        <?php wp_head(); ?>

        <title>Ryerson Zone Portal | <?php the_title(); ?></title>

    </head>


    <body <?php body_class(); ?>>
        <!--[if lt IE 8]>
            <p class="ancient-browser-alert">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" target="_blank">upgrade your browser</a>.</p>
        <![endif]-->

        <header>
        <div class="row main-navigation">
                    
                    
                    <div class="col-md-12">
                        
                        <nav class="navbar navbar-fixed-top navbar-light">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="http://sidramatik.com/ryerson">
      <img src="http://www.sidramatik.com/ryerson/wp-content/uploads/2017/01/RU-ZoneLearningLockup-RGB.jpg" class="header-logo" alt="Ryerson Zone Portal"/>
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
       
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Zones and Affiliates<span class="caret"></span></a>

          <ul class="dropdown-menu">

             <style>
             ul#menu-zones li a{border-left-color: #222}
             </style>
            <?php
       $walker = new My_Walker;
    wp_nav_menu(array(
            'echo' => true,
        'container' => '',
        'theme_location' => 'primary',
        'menu_class' => '',
        'walker' => $walker
    ));
?>
          </ul>
        </li>
        
        <?php 
        
        if ( is_front_page() ) { ?>
        
        <li><a href="/ryerson/about">About</a></li>
        
        <?php 

        } 
        elseif (is_page_template( 'zone-template.php' ) ) { ?>
        
        <li><a href="/ryerson/about-<?php echo basename(get_permalink()); ?>
"> About <?php the_title(); ?></a></li>
        
        <?php 


        } else { 
        ?>

        <li><a href="/ryerson/about">About</a></li>
        
        <?php 
        }
        ?>
       

        
        
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
        <?php get_search_form(); ?>
      <!--     <input type="text" value="<?php the_search_query(); ?>" class="form-control" placeholder="Search">
        </div>
        <button type="submit" value="Search" class="btn btn-default">Submit</button> -->
      </form>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</div>
                    </div>
                </div><!--.main-navigation-->

            </header>
            
            
            <div id="content" class="row row-with-vspace site-content">
