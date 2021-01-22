<?php

function sakura_theme_setup(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','sakura_theme_setup');

function sakura_theme_link(){
    wp_enqueue_style('pc-css',get_template_directory_uri().'/css/style/_pc.css');
    wp_enqueue_script('common',get_template_directory_uri().'/js/common.js',array(),'1.0.0',true);
}
add_action('wp_enqueue_scripts','sakura_theme_link');