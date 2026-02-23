<?php
$page_title = 'Nosotros – JOVI Enterprise';
$page_desc  = 'Conoce la historia y misión de JOVI Enterprise, empresa peruana de suplementos naturales a base de semillas de uva y aguaymanto.';
$extra_css  = 'nosotros.css';
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Sobre nosotros">
  <div class="page-hero__bg" style="background-image:url('../assets/images/vall_peru_1.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Nuestra historia</span>
    <h1 data-aos="fade-up" data-aos-delay="80">Somos <span>JOVI</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">Una empresa peruana apasionada por llevar lo mejor de la naturaleza a tu salud diaria.</p>
  </div>
</section>

<!-- ══════════════════════ QUIÉNES SOMOS ════════════════════════════════ -->
<section class="section" style="background:var(--surface)" aria-label="Quiénes somos">
  <div class="container about-grid">

    <!-- Mosaico de imágenes -->
    <div class="about-imgs" data-aos="fade-right">
      <div class="about-imgs__main">
        <img src="../assets/images/aguaymanto_1.jpg" alt="Aguaymanto peruano fresco" loading="lazy">
      </div>
      <div class="about-imgs__small">
        <img src="../assets/images/uva_2.jpg" alt="Uva peruana en viñedo" loading="lazy">
      </div>
      <div class="about-imgs__small">
        <img src="../assets/images/valle_peru_2.jpg" alt="Valle fértil del Perú" loading="lazy">
      </div>
    </div>

    <!-- Texto -->
    <div class="about-text" data-aos="fade-left">
      <span class="section-tag">Quiénes somos</span>
      <h2>
        La naturaleza peruana,<br>
        <span style="color:var(--golden);font-style:italic">en su forma más pura</span>
      </h2>
      <p>
        JOVI Enterprise nació con una misión clara: aprovechar el extraordinario potencial de las semillas peruanas para crear suplementos medicinales de la más alta calidad.
      </p>
      <p>
        Trabajamos directamente con cultivadores peruanos para obtener semillas de uva y aguaymanto en su estado más puro, procesándolas bajo estándares internacionales de calidad.
      </p>
      <p>
        Nuestros productos no contienen conservantes, colorantes ni saborizantes artificiales. Cada cápsula es el resultado de un proceso cuidadoso que respeta la naturaleza y tu salud.
      </p>

      <div class="about-stats">
        <div class="about-stat about-stat--golden">
          <span class="about-stat__val">3</span>
          <span class="about-stat__label">Productos</span>
        </div>
        <div class="about-stat about-stat--grape">
          <span class="about-stat__val">100%</span>
          <span class="about-stat__label">Natural</span>
        </div>
        <div class="about-stat about-stat--combo">
          <span class="about-stat__val">🇵🇪</span>
          <span class="about-stat__label">Hecho en Perú</span>
        </div>
      </div>
    </div>

  </div>
</section>

<!-- ══════════════════════ VALORES ══════════════════════════════════════ -->
<section class="section" style="background:var(--bg-2)" aria-label="Nuestros valores">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">Nuestros valores</span>
      <h2 class="section-title">Lo que nos <span>define</span></h2>
    </div>
    <div class="benefits__grid">
      <?php
      $vals = [
        ['🌱', 'Origen natural',     'Todo comienza en la tierra. Seleccionamos las mejores semillas peruanas para garantizar la más alta pureza en cada cápsula.'],
        ['🔬', 'Calidad científica', 'Extractos al 100% obtenidos mediante procesos científicos que maximizan los principios activos de cada semilla.'],
        ['🤝', 'Compromiso real',    'Nos comprometemos con la salud de nuestros clientes ofreciendo productos honestos, sin artificiales ni engaños.'],
        ['🇵🇪', 'Orgullo peruano', 'Creemos en el poder de los superalimentos peruanos y queremos compartirlos con el mundo desde Ica, Perú.'],
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

<!-- ══════════════════════ PANORÁMICA ════════════════════════════════════ -->
<div class="panoramic-quote" aria-label="Panorama del Perú">
  <img src="../assets/images/valle_peru_2.jpg" class="panoramic-quote__img" alt="Paisaje de los valles del Perú">
  <div class="panoramic-quote__overlay" aria-hidden="true"></div>
  <div class="panoramic-quote__text">
    <blockquote>"Grown &amp; Cultivated in Peru 🇵🇪"</blockquote>
  </div>
</div>

<?php include '../includes/footer.php'; ?>
