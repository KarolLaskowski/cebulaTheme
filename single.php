<?php get_header(); ?>

<main>
  <div class="container-single">
    <section class="image-column">
      <?php if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url('post-side'); ?>" />
      <?php endif; ?>
    </section>
    <section class="text-column">
      <header id="category-header">
        <h1 class="category-title"><?php the_title(); ?></h1>
      </header>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </section>
  </div>
</main>
<?php get_footer(); ?>
