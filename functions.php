<?php

function theme_styles()
{
  wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Radley:400,400italic' );
  wp_enqueue_style('fonts', 'http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' );
  wp_enqueue_style('main-styles', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'theme_styles' );

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );
