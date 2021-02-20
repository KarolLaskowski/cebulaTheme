<div class="grid-container">
  <?php
    if (have_posts()) : while (have_posts()) : the_post();
    $isBigPhoto = get_post_meta($post->ID, 'bigger_photo_thumbnail', true) == 1;
    $showExcerpt = get_theme_mod(CblCustomSettings::ShowExcerptOnGridView, CblDefaultSettings::ShowExcerptOnGridView);
  ?>
  <div class="card <?php if($isBigPhoto) echo 'card-bigger-photo'; ?>">
    <?php if(has_post_thumbnail()): ?>
      <img class="card-img" src="<?php the_post_thumbnail_url($isBigPhoto ? 'thumbnail-big' : 'thumbnail-small'); ?>" />
    <?php endif; ?>
    <div class="card-text <?php if($showExcerpt) echo 'card-with-excerpt'; ?>">
      <a href="<?php the_permalink(); ?>">
        <div class="card-container">
            <div class="card-title">
                <h3><?php the_title(); ?></h3>
            </div>
            <?php if($showExcerpt): ?>
              <div class="card-excerpt">
                <?php the_excerpt(); ?>
              </div>
            <?php endif; ?>
          </div>
        </a>
      </div>
    </div>
  <?php endwhile; endif; ?>
</div>