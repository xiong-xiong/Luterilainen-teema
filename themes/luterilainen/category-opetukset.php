<?php get_header();?>


<div class="container">

  <div class="row">
    <div class="col-md-3 singleaside">
        <div class="sidenaviborder">
                <div class="sidecorner" id="sidecorner1"></div><div class="sidecorner" id="sidecorner2"></div>
            </div>
             <div id="open-sidenav">Näytä hakemisto</div>
          <div class="sidenavwrapper">
                 <?php
    if (is_category()) {
    $this_category = get_category($cat);
    }
    ?>
    <?php
    if($this_category->category_parent)
    $this_category = wp_list_categories('orderby=title&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->category_parent.
    "&echo=0"); else
    $this_category = wp_list_categories('orderby=title&depth=2&show_count=0
    &title_li=&use_desc_for_title=1&child_of='.$this_category->cat_ID.
    "&echo=0");
    if ($this_category) { ?> 

<ul>
<?php echo $this_category; ?>

</ul>

<?php } ?>

            </div>
            <div class="sidenaviborder">
              <div class="sidecorner" id="sidecorner3"></div><div class="sidecorner" id="sidecorner4"></div>
            </div>
    </div><!--colmd4 --> 
  <div class="col-md-6 singlecontent">
<!--LOOP  -->
<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array( 'post_type' => 'post', 'category_name' => 'opetukset', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => 10, 'paged' => $paged );
$wp_query = new WP_Query($args);
while ( have_posts() ) : the_post(); ?>
                    

<div class="singlepostaus">
  <center><?php the_post_thumbnail('nosto' ); ?>
  <h2><a href="<?php the_permalink(); ?>"><?php the_title();?></h2>   
  <div class="singlemeta"><?php the_date(); ?>  • <?php the_category(' / ', 'multiple', '' ); ?> </div></center>

      

      
      <div class="singlecontentp"><p><?php the_excerpt(); ?></p></div>
     </div><!-- singlepostaus--> <hr>
    <?php endwhile; ?>


     </div><!--colmd6 -->
<div class="col-md-3">
  
      
      
  </div>
    </div><!-- /row-->
<div>
    <!-- Sivutusnavigaatio-->
   <center> <?php the_posts_pagination( array( 'mid_size'  => 2 ) ); ?></center>
    </div> 
    
 
      

  </div>  <!-- /row -->

 

<!-- päättyvä container --> </div>





<?php get_footer();?>
