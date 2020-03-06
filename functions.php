<?php
add_theme_support( 'post-thumbnails');

function my_enqueue_styles(){

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/style.css');

}
add_action( 'wp_enqueue_scripts','my_enqueue_styles' );

function my_enqueue_script(){
    
    wp_enqueue_script( 'bootstrap', get_template_directory_uri(  ) . '/js/bootstrap.min.js', array( 'jquery' ) );

}
add_action('wp_enqueue_scripts', 'my_enqueue_script' );
?>