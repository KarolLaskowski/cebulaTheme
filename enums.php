<?php

class CblColors {
  const color_PANTONE_14_3905_tcx = '#c5c0d0';
  const color_PANTONE_19_3940_tcx = '#263056';
  const color_PANTONE_13_4405_tcx = '#bfcdcc';
  const color_black = '#000';
  const color_white = '#fff';
}

class Consts {
  const CebulaThemeName = 'cebulaTheme';
}

class FrontPageLayoutStyles {
  const MasonryGrid = 'grid';
  const List = 'list';
}

class DropCapOptions {
  const EveryParagraph = 'dc-every-paragraph';
  const FirstParagraphOnly = 'dc-first-only';
  const Nowhere = 'dc-none';
}

class CblCustomSettings {
  const FrontPageLayoutStyle = 'cebula_front_page_layout';
  const AnimatedStickyPostHeader = 'cebula_animated_sticky_post_header';
  const LogoImage = 'cebula_logo_image';
  const TopBannerVisible = 'cebula_front_page_top_image_visible';
  const TopBannerImage = 'cebula_front_page_top_banner_image';
  const TopBannerTitle = 'cebula_front_page_top_banner_title';
  const TopBannerText = 'cebula_front_page_top_banner_text';
  const TopBannerLeftBackgroundColor = 'cebula_top_banner_left_background_color';
  const TopBannerLeftTextColor = 'cebula_top_banner_left_text_color';
  const TopBannerRightBackgroundColor = 'cebula_top_banner_right_background_color';
  const TopBannerClipPathSlant = 'cebula_top_banner_clip_path_slant';
  const CategoryHeaderVisible = 'cebula_category_header_visible';
  const GridViewCardTextRotation = 'cebula_grid_view_card_text_rotation';
  const PostRowImageHeight = 'cebula_post_row_image_height';
  const ListViewSidesPadding = 'cebula_list_view_sides_padding';
  const PostAuthorVisible = 'cebula_post_author_visible';
  const PostDatesVisible = 'cebula_post_dates_visible';
  const PostTagsVisible = 'cebula_post_tags_visible';
  const PostCategoriesVisible = 'cebula_post_categories_visible';
  const PostPrevNextLinksVisible = 'cebula_post_prev_next_links_visible';
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
  const DropCap = 'cebula_drop_cap';
  const FacebookLink = 'cebula_facebook_link';
  const InstagramLink = 'cebula_instagram_link';
  const MailLink = 'cebula_gmail_link';
  const TwitterLink = 'cebula_twitter_link';
  const LinkedInLink = 'cebula_linkedin_link';
  const YouTubeLink = 'cebula_youtube_link';
  const ResearchGateLink = 'cebula_researchgate_link';
  const ORCIDLink = 'cebula_orcid_link';
  const RSSLink = 'cebula_rss_link';
}

class CblDefaultSettings {
  const FrontPageLayoutStyle = FrontPageLayoutStyles::MasonryGrid;
  const AnimatedStickyPostHeader = true;
  const LogoImage = '';
  const TopBannerVisible = true;
  const TopBannerImage = '';
  const TopBannerTitle = 'Cebula Theme site!';
  const TopBannerText = 'Hello there! Welcome to my blog!';
  const TopBannerLeftBackgroundColor = CblColors::color_PANTONE_19_3940_tcx;
  const TopBannerLeftTextColor = CblColors::color_PANTONE_14_3905_tcx;
  const TopBannerRightBackgroundColor = CblColors::color_PANTONE_14_3905_tcx;
  const TopBannerClipPathSlant = 20;
  const CategoryHeaderVisible = true;
  const GridViewCardTextRotation = 5;
  const PostRowImageHeight = 400;
  const ListViewSidesPadding = 300;
  const PostAuthorVisible = true;
  const PostDatesVisible = true;
  const PostTagsVisible = true;
  const PostCategoriesVisible = true;
  const PostPrevNextLinksVisible = true;
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
  const DropCap = DropCapOptions::EveryParagraph;
  const FacebookLink = '';
  const InstagramLink = '';
  const MailLink = '';
  const TwitterLink = '';
  const LinkedInLink = '';
  const YouTubeLink = '';
  const ResearchGateLink = '';
  const ORCIDLink = '';
  const RSSLink = '';
}

class Sections {
  const CblPosts = 'cebula_posts';
  const StaticFrontPage = 'static_front_page';
  const Colors = 'colors';
  const TitleAndTagline = 'title_tagline';
  const BackgroundImage = 'background_image';
  const NavMenus = 'nav_menus';
  const Widgets = 'widgets';
  const CustomCSS = 'custom_css';
  const SocialLinks = 'cebula_social';
}

class SocialIconClasses {
  const FacebookLink = 'fab fa-facebook';
  const InstagramLink = 'fab fa-instagram';
  const MailLink = 'far fa-envelope';
  const TwitterLink = 'fab fa-twitter';
  const LinkedInLink = 'fab fa-linkedin-in';
  const YouTubeLink = 'fab fa-youtube';
  const ResearchGateLink = 'fab fa-researchgate';
  const ORCIDLink = 'fab fa-orcid';
  const RSSLink = 'fas fa-rss';
}

?>