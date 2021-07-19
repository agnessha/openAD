<?php

add_action('wp_enqueue_scripts', 'main_style');
add_action('wp_enqueue_scripts', 'main_scripts');
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');

function main_style()
{

    wp_enqueue_style('slick-style', get_template_directory_uri() . '/assets/libs/slick/slick.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

function main_scripts()
{

    wp_deregister_script('jquery');

//    wp_register_script('jquery', get_template_directory_uri() . "libs/jquery/jquery.min.js");
//    wp_enqueue_script('jquery');
//    wp_enqueue_script('my-custom-script', get_template_directory_uri() .'/assets/libs/jquery/jquery.min.js', array('jquery'), null, true);


    wp_enqueue_script('slick', get_template_directory_uri() . '/assets/libs/slick/slick.min.js', [], null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', [], null, true);


}

function shapeSpace_include_custom_jquery()
{
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), null, true);
}