<?php

// Enqueue CSS
function theme_styles()
{

  wp_enqueue_style('radley', 'http://fonts.googleapis.com/css?family=Radley:400,400italic' );
  wp_enqueue_style('lato', 'http://fonts.googleapis.com/css?family=Lato:100,300,400,900' );
  wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.min.css' );
  wp_enqueue_style('main-styles', get_stylesheet_uri() );

}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

//Enqueue JavaScript
function theme_js()
{

  global $wp_scripts;

  wp_register_script( 'html5_shiv', 'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js', '', '', false );
  wp_register_script( 'respond_js', 'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js', '', '', false );

  $wp_scripts->add_data( 'html5_shiv', 'conditional', 'lt IE 9' );
  $wp_scripts->add_data( 'respond_js', 'conditional', 'lt IE 9' );
  wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(jquery), '', true );

}

add_action( 'wp_enqueue_scripts', 'theme_js' );

// Add dynamic navbar
function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

$args = array(
	'default-image' => get_template_directory_uri() . '/img/logo5.png',
);

add_theme_support( 'custom-header', $args );
add_theme_support( 'post-thumbnails' );

$args = array(
  'default-color' => 'f1f4f9'

);
add_theme_support( 'custom-background', $args );

function create_widget($name, $id, $description)
{
  register_sidebar(array(
    'name' => __( $name ),
    'id' => $id,
    'description' => __( $description ),
    'before_widget' => '<div class="widget">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the front page' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the front page' );
create_widget( 'Sidebar', 'sidebar', 'Side bar widget' );
