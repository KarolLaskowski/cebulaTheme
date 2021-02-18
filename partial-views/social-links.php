<?php

$socialLinksLocation = get_theme_mod(CblCustomSettings::SocialLinksLocation, CblDefaultSettings::SocialLinksLocation);
if ($socialLinksLocation != SocialLinksLocations::Nowhere) {
  $facebookLink = get_theme_mod(CblCustomSettings::FacebookLink, CblDefaultSettings::FacebookLink);
  $instagramLink = get_theme_mod(CblCustomSettings::InstagramLink, CblDefaultSettings::InstagramLink);
  $mailLink = get_theme_mod(CblCustomSettings::MailLink, CblDefaultSettings::MailLink);
  $twitterLink = get_theme_mod(CblCustomSettings::TwitterLink, CblDefaultSettings::TwitterLink);
  $linkedInLink = get_theme_mod(CblCustomSettings::LinkedInLink, CblDefaultSettings::LinkedInLink);
  $youTubeLink = get_theme_mod(CblCustomSettings::YouTubeLink, CblDefaultSettings::YouTubeLink);
  $researchGateLink = get_theme_mod(CblCustomSettings::ResearchGateLink, CblDefaultSettings::ResearchGateLink);
  $ORCIDLink = get_theme_mod(CblCustomSettings::ORCIDLink, CblDefaultSettings::ORCIDLink);
  $RSSLink = get_theme_mod(CblCustomSettings::RSSLink, CblDefaultSettings::RSSLink);
  $linkStyle = get_theme_mod(CblCustomSettings::SocialLinkStyle, CblDefaultSettings::SocialLinkStyle);
  ?>
  <ul class="social-links">
    <?php if(!empty($facebookLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $facebookLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::FacebookLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>Facebook</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($instagramLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $instagramLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::InstagramLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>Instagram</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($mailLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="mailto:<?php echo $mailLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::MailLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>Mail</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($twitterLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $twitterLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::TwitterLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>Twitter</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($linkedInLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $linkedInLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::LinkedInLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>LinkedIn</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($youTubeLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $youTubeLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::YouTubeLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>YouTube</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($researchGateLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $researchGateLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::ResearchGateLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>Research Gate</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
    <?php if(!empty($ORCIDLink)): ?>
      <li>
        <a target="_blank" rel="noopener noreferrer" href="<?php echo $ORCIDLink ?>">
          <?php if($linkStyle == SocialLinkStyles::Icon || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <i class="<?php echo SocialIconClasses::ORCIDLink; ?>"></i>
          <?php endif; ?>      
          <?php if($linkStyle == SocialLinkStyles::Label || $linkStyle == SocialLinkStyles::IconLabel): ?>
            <span>ORCID</span>
          <?php endif; ?>
        </a>
      </li>
    <?php endif; ?>
  </ul>
<?php
}
?>