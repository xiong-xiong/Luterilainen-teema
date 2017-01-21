<?php get_header();?>

    <!-- Carousel eli slideshow on alla. Lisää kuvat, päivitä tekstit ja linkit-->
    

<div class="container">

  <div class="row">
      <?php
      global $post;
      $args = array( 'posts_per_page' => 1, 'category_name' => 'paanosto' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : 
        setup_postdata( $post ); ?>
       
      <div class="paanosto">
      <?php the_post_thumbnail('banner'); ?>
      <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>
      
      <p><?php the_excerpt(); ?></p>
      </div>

      <?php endforeach;
      wp_reset_postdata(); ?>
      <hr>
  </div>  <!-- /row -->

  <div class="row">
    <div class="nostot">
      <?php
      global $post;
      $args = array( 'posts_per_page' => 4, 'category_name' => 'nosto' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : 
        setup_postdata( $post ); ?>

      <div class="col-md-3 col-sm-6 col-xs-12 nosto">
         <?php the_post_thumbnail('nosto'); ?>
         <a href="<?php the_permalink(); ?>"><h2><?php the_title();?></h2></a>

      </div><!--/col -->
      <?php endforeach;
      wp_reset_postdata(); ?>
      <hr>
    </div> <!-- /nostot -->
  </div> <!-- /row -->

<!-- päättyvä container --> </div>
<?php get_footer();?>
      
     