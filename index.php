<?php
$page_title = 'JOVI Enterprise – Suplementos Naturales del Perú';
$page_desc  = '<span class = "notranslate" translate="no">Golden Berry</span>, <span class = "notranslate" translate="no">Grape</span> y <span class = "notranslate" translate="no">Grape & Golden Berry</span>. Cápsulas medicinales 100% naturales a base de semillas peruanas. Próximo lanzamiento.';
$extra_css  = 'index.css';
include 'includes/header.php';
?>

<!-- ══════════════════════════ HERO ══════════════════════════════════════ -->
<section class="hero" aria-label="Bienvenida">
  <div class="hero__bg" aria-hidden="true">
    <div class="hero__bg-img"></div>
    <div class="hero__bg-overlay"></div>
  </div>

  <div class="container hero__inner">

    <!-- Texto -->
    <div class="hero__content">
      <span class="hero__badge">
        <span class="hero__badge-dot" aria-hidden="true"></span>
        Grown &amp; Cultivated in Peru
      </span>
      <h1 class="hero__title">
        La naturaleza<br>
        <em>peruana</em> en<br>
        cada cápsula
      </h1>
      <p class="hero__desc">
        JOVI Enterprise elabora suplementos medicinales 100% naturales a base de semillas de uva y aguaymanto peruano. Sin conservantes, sin artificiales, sin compromiso.
      </p>
      <div class="hero__actions">
        <a href="pages/productos.php" class="btn btn--primary btn--lg">
          Ver productos
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="pages/contacto.php" class="btn btn--outline btn--lg">Consultar</a>
      </div>
    </div>

    <!-- Visual grid de imágenes -->
    <div class="hero__visual" aria-hidden="true">
      <div class="hero__imgs-grid">
        <div class="hero__img-card hero__img-card--a">
          <img src="assets/images/aguaymanto_3.jpg" alt="Aguaymanto peruano – Golden Berry" loading="eager">
          <span class="img-label notranslate" translate="no" style="color:var(--golden-3)">🌟 Golden Berry</span>
        </div>
        <div class="hero__img-card hero__img-card--b">
          <img src="assets/images/uva_2.jpg" alt="Uva peruana – Grape" loading="eager">
          <span class="img-label notranslate" translate="no" style="color:var(--grape-3)">🍇 Grape</span>
        </div>
        <div class="hero__img-card hero__img-card--c">
          <img src="assets/images/vall_peru_1.jpg" alt="Valle del Perú" loading="lazy">
          <span class="img-label">🇵🇪 Perú</span>
        </div>
      </div>
      <span class="hero__launch-badge">
        <span class="hero__launch-dot" aria-hidden="true"></span>
        Lanzamiento próximo
      </span>
    </div>

  </div>
</section>

