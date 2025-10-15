<?php
/**
 * Theme Functions.
 *
 * @package Wordpress-Land
 */

function sina_load_assets() {
  wp_enqueue_script('ourmainjs', get_theme_file_uri('/build/index.js'), array('wp-element'), '1.0', true);
  wp_enqueue_style('ourmaincss', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'sina_load_assets');

function sina_add_support() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'sina_add_support');

function mytheme_setup() {
    // Enable support for custom logo
    add_theme_support( 'custom-logo', array(
        'height'      => 100,  // Optional default height
        'width'       => 300,  // Optional default width
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action( 'after_setup_theme', 'mytheme_setup' );

function mytheme_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu'),
        'footer'  => __('Footer Menu')
    ));
}
add_action('init', 'mytheme_register_menus');
