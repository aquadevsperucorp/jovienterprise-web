<?php
$page_title = 'About Us – JOVI Enterprise';
$page_desc  = 'Learn about the story and mission of JOVI Enterprise, a Peruvian company specialising in natural supplements made from grape seeds and golden berry.';
$extra_css  = 'nosotros.css';
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="About us">
  <div class="page-hero__bg" style="background-image:url('../assets/images/vall_peru_1.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Our Story</span>
    <h1 data-aos="fade-up" data-aos-delay="80">We are <span>JOVI</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">A Peruvian company passionate about bringing the very best of nature to your everyday health.</p>
  </div>
</section>

<!-- ══════════════════════ WHO WE ARE ════════════════════════════════════ -->
<section class="section" style="background:var(--surface)" aria-label="Who we are">
  <div class="container about-grid">

    <!-- Image mosaic -->
    <div class="about-imgs" data-aos="fade-right">
      <div class="about-imgs__main">
        <img src="../assets/images/aguaymanto_1.jpg" alt="Fresh Peruvian golden berry" loading="lazy">
      </div>
      <div class="about-imgs__small">
        <img src="../assets/images/uva_2.jpg" alt="Peruvian grapes in a vineyard" loading="lazy">
      </div>
      <div class="about-imgs__small">
        <img src="../assets/images/valle_peru_2.jpg" alt="Fertile Peruvian valley" loading="lazy">
      </div>
    </div>

    <!-- Text -->
    <div class="about-text" data-aos="fade-left">
      <span class="section-tag">Who We Are</span>
      <h2>
        Peruvian nature,<br>
        <span style="color:var(--golden);font-style:italic">in its purest form</span>
      </h2>
      <p>
        JOVI Enterprise was founded with a clear mission: to harness the extraordinary potential of Peruvian seeds and create medicinal supplements of the highest quality.
      </p>
      <p>
        We work directly with Peruvian growers to source grape seeds and golden berry in their purest state, processing them to international quality standards.
      </p>
      <p>
        Our products contain no artificial preservatives, colours, or flavourings. Every capsule is the result of a careful process that respects both nature and your health.
      </p>

      <div class="about-stats">
        <div class="about-stat about-stat--golden">
          <span class="about-stat__val">3</span>
          <span class="about-stat__label">Products</span>
        </div>
        <div class="about-stat about-stat--grape">
          <span class="about-stat__val">100%</span>
          <span class="about-stat__label">Natural</span>
        </div>
        <div class="about-stat about-stat--combo">
          <span class="about-stat__val">🇵🇪</span>
          <span class="about-stat__label">Made in Peru</span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════ VALUES ════════════════════════════════════════ -->
<section class="section" style="background:var(--bg-2)" aria-label="Our values">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">Our Values</span>
      <h2 class="section-title">What <span>defines us</span></h2>
    </div>
    <div class="benefits__grid">
      <?php
      $vals = [
        ['🌱', 'Natural Origins',      'Everything starts with the land. We select the finest Peruvian seeds to guarantee the highest purity in every capsule.'],
        ['🔬', 'Scientific Quality',   '100% extracts obtained through scientific processes that maximise the active compounds in each seed.'],
        ['🤝', 'Genuine Commitment',   'We are committed to our customers\' health by offering honest products — free from artificial ingredients and shortcuts.'],
        ['🇵🇪', 'Peruvian Pride',     'We believe in the power of Peruvian superfoods and want to share them with the world, straight from Ica, Peru.'],
      ];
      foreach ($vals as $i => [$ico, $tit, $desc]) : ?>
      <div class="benefit-card" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
        <div class="benefit-card__icon" aria-hidden="true"><?= $ico ?></div>
        <h3 class="benefit-card__title"><?= $tit ?></h3>
        <p class="benefit-card__desc"><?= $desc ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════ PANORAMIC ═════════════════════════════════════ -->
<div class="panoramic-quote" aria-label="Peruvian landscape">
  <img src="../assets/images/valle_peru_2.jpg" class="panoramic-quote__img" alt="Peruvian valley landscape">
  <div class="panoramic-quote__overlay" aria-hidden="true"></div>
  <div class="panoramic-quote__text">
    <blockquote>"Grown &amp; Cultivated in Peru 🇵🇪"</blockquote>
  </div>
</div>

<?php include '../includes/footer.php'; ?>