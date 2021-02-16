<?php

class CblColors {
  const color_PANTONE_14_3905_tcx = '#c5c0d0';
  const color_PANTONE_19_3940_tcx = '#263056';
  const color_PANTONE_13_4405_tcx = '#bfcdcc';
  const color_black = '#000';
  const color_white = '#fff';
}

global $cebulaThemeName;
$cebulaThemeName = 'cebulaTheme';

class CblCustomSettings {
  const FrontPageLayoutStyle = 'cebula_front_page_layout';
  const AnimatedStickyPostHeader = 'cebula_animated_sticky_post_header';
  const NavbarBackgroundColor = 'cebula_navbar_back_color';
  const NavbarTextColor = 'cebula_navbar_text_color';
  const FooterBackgroundColor = 'cebula_footer_back_color';
  const FooterTextColor = 'cebula_footer_text_color';
  const PostHeaderBackgroundColor = 'cebula_post_header_back_color';
  const PostHeaderTextColor = 'cebula_post_header_text_color';
  const PostHeadingBackgroundColor = 'cebula_post_heading_back_color';
  const PostHeadingTextColor = 'cebula_post_heading_text_color';
  const CategoryHeadingBackgroundColor = 'cebula_category_heading_back_color';
  const CategoryHeadingTextColor = 'cebula_category_heading_text_color';
  const MainBackgroundColor = 'cebula_back_color';
  const MainTextColor = 'cebula_text_color';
  const MainLinkColor = 'cebula_link_color';
}

class CblDefaultSettings {
  const FrontPageLayoutStyle = 'grid';
  const AnimatedStickyPostHeader = true;
  const NavbarBackgroundColor = CblColors::color_PANTONE_19_3940_tcx;
  const NavbarTextColor = CblColors::color_PANTONE_14_3905_tcx;
  const FooterBackgroundColor = CblColors::color_PANTONE_19_3940_tcx;
  const FooterTextColor = CblColors::color_PANTONE_14_3905_tcx;
  const PostHeaderBackgroundColor = CblColors::color_PANTONE_14_3905_tcx;
  const PostHeaderTextColor = CblColors::color_PANTONE_19_3940_tcx;
  const PostHeadingBackgroundColor = CblColors::color_PANTONE_14_3905_tcx;
  const PostHeadingTextColor = CblColors::color_PANTONE_19_3940_tcx;
  const CategoryHeadingBackgroundColor = CblColors::color_PANTONE_14_3905_tcx;
  const CategoryHeadingTextColor = CblColors::color_PANTONE_19_3940_tcx;
  const MainBackgroundColor = CblColors::color_white;
  const MainTextColor = CblColors::color_black;
  const MainLinkColor = CblColors::color_PANTONE_19_3940_tcx;
}

class CblCustomSections {
  const Posts = 'cebula_posts';
}

