<?php

// Register Custom Content Types
require_once('includes/register-hotel.php');
require_once('includes/register-holiday.php');

// Register Main Menu
function register_my_menus() {
  add_theme_support('menus');
}
add_action( 'init', 'register_my_menus' );


// Add Styles And Scripts To The Theme
	function add_css_js()
  {
wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', false, NULL, 'all' );
wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', false, NULL, 'all' );
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css', false, NULL, 'all' );
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', false, NULL, 'all' );
wp_enqueue_style( 'preset', get_template_directory_uri() . '/css/preset1.css', false, NULL, 'all' );
wp_enqueue_style( 'owl-carousel', get_template_directory_uri() . '/css/owl.carousel.css', false, NULL, 'all' );
wp_enqueue_style( 'owl-carousel-theme', get_template_directory_uri() . '/css/owl.theme.css', false, NULL, 'all' );
wp_enqueue_style( 'main', get_template_directory_uri() . '/css/css.css', false, NULL, 'all' );
wp_enqueue_style( 'preset', get_template_directory_uri() . '/css/css(1).css', false, NULL, 'all' );

//wp_enqueue_style( 'megamenu', get_template_directory_uri() . '../uploads/maxmegamenu/style.css', false, NULL, 'all' );
wp_enqueue_style( 'style', get_stylesheet_uri() );
wp_enqueue_style( 'responsive', get_template_directory_uri() . '/css/responsive.css', false, NULL, 'all' );
wp_enqueue_style( 'prettyphoto', get_template_directory_uri() . '/css/prettyPhoto.css', false, NULL, 'all' );
//wp_enqueue_style( 'material-icons','https://fonts.googleapis.com/icon?family=Material+Icons', false, NULL, 'all' );

wp_enqueue_script('jquery','https://code.jquery.com/jquery-3.2.1.js', array(), false, true);
}
wp_enqueue_script('bootstrap',get_template_directory_uri() .'/js/bootstrap.min.js', array('jquery'), false, true);
wp_enqueue_script('owl-carousel',get_template_directory_uri() .'/js/owl.carousel.js', array('jquery'), false, true);
wp_enqueue_script('prettyphoto',get_template_directory_uri() .'/js/jquery.prettyPhoto.js', array('jquery'), false, true);
wp_enqueue_script('parallax',get_template_directory_uri() .'/js/jquery.parallax.js', array('jquery'), false, true);
wp_enqueue_script('smoothscroll',get_template_directory_uri() .'/js/smoothscroll.js', array('jquery'), false, true);

wp_enqueue_script('prettyphoto',get_template_directory_uri() .'/js/jquery.nav.js', array('jquery'), false, true);

wp_enqueue_script('prettyphoto',get_template_directory_uri() .'/js/canvas.js', array('jquery'), false, true);


add_action( 'wp_enqueue_scripts', 'add_css_js' );
?>