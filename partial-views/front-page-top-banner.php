<?php

$frontPageTopBannerImage = get_theme_mod(CblCustomSettings::TopBannerImage, CblDefaultSettings::TopBannerImage);
$frontPageTopBannerTitle = get_theme_mod(CblCustomSettings::TopBannerTitle, CblDefaultSettings::TopBannerTitle);
$frontPageTopBannerText = get_theme_mod(CblCustomSettings::TopBannerText, CblDefaultSettings::TopBannerText);
$url = wp_get_attachment_url($frontPageTopBannerImage);
?>
  <section id="top-banner">
    <div class="banner-container">
      <div class="banner-container__left">
        <div id="top-banner__text">
          <?php if($frontPageTopBannerTitle): ?>
            <h1><?php echo $frontPageTopBannerTitle; ?></h1>
          <?php endif; ?>
          <?php if($frontPageTopBannerText): ?>
            <p><?php echo $frontPageTopBannerText; ?></p>
          <?php endif; ?>
        </div>
      </div>
      <div class="banner-container__right">
        <?php if($frontPageTopBannerImage): ?>
          <div id="top-banner__image">
            <img src="<?php echo $url ?>" alt="<?php bloginfo('name') ?>" />
          </div>
        <?php endif; ?>
      </div>
    </div>
  </section>