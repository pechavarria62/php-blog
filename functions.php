<?php
    function themeTagSupport(){
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
    }
    add_action('after_setup_theme','themeTagSupport');
    
    function menus(){
        $locations = array(
            
            'primary' => "Desktop Primary Left Sidebar",
            'footer' => "Footer Menu Items"

        );
        register_nav_menus($locations);
    }
    add_action('init','menus');

    function registered_styles(){
        $version = wp_get_theme()->get( 'Version' );
        wp_enqueue_style('php-blog-css', get_template_directory_uri() . "/blog-site-template/css/style.css", array('php-blog-bootstrap'), '1.0', 'all');
        wp_enqueue_style('php-blog-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
        wp_enqueue_style('php-blog-fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'registered_styles');

    function registered_scripts(){

        wp_enqueue_script('php-blog-bootstrap-jquery', "https://code.jquery.com/jquery-3.4.1.slim.min.js",array(), '3.4.1', true);
        wp_enqueue_script('php-blog-bootstrap-popper', "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js",array(), '1.16.0', true);
        wp_enqueue_script('php-blog-bootstrap-script', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js",array(), '4.4.1', true);
        wp_enqueue_script('php-blog-js-script', get_template_directory_uri() ."/assets/js/main.js",array(), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'registered_scripts');
?>