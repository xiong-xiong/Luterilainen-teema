<?php get_header();?>

 <!-- Sivutus funktio-->
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged ); 
            ?>


<div class="container">

  <div class="row">
    <div class="col-md-3 singleaside">
       <?php get_search_form( ); ?>
    </div><!--colmd4 --> 
  <div class="col-md-6 singlecontent">
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<div class="singlepostaus">
  <center>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></h2>   
  <div class="singlemeta"><?php the_date(); ?>   <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_excerpt(); ?></p></div>
     </div><!-- singlepostaus--> <hr>
     <?php endwhile; endif; ?>
     </div><!--colmd6 -->
<div class="col-md-3">
  
      
      
  </div>
    </div><!-- /row-->
    </div> 
    

  </div>  <!-- /row -->

  
      <!-- Sivutusnavigaatio-->
<div class="nav-previous"><?php next_posts_link( 'Vanhemmat artikkelit' ); ?></div>
<div class="nav-next"><?php previous_posts_link( 'Uudemmat artikkelit' ); ?></div>
<!-- päättyvä container --> </div>





<?php get_footer();?>