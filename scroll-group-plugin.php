<?php
/*
Plugin Name: Scroll Group Plugin
Description: Adds horizontal scroll to a div when a specific CSS class is applied.
Version: 1.0
Author: Lester Reandino
Author URI: https://github.com/lhes23
*/

// Enqueue the CSS file
function hsp_enqueue_styles() {
    wp_enqueue_style('hsp-style', plugin_dir_url(__FILE__) . 'css/scroll-group-plugin.css');
}
add_action('wp_enqueue_scripts', 'hsp_enqueue_styles');