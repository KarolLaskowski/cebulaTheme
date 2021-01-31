<?php get_header(); ?>
/**
 * Template for archive and category pages
 *
 */
<main>
  <header id="category-header">
    <h1 class="category-title">Kategoria: <?php single_cat_title(); ?></h1>
  </header>
  <div class="archives__container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article class="post-row">
        <a href="<?php the_permalink(); ?>">
          <div class="post-row--pic anim-border">
            <?php if(has_post_thumbnail()): ?>
              <img src="<?php the_post_thumbnail_url('thumbnail-small'); ?>" />
            <?php else: ?>
              <img src="http://placekitten.com/200/300" />
            <?php endif; ?>
          </div>
          <div class="post-row--text">
            <div class="post-row--card-title">
              <h2>
                <?php the_title(); ?>
              </h2>
            </div>
            <div class="post-row--card-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </a>
      </article>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
