<!DOCTYPE html>
<html>
  <head>
     <meta charset="utf-8">
  <!-- Title wordpress backendistä -->
  <title><?php
  wp_title('/', 'true', 'right');
  bloginfo ( 'name' )
  ?>
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Head infoa wordpressistä -->
  <?php wp_head();?>


<!-- Linkitetään style.css -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">


  <!-- jQuery aktivointi -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<!--Bootstrap javascript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.js"></script>
     <script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
   
  </head>
  
 <!--WORDPRESS SITE NAME-->
          
  <body>
     <!-- navbar -->
<div class="nav-container">
  <div class="nav-bar-meta" id="nav-meta-yla">
               <?php wp_nav_menu( array( 'theme_location' => 'meta-menu', 'container_class' => 'meta-nav', 'container' => 'nav' )); ?> 
            
        </div>

<div class="container">
<div class="row site-title"><center>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
<img src="<?php bloginfo('template_url'); ?>/img/logo.png" style="width: 300px; height: auto;"></a></center>
</div> <!-- /row -->
</div>
  
</div><!--/nav Container -->
<div class="container">
<div class="navwrapper">
            <div id="naviborder">
                <div class="corner" id="corner1"></div><div class="corner" id="corner2"></div><div class="corner" id="corner3"></div><div class="corner" id="corner4"></div>
            </div>
      
    <div class="nav-bar-main">
        
        
               <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container_class' => 'main-nav', 'container' => 'nav' )); ?> 
      
        </div>
   </div>
</div><!--/ Container -->
