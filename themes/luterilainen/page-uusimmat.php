<?php get_header();?>




<div class="container">

  <div class="row">
    <div class="col-md-3 singleaside">
     
            
    </div><!--colmd3 --> 
  <div class="col-md-6 singlecontent">
<!--LOOP  --><center><h1>Uusimmat artikkelit</h1></center><hr>
         <?php
global $post;
$args = array( 'posts_per_page' => 25);
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : 
  setup_postdata( $post ); ?>

<div class="singlepostaus">
  <center><?php the_post_thumbnail('nosto'); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></h2>   
  <div class="singlemeta"><?php the_date(); ?>   <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_excerpt(); ?></p></div>
     </div><!-- singlepostaus--> <hr>
     <?php endforeach;
wp_reset_postdata(); ?>
     </div><!--colmd6 -->
<div class="col-md-3">
  
      
      
  </div>
    </div><!-- /row-->
    </div> 
    

  </div>  <!-- /row -->


<!-- päättyvä container --> </div>





<?php get_footer();?>