    <footer id="main-footer">
      <div class="links">
        <div class="footer-links-col">
          <a href="<?php bloginfo('url'); ?>">
            <h2><?php bloginfo('name'); ?></h2>
          </a>
          <?php bloginfo('description'); ?>
        </div>
        <div class="footer-links-col menu-col">
          <h4><?php echo esc_html(get_menu_by_location('footer-menu-left')->name); ?></h4>
          <?php wp_nav_menu(
            array(
              'theme_location' => 'footer-menu-left',
              'menu_class' => 'footer-menu-left'
            )
          ) ?>
        </div>
        <div class="footer-links-col menu-col">
          <h4><?php echo esc_html(get_menu_by_location('footer-menu-right')->name); ?></h4>
          <?php wp_nav_menu(
            array(
              'theme_location' => 'footer-menu-right',
              'menu_class' => 'footer-menu-right'
            )
          ) ?>
        </div>
      </div>
      <div class="dev">
        Theme by Karol L. @ 2021<br>
        <a href="https://www.codebake.dev/">www.codebake.dev</a>
      </div>
    </footer>

  </body>
  <?php wp_footer(); ?>
  <script type="text/javascript">
    MainModule.Init();
  </script>
</html>