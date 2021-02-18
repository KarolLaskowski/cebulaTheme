<?php get_header(); ?>

<main>
  <div class="container-single">
    <?php
      $drop_cap_class = get_theme_mod(CblCustomSettings::DropCap, CblDefaultSettings::DropCap);
      if(has_post_thumbnail()): ?>
      <section class="page-column image-column">
        <a href="<?php the_post_thumbnail_url('original'); ?>">
          <img src="<?php the_post_thumbnail_url('post-side'); ?>" />
        </a>
      </section>
    <?php endif; ?>
    <section class="page-column text-column <?php echo $drop_cap_class; ?>">
      <div class="post-header <?php echo (get_theme_mod(CblCustomSettings::AnimatedStickyPostHeader, CblDefaultSettings::AnimatedStickyPostHeader) ? '' : 'hidden'); ?>">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </div>
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>      

      <div class="post-meta">
        <?php 
          $authorOn = get_theme_mod(CblCustomSettings::PostAuthorVisible, CblDefaultSettings::PostAuthorVisible) == 1;
          $datesOn = get_theme_mod(CblCustomSettings::PostDatesVisible, CblDefaultSettings::PostDatesVisible) == 1;
          if ($authorOn || $datesOn) {
            echo '<p>';
          }
          if ($authorOn) {
            ?>
            Przez <?php the_author(); ?>&nbsp;
            <?php
          }
          if($datesOn) {
            echo 'dnia&nbsp;'.get_the_time('F jS, Y').'&nbsp;';
            $u_time = get_the_time('U');
            $u_modified_time = get_the_modified_time('U');
            if ($u_modified_time >= $u_time + 86400) {
              echo "(aktualizacja ";
              the_modified_time('F jS, Y');
              echo ") ";
            }
          }
          if ($authorOn || $datesOn) {
            echo '</p>';
          }
        ?>
        <?php if (get_theme_mod(CblCustomSettings::PostTagsVisible, CblDefaultSettings::PostTagsVisible) == 1) : ?>
          <p>Tagi:&nbsp;
          <?php
            $i = 0;
            $tags = get_the_tags($post->ID);
            if(!empty($tags)) {
              foreach ($tags as $tag) {
                ?>
                <span class="wpb-tag">
                  <a href="<?php echo get_tag_link($tag->term_id); ?>">
                    <?php echo $tag->name ?>
                  </a>
                </span>
              <?php
                if (++$i < count($tags)) {
                  echo "&nbsp;|&nbsp;";
                }
              }
            }
          ?>
        </p>
        <?php endif; ?>
        <?php if (get_theme_mod(CblCustomSettings::PostCategoriesVisible, CblDefaultSettings::PostCategoriesVisible) == 1) : ?>
        <p>Kategorie:&nbsp;
          <?php
            $i = 0;
            $categories = get_the_category($post->ID);
            foreach ($categories as $category) {
              ?>
              <span class="wpb-category">
                <a href="<?php echo get_category_link($category->term_id); ?>">
                  <?php echo $category->name ?>
                </a>
              </span>
            <?php
              if (++$i < count($categories)) {
                echo "&nbsp;|&nbsp;";
              }
            }
          ?>
        </p>
        <?php endif; ?>
        <?php if (get_theme_mod(CblCustomSettings::PostPrevNextLinksVisible, CblDefaultSettings::PostPrevNextLinksVisible) == 1) : ?>
          <p class="float-to-sides">
            <span><?php previous_post_link('&laquo; %link', 'Poprzedni post', false, '', 'category'); ?></span>
            <span><?php next_post_link('%link &raquo;', 'Następny post', false, '', 'category'); ?></span>
          </p>
        <?php endif; ?>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