<!-- ══════════════════════ COMING SOON ══════════════════════════════════ -->
<section class="coming" aria-label="Próximo lanzamiento">
  <div class="container coming__inner">

    <div class="coming__tag" data-aos="fade-up">
      <span class="coming__tag-dot" aria-hidden="true"></span>
      Próximo lanzamiento
    </div>

    <h2 class="coming__title" data-aos="fade-up" data-aos-delay="80">
      Nuestros productos <span>llegan pronto</span>
    </h2>
    <p class="coming__desc" data-aos="fade-up" data-aos-delay="130">
      Tres fórmulas naturales únicas, cultivadas en Perú con los más altos estándares de calidad. Prepárate para descubrir el poder antioxidante de las semillas peruanas.
    </p>

    <!-- Cards -->
    <div class="coming__cards" data-aos="fade-up" data-aos-delay="180">
      <div class="coming-card coming-card--golden">
        <div class="coming-card__img">
          <img src="assets/images/aguaymanto_2.jpg" alt="Golden Berry – Aguaymanto" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(122,77,0,.7),transparent 60%)"></div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🌟</div>
          <div class="coming-card__name notranslate" translate="no">Golden Berry</div>
          <span class="coming-card__mg">500 mg · 60 cáps</span>
          <span class="coming-card__soon">Próximamente</span>
        </div>
      </div>

      <div class="coming-card coming-card--grape">
        <div class="coming-card__img">
          <img src="assets/images/uva_2.jpg" alt="Grape – Uva Peruana" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(62,16,80,.7),transparent 60%)"></div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🍇</div>
          <div class="coming-card__name notranslate" translate="no">Grape</div>
          <span class="coming-card__mg">500 mg · 60 cáps</span>
          <span class="coming-card__soon">Próximamente</span>
        </div>
      </div>

      <div class="coming-card coming-card--combo">
        <div class="coming-card__img" style="position:relative">
          <img src="assets/images/uva_3.jpg" alt="Grape & Golden Berry – Fórmula combinada" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(23,64,32,.7),transparent 60%)"></div>
          <div style="position:absolute;top:8px;right:8px;width:40px;height:40px;border-radius:50%;overflow:hidden;border:2px solid rgba(255,255,255,.6);box-shadow:0 2px 8px rgba(0,0,0,.3)" aria-hidden="true">
            <img src="assets/images/aguaymanto_1.jpg" alt="" style="width:100%;height:100%;object-fit:cover">
          </div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🌿</div>
          <div class="coming-card__name notranslate" translate="no">Grape &amp; Golden Berry</div>
          <span class="coming-card__mg">500 mg · 60 cáps</span>
          <span class="coming-card__soon">Próximamente</span>
        </div>
      </div>
    </div>

    <!-- Countdown -->
    <div class="countdown" data-aos="zoom-in" data-aos-delay="240" role="timer" aria-label="Cuenta regresiva al lanzamiento">
      <div class="countdown__item">
        <span class="countdown__num" id="cd-days">00</span>
        <span class="countdown__label">Días</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-hours">00</span>
        <span class="countdown__label">Horas</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-mins">00</span>
        <span class="countdown__label">Minutos</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-secs">00</span>
        <span class="countdown__label">Segundos</span>
      </div>
    </div>

  </div>
</section>

<!-- ═════════════════════════ PRODUCTS ══════════════════════════════════ -->
<section class="products section" aria-label="Catálogo de productos">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">Catálogo</span>
      <h2 class="section-title">Tres fórmulas, <span>un propósito</span></h2>
      <p class="section-desc">Extractos al 100% de las semillas más potentes del Perú, en cápsulas vegetales sin OGM.</p>
    </div>

    <div class="products__grid">
      <!-- GRAPE -->
      <div class="product-card product-card--grape" data-aos="fade-up" data-aos-delay="100">
        <div class="product-card__img">
          <img src="assets/images/uva_2.jpg" alt="Grape – Extracto de Uva Peruana" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <span class="product-card__version">v1.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Grape</h3>
          <div class="product-card__sub">100% Proantocianidinas · Uva</div>
          <div class="product-card__mg">500 mg</div>
          <span class="product-card__caps">60 Cápsulas Vegetales</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">Extracto de semilla de uva peruana al 100% de proantocianidinas. Potente antioxidante para tu salud cardiovascular y circulatoria.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Uva peruana 100% proantocianidinas</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Sin azúcar, lácteos ni soja</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 cápsula al día · Mínimo 1 mes</span></div>
          </div>
          <a href="pages/productos.php#grape" class="product-card__cta">Ver detalles →</a>
        </div>
      </div>

      <!-- GOLDEN BERRY -->
      <div class="product-card product-card--golden" data-aos="fade-up">
        <div class="product-card__img">
          <img src="assets/images/aguaymanto_1.jpg" alt="Golden Berry – Extracto de Aguaymanto" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <span class="product-card__version">v2.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Golden Berry</h3>
          <div class="product-card__sub">Extracto de Aguaymanto</div>
          <div class="product-card__mg">500 mg</div>
          <span class="product-card__caps">60 Cápsulas Vegetales</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">Fuente de antioxidantes para el mantenimiento de una buena salud. Ayuda a aliviar síntomas de insuficiencia venosa crónica.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Sin OGM · Cápsula vegetal natural</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Sin conservantes ni colorantes</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 cápsula al día · Mínimo 1 mes</span></div>
          </div>
          <a href="pages/productos.php#golden" class="product-card__cta">Ver detalles →</a>
        </div>
      </div>

      <!-- COMBO -->
      <div class="product-card product-card--combo" data-aos="fade-up" data-aos-delay="200">
        <div class="product-card__img" style="position:relative">
          <img src="assets/images/uva_3.jpg" alt="Grape & Golden Berry – Fórmula Combinada" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <div style="position:absolute;bottom:10px;right:10px;width:48px;height:48px;border-radius:10px;overflow:hidden;border:2px solid rgba(255,255,255,.7);box-shadow:0 3px 10px rgba(0,0,0,.3)" aria-hidden="true">
            <img src="assets/images/aguaymanto_3.jpg" alt="" style="width:100%;height:100%;object-fit:cover">
          </div>
          <span class="product-card__version">v3.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Grape &amp; Golden Berry</h3>
          <div class="product-card__sub">Fórmula Combinada</div>
          <div class="product-card__mg">250 mg + 250 mg</div>
          <span class="product-card__caps">60 Cápsulas Vegetales</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">La sinergia perfecta: extracto de uva y aguaymanto en una sola cápsula para máxima potencia antioxidante.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Doble acción: Uva + Aguaymanto</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>No transgénico · 100% natural</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 cápsula al día · Mínimo 1 mes</span></div>
          </div>
          <a href="pages/productos.php#combo" class="product-card__cta">Ver detalles →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════ BENEFITS ═════════════════════════════════ -->
