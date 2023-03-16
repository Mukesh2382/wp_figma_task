<?php

add_theme_support( 'custom-logo');
add_theme_support( 'title-tag' );


// Load in our CSS
function parcelly_enqueue_styles() {

    wp_enqueue_style( 'custom-css', get_template_directory_uri() . '/assets/css/custom.css' );

}
add_action( 'wp_enqueue_scripts', 'parcelly_enqueue_styles' );