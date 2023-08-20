<?php
    function registered_styles(){
        wp_enqueue_style('bootstrapito', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');
    }
    add_action('wp_enqueue_scripts', 'registered_styles');
?>