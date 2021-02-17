<?php

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
      CblCustomSettings::TopBannerVisible,
      array(
        'label' => __('Front Page top banner visible [🧅]', Consts::CebulaThemeName),
        'section' => Sections::StaticFrontPage,
        'settings' => CblCustomSettings::TopBannerVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      CblCustomSettings::TopBannerImage,
      array(
        'mime_type' => 'image',
        'section' => Sections::StaticFrontPage,
        'label' => __('Front Page top banner image [🧅]', Consts::CebulaThemeName),
        'description' => __('Loaded from Media Explorer. Image will not be rendered if not provided here.', Consts::CebulaThemeName)
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::TopBannerTitle,
      array(
        'section' => Sections::StaticFrontPage,
        'label' => __('Front Page top banner [🧅]', Consts::CebulaThemeName),
        'type' => 'text',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::TopBannerText,
      array(
        'section' => Sections::StaticFrontPage,
        'label' => __('Front Page top banner text [🧅]', Consts::CebulaThemeName),
        'type' => 'textarea',
      )
    )
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::TopBannerLeftBackgroundColor,
    array(
      'label' => __('Top banner left side background color [🧅]', Consts::CebulaThemeName),
      'section' => Sections::StaticFrontPage,
      'settings' => CblCustomSettings::TopBannerLeftBackgroundColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::TopBannerLeftTextColor,
    array(
      'label' => __('Top banner left side text color [🧅]', Consts::CebulaThemeName),
      'section' => Sections::StaticFrontPage,
      'settings' => CblCustomSettings::TopBannerLeftTextColor,
    ))
  );
  $wp_customize->add_control( 
    new WP_Customize_Color_Control(
    $wp_customize,
    CblCustomSettings::TopBannerRightBackgroundColor,
    array(
      'label' => __('Top banner right side background color [🧅]', Consts::CebulaThemeName),
      'section' => Sections::StaticFrontPage,
      'settings' => CblCustomSettings::TopBannerRightBackgroundColor,
    ))
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::TopBannerClipPathSlant,
      array(
        'section' => Sections::StaticFrontPage,
        'label' => __('Top banner slant between left and right side (% of total width) [🧅]', Consts::CebulaThemeName),
        'type' => 'number',
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
      CblCustomSettings::DropCap,
      array(
        'label' => __('Drop cap style for posts paragraphs [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::DropCap,
        'type' => 'radio',
        'choices' => array(
          DropCapOptions::EveryParagraph => __('Every paragraph'),
          DropCapOptions::FirstParagraphOnly => __('First paragraph only'),
          DropCapOptions::Nowhere => __('No drop cap')
        )
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::CategoryHeaderVisible,
      array(
        'label' => __('Visible category header on posts list [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::CategoryHeaderVisible,
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

function customize_register_controls_social($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FacebookLink,
      array(
        'label' => __('Facebook [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::FacebookLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::InstagramLink,
      array(
        'label' => __('Instagram [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::InstagramLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::MailLink,
      array(
        'label' => __('Gmail [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::MailLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::LinkedInLink,
      array(
        'label' => __('LinkedIn [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::LinkedInLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::TwitterLink,
      array(
        'label' => __('Twitter [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::TwitterLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::YouTubeLink,
      array(
        'label' => __('YouTube [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::YouTubeLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ResearchGateLink,
      array(
        'label' => __('ResearchGate [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::ResearchGateLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ORCIDLink,
      array(
        'label' => __('ORCID [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::ORCIDLink,
        'type' => 'url',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::RSSLink,
      array(
        'label' => __('RSS [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::RSSLink,
        'type' => 'url',
      )
    )
  );
} 

function customize_register_controls($wp_customize) {
  customize_register_controls_front_page($wp_customize);
  customize_register_controls_title_and_tagline($wp_customize);
  customize_register_controls_colors($wp_customize);
  customize_register_controls_posts($wp_customize);
  customize_register_controls_social($wp_customize);
}

?>