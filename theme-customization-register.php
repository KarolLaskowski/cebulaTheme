<?php

include get_theme_file_path('enums.php');

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

function customize_register_setting_title_and_tagline($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::LogoImage, array(
    'default' => CblDefaultSettings::LogoImage,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_front_page($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::FrontPageLayoutStyle, array(
    'default' => CblDefaultSettings::FrontPageLayoutStyle,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::FrontPageTopImage, array(
    'default' => CblDefaultSettings::FrontPageTopImage,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::FrontPageTopImageVisible, array(
    'default' => CblDefaultSettings::FrontPageTopImageVisible,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_posts($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::AnimatedStickyPostHeader, array(
    'default' => CblDefaultSettings::AnimatedStickyPostHeader,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostAuthorVisible, array(
    'default' => CblDefaultSettings::PostAuthorVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostDatesVisible, array(
    'default' => CblDefaultSettings::PostDatesVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostTagsVisible, array(
    'default' => CblDefaultSettings::PostTagsVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostCategoriesVisible, array(
    'default' => CblDefaultSettings::PostCategoriesVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostPrevNextLinksVisible, array(
    'default' => CblDefaultSettings::PostPrevNextLinksVisible,
    'transport' => 'refresh',
  ));
}

function customize_register_setting($wp_customize) {
  customize_register_setting_front_page($wp_customize);
  customize_register_setting_title_and_tagline($wp_customize);
  customize_register_setting_colors($wp_customize);
  customize_register_setting_posts($wp_customize);
}

function customize_register_sections($wp_customize) {
  $wp_customize->add_section(Sections::CblPosts , array(
    'title' => __('Posts customization [🧅]', Consts::CebulaThemeName),
    'priority' => 30,
  ));
}

function customize_register_controls_title_and_tagline($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      CblCustomSettings::LogoImage,
      array(
        'mime_type' => 'image',
        'section' => Sections::TitleAndTagline,
        'label' => __('Logo image [🧅]', Consts::CebulaThemeName),
        'description' => __('Loaded from Media Explorer', Consts::CebulaThemeName)
      )
    )
  );
}

function customize_register_controls_front_page($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FrontPageLayoutStyle,
      array(
        'label' => __('Layout style for front page [🧅]', Consts::CebulaThemeName),
        'section' => Sections::StaticFrontPage,
        'settings' => CblCustomSettings::FrontPageLayoutStyle,
        'type' => 'radio',
        'choices' => array(
          FrontPageLayoutStyles::MasonryGrid => __('Masonry grid'),
          FrontPageLayoutStyles::List => __('List')
        )
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FrontPageTopImageVisible,
      array(
        'label' => __('Front Page top image visible [🧅]', Consts::CebulaThemeName),
        'section' => Sections::StaticFrontPage,
        'settings' => CblCustomSettings::FrontPageTopImageVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      CblCustomSettings::FrontPageTopImage,
      array(
        'mime_type' => 'image',
        'section' => Sections::StaticFrontPage,
        'label' => __('Front Page top image [🧅]', Consts::CebulaThemeName),
        'description' => __('Loaded from Media Explorer', Consts::CebulaThemeName)
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
      'label' => __('Top Navbar background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::NavbarBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::NavbarTextColor,
    array(
      'label' => __('Top Navbar text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::NavbarTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::FooterBackgroundColor,
    array(
      'label' => __('Bottom Footer background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::FooterBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::FooterTextColor,
    array(
      'label' => __('Bottom Footer text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::FooterTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeaderBackgroundColor,
    array(
      'label' => __('Post header background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::PostHeaderBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeaderTextColor,
    array(
      'label' => __('Post header text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::PostHeaderTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeadingBackgroundColor,
    array(
      'label' => __('Post heading background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::PostHeadingBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::PostHeadingTextColor,
    array(
      'label' => __('Post heading text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::PostHeadingTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::CategoryHeadingBackgroundColor,
    array(
      'label' => __('Category heading background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::CategoryHeadingBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::CategoryHeadingTextColor,
    array(
      'label' => __('Category heading text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::CategoryHeadingTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainBackgroundColor,
    array(
      'label' => __('Main background [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::MainBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainTextColor,
    array(
      'label' => __('Main text [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
      'settings' => CblCustomSettings::MainTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::MainLinkColor,
    array(
      'label' => __('Links [🧅]', Consts::CebulaThemeName),
      'section' => Sections::Colors,
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
        'label' => __('Animated sticky header visible [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::AnimatedStickyPostHeader,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostAuthorVisible,
      array(
        'label' => __('Visible author [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostAuthorVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostDatesVisible,
      array(
        'label' => __('Visible creation and modification dates [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostDatesVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostTagsVisible,
      array(
        'label' => __('Visible tags [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostTagsVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostCategoriesVisible,
      array(
        'label' => __('Visible categories [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostCategoriesVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostPrevNextLinksVisible,
      array(
        'label' => __('Visible Previous-Next buttons [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostPrevNextLinksVisible,
        'type' => 'checkbox',
      )
    )
  );
}

function customize_register_controls($wp_customize) {
  customize_register_controls_front_page($wp_customize);
  customize_register_controls_title_and_tagline($wp_customize);
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