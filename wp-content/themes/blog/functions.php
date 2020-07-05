<?php

add_action('wp_enqueue_scripts', 'my_script');

function my_script()
{
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/style.css', array(), time());
}

register_nav_menus(
    array(
        'head_menu' => 'Меню в хэдере'
    )
);

add_theme_support('post-thumbnails');

add_image_size('mysize', 790, 300, true);

register_sidebars(
    array(
        'main_side' => 'главные виджеты',
    )
);