<?php
    function registered_styles(){
        wp_enqueue_style('php-blog-css', get_template_directory_uri() . "/style.css", array('php-blog-bootstrap'), '1.0', 'all');
        wp_enqueue_style('php-blog-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css", array(), '1.0', 'all');
        wp_enqueue_style('php-blog-fontawesome ',"https://kit.fontawesome.com/a329bb9f5d.js", array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'registered_styles');
?>