<?php get_header(); ?>

<main>
  <header id="category-header">
    <h1 class="category-title">Kategoria: <?php single_cat_title(); ?></h1>
  </header>
  <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="card <?php if(get_post_meta($post->ID, 'BiggerPhoto', true) == 'true') echo 'card-bigger-photo'; ?>">    
      <?php if(has_post_thumbnail()): ?>
        <img class="card-img" src="<?php the_post_thumbnail_url('thumbnail-small'); ?>" />
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>">
        <div class="card-text">
          <div class="card-container">
            <div class="card-title">
                <h3><?php the_title(); ?></h3>
            </div>
            <div class="card-excerpt">
              <?php the_excerpt(); ?>
            </div>
          </div>
        </div>
      </a>
    </div>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
