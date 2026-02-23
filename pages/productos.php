<?php
$page_title = 'Productos – JOVI Enterprise';
$page_desc  = 'Golden Berry, Grape y Grape & Golden Berry. Suplementos 100% naturales a base de semillas peruanas. 60 cápsulas vegetales.';
$extra_css  = 'productos.css';
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Catálogo de productos">
  <div class="page-hero__bg" style="background-image:url('../assets/images/valle_peru_2.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Catálogo completo</span>
    <h1 data-aos="fade-up" data-aos-delay="80">Nuestros <span>Productos</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">Tres fórmulas naturales, cultivadas y procesadas en Perú con estándares de clase mundial.</p>
  </div>
</section>

<!-- Banner -->
<div class="alert-banner alert-banner--golden" role="status">
  🚀&nbsp; Estos productos se lanzarán <strong>próximamente</strong> —
  <a href="contacto.php">Notifícame cuando estén disponibles</a>
</div>

<!-- ══════════════════ GOLDEN BERRY ════════════════════════════════════ -->
<section class="section" id="golden" style="background:var(--bg)" aria-label="Golden Berry">
  <div class="container detail-grid">

    <!-- Imágenes -->
    <div data-aos="fade-right">
      <div class="detail-img-card">
        <img src="../assets/images/aguaymanto_3.jpg" alt="Golden Berry – Aguaymanto Peruano en primer plano" loading="lazy">
      </div>
      <div class="detail-img-secondary">
        <img src="../assets/images/aguaymanto_2.jpg" alt="Campo de aguaymanto peruano" loading="lazy">
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#fff8e0,#ffd97a);border:2px solid rgba(212,134,10,.25)">
        <span style="display:inline-block;background:var(--golden);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v2.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.3rem,2.5vw,1.6rem);color:var(--golden-3);margin-bottom:5px;font-weight:600">Golden Berry</h3>
        <p style="font-size:.76rem;font-weight:700;color:var(--golden);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">EXTRACT 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">500mg</span><span class="detail-stat__label">Por cápsula</span></div>
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">60</span><span class="detail-stat__label">Cápsulas</span></div>
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">100%</span><span class="detail-stat__label">Extracto</span></div>
        </div>
      </div>
    </div>

    <!-- Info -->
    <div data-aos="fade-left">
      <span class="section-tag">🌟 Golden Berry · Aguaymanto</span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        Extracto de Semilla<br>de Aguaymanto
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        Fuente de antioxidantes para el mantenimiento de una buena salud. El extracto de semilla de aguaymanto ayuda a aliviar los síntomas relacionados con la insuficiencia venosa crónica no complicada, como sensación de hinchazón, pesadez y hormigueo en las piernas.
      </p>

      <?php
      $facts_golden = [
        ['🌱', 'Contenido por cápsula',   'Extracto de semilla de aguaymanto (Aguaymanto peruano) 100% — 500 mg'],
        ['🧪', 'Ingredientes no medicinales', 'Estearato de magnesio vegetal en cápsula vegetal sin OGM compuesta de goma de carbohidrato vegetal y agua purificada.'],
        ['🚫', 'No contiene',             'Conservantes, saborizantes o colorantes artificiales, azúcar, lácteos, trigo, maíz, almidón, soja ni levadura.'],
        ['💊', 'Uso sugerido',            'Adultos: 1 cápsula al día o según indicaciones médicas. Mínimo 1 mes para ver beneficios. Consulte médico para uso más allá de 3 meses.'],
        ['⚠️', 'Precauciones',           'Consulte a un médico antes de usar si está embarazada, amamantando o tomando medicamentos recetados.'],
      ];
      foreach ($facts_golden as $i => [$ico, $tit, $desc]) : ?>
      <div class="detail-fact">
        <div class="detail-fact__icon <?= $i === 3 ? 'cert-item__icon--capsule' : '' ?>" style="background:var(--golden-light)"><?= $ico ?></div>
        <div>
          <span class="detail-fact__title"><?= $tit ?></span>
          <span class="detail-fact__desc"><?= $desc ?></span>
        </div>
      </div>
      <?php endforeach; ?>

      <a href="contacto.php" class="btn btn--primary btn--lg" style="margin-top:18px">
        Consultar disponibilidad →
      </a>
    </div>
  </div>
</section>

<div class="section-divider" aria-hidden="true"></div>

