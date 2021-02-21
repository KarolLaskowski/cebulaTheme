<section class="list-view">
  <div class="list-container">
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
            <?php 
            $showExcerpt = get_theme_mod(CblCustomSettings::ShowExcerptOnListView, CblDefaultSettings::ShowExcerptOnListView);
            if($showExcerpt): ?>
            <div class="post-row--card-excerpt">
              <?php the_excerpt(); ?>
            </div>
            <?php endif; ?>
          </div>
        </a>
      </article>
    <?php endwhile; endif; ?>
  </div>
</section>