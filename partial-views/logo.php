<?php
  $logoStyle = get_theme_mod(CblCustomSettings::LogoStyle, CblDefaultSettings::LogoStyle);
  $customLogoText = get_theme_mod(CblCustomSettings::CustomLogoText, CblDefaultSettings::CustomLogoText);
  $customLogoText = !empty($customLogoText) ? $customLogoText : get_bloginfo('name');
  if ($logoStyle == LogoStyles::Custom) {
    ?>
      <a class="custom-logo" href="<?php bloginfo('url'); ?>">
        <div class="custom-logo__bars">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
        <div class="custom-logo__title">
          <h1>
            <span>
              <?php echo $customLogoText; ?>
            </span>
          </h1>
        </div>
      </a>
    <?php
  } else {
    ?>
      <a href="<?php bloginfo('url'); ?>">
    <?php
    if ($logoStyle == LogoStyles::StaticImage || $logoStyle == LogoStyles::ImageAndText) {
      $logoAttachmentId = get_theme_mod(CblCustomSettings::LogoImage, CblDefaultSettings::LogoImage);
      if (!empty($logoAttachmentId)) {
        $url = wp_get_attachment_url($logoAttachmentId);
        echo '<img src="'.$url.'" alt="'.$customLogoText.'" />';
      }
    }
    if ($logoStyle == LogoStyles::OnlyText || $logoStyle == LogoStyles::ImageAndText) {
      echo '<h1>'.$customLogoText.'</h1>';
    }
    ?>
      </a>
    <?php
  }
?>
</a>
