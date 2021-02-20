    <footer id="main-footer">
      <div class="links">
        <?php if(get_theme_mod(CblCustomSettings::FooterDescriptionColumnVisible, CblDefaultSettings::FooterDescriptionColumnVisible)): ?>
          <div class="footer-links-col">
            <a href="<?php bloginfo('url'); ?>">
              <h2><?php bloginfo('name'); ?></h2>
            </a>
            <?php bloginfo('description'); ?>
          </div>
        <?php endif; ?>
        <?php if(get_theme_mod(CblCustomSettings::FooterSecondColumnVisible, CblDefaultSettings::FooterSecondColumnVisible)): ?>
          <div class="footer-links-col menu-col">
            <h4><?php echo esc_html(get_menu_by_location('footer-menu-left')->name); ?></h4>
            <?php wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-left',
                'menu_class' => 'footer-menu-left'
              )
            ) ?>
          </div>
        <?php endif; ?>
        <?php if(get_theme_mod(CblCustomSettings::FooterThirdColumnVisible, CblDefaultSettings::FooterThirdColumnVisible)): ?>
          <div class="footer-links-col menu-col">
            <h4><?php echo esc_html(get_menu_by_location('footer-menu-right')->name); ?></h4>
            <?php wp_nav_menu(
              array(
                'theme_location' => 'footer-menu-right',
                'menu_class' => 'footer-menu-right'
              )
            ) ?>
          </div>
        <?php endif; ?>
        <?php if (get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation) == SocialLinksLocations::BottomRightFooter): ?>
          <div class="footer-links-col menu-col">
            <?php include get_theme_file_path('/partial-views/social-links.php'); ?>
          </div>
        <?php endif; ?>
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