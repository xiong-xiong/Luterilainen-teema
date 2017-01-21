<?php get_header();?>



    <!-- Carousel eli slideshow on alla. Lisää kuvat, päivitä tekstit ja linkit-->
    <div class="hero">

    </div>



<div class="container">

      <div class="row maincontent">

        <div class="col-lg-8 the-content">
            <!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

             <!-- Sivutus funktio-->
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            $the_query = new WP_Query( 'posts_per_page=3&paged=' . $paged ); 
            ?>


       <h1><a href="<?php the_permalink(); ?>">
       <?php the_title (); ?></a></h1>
          <p> <?php the_excerpt(); ?></p>


      <?php endwhile; endif; ?>


      <!-- Sivutusnavigaatio-->
<div class="nav-previous"><?php next_posts_link( 'Vanhemmat artikkelit' ); ?></div>
<div class="nav-next"><?php previous_posts_link( 'Uudemmat artikkelit' ); ?></div> 
        </div>


        <div class="col-lg-4 right-sidebar">
          <?php dynamic_sidebar( 'right_sidebar' ); ?>
        </div>

      </div>




  


                     
          

<?php get_footer();?>
      
     