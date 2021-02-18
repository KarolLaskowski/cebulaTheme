    <footer id="main-footer">
      <div class="links">
        <div class="footer-links-col">
          <?php if(get_theme_mod(CblCustomSettings::FooterDescriptionColumnVisible, CblDefaultSettings::FooterDescriptionColumnVisible)): ?>
            <a href="<?php bloginfo('url'); ?>">
              <h2><?php bloginfo('name'); ?></h2>
            </a>
            <?php bloginfo('description'); ?>
          <?php endif; ?>
        </div>
        <div class="footer-links-col menu-col">
          <?php if(get_theme_mod(CblCustomSettings::FooterSecondColumnVisible, CblDefaultSettings::FooterSecondColumnVisible)): ?>
            <h4><?php echo esc_html(get_menu_by_location('footer-menu-left')->name); ?></h4>
            <?php wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-left',
                'menu_class' => 'footer-menu-left'
              )
            ) ?>
          <?php endif; ?>
        </div>
        <div class="footer-links-col menu-col">
          <?php if(get_theme_mod(CblCustomSettings::FooterThirdColumnVisible, CblDefaultSettings::FooterThirdColumnVisible)): ?>
            <h4><?php echo esc_html(get_menu_by_location('footer-menu-right')->name); ?></h4>
            <?php wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-right',
                'menu_class' => 'footer-menu-right'
              )
            ) ?>
          <?php endif; ?>
        </div>
        <div class="footer-links-col menu-col">
          <?php
            if (get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation) == SocialLinksLocations::BottomRightFooter) {
              include get_theme_file_path('/partial-views/social-links.php');
            }
          ?>
        </div>
      </div>
      <?php
        if (get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation) == SocialLinksLocations::BottomLeftFooter) {
          include get_theme_file_path('/partial-views/social-links.php');
        }
      ?>
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