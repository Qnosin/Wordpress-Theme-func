<?php
//Load stylesheets
function load_css(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap');

    wp_register_style('my-css', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('my-css');
}
//Load javascript
function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap-js','	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js','jquery', false , true);
    wp_enqueue_script('bootstrap-js');

    wp_register_script('my-js',get_template_directory_uri() . '/js/main.js','jquery', false , true);
    wp_enqueue_script('my-js');
}
add_action('wp_enqueue_scripts','load_css');
add_action('wp_enqueue_scripts','load_js');

//Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

//Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu'=> 'Mobile menu Location',
    )
);

//Custom Image Sizes

add_image_size('blog-large',800,400,true);
add_image_size('blog-small',300,200,true);


//Register Sidebars
function my_sidebars(){
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before-title' => '<h4 class="widget-title">',
            'after_title' => '</h4>',
        )
        );
}
add_action('widgets_init','my_sidebars');
?>