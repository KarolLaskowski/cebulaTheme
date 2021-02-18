<?php 
/*
Template Name: Custom Contact page
*/

$photoUrl = 'http://placekitten.com/g/700/900';
$email = 'karolina@nowak.science';
$fullName = 'Karolina Nowak';
$linkedInUrl = 'https://www.linkedin.com/in/karolina-nowak-science/';
$researchGateUrl = 'http://www.researchgate.net/profile/Karolina_Nowak8/';
$orcidId = '0000-0002-9971-0023';
$orcidUrl = 'https://orcid.org/' . $orcidId . '/';
$hIndex = 5;
$impactFactor = 45.531;
$publications = 14;
$citations = 82;

get_header(); ?>

<main class="wrapper-contact-page">
  <div class="container-contact-page">
    <section class="contact-section photo-and-links">
      <div class="contact-column contact--photo">
        <img src="<?php echo $photoUrl; ?>">
      </div>
      <div class="contact-column contact--links">
        <header id="my-name-is">
          <h1><?php echo $fullName; ?></h1>
        </header>
        <div class="links">
          <p>
            <a href="mailto:<?php echo $email; ?>">
              <i class="far fa-envelope"></i>
              <?php echo $email; ?>
            </a>
          </p>
          <p>
            <a href="<?php echo $linkedInUrl; ?>">
              <i class="fab fa-linkedin"></i>
              Linked In
            </a>
          </p>
          <p>
            <a href="<?php echo $researchGateUrl; ?>">
              <i class="fab fa-researchgate"></i>
              ResearchGate
            </a>
          </p>
          <p>
            <a href="<?php echo $orcidUrl; ?>">
              <i class="fab fa-orcid"></i>ORCID (<?php echo $orcidId; ?>)
            </a>
          </p>
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
        <div for="tabs--education" class="tab-btn">WYKSZTAŁCENIE</div>
        <div for="tabs--experience" class="tab-btn">DOŚWIADCZENIE</div>
        <div for="tabs--research-projects" class="tab-btn">PROJEKTY BADAWCZE</div>
        <div for="tabs--publications" class="tab-btn">PUBLIKACJE</div>
        <div for="tabs--prizes" class="tab-btn">NAGRODY</div>
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