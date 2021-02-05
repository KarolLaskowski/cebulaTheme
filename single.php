<?php get_header(); ?>

<main>
  <div class="container-single">
    <?php
      $drop_cap_class = get_post_meta($post->ID, 'drop_cap', true);
      if(has_post_thumbnail()): ?>
      <section class="page-column image-column">
        <a href="<?php the_post_thumbnail_url('original'); ?>">
          <img src="<?php the_post_thumbnail_url('post-side'); ?>" />
        </a>
      </section>
    <?php endif; ?>
    <section class="page-column text-column <?php echo $drop_cap_class; ?>">
      <div class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </div>
      <header class="post-header">
        <h1 class="post-title"><?php the_title(); ?></h1>
      </header>
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php the_content(); ?>

      <?php endwhile; endif; ?>
      
      <div class="post-meta">
        <p>Przez <?php the_author(); ?> dnia <?php the_time('F jS, Y'); ?>
        <?php
          $u_time = get_the_time('U');
          $u_modified_time = get_the_modified_time('U');
          if ($u_modified_time >= $u_time + 86400) {
            echo " (Aktualizacja ";
            the_modified_time('F jS, Y');
            echo ") ";
          }
        ?>
        </p>
        <p>Kategorie:&nbsp;
          <?php
            $i = 0;
            $categories = get_the_category( $post->ID );
            foreach ( $categories as $category ) {
              echo '<span class="wpb-category"><a href="' . get_category_link( $category->term_id ) . '">' .  $category->name  . '</a></span>';
              if (++$i < count($categories)) {
                echo "&nbsp;|&nbsp;";
              }
            }
          ?>
        </p>
        <p class="float-to-sides">
          <span><?php previous_post_link('&laquo; %link', 'Poprzedni post', false, '', 'category'); ?></span>
          <span><?php next_post_link('%link &raquo;', 'Następny post', false, '', 'category'); ?></span>
        </p>
      </div>
    </section>
  </div>
</main>

<?php get_footer(); ?>