<section class="benefits section" style="background:var(--surface)" aria-label="Por qué JOVI">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">¿Por qué JOVI?</span>
      <h2 class="section-title">Naturaleza pura, <span>ciencia real</span></h2>
    </div>
    <div class="benefits__grid">
      <?php
      $bens = [
        ['🌿', '100% Natural',       'Sin conservantes, colorantes ni saborizantes artificiales en ninguno de nuestros productos.'],
        ['🇵🇪', 'Cultivado en Perú', 'Semillas seleccionadas y procesadas directamente en territorio peruano bajo rigurosos estándares.'],
        ['💊', 'Cápsula Vegetal',     'Cápsulas vegetales sin OGM compuestas de goma de carbohidrato vegetal y agua purificada.'],
        ['🔬', '100% Extracto',        'Concentración de 100% de proantocianidinas para máxima eficacia y biodisponibilidad.'],
      ];
        foreach ($bens as $i => [$ico, $tit, $desc]) : ?>
        <div class="benefit-card" data-aos="fade-up" data-aos-delay="<?= $i * 80 ?>">
          <span class="cert-item__icon <?= $i === 2 ? 'cert-item__icon--capsule' : '' ?>" aria-hidden="true"><?= $ico ?></span>
          <h3 class="benefit-card__title"><?= $tit?></h3>
          <p class="benefit-card__desc"><?= $desc ?></p>
        </div>
        <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ══════════════════════════ ORIGEN ════════════════════════════════════ -->
