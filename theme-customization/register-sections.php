<?php

function customize_register_sections($wp_customize) {
  $wp_customize->add_section(Sections::CblPosts , array(
    'title' => __('Posts customization [🧅]', Consts::CebulaThemeName),
    'priority' => 30,
  ));
  $wp_customize->add_section(Sections::SocialLinks , array(
    'title' => __('Social links [🧅]', Consts::CebulaThemeName),
    'priority' => 50,
  ));
}

?>