<?php

function sakura_theme_setup(){
    add_theme_support('post-thumbnails');
    add_image_size( 'category-thumb', 300, 9999 );
}
add_action('after_setup_theme','sakura_theme_setup');

/* 投稿アーカイブを有効にしてスラッグを指定する */
function post_has_archive( $args, $post_type ) {

    if ( 'post' == $post_type ) {
        $args['rewrite'] = true;
        $args['has_archive'] = 'news'; // スラッグ名
    }
    return $args;

}
add_filter( 'register_post_type_args', 'post_has_archive', 10, 2 );

function sakura_theme_link(){
    wp_enqueue_style('common-css',get_template_directory_uri().'/css/style.css');
    wp_enqueue_style('sp-css',get_template_directory_uri().'/css/style_sp.css',array(),'1.0.0','screen and ( max-width:768px )');
    wp_enqueue_style('pc-css',get_template_directory_uri().'/css/style_pc.css',array(),'1.0.0','screen and ( min-width:769px )');
    wp_enqueue_style('drawer-css',"https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css");
    wp_enqueue_script('jquery',"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js");
    wp_enqueue_script('iscroll',"https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js");
    wp_enqueue_script('drawer-js',"https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js");
    wp_enqueue_script('common-js',get_template_directory_uri().'/js/common.js');
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
            'has_archive' =>true,
            'hierarchical' => true,

        ]);
}
add_action('init','sakura_theme_init');
