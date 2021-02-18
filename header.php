<!DOCTYPE html>
<html>
  <head>
    <?php
      wp_head();
      $fontAwesomeId = get_theme_mod(CblCustomSettings::FontAwesomeId, CblDefaultSettings::FontAwesomeId);
      if (!empty($fontAwesomeId)) {
        echo '<script src="https://kit.fontawesome.com/'.$fontAwesomeId.'.js" crossorigin="anonymous"></script>';
      }
      ?>
    <title><?php bloginfo('name'); ?></title>
  </head>

  <body <?php body_class(); ?>>
    <header id="navbar">
      <a href="<?php bloginfo('url'); ?>">
        <?php
          $attId = get_theme_mod(CblCustomSettings::LogoImage, CblDefaultSettings::LogoImage);
          if (!empty($attId)) {            
            $url = wp_get_attachment_url($attId);
            echo '<img src="'.$url.'" alt="'.get_bloginfo('name').'" />';
          } else {
            echo '<h1>'.bloginfo('name').'</h1>';
          }
        ?>
      </a>
      <?php
      if (get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation) == SocialLinksLocations::TopMiddleNavbar) {
        include get_theme_file_path('/partial-views/social-links.php');
      }
      wp_nav_menu(
        array(
          'theme_location' => 'top-menu',
          'menu_class' => 'navigation'
        )
      );
      if (get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation) == SocialLinksLocations::TopRightNavbar) {
        include get_theme_file_path('/partial-views/social-links.php');
      }
      ?>
    </header>
