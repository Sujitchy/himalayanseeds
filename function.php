<?php
function himalayan_seeds_assets() {
  wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'himalayan_seeds_assets');
function himalayan_seeds_setup() {
  // Add support for post thumbnails
  add_theme_support('post-thumbnails');

  function enqueue_theme_assets() {
  wp_enqueue_style('theme-style', get_stylesheet_uri());
  wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
}
?>
