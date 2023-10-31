<?php
/**
 * Plugin Name: Custom Plugin Example
 * Description: An example of a custom plugin.
 * Version: 1.0
 * Author: Anthony Darter
 */

// If this file is called directly, abort.
if ( ! defined('ABSPATH') ) {
    exit;
}

// Hook into the 'wp_enqueue_scripts' action
add_action( 'wp_enqueue_scripts', 'my_custom_enqueue' );

/**
 * Enqueue the custom CSS and JS files.
 */
function my_custom_enqueue() {
    // Register and enqueue the CSS file
    $css_path = plugin_dir_url( __FILE__ ) . 'style.css';
    wp_register_style('my-custom-style', $css_path);
    wp_enqueue_style('my-custom-style');

    // Register and enqueue the JS file
    $js_path = plugin_dir_url( __FILE__ ) . 'script.js';
    wp_register_script('my-custom-script', $js_path, array('jquery'), '', true);
    wp_enqueue_script('my-custom-script');

    // For a specific page with slug 'my-page'
    // if ( is_page( 'my-page' ) ) {
    //     $css_path = plugin_dir_url( __FILE__ ) . 'my-page-style.css';
    //     wp_register_style('my-custom-page-style', $css_path);
    //     wp_enqueue_style('my-custom-page-style');
    // }

    // For a specific post with slug 'my-post'
    // if ( is_single( 'my-post' ) ) {
    //     $js_path = plugin_dir_url( __FILE__ ) . 'my-post-script.js';
    //     wp_register_script('my-custom-post-script', $js_path, array('jquery'), '', true);
    //     wp_enqueue_script('my-custom-post-script');
    // }
}
