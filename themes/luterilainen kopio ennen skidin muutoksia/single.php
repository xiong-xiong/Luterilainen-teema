<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container">

  <div class="row">
      
      <?php the_post_thumbnail('banner'); ?>
<h2><?php the_title();?></h2>
      
      <p><?php the_content(); ?></p>
      </div>

  
      <hr>
  </div>  <!-- /row -->

  <?php endwhile; endif; ?>

<!-- päättyvä container --> </div>





<?php get_footer();?>
      
     