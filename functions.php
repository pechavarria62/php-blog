<?php
    
    function registered_styles(){
        wp_enqueue_style('bootstrap',get_template_directory_uri() . 'theme-template/css/style.css', array(), '1.0', 'all');
    }
    
    add_action('wp_enqueue_scripts', 'registered_styles');
?>