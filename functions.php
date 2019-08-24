<?php

function add_theme_scripts()
{
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/c0116b9cd6.js');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js');
    wp_enqueue_script('smoothscroll', '//cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    wp_enqueue_script('index', get_theme_file_uri('/js/index.js', array('jquery')), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'add_theme_scripts');

add_action('wp_enqueue_scripts', 'themeprefix_slick_enqueue_scripts_styles');
// Enqueue Slick scripts and styles
function themeprefix_slick_enqueue_scripts_styles()
{
    wp_enqueue_script('slickjs', get_stylesheet_directory_uri() . '/js/slick.min.js', array('jquery'), '1.6.0', true);
    wp_enqueue_script('slickjs-init', get_stylesheet_directory_uri() . '/js/slick-init.js', array('slickjs'), '1.6.0', true);
    wp_enqueue_style('slickcss', get_stylesheet_directory_uri() . '/css/slick.css', '1.6.0', 'all');
    wp_enqueue_style('slickcsstheme', get_stylesheet_directory_uri() . '/css/slick-theme.css', '1.6.0', 'all');
}
