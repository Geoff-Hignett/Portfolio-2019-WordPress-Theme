<?php

function add_theme_scripts() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/c0116b9cd6.js');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('smoothscroll', '//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    wp_enqueue_script('index', get_theme_file_uri('/js/index.js', array( 'jquery' ) ), NULL, microtime(), true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
