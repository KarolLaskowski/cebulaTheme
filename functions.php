<?php

include get_theme_file_path('./enums.php');

function load_stylesheets()
{
  wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
  wp_enqueue_style('style');
}

add_action('wp_enqueue_scripts', 'load_stylesheets');

function include_jquery()
{
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', get_template_directory_uri().'/js/jquery-3.5.1.min.js', '', 1, true);

  add_action('wp_enqueue_scripts', 'jquery');
}

add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{
  wp_register_script('customjs', get_template_directory_uri().'/js/scripts.js', '', 1, true);
  wp_register_script('contactpagejs', get_template_directory_uri().'/js/contactpage.js', '', 1, true);
  wp_enqueue_script('customjs');
  wp_enqueue_script('contactpagejs');
}

include get_theme_file_path('./theme-customization/theme-customization-register.php');

add_action('customize_register', 'customize_register');

add_action('wp_enqueue_scripts', 'load_js');

add_theme_support('menus');

add_theme_support('post-thumbnails');

register_nav_menus(
  array(
    'top-menu' => __('Top menu', 'theme'),
    'footer-menu' => __('Footer menu', 'theme')
  )
);

add_image_size('thumbnail-small', 670, 670, true);
add_image_size('thumbnail-big', 1000, 1000, true);

?>
