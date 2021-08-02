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
    // add image sizes
    add_image_size('smallest', 400, 400, true);
    add_image_size('largest', 800, 800, true);
}
add_action('after_setup_theme', 'sl_theme_support');

// add theme options page
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}

// register custom post types
function sl_custom_post_types() {
 
    register_post_type( 'portfolio',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Portfolio' ),
                'singular_name' => __( 'Portfolio' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'show_in_rest' => false,
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category', 'post_tag')
 
        )
    );

    register_post_type( 'services',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Services' ),
                'singular_name' => __( 'Service' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'show_in_rest' => false,
            'supports' => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'taxonomies' => array('category', 'post_tag')
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'sl_custom_post_types' );

// add global variables
function sl_global_vars() {
    global $sl_admin_active;
    if( is_admin_bar_showing() ){
        $sl_admin_active = 'admin-true';
    } else{
        $sl_admin_active = 'admin-false';
    }
    
}
add_action('after_setup_theme', 'sl_global_vars');



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


// acf json - save func
add_filter('acf/settings/save_json', 'my_acf_json_save_point');
function my_acf_json_save_point( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/includes/acf-json';
    // return
    return $path;
}

// acf json - load func
add_filter('acf/settings/load_json', 'my_acf_json_load_point');
function my_acf_json_load_point( $paths ) {
    // remove original path (optional)
    unset($paths[0]);
    // append path
    $paths[] = get_stylesheet_directory() . '/includes/acf-json';
    // return
    return $paths;
}

// add_filter( 'template_include', 'get_custom_page_templates', 99 );
// function get_custom_page_templates( ) {
// 	if ( get_site_url() == 'https://sweetlinkstudio.com' ) {
// 			return get_stylesheet_directory_uri() . '/template-coming.php';
// 	} else{
//         return get_stylesheet_directory_uri() . 'front-page.php';
//     }
// }