<!-- ══════════════════════ GRAPE ════════════════════════════════════════ -->
<section class="section" id="grape" style="background:var(--bg-2)" aria-label="Grape">
  <div class="container detail-grid detail-grid--reverse">

    <!-- Info -->
    <div data-aos="fade-right">
      <span class="section-tag" style="color:var(--grape-3);background:var(--grape-bg);border-color:rgba(107,37,128,.28)">🍇 Grape · Uva Peruana</span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        Extracto de Semilla<br>de Uva
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        Fuente de antioxidantes para el mantenimiento de una buena salud. El extracto de semilla de uva 100% proantocianidinas ayuda a aliviar los síntomas relacionados con la insuficiencia venosa crónica no complicada.
      </p>

      <?php
      $facts_grape = [
        ['🍇', 'Contenido por cápsula',   'Extracto de semilla de uva (Uva peruana) 100% proantocianidinas — 500 mg'],
        ['🧪', 'Ingredientes no medicinales', 'Estearato de magnesio vegetal en cápsula vegetal sin OGM compuesta de goma de carbohidrato vegetal y agua purificada.'],
        ['🚫', 'No contiene',             'Conservantes, saborizantes o colorantes artificiales, azúcar, lácteos, trigo, maíz, almidón, soja ni levadura.'],
        ['💊', 'Uso sugerido',            'Adultos: 1 cápsula al día o según indicaciones médicas. Mínimo 1 mes para ver beneficios. Consulte médico para uso más allá de 3 meses.'],
        ['⚠️', 'Precauciones',           'Consulte a un médico antes de usar si está embarazada, amamantando o tomando medicamentos recetados.'],
      ];
      foreach ($facts_grape as $i => [$ico, $tit, $desc]) : ?>
      <div class="detail-fact">
        <div class="detail-fact__icon <?= $i === 3 ? 'cert-item__icon--capsule' : '' ?>" style="background:var(--grape-light)"><?= $ico ?></div>
        <div>
          <span class="detail-fact__title"><?= $tit ?></span>
          <span class="detail-fact__desc"><?= $desc ?></span>
        </div>
      </div>
      <?php endforeach; ?>

      <a href="contacto.php" class="btn btn--primary btn--lg" style="margin-top:18px;background:linear-gradient(135deg,var(--grape),var(--grape-2));box-shadow:0 4px 18px rgba(107,37,128,.32)">
        Consultar disponibilidad →
      </a>
    </div>

    <!-- Imágenes -->
    <div data-aos="fade-left">
      <div class="detail-img-card">
        <img src="../assets/images/uva_2.jpg" alt="Grape – Uva Peruana" loading="lazy">
      </div>
      <div class="detail-img-secondary">
        <img src="../assets/images/uva_1.jpg" alt="Viñedo peruano" loading="lazy">
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#f5eafa,#dda0f0);border:2px solid rgba(107,37,128,.25)">
        <span style="display:inline-block;background:var(--grape);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v1.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.3rem,2.5vw,1.6rem);color:var(--grape-3);margin-bottom:5px;font-weight:600">Grape</h3>
        <p style="font-size:.76rem;font-weight:700;color:var(--grape);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">100% PROANTOCIANIDINAS 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">500mg</span><span class="detail-stat__label">Por cápsula</span></div>
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">60</span><span class="detail-stat__label">Cápsulas</span></div>
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">100%</span><span class="detail-stat__label">Extracto</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider section-divider--grape" aria-hidden="true"></div>

<!-- ══════════════════════ COMBO ════════════════════════════════════════ -->
<section class="section" id="combo" style="background:var(--bg)" aria-label="Grape & Golden Berry">
  <div class="container detail-grid">

    <!-- Imágenes -->
    <div data-aos="fade-right">
      <div class="combo-split-img">
        <div class="combo-split-img__grid">
          <img src="../assets/images/uva_3.jpg"        alt="Extracto de Uva">
          <img src="../assets/images/aguaymanto_1.jpg" alt="Extracto de Aguaymanto">
        </div>
        <div class="combo-split-img__overlay"></div>
        <div class="combo-split-img__label">🍇 + 🌟 Sinergia perfecta</div>
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#e8f5ea,#a8e6aa);border:2px solid rgba(42,112,53,.25)">
        <span style="display:inline-block;background:var(--combo);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v3.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.1rem,2.5vw,1.4rem);color:var(--combo-3);margin-bottom:5px;font-weight:600">Grape &amp; Golden Berry</h3>
        <p style="font-size:.74rem;font-weight:700;color:var(--combo);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">EXTRACT 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">250mg</span><span class="detail-stat__label">Uva</span></div>
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">250mg</span><span class="detail-stat__label">Aguaym.</span></div>
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">60</span><span class="detail-stat__label">Cápsulas</span></div>
        </div>
      </div>
    </div>

    <!-- Info -->
    <div data-aos="fade-left">
      <span class="section-tag" style="color:var(--combo-3);background:var(--combo-bg);border-color:rgba(42,112,53,.28)">🌿 Fórmula Combinada</span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        Grape &amp; Golden Berry<br>Extract
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        La sinergia perfecta de los dos superalimentos peruanos más potentes. El extracto combinado de aguaymanto y semilla de uva ofrece una potencia antioxidante máxima en una sola cápsula.
      </p>

      <?php
      $facts_combo = [
        ['🌿', 'Contenido por cápsula',   'Extracto de semilla de uva (Uva peruana) 100% proantocianidinas — 250 mg<br>Extracto de semilla de aguaymanto (Aguaymanto peruano) 100% proantocianidinas — 250 mg'],
        ['🧪', 'Ingredientes no medicinales', 'Magnesio vegetal estearato en cápsula vegetal no transgénica compuesta de goma de carbohidratos vegetales y agua purificada.'],
        ['🚫', 'No contiene',             'Conservantes, saborizantes o colorantes artificiales, azúcar, lácteos, trigo, maíz, almidón, soja ni levadura.'],
        ['💊', 'Uso sugerido',            'Adultos: 1 cápsula al día o según indicaciones médicas. Mínimo 1 mes para ver beneficios. Consulte profesional de salud para uso más allá de 3 meses.'],
        ['⚠️', 'Precauciones',           'Consulte a un médico antes de usar si está embarazada, amamantando o tomando medicamentos recetados.'],
      ];
      foreach ($facts_combo as $i => [$ico, $tit, $desc]) : ?>
      <div class="detail-fact">
        <div class="detail-fact__icon <?= $i === 3 ? 'cert-item__icon--capsule' : '' ?>" style="background:var(--combo-light)"><?= $ico ?></div>
        <div>
          <span class="detail-fact__title"><?= $tit ?></span>
          <span class="detail-fact__desc"><?= $desc ?></span>
        </div>
      </div>
      <?php endforeach; ?>

      <a href="contacto.php" class="btn btn--primary btn--lg" style="margin-top:18px;background:linear-gradient(135deg,var(--combo),var(--combo-2));box-shadow:0 4px 18px rgba(42,112,53,.32)">
        Consultar disponibilidad →
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>
