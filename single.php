<?php get_header(); ?>

<main>
  <div class="container-single">
    <?php if(has_post_thumbnail()): ?>
      <section class="page-column image-column">
        <a href="<?php the_post_thumbnail_url('original'); ?>">
          <img src="<?php the_post_thumbnail_url('post-side'); ?>" />
        </a>
      </section>
    <?php endif; ?>
    <section class="page-column text-column">
      <div class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </div>
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>
    </section>
  </div>
</main>

<?php get_footer(); ?>
