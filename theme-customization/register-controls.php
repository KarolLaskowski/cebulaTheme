<?php

function customize_register_controls_title_and_tagline($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::LogoStyle,
      array(
        'label' => __('How to show the logo on navbar? [🧅]', Consts::CebulaThemeName),
        'section' => Sections::TitleAndTagline,
        'settings' => CblCustomSettings::LogoStyle,
        'type' => 'select',
        'choices' => array(
          LogoStyles::StaticImage => __('Static image'),
          LogoStyles::ImageAndText => __('Image and text'),
          LogoStyles::OnlyText => __('Only text'),
          LogoStyles::Custom => __('Custom (edit "/partial-views/logo.php" file)')
        )
      )
    )
  );
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
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::CustomLogoText,
      array(
        'section' => Sections::TitleAndTagline,
        'label' => __('Custom logo text [🧅]', Consts::CebulaThemeName),
        'description' => __('Used, if not empty. Overrides Site title. Visible on "Image and text", "Only text" and "Custom" Logo styles.', Consts::CebulaThemeName),
        'type' => 'text',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FontAwesomeId,
      array(
        'section' => Sections::TitleAndTagline,
        'label' => __('Font Awesome dev ID [🧅]', Consts::CebulaThemeName),
        'type' => 'text',
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
        'type' => 'select',
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
      CblCustomSettings::MainMinimumWidth,
      array(
        'section' => Sections::CblPosts,
        'label' => __('Minimum width of the content (in px) [🧅]', Consts::CebulaThemeName),
        'type' => 'number',
        'input_attrs' => array(
          'min'   => 400,
          'max'   => 5000,
        )
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ShowExcerptOnGridView,
      array(
        'label' => __('Show posts excerpts on grid cards [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::ShowExcerptOnGridView,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ShowExcerptOnListView,
      array(
        'label' => __('Show posts excerpts on list view [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::ShowExcerptOnListView,
        'type' => 'checkbox',
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
      CblCustomSettings::PostRowImageHeight,
      array(
        'section' => Sections::CblPosts,
        'label' => __('List view thumbnails size (in px) [🧅]', Consts::CebulaThemeName),
        'type' => 'number',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PreWrapWhenNeeded,
      array(
        'label' => __('Wrapping text in Code blocks and Verse blocks [🧅]', Consts::CebulaThemeName),
        'section' => Sections::StaticFrontPage,
        'settings' => CblCustomSettings::PreWrapWhenNeeded,
        'type' => 'select',
        'choices' => array(
          PreWrapOptions::Normal => __('normal - reduce spaces and new lines; line wrap'),
          PreWrapOptions::Pre => __('pre - don\'t reduce spaces; keep new lines; no line wrap (This setting keeps text\'s original spacing and line breaks.)'),
          PreWrapOptions::PreWrap => __('pre-wrap - don\'t reduce spaces; keep new lines; line wrap (Recommended setting.)'),
          PreWrapOptions::PreLine => __('pre-line - reduce spaces; keep new lines; line wrap'),
        )
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::GridViewCardTextRotation,
      array(
        'section' => Sections::CblPosts,
        'label' => __('Rotation of card text on grid view on hover (in degrees) [🧅]', Consts::CebulaThemeName),
        'type' => 'number',
      )
    )
  );
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
        'type' => 'select',
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
      CblCustomSettings::PostCreateDateVisible,
      array(
        'label' => __('Visible creation date [🧅]', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostCreateDateVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::PostUpdateDateVisible,
      array(
        'label' => __('Visible modification dates [🧅]', Consts::CebulaThemeName),
        'description' => __('(but only if creation date is visible)', Consts::CebulaThemeName),
        'section' => Sections::CblPosts,
        'settings' => CblCustomSettings::PostUpdateDateVisible,
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
      CblCustomSettings::SocialLinksLocation,
      array(
        'label' => __('Social links box location [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::SocialLinksLocation,
        'type' => 'select',
        'choices' => array(
          SocialLinksLocations::Nowhere => __('Do not show Social Links'),
          SocialLinksLocations::TopRightNavbar => __('Top right navbar'),
          SocialLinksLocations::TopMiddleNavbar => __('Top middle navbar'),
          SocialLinksLocations::BottomLeftFooter => __('Bottom left footer'),
          SocialLinksLocations::BottomRightFooter => __('Bottom right footer'),
        )
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::SocialLinkStyle,
      array(
        'label' => __('Social links style [🧅]', Consts::CebulaThemeName),
        'section' => Sections::SocialLinks,
        'settings' => CblCustomSettings::SocialLinkStyle,
        'type' => 'select',
        'choices' => array(
          SocialLinkStyles::Icon => __('Icon only'),
          SocialLinkStyles::Label => __('Label only'),
          SocialLinkStyles::IconLabel => __('Icon and label')
        )
      )
    )
  );
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
        'label' => __('e-mail address [🧅]', Consts::CebulaThemeName),
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

function customize_register_controls_contact_page($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Media_Control(
      $wp_customize,
      CblCustomSettings::ContactPagePhoto,
      array(
        'mime_type' => 'image',
        'section' => Sections::ContactPage,
        'label' => __('Contact page photo [🧅]', Consts::CebulaThemeName),
        'description' => __('Loaded from Media Explorer', Consts::CebulaThemeName)
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ContactTitle,
      array(
        'section' => Sections::ContactPage,
        'label' => __('Your contact page title [🧅]', Consts::CebulaThemeName),
        'description' => __('&lt;em&gt;, &lt;strong&gt; or &amp;nbsp; are allowed.', Consts::CebulaThemeName),
        'type' => 'text',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::ContactDescription,
      array(
        'section' => Sections::ContactPage,
        'label' => __('Your description [🧅]', Consts::CebulaThemeName),
        'description' => __('&lt;em&gt;, &lt;strong&gt; or &amp;nbsp; are allowed.', Consts::CebulaThemeName),
        'type' => 'text',
      )
    )
  );
}

function customize_register_controls_footer($wp_customize) {
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FooterDescriptionColumnVisible,
      array(
        'label' => __('Visible footer description column [🧅]', Consts::CebulaThemeName),
        'section' => Sections::Footer,
        'settings' => CblCustomSettings::FooterDescriptionColumnVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FooterSecondColumnVisible,
      array(
        'label' => __('Visible footer left links column [🧅]', Consts::CebulaThemeName),
        'section' => Sections::Footer,
        'settings' => CblCustomSettings::FooterSecondColumnVisible,
        'type' => 'checkbox',
      )
    )
  );
  $wp_customize->add_control(
    new WP_Customize_Control(
      $wp_customize,
      CblCustomSettings::FooterThirdColumnVisible,
      array(
        'label' => __('Visible footer right links column [🧅]', Consts::CebulaThemeName),
        'section' => Sections::Footer,
        'settings' => CblCustomSettings::FooterThirdColumnVisible,
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
  customize_register_controls_social($wp_customize);
  customize_register_controls_footer($wp_customize);
  customize_register_controls_contact_page($wp_customize);
}

?>