<section class="land section" aria-label="Nuestro origen">
  <div class="container land__inner">
    <div class="land__imgs" data-aos="fade-right">
      <div class="land__img land__img--tall">
        <img src="assets/images/vall_peru_1.jpg" alt="Valle fértil del Perú" loading="lazy">
      </div>
      <div class="land__img">
        <img src="assets/images/aguaymanto_2.jpg" alt="Aguaymanto en campo peruano" loading="lazy">
      </div>
      <div class="land__img">
        <img src="assets/images/uva_1.jpg" alt="Viñedo peruano" loading="lazy">
      </div>
    </div>
    <div class="land__text" data-aos="fade-left">
      <span class="section-tag">Nuestro origen</span>
      <h2>Del suelo peruano<br><span style="color:var(--golden);font-style:italic">a tu bienestar</span></h2>
      <p>Perú es una de las megadiversidades del mundo. Sus valles, montañas y climas únicos producen ingredientes de calidad excepcional que no se encuentran en ningún otro lugar del planeta.</p>
      <p>JOVI Enterprise trabaja directamente con cultivadores locales para obtener las semillas de uva y aguaymanto más puras, procesadas con tecnología de extracción que preserva al máximo sus principios activos.</p>
      <p>Cada frasco es el resultado de un compromiso real con la naturaleza, con Perú y con tu salud.</p>
      <a href="pages/nosotros.php" class="btn btn--outline" style="margin-top:10px">
        Conocer más →
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════ COMBO SHOWCASE ════════════════════════════════ -->
<section class="combo-show section" aria-label="Fórmula combinada">
  <div class="container combo-show__inner">
    <div data-aos="fade-right">
      <div style="border-radius:var(--rxl);overflow:hidden;box-shadow:var(--shl);position:relative">
        <div style="display:grid;grid-template-columns:1fr 1fr;height:clamp(260px,38vw,480px)">
          <img src="assets/images/uva_2.jpg"        alt="Extracto de Uva" style="width:100%;height:100%;object-fit:cover">
          <img src="assets/images/aguaymanto_1.jpg" alt="Extracto de Aguaymanto" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div style="position:absolute;inset:0;background:linear-gradient(90deg,transparent 41%,rgba(42,112,53,.32) 50%,transparent 59%)"></div>
        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:rgba(255,255,255,.95);backdrop-filter:blur(12px);border-radius:100px;padding:9px 20px;font-size:.76rem;font-weight:700;color:var(--combo-3);white-space:nowrap;box-shadow:var(--sh)">
          🍇 Uva + Aguaymanto 🌟
        </div>
        <div style="position:absolute;bottom:14px;left:50%;transform:translateX(-50%);background:rgba(23,64,32,.92);color:white;border-radius:100px;padding:7px 18px;font-size:.74rem;font-weight:700;white-space:nowrap">
          <span class = "notranslate" translate="no">  
            Grape &amp; Golden Berry v3.0
          </span>
        </div>
      </div>
    </div>
    <div class="combo-show__text" data-aos="fade-left">
      <span class="section-tag" style="color:var(--combo-3);background:var(--combo-bg);border-color:rgba(42,112,53,.28)">Fórmula estrella</span>
      <h2>La sinergia que<br><span style="color:var(--combo);font-style:italic">tu cuerpo necesita</span></h2>
      <p>Nuestra fórmula combinada Grape &amp; Golden Berry es el resultado de combinar los dos superalimentos peruanos más potentes en una sola cápsula de 500 mg.</p>
      <p>250 mg de extracto de semilla de uva + 250 mg de extracto de aguaymanto, ambos al 100% de proantocianidinas, en perfecta sinergia antioxidante.</p>
      <div class="combo-pills">
        <span class="combo-pill combo-pill--grape">🍇 250 mg Uva Peruana</span>
        <span class="combo-pill combo-pill--golden">🌟 250 mg Aguaymanto</span>
      </div>
      <a href="pages/productos.php#combo" class="btn btn--primary" style="background:linear-gradient(135deg,var(--combo),var(--combo-2));box-shadow:0 4px 18px rgba(42,112,53,.32)">
        Ver fórmula completa →
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════ CERTS ═════════════════════════════════════ -->
<section class="certs" aria-label="Certificaciones y garantías">
  <div class="container">
    <div class="certs__row" data-aos="fade-up">
      <div class="cert-item"><div class="cert-item__icon">🌿</div><div><div class="cert-item__title">100% Natural</div><div class="cert-item__desc">Sin artificiales</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">🚫</div><div><div class="cert-item__title">Sin OGM</div><div class="cert-item__desc">No transgénico</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">🇵🇪</div><div><div class="cert-item__title">Hecho en Perú</div><div class="cert-item__desc">Grown in Peru</div></div></div>
      <div class="cert-item"><div class="cert-item__icon--capsule">💊</div><div><div class="cert-item__title">Cápsula Vegetal</div><div class="cert-item__desc">Sin gelatina animal</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">⚗️</div><div><div class="cert-item__title">100% Extracto</div><div class="cert-item__desc">Alta pureza</div></div></div>
    </div>
  </div>
</section>

<!-- ══════════════════════════ CTA FINAL ════════════════════════════════ -->
<section class="cta-section section">
  <div class="container">
    <div class="cta-box" data-aos="zoom-in">
      <span class="section-tag" style="position:relative">¿Tienes preguntas?</span>
      <h2 class="section-title" style="margin-top:12px;position:relative">
        Sé el primero en<br><span>recibir nuestros productos</span>
      </h2>
      <p class="section-desc" style="margin-bottom:clamp(24px,4vw,36px);position:relative">
        Regístrate y te notificamos cuando estén disponibles. Consulta ingredientes, dosificación y disponibilidad.
      </p>
      <div class="cta-box__actions">
        <a href="pages/contacto.php" class="btn btn--primary btn--lg">
          Quiero ser notificado
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="pages/productos.php" class="btn btn--outline btn--lg">Ver productos</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
