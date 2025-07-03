<?php
function himalayan_seeds_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'himalayan_seeds_assets');
function himalayan_seeds_setup() {
  // Add support for post thumbnails
  add_theme_support('post-thumbnails');

  // Register navigation menu
  register_nav_menus([
    'primary' => __('Primary Menu', 'himalayanseeds'),
  ]);
}

?>
