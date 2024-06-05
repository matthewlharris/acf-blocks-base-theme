<?php
add_theme_support('title-tag');
add_theme_support('menus');
add_theme_support('post-thumbnails', array('post', 'page'));

register_nav_menus( array(
    'header_menu' => 'Header Menu',
) );



function add_jquery_in_head() {
  wp_enqueue_script('jquery', false, array(), false, false);
}
add_filter('wp_enqueue_scripts', 'add_jquery_in_head', 1);




function front_end_scripts() {
  wp_enqueue_style('theme-stylesheet', get_stylesheet_uri(), array(), '1.1');
  wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap', array(), '1.1');
  wp_enqueue_script('theme-scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array( 'jquery' ), '1.1', true);
}
add_action( 'wp_enqueue_scripts', 'front_end_scripts' );





function admin_scripts() {
  wp_enqueue_style( 'custom_wp_admin_css', get_stylesheet_uri(), false, '2.1.1' );
}
add_action( 'admin_enqueue_scripts', 'admin_scripts' );






add_action('acf/init', 'acf_init_block_types');
function acf_init_block_types() {
  if( function_exists('acf_register_block_type') ) {

    acf_register_block_type(array(
      'name'            => 'full-width-image',
      'title'           => 'Full width image',
      'render_template' => 'blocks/full-width-image/block.php',
      'keywords'        => array( 'image', 'full width' ),
    ));

    acf_register_block_type(array(
      'name'            => 'footer-1',
      'title'           => 'Footer 1',
      'render_template' => 'blocks/footer-1/block.php',
      'keywords'        => array( 'footer' ),
    ));

    acf_register_block_type(array(
      'name'            => 'header-1',
      'title'           => 'Header 1',
      'render_template' => 'blocks/header-1/block.php',
      'keywords'        => array( 'header' ),
    ));

  } // end if( function_exists('acf_register_block_type') )
} // end acf_init_block_types
?>