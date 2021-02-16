<?php get_header(); ?>

<main>
  <?php 
    $frontPageLayout = get_theme_mod('cebula_front_page_layout');
    switch($frontPageLayout) {
      case 'list':
        include get_theme_file_path('/partial-views/list-view.php');
        break;
      case 'grid' || '':
        include get_theme_file_path('/partial-views/grid-view.php');
        break;          
    }
  ?>
</main>

<?php get_footer(); ?>
