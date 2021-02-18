<?php get_header(); ?>

<main>
  <?php
    $frontPageTopBannerVisible = get_theme_mod(CblCustomSettings::TopBannerVisible, CblDefaultSettings::TopBannerVisible);
    if ($frontPageTopBannerVisible) {
      include get_theme_file_path('/partial-views/front-page-top-banner.php');
    }
    $frontPageLayout = get_theme_mod(CblCustomSettings::FrontPageLayoutStyle, CblDefaultSettings::FrontPageLayoutStyle);
    switch($frontPageLayout) {
      case FrontPageLayoutStyles::List:
        include get_theme_file_path('/partial-views/list-view.php');
        break;
      case FrontPageLayoutStyles::MasonryGrid || '':
        include get_theme_file_path('/partial-views/grid-view.php');
        break;
    }
  ?>
</main>

<?php get_footer(); ?>
