<?php get_header();
 /**
 * Template Name: page-kirkkovuosi
 *
 * @package WordPress
 * @subpackage luterilainen
 * @since luterilainen 1.0
 */
?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container">

  <div class="row">
  	
  <div class="col-xs-12 singlecontent">
  <center><?php the_post_thumbnail('nosto'); ?>
 	<h2><?php the_title();?></h2>   
 	<div class="singlemeta"><?php the_date(); ?>  • <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_content(); ?></p></div>
      </div><!--colmd12 -->

    </div><!-- /row-->
  	</div> 
    

  </div>  <!-- /row -->

  <?php endwhile; endif; ?>

<!-- päättyvä container --> </div>





<?php get_footer();?>