<!DOCTYPE html>
<html>
  <head>
    <?php
      wp_head();
      $fontAwesomeId = '';
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
          $attId = get_theme_mod('cebula_logo_image');
          if (!empty($attId)) {            
            $url = wp_get_attachment_url($attId);
            echo '<img src="'.$url.'" alt="'.get_bloginfo('name').'" />';
          } else {
            echo '<h1>'.bloginfo('name').'</h1>';
          }
        ?>
      </a>
      <?php wp_nav_menu(
        array(
          'theme-location' => 'top-menu',
          'menu-class' => 'navigation'
        )
      ) ?>
    </header>
