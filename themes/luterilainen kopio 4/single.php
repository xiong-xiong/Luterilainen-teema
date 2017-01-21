<?php get_header();?>
<!--LOOP  -->
         <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>



<div class="container">

  <div class="row">
  	<div class="col-md-3 singleaside">
  	 	
          <div class="sidenavwrapper">
           <?php dynamic_sidebar('post_sidebar' ); ?>

           	</div>
           	
  	</div><!--colmd4 -->
  <div class="col-md-6 singlecontent">
  <center><?php the_post_thumbnail('nosto'); ?>
 	<h2><?php the_title();?></h2>   
 	<div class="singlemeta"><?php the_date(); ?>  • <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><?php the_content(); ?></div>
      </div><!--colmd6 -->
<div class="col-md-3">
  <div class="single-aside-right">
  <div class="author-avatar">
      <?php
    // Retrieve The Post's Author ID
    $user_id = get_the_author_meta('ID');
    // Set the image size. Accepts all registered images sizes and array(int, int)
    $size = 'thumbnail';

    // Get the image URL using the author ID and image size params
    $imgURL = get_cupp_meta($user_id, $size);

    // Print the image on the page
    echo '<img src="'. $imgURL .'" alt="">';
      ?>
   </div>
      <div class="author"><i class="fa fa-pencil"> </i><a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?> "><?php the_author_meta('first_name' ); ?> <?php the_author_meta('last_name' ); ?></a>
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
      
     