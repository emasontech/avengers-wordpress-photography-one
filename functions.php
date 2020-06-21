<?php

function load_stylesheets()
{
    wp_register_style('style', get_template_directory_uri() . '/styles/index.css', array(), 1, 'all');
    wp_enqueue_style('style');

}
add_action('wp_enqueue_scripts', 'load_stylesheets');