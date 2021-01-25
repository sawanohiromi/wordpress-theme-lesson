<?php

function sakura_theme_setup(){
    add_theme_support('post-thumbnails');
    add_image_size( 'category-thumb', 300, 9999 );
}
add_action('after_setup_theme','sakura_theme_setup');

function sakura_theme_link(){
    wp_enqueue_style('sp-css',get_template_directory_uri().'/css/style_sp.css',array(),'1.0.0','screen and ( max-width:768px )');
    wp_enqueue_style('pc-css',get_template_directory_uri().'/css/style_pc.css',array(),'1.0.0','screen and ( min-width:769px )');
    wp_enqueue_style('drawer-css','https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');
    wp_enqueue_script('jquery',get_template_directory_uri().'text/javascript" src="js/jquery-3.2.1.min.js',array(),'1.0.0',true);
    wp_enqueue_script('iscroll',get_template_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js',array('jquery'),'1.0.0',true);
    wp_enqueue_script('drawer-js',get_template_directory_uri().'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js',array('jquery','iscroll'),'1.0.0',true);
    wp_enqueue_script('common',get_template_directory_uri().'/js/common.js',array('jquery','iscroll','drawer-js'),'1.0.0',true);
}
add_action('wp_enqueue_scripts','sakura_theme_link');

function sakura_theme_init(){
    register_post_type(
        'daily',[
            'labels' =>[
                'name' => '日報'
            ],
            'public' => true,
            'menu_icon' => 'dashicons-format-aside',
            'menu_position' => 5,
            'show_in_rest' => true,

        ]);
}
add_action('init','sakura_theme_init');
