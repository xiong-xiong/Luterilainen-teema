 <?php get_header();
 /**
 * Template Name: page-haku
 *
 * @package WordPress
 * @subpackage luterilainen
 * @since luterilainen 1.0
 */

?>




<div class="container">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <?php endwhile; endif; ?>
  <div class="row hakulomakerow">
  <br/><center>
  <h1>Hae sivuston sisällöstä</h1>
    <?php get_search_form( );?></center>
    </div><!-- /row-->
    </div> 
    

  </div>  <!-- /row -->

  

<!-- päättyvä container --> </div>





<?php get_footer();?>