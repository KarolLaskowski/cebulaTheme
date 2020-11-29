<!DOCTYPE html>
<html>
  <head>
    <?php wp_head(); ?>
    <title><?php bloginfo('name'); ?></title>
  </head>

  <body <?php body_class(); ?>>
    <header id="navbar">
      <a href="<?php bloginfo('url'); ?>">
        <h1>
          <?php bloginfo('name'); ?>
        </h1>
      </a>
      <?php wp_nav_menu(
        array(
          'theme-location' => 'top-menu',
          'menu-class' => 'navigation'
        )
      ) ?>
    </header>
