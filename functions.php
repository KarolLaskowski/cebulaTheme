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
    'top-menu' => __('Top menu', Consts::CebulaThemeName),
    'footer-menu-left' => __('Footer menu left', Consts::CebulaThemeName),
    'footer-menu-right' => __('Footer menu right', Consts::CebulaThemeName)
  )
);

add_image_size('thumbnail-small', 670, 670, true);
add_image_size('thumbnail-big', 1000, 1000, true);

function get_menu_by_location($location) {
  if(!empty($location)) {
    $locations = get_nav_menu_locations();
    if(isset($locations[$location])) {
      $menu_obj = get_term($locations[$location], 'nav_menu');
      return $menu_obj;
    }
  }
  return false;
}

function gdrive_shortcode($atts, $content = null) {
	return '<div class="gdrive-embed"><iframe src="https://drive.google.com/embeddedfolderview?id='.$content.'#grid" frameborder="0" width="100%" height="300px" scrolling="auto"> </iframe></div>';
}

add_shortcode('gdrive', 'gdrive_shortcode');

?>
