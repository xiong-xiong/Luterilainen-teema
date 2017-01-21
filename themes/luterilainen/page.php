<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container">

  <div class="row">
  	<div class="col-md-3 singleaside">
  	 		
          <div class="sidenavwrapper">
          <?php dynamic_sidebar('page_sidebar'); ?> 

           	</div>
           	
  	</div><!--colmd4 -->
  <div class="col-md-6 singlecontent">
  <center><?php the_post_thumbnail('nosto'); ?>
 	<h2><?php the_title();?></h2>   
 	<div class="singlemeta"><?php the_date(); ?>  • <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_content(); ?></p></div>
      </div><!--colmd6 -->
<div class="col-md-3">
  <div class="single-aside-right">
  
  </div>
    </div><!-- /row-->
  	</div> 
    

  </div>  <!-- /row -->

  <?php endwhile; endif; ?>

<!-- päättyvä container --> </div>





<?php get_footer();?>
      
     