function customize_register_setting_colors($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::NavbarBackgroundColor, array(
    'default' => CblDefaultSettings::NavbarBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::NavbarTextColor, array(
    'default' => CblDefaultSettings::NavbarTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::FooterBackgroundColor, array(
    'default' => CblDefaultSettings::FooterBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::FooterTextColor, array(
    'default' => CblDefaultSettings::FooterTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostHeaderBackgroundColor, array(
    'default' => CblDefaultSettings::PostHeaderBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostHeaderTextColor, array(
    'default' => CblDefaultSettings::PostHeaderTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostHeadingBackgroundColor, array(
    'default' => CblDefaultSettings::PostHeadingBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostHeadingTextColor, array(
    'default' => CblDefaultSettings::PostHeadingTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::CategoryHeadingBackgroundColor, array(
    'default' => CblDefaultSettings::CategoryHeadingBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::CategoryHeadingTextColor, array(
    'default' => CblDefaultSettings::CategoryHeadingTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::MainBackgroundColor, array(
    'default' => CblDefaultSettings::MainBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::MainTextColor, array(
    'default' => CblDefaultSettings::MainTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::MainLinkColor, array(
    'default' => CblDefaultSettings::MainLinkColor,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_front_page($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::FrontPageLayoutStyle, array(
    'default' => CblDefaultSettings::FrontPageLayoutStyle,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_posts($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::AnimatedStickyPostHeader, array(
    'default' => CblDefaultSettings::AnimatedStickyPostHeader,
    'transport' => 'refresh',
  ));
}

function customize_register_setting($wp_customize) {
  customize_register_setting_front_page($wp_customize);
  customize_register_setting_colors($wp_customize);
  customize_register_setting_posts($wp_customize);
}

function customize_register_sections($wp_customize) {
  $wp_customize->add_section(CblCustomSections::Posts , array(
    'title' => __('Posts customization [🧅]', $cebulaThemeName),
    'priority' => 30,
  ));
}

function customize_register_controls_front_page($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FrontPageLayoutStyle,
      array(
        'label' => __('Layout style for front page [🧅]', $cebulaThemeName),
        'section' => 'static_front_page',
        'settings' => CblCustomSettings::FrontPageLayoutStyle,
        'type' => 'radio',
        'choices' => array(
          'grid' => __('Grid'),
          'list' => __('List')
        )
      )
    )
  );
}

function customize_register_controls_colors($wp_customize) {
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::NavbarBackgroundColor,
    array(
      'label' => __('Top Navbar background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::NavbarBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::NavbarTextColor,
    array(
      'label' => __('Top Navbar text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::NavbarTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::FooterBackgroundColor,
    array(
      'label' => __('Bottom Footer background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::FooterBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::FooterTextColor,
    array(
      'label' => __('Bottom Footer text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::FooterTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeaderBackgroundColor,
    array(
      'label' => __('Post header background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::PostHeaderBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeaderTextColor,
    array(
      'label' => __('Post header text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::PostHeaderTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeadingBackgroundColor,
    array(
      'label' => __('Post heading background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::PostHeadingBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeadingTextColor,
    array(
      'label' => __('Post heading text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::PostHeadingTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::CategoryHeadingBackgroundColor,
    array(
      'label' => __('Category heading background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::CategoryHeadingBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::CategoryHeadingTextColor,
    array(
      'label' => __('Category heading text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::CategoryHeadingTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainBackgroundColor,
    array(
      'label' => __('Main background [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::MainBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainTextColor,
    array(
      'label' => __('Main text [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::MainTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainLinkColor,
    array(
      'label' => __('Links [🧅]', $cebulaThemeName),
      'section' => 'colors',
      'settings' => CblCustomSettings::MainLinkColor,
    ))
  );
}

function customize_register_controls_posts($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::AnimatedStickyPostHeader,
      array(
        'label' => __('Animated sticky header [🧅]', $cebulaThemeName),
        'section' => CblCustomSections::Posts,
        'settings' => CblCustomSettings::AnimatedStickyPostHeader,
        'type' => 'checkbox',
      )
    )
  );
}

function customize_register_controls($wp_customize) {
  customize_register_controls_front_page($wp_customize);
  customize_register_controls_colors($wp_customize);
  customize_register_controls_posts($wp_customize);
}

function customize_register($wp_customize) {
  customize_register_setting($wp_customize);
  customize_register_sections($wp_customize);
  customize_register_controls($wp_customize);
}

function cebula_customize_css() {
  ?>
    <style type="text/css">
      :root {
        --main-footer-background-color: <?php echo get_theme_mod(CblCustomSettings::FooterBackgroundColor, CblDefaultSettings::FooterBackgroundColor); ?>;
        --main-footer-text-color: <?php echo get_theme_mod(CblCustomSettings::FooterTextColor, CblDefaultSettings::FooterTextColor); ?>;
        --main-navbar-background-color: <?php echo get_theme_mod(CblCustomSettings::NavbarBackgroundColor, CblDefaultSettings::NavbarBackgroundColor); ?>;
        --main-navbar-text-color: <?php echo get_theme_mod(CblCustomSettings::NavbarTextColor, CblDefaultSettings::NavbarTextColor); ?>;
        --post-header-background-color: <?php echo get_theme_mod(CblCustomSettings::PostHeaderBackgroundColor, CblDefaultSettings::PostHeaderBackgroundColor); ?>;
        --post-header-text-color: <?php echo get_theme_mod(CblCustomSettings::PostHeaderTextColor, CblDefaultSettings::PostHeaderTextColor); ?>;
        --post-heading-background-color: <?php echo get_theme_mod(CblCustomSettings::PostHeadingBackgroundColor, CblDefaultSettings::PostHeadingBackgroundColor); ?>;
        --post-heading-text-color: <?php echo get_theme_mod(CblCustomSettings::PostHeadingTextColor, CblDefaultSettings::PostHeadingTextColor); ?>;
        --category-heading-background-color: <?php echo get_theme_mod(CblCustomSettings::CategoryHeadingBackgroundColor, CblDefaultSettings::CategoryHeadingBackgroundColor); ?>;
        --category-heading-text-color: <?php echo get_theme_mod(CblCustomSettings::CategoryHeadingTextColor, CblDefaultSettings::CategoryHeadingTextColor); ?>;
        --main-background-color: <?php echo get_theme_mod(CblCustomSettings::MainBackgroundColor, CblDefaultSettings::MainBackgroundColor); ?>;
        --main-text-color: <?php echo get_theme_mod(CblCustomSettings::MainTextColor, CblDefaultSettings::MainTextColor); ?>;
        --main-link-color: <?php echo get_theme_mod(CblCustomSettings::MainLinkColor, CblDefaultSettings::MainLinkColor); ?>;
      }
    </style>
  <?php
}

function cebula_customizer_live_preview()
{
	wp_enqueue_script(
    'cebula-themecustomizer',
    get_template_directory_uri().'/js/theme-customizer.js',
    array('jquery', 'customize-preview'),
    '',
    true
	);
}

add_action('customize_preview_init', 'cebula_customizer_live_preview');
add_action('wp_head', 'cebula_customize_css');

?>