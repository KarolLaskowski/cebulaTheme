<?php

function customize_register_sections($wp_customize) {
  $wp_customize->add_section(Sections::CblPosts , array(
    'title' => __('Posts customization [🧅]', Consts::CebulaThemeName),
    'priority' => 30,
  ));
  $wp_customize->add_section(Sections::Footer , array(
    'title' => __('Footer [🧅]', Consts::CebulaThemeName),
    'priority' => 40,
  ));
  $wp_customize->add_section(Sections::SocialLinks , array(
    'title' => __('Social links [🧅]', Consts::CebulaThemeName),
    'priority' => 50,
  ));
  $wp_customize->add_section(Sections::ContactPage , array(
    'title' => __('Contact Page [🧅]', Consts::CebulaThemeName),
    'priority' => 60,
  ));
}

?>