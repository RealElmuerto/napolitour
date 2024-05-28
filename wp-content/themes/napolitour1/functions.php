<?php
/*** Register Custom Navigation Walker */
function register_navwalker(){
	require_once get_template_directory() . '/wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );
/*** Register Custom menu */
function wpb_custom_new_menu() {
    register_nav_menu('custom-menu',__( 'Custom Menu' ));
  }
  add_action( 'init', 'wpb_custom_new_menu' );

    // post thumbnail
    function bd_theme_setup(){
        add_theme_support('post-thumbnails');
    }
    
    add_action('after_setup_theme', 'bd_theme_setup');

    // nav menu
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Wp-Boot' ),
    ) );

//post format
add_theme_support('post-formats',array('aside','gallery'));


//page excerpt
add_post_type_support( 'page', 'excerpt' );

    // lunghezza contenuto
    function set_excerpt_lenght(){
        return 20;
    }
add_filter('excerpt_length', 'set_excerpt_lenght') ;   

//posizione widget
function bd_init_widgets($id){
    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="blog-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init','bd_init_widgets') ;

// post template
function my_post_templater($template){
    if( !is_single() )
      return $template;
    global $wp_query;
    $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
    return empty( $c_template ) ? $template : $c_template;
  }
  
  add_filter( 'template_include', 'my_post_templater' );
  
  function give_my_posts_templates(){
    add_post_type_support( 'post', 'page-attributes' );
  }
  
