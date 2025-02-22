﻿<?php 

/*
Template Name: Custom Contact page
*/

$photoAttachmentId = get_theme_mod(CblCustomSettings::ContactPagePhoto, CblDefaultSettings::ContactPagePhoto);
if (!empty($photoAttachmentId)) {
  $photoUrl = wp_get_attachment_url($photoAttachmentId);
} else {
  $photoUrl = 'http://placekitten.com/g/700/900';
}

$contactTitle = get_theme_mod(CblCustomSettings::ContactTitle, CblDefaultSettings::ContactTitle);
$description = get_theme_mod(CblCustomSettings::ContactDescription, CblDefaultSettings::ContactDescription);
$hIndex = 9;
$impactFactor = 99.009;
$publications = 199;
$citations = 1299;

$facebookLink = get_theme_mod(CblCustomSettings::FacebookLink, CblDefaultSettings::FacebookLink);
$mailLink = get_theme_mod(CblCustomSettings::MailLink, CblDefaultSettings::MailLink);
$linkedInLink = get_theme_mod(CblCustomSettings::LinkedInLink, CblDefaultSettings::LinkedInLink);
$researchGateLink = get_theme_mod(CblCustomSettings::ResearchGateLink, CblDefaultSettings::ResearchGateLink);
$ORCIDLink = get_theme_mod(CblCustomSettings::ORCIDLink, CblDefaultSettings::ORCIDLink);

get_header(); ?>

<main class="wrapper-contact-page">
  <div class="container-contact-page">
    <section class="contact-section photo-and-links">
      <div class="contact-column contact--photo">
        <img src="<?php echo $photoUrl; ?>">
      </div>
      <div class="contact-column contact--links">
        <header id="my-name-is">
          <h1>
            <?php echo $contactTitle; ?>
          </h1>
        </header>
        <section id="my-description">
          <h3>
            <?php echo $description; ?>
          </h3>
        </section>
        <div class="links">
          <ul class="social-links">
            <li>
              <a target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $mailLink ?>">
                <i class="<?php echo SocialIconClasses::MailLink; ?>"></i>
                <span><?php echo $mailLink ?></span>
              </a>
            <li>
            <a target="_blank" rel="noopener noreferrer" href="<?php echo $facebookLink ?>">
                <i class="<?php echo SocialIconClasses::FacebookLink; ?>"></i>
                <span>Facebook</span>
              </a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="<?php echo $linkedInLink ?>">
                <i class="<?php echo SocialIconClasses::LinkedInLink; ?>"></i>
                <span>LinkedIn</span>
              </a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="<?php echo $researchGateLink ?>">
                <i class="<?php echo SocialIconClasses::ResearchGateLink; ?>"></i>
                <span>ResearchGate</span>
              </a>
            </li>
            <li>
              <a target="_blank" rel="noopener noreferrer" href="<?php echo $ORCIDLink ?>">
                <i class="<?php echo SocialIconClasses::ORCIDLink; ?>"></i>
                <span>ORCID</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="counters hidden">
          <div id="h-index-counter" class="counter">
            <span class="number">
              <?php echo $hIndex; ?>
            </span>
          </div>
          <div id="impact-factor-counter" class="counter">
            <span class="number">
              <?php echo $impactFactor; ?>
            </span>
          </div>
          <div id="citations-counter" class="counter">
            <span class="number">
              <?php echo $citations; ?>
            </span>
          </div>
          <div id="publications-counter" class="counter">
            <span class="number">
              <?php echo $publications; ?>
            </span>
          </div>
        </div>
        <div class="gauges hidden">
          <div id="h-index-gauge" class="gauge">
            <div class="gauge-circle">
              <span class="number"><?php echo $hIndex; ?></span>
              <svg>
                <circle cx="50%" cy="50%" r="40"></circle>
              </svg>
            </div>
            <span class="subtitle">Hirsh Index</span>
          </div>
          <div id="impact-factor-gauge" class="gauge">
            <div class="gauge-circle">
              <span class="number"><?php echo $impactFactor; ?></span>
              <svg>
                <circle cx="50%" cy="50%" r="40"></circle>
              </svg>
            </div>
            <span class="subtitle">Impact Factor</span>
          </div>
          <div id="citations-gauge" class="gauge">
            <div class="gauge-circle">
              <span class="number"><?php echo $citations; ?></span>
              <svg>
                <circle cx="50%" cy="50%" r="40"></circle>
              </svg>
            </div>
            <span class="subtitle">Cytowania</span>
          </div>
          <div id="publications-gauge" class="gauge">
            <div class="gauge-circle">
              <span class="number"><?php echo $publications; ?></span>
              <svg>
                <circle cx="50%" cy="50%" r="40"></circle>
              </svg>
            </div>
            <span class="subtitle">Publikacje</span>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-section tabs">
      <nav class="tab-links">
        <button for="tabs--education" class="tab-btn">WYKSZTAŁCENIE</button>
        <button for="tabs--experience" class="tab-btn">DOŚWIADCZENIE</button>
        <button for="tabs--research-projects" class="tab-btn">PROJEKTY BADAWCZE</button>
        <button for="tabs--publications" class="tab-btn">PUBLIKACJE</button>
        <button for="tabs--prizes" class="tab-btn">NAGRODY</button>
      </nav>
      <div id="tabs--education" class="tab">
        <?php include get_theme_file_path('/partial-views/contact-tabs/contact-education.php'); ?>
      </div>
        <div id="tabs--experience" class="tab">
          <?php include get_theme_file_path('/partial-views/contact-tabs/contact-experience.php'); ?>
        </div>
        <div id="tabs--research-projects" class="tab">
          <?php include get_theme_file_path('/partial-views/contact-tabs/contact-research-projects.php'); ?>
        </div>
        <div id="tabs--publications" class="tab">
          <?php include get_theme_file_path('/partial-views/contact-tabs/contact-publications.php'); ?>
        </div>
        <div id="tabs--prizes" class="tab">
          <?php include get_theme_file_path('/partial-views/contact-tabs/contact-prizes.php'); ?>
        </div>      
    </section>
  </div>
</main>

<?php get_footer(); ?>
<script type="text/javascript">
  ContactPageModule.Init();
</script>