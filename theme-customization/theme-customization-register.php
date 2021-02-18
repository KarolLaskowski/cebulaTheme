<?php

include get_theme_file_path('theme-customization/register-settings.php');

include get_theme_file_path('theme-customization/register-sections.php');

include get_theme_file_path('theme-customization/register-controls.php');

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
        --top-banner-left-background-color: <?php echo get_theme_mod(CblCustomSettings::TopBannerLeftBackgroundColor, CblDefaultSettings::TopBannerLeftBackgroundColor); ?>;
        --top-banner-left-text-color: <?php echo get_theme_mod(CblCustomSettings::TopBannerLeftTextColor, CblDefaultSettings::TopBannerLeftTextColor); ?>;
        --top-banner-right-background-color: <?php echo get_theme_mod(CblCustomSettings::TopBannerRightBackgroundColor, CblDefaultSettings::TopBannerRightBackgroundColor); ?>;
        --top-banner-clip-path-slant: calc(1vw * <?php echo get_theme_mod(CblCustomSettings::TopBannerClipPathSlant, CblDefaultSettings::TopBannerClipPathSlant); ?>);
        --post-row-image-height: calc(1px * <?php echo get_theme_mod(CblCustomSettings::PostRowImageHeight, CblDefaultSettings::PostRowImageHeight); ?>);
        --list-view-sides-padding: calc(1px * <?php echo get_theme_mod(CblCustomSettings::ListViewSidesPadding, CblDefaultSettings::ListViewSidesPadding); ?>);
        --grid-view-card-text-rotation: calc(1deg * <?php echo get_theme_mod(CblCustomSettings::GridViewCardTextRotation, CblDefaultSettings::GridViewCardTextRotation); ?>);
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