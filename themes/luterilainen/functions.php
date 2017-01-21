<?php

add_action('pre_get_posts', 'filter_category_orderby');

function filter_category_orderby( $query ){
    if( $query->is_category()&& !in_category('lukukammio' || 'kysypastorilta')){
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}

/*
 * REGISTER SIDEBARS/WIDGET AREAS
 *
 */
function arphabet_widgets_init() {

//TAPAHTUMA SIDEBAR
    register_sidebar( array(
        'name'          => 'Tapahtuma nosto',
        'id'            => 'tapahtuma_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//PAPPI SIDEBAR
    register_sidebar( array(
        'name'          => 'Kysy Papilta',
        'id'            => 'pappi_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//POST SIDEBAR
	register_sidebar( array(
		'name'          => 'post_sidebar',
		'id'            => 'post_sidebar',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="rounded">',
		'after_title'   => '</h3>',
	) );

//POST BOTTOM SIDEBAR
    register_sidebar( array(
        'name'          => 'post bottom',
        'id'            => 'post_bottom_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//PAGE SIDEBAR
register_sidebar( array(
        'name'          => 'page_sidebar',
        'id'            => 'page_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//RIGHT SIDEBAR
register_sidebar( array(
        'name'          => 'right_sidebar',
        'id'            => 'right_sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//Footerhaku SIDEBAR
register_sidebar( array(
        'name'          => 'footerhaku',
        'id'            => 'footerhaku',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//Footer1 SIDEBAR
register_sidebar( array(
        'name'          => 'footer1',
        'id'            => 'footer1',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//Footer2 SIDEBAR
register_sidebar( array(
        'name'          => 'footer2',
        'id'            => 'footer2',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );

//Iskulause SIDEBAR
register_sidebar( array(
        'name'          => 'iskulause',
        'id'            => 'iskulause',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="rounded">',
        'after_title'   => '</h3>',
    ) );


}
add_action( 'widgets_init', 'arphabet_widgets_init' );


/*REGISTER NAV MENUS*/

function register_my_menus() {
  register_nav_menus(
    array(
      'meta-menu' => __( 'Meta Menu' ),
      'main-menu' => __( 'Main Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


//Tuki artikkelikuvien eri kokoisille kuville
if (function_exists('add_theme_support')) {
	add_theme_support( 'post-thumbnails' ); 
}

if (function_exists('add_image_size')) {
//KUVAKOOT
	add_image_size( 'banner',800 ,600, true );
    add_image_size( 'nosto',600 ,400, true );
	add_image_size( 'square',200 ,200, true );
	// true = crop image 
}


//Ingressin pituuden rajaaminen 15 sanaan
function new_excerpt_length($length) {
	return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');




//Current menu item custom post typeihin

    
    function add_current_nav_class($classes, $item) {
        
        // Getting the current post details
        global $post;
        
        // Getting the post type of the current post
        $current_post_type = get_post_type_object(get_post_type($post->ID));
        $current_post_type_slug = $current_post_type->rewrite[slug];
            
        // Getting the URL of the menu item
        $menu_slug = strtolower(trim($item->url));
        
        // If the menu item URL contains the current post types slug add the current-menu-item class HUOM! JOS EI TOIMI TARKISTA ETTÄ OIKEA SLUG
        if (strpos($menu_slug,$current_post_type_slug) !== false) {
        
           $classes[] = 'current-menu-item';
        
        }
        
        // Return the corrected set of classes to be added to the menu item
        return $classes;
    
    }
  add_action('nav_menu_css_class', 'add_current_nav_class', 10, 2 );


//Taxonomy: nostot
function jst_register_nostot_taxonomy () {
    $plural = 'nostot';
    $singular = 'nosto'; 
    $object = 'nostoa';
    $labels = array(
        'name'                      => $plural,
        'singular_name'             => $singular,
        'search_items'              => 'Etsi ' . $plural,
        'popular_items'             => 'Suositut ' . $plural,
        'all_items'                 => 'Kaikki ' . $plural,
        'parent_item'               => null,
        'parent_item_colon'         => null,
        'edit_item'                 => 'Muokkaa ' . $object,
        'update_item'               => 'Päivitä ' . $singular,
        'add_new_item'              => 'Lisää uusi ' . $singular,
        'new_item_name'             => 'Uuden osaston nimi',
        'seperate_items_with_commas'=> 'Erota ' . $plural . ' pilkuilla',
        'add_or_remove_items'       => 'Lisää tai poista ' . $plural,
        'choose_from_most_used'     => 'Valitse käytetyimmät ' . $plural,
        'not_found'                 => $object . ' ei löytynyt',
        'menu_name'                 => $plural 
        );

    $args = array(
    'hierarchical'          => true,
    'labels'                => $labels,
    'show_ui'               => true,
    'show_admin_column'     => true,
    'update_count_callback' => '_update_post_term_count',
    'query_var'             => true,
    'rewrite'               => array('slug' => 'nosto')
    );

    register_taxonomy('nostot', 'post', $args);
}

add_action('init', 'jst_register_nostot_taxonomy' );



?>