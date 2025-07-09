<?php
function himalayan_seeds_assets() {
    wp_enqueue_style('main-style', get_stylesheet_uri());

    // Enqueue the JavaScript file for sticky nav
    wp_enqueue_script(
        'himalayan-seeds-script', // Handle name for your script
        get_template_directory_uri() . '/assets/js/script.js', // Path to your script
        array(), // Dependencies (empty array if none)
        '1.0', // Version number
        true // Load in the footer (true for better performance)
    );
}
add_action('wp_enqueue_scripts', 'himalayan_seeds_assets');

function himalayan_seeds_setup() {
    // Add support for post thumbnails
    add_theme_support('post-thumbnails');

    // Register navigation menus
    register_nav_menus(
        array(
            'header_menu' => __('Header Menu', 'himalayan-seeds'),
        )
    );
}
add_action('after_setup_theme', 'himalayan_seeds_setup');
?>