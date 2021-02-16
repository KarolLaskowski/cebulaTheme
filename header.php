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
        <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" />
      </a>
      <?php wp_nav_menu(
        array(
          'theme-location' => 'top-menu',
          'menu-class' => 'navigation'
        )
      ) ?>
    </header>
