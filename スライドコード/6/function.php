<?php
function assets_css()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'assets_css');

function assets_js()
{
    wp_enqueue_script('javascript', get_template_directory_uri() . '/assets/js/index.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'assets_js');
