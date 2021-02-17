<?php get_header(); ?>
<main>
  <?php
    $categoryBannerVisible = get_theme_mod(CblCustomSettings::CategoryHeaderVisible, CblDefaultSettings::CategoryHeaderVisible);
    ?>
    <?php if ($categoryBannerVisible): ?>
      <header id="category-header">
        <h1 class="category-title">Kategoria: <?php single_cat_title(); ?></h1>
      </header>
    <?php endif; ?>
  <?php include get_theme_file_path( '/partial-views/list-view.php' ); ?>
</main>

<?php get_footer(); ?>
