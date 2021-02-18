<?php

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
  $wp_customize->add_setting(CblCustomSettings::FontAwesomeId, array(
    'default' => CblDefaultSettings::FontAwesomeId,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_front_page($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::FrontPageLayoutStyle, array(
    'default' => CblDefaultSettings::FrontPageLayoutStyle,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerVisible, array(
    'default' => CblDefaultSettings::TopBannerVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerImage, array(
    'default' => CblDefaultSettings::TopBannerImage,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerTitle, array(
    'default' => CblDefaultSettings::TopBannerTitle,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerText, array(
    'default' => CblDefaultSettings::TopBannerText,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerLeftBackgroundColor, array(
    'default' => CblDefaultSettings::TopBannerLeftBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerLeftTextColor, array(
    'default' => CblDefaultSettings::TopBannerLeftTextColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerRightBackgroundColor, array(
    'default' => CblDefaultSettings::TopBannerRightBackgroundColor,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TopBannerClipPathSlant, array(
    'default' => CblDefaultSettings::TopBannerClipPathSlant,
    'transport' => 'refresh',
  ));
}

function customize_register_setting_posts($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::CategoryHeaderVisible, array(
    'default' => CblDefaultSettings::CategoryHeaderVisible,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::PostRowImageHeight, array(
    'default' => CblDefaultSettings::PostRowImageHeight,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::ListViewSidesPadding, array(
    'default' => CblDefaultSettings::ListViewSidesPadding,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::GridViewCardTextRotation, array(
    'default' => CblDefaultSettings::GridViewCardTextRotation,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::AnimatedStickyPostHeader, array(
    'default' => CblDefaultSettings::AnimatedStickyPostHeader,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::DropCap, array(
    'default' => CblDefaultSettings::DropCap,
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

function customize_register_setting_social($wp_customize) {
  $wp_customize->add_setting(CblCustomSettings::FacebookLink, array(
    'default' => CblDefaultSettings::FacebookLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::InstagramLink, array(
    'default' => CblDefaultSettings::InstagramLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::MailLink, array(
    'default' => CblDefaultSettings::MailLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TwitterLink, array(
    'default' => CblDefaultSettings::TwitterLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::TwitterLink, array(
    'default' => CblDefaultSettings::TwitterLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::LinkedInLink, array(
    'default' => CblDefaultSettings::LinkedInLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::YouTubeLink, array(
    'default' => CblDefaultSettings::YouTubeLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::RSSLink, array(
    'default' => CblDefaultSettings::RSSLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::ResearchGateLink, array(
    'default' => CblDefaultSettings::ResearchGateLink,
    'transport' => 'refresh',
  ));
  $wp_customize->add_setting(CblCustomSettings::ORCIDLink, array(
    'default' => CblDefaultSettings::ORCIDLink,
    'transport' => 'refresh',
  ));
}

function customize_register_setting($wp_customize) {
  customize_register_setting_front_page($wp_customize);
  customize_register_setting_title_and_tagline($wp_customize);
  customize_register_setting_colors($wp_customize);
  customize_register_setting_posts($wp_customize);
  customize_register_setting_social($wp_customize);
}

?>