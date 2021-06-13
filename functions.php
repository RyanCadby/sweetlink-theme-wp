<?php 

// Load Styles
function sl_load_stylesheets()
{    
    // wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    // wp_enqueue_style('bootstrap');
    
    wp_enqueue_style('style', get_template_directory_uri() . '/dist/css/style.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'sl_load_stylesheets');

// Load Scripts
function sl_load_scripts()
{   
    
    // wp_register_script('jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', '', 1, true);
    // wp_enqueue_script('jQuery');
    
    wp_enqueue_script('scripts-js', get_template_directory_uri() . '/dist/js/scripts.js', array('jquery'), '1.0.0', true);
    
}
add_action('wp_enqueue_scripts', 'sl_load_scripts');

// add theme support
function sl_theme_support(){
    // custom logo support
    // add_theme_support('custom-logo', array('height' => 100, 'width' => 400, 'flex-height' => true, 'flex-width' => true));
    // dynamic title tag
    add_theme_support('title-tag');
    // thumbnails for posts
    add_theme_support('post-thumbnails');
    // menus under appearance
    add_theme_support('menus');
    // register nav menus
    register_nav_menus(
        array(
            'top-menu' => __('Top Menu', 'theme'),
            'footer-menu' => __('Footer Menu', 'theme'),
        )
    );
}
add_action('after_setup_theme', 'sl_theme_support');



add_theme_support('post-thumbnails');

// add image sizes
add_image_size('smallest', 400, 400, true);
add_image_size('largest', 800, 800, true);

// use default page/post editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// add class to nav "li" items
function sl_nav_class_on_li($nav_li_classes, $item, $args) {
    $nav_li_classes[] = 'nav-item';
    return $nav_li_classes;
}
add_filter('nav_menu_css_class', 'sl_nav_class_on_li', 10, 4);

// add class to nav a links
function sl_nav_class_on_a( $nav_a_classes, $item, $args ) {
    $nav_a_classes['class'] = 'nav-link';
    return $nav_a_classes;
}
add_filter( 'nav_menu_link_attributes', 'sl_nav_class_on_a', 10, 3 );