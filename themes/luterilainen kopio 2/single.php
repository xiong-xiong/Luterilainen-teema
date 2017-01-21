<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container">

  <div class="row">
  	<div class="col-md-3 singleaside">
  	 		<div class="sidenaviborder">
                <div class="sidecorner" id="sidecorner1"></div><div class="sidecorner" id="sidecorner2"></div>
          	</div>
          <div class="sidenavwrapper">
          <?php dynamic_sidebar('post_sidebar'); ?> 

           	</div>
           	<div class="sidenaviborder">
           		<div class="sidecorner" id="sidecorner3"></div><div class="sidecorner" id="sidecorner4"></div>
           	</div>
  	</div><!--colmd4 -->
  <div class="col-md-6 singlecontent">
  <center><?php the_post_thumbnail('nosto'); ?>
 	<h2><?php the_title();?></h2>   
 	<div class="singlemeta"><?php the_date(); ?>   <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_content(); ?></p></div>
      </div><!--colmd6 -->
<div class="col-md-3">
  <div class="single-aside-right">
  <div class="author-avatar"><?php echo get_avatar(); ?> </div>
      <div class="author"><a href="<?php the_author_link(); ?> "><?php the_author_meta('first_name' ); ?> <?php the_author_meta('last_name' ); ?></a>
      </div>
      <div class="author-meta"><?php the_author_meta('description' ); ?></div>
      <div class="tagit"><?php the_tags( '', ' ', ''); ?></div>
  </div>
    </div><!-- /row-->
  	</div> 
    

  </div>  <!-- /row -->

  <?php endwhile; endif; ?>

<!-- päättyvä container --> </div>





<?php get_footer();?>
      
     