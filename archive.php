<?php get_header(); ?>
/**
 * Template for archive and category pages
 *
 */
<main>
  <header id="category-header">
    <h1 class="category-title">Kategoria: <?php single_cat_title(); ?></h1>
  </header>
  <?php include get_theme_file_path( '/partial-views/list-view.php' ); ?>
</main>

<?php get_footer(); ?>
