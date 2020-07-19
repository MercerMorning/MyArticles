<?php

require get_template_directory() . '/widgets/widgets-calend.php';

add_action('wp_enqueue_scripts', 'my_script');

function my_script()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), time());
}

register_nav_menus(
    array(
        'header_menu' => 'Меню в хэде'
    )
);

add_theme_support('post-thumbnails');

add_image_size('mysize', 790, 300, true);

function calend()
{
    register_sidebar(array(
        'name' => 'календарь',
        'id' => 'calendar'
    ));
}

add_action('widgets_init', 'calend');
add_action( 'widgets_init', function(){
    register_widget( 'My_Widget' );
});

add_filter('template_include', function ($path){
    if ( is_page('/category/vazhno/')) {
        return get_stylesheet_directory() . '/header.php';
    }
    return $path;
});