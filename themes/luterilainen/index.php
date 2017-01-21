<?php get_header();?>

    <!-- Carousel eli slideshow on alla. Lisää kuvat, päivitä tekstit ja linkit-->
    

<div class="container">

  <div class="row">
      <?php
      global $post;
      $args = array( 'posts_per_page' => 1, 'taxonomy' => 'nostot', 'term' => 'paanosto' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : 
        setup_postdata( $post ); ?>
       
      <div class="paanosto"><a href="<?php the_permalink(); ?>">
      <div class="col-md-6">
        <div class="nostoblock-kuva">
          <?php the_post_thumbnail('nosto'); ?>
        </div>
      </div>
      <div class="col-md-6">
      <h2><?php the_title();?></h2></a><center>
      <div class="singlemeta"><?php the_date(); ?>   <?php the_category(' / ', 'multiple', '' ); ?> </div></center>
      <div class="singlecontentp"><p><?php the_excerpt(); ?></p></div>
      <div class="author" style="display: inline-block; float: left;">
      <i class="fa fa-pencil"> </i><a href="<?php the_author_link(); ?> "><?php the_author_meta('first_name' ); ?> <?php the_author_meta('last_name' ); ?></a>
      </div>
      <div class="tagit" style="display: inline-block; float: right;"><?php the_tags( '', ' ', ''); ?></div>

      </div><!-- /col6-->
      </div>

      <?php endforeach;
      wp_reset_postdata(); ?>
      
  </div>  <!-- /row -->
<hr>
<div class="row">
  <center><a href="http://www.luterilainen.net/uusimmat"><h3>Katso uusimmat artikkelit</h3></a></center>
</div>
<hr>
  <div class="row">
    <div class="nostot">
      <?php
      global $post;
      $args = array( 'posts_per_page' => 3, 'taxonomy' => 'nostot', 'term' => 'nosto' );
      $myposts = get_posts( $args );
      foreach ( $myposts as $post ) : 
        setup_postdata( $post ); ?>

      <div class="col-md-3 col-sm-6 col-xs-12 nosto">
        <div class="nostoblock">
        <div class="nostoblock-kuva">
         <?php the_post_thumbnail('nosto'); ?>
         </div>
          <div class="author" style="text-align: center; padding-top: 5px;"><i class="fa fa-pencil"> </i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "><?php the_author_meta('first_name' ); ?> <?php the_author_meta('last_name' ); ?></a>
      </div>
         <a href="<?php the_permalink(); ?>"><h3><?php the_title();?></h3></a>
         <div class="singlemeta" style="text-align: center; display: inline;"><?php the_date(); ?>  • <?php the_category(' / ', 'multiple', '' ); ?> </div>
        </div> <!-- /nostoblock-->
      </div><!--/col -->
      <?php endforeach;
      wp_reset_postdata(); ?>

      <!-- Widget paikka seuraavalle tapahtumalle-->
            <div class="col-md-3 col-sm-6 col-xs-12 nosto">
        <div class="nostoblock">
          <div class="nostoblock-kuva">
            <img src="http://dev.luterilainen.net/wp-content/uploads/2016/10/N%C3%A4ytt%C3%B6kuva-2016-10-05-kello-13.52.11-e1477042779504.png">
          </div>
        <div class="author">Seuraava pyhä</div>
        <?php dynamic_sidebar('tapahtuma_sidebar' ); ?>
        </div></div>
      
    </div> <!-- /nostot -->
  </div> <!-- /row --><hr>
<section>
  <div class="container">
    <div class="iskulause">
    <?php dynamic_sidebar("iskulause"); ?>
    </div>
  </div>
</section>
<!-- päättyvä container --> </div>
<?php get_footer();?>
      
     