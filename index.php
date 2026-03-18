<?php
$page_title = 'JOVI Enterprise – Natural Supplements from Peru';
$page_desc  = '<span class="notranslate" translate="no">Golden Berry</span>, <span class="notranslate" translate="no">Grape</span> and <span class="notranslate" translate="no">Grape & Golden Berry</span>. 100% natural medicinal capsules made from Peruvian seeds. Launching soon.';
$extra_css  = 'index.css';
include 'includes/header.php';
?>

<!-- ══════════════════════════ HERO ══════════════════════════════════════ -->
<section class="hero" aria-label="Welcome">
  <div class="hero__bg" aria-hidden="true">
    <div class="hero__bg-img"></div>
    <div class="hero__bg-overlay"></div>
  </div>

  <div class="container hero__inner">

    <!-- Text -->
    <div class="hero__content">
      <span class="hero__badge">
        <span class="hero__badge-dot" aria-hidden="true"></span>
        Grown &amp; Cultivated in Peru
      </span>
      <h1 class="hero__title">
        The power of<br>
        <em>Peruvian</em> nature<br>
        in every capsule
      </h1>
      <p class="hero__desc">
        JOVI Enterprise crafts 100% natural medicinal supplements made from Peruvian grape seeds and golden berry. No preservatives, no artificial ingredients, no compromises.
      </p>
      <div class="hero__actions">
        <a href="pages/productos.php" class="btn btn--primary btn--lg">
          View Products
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="pages/contacto.php" class="btn btn--outline btn--lg">Get in Touch</a>
      </div>
    </div>

    <!-- Image grid -->
    <div class="hero__visual" aria-hidden="true">
      <div class="hero__imgs-grid">
        <div class="hero__img-card hero__img-card--a">
          <img src="assets/images/aguaymanto_3.jpg" alt="Peruvian Golden Berry" loading="eager">
          <span class="img-label notranslate" translate="no" style="color:var(--golden-3)">🌟 Golden Berry</span>
        </div>
        <div class="hero__img-card hero__img-card--b">
          <img src="assets/images/uva_2.jpg" alt="Peruvian Grape" loading="eager">
          <span class="img-label notranslate" translate="no" style="color:var(--grape-3)">🍇 Grape</span>
        </div>
        <div class="hero__img-card hero__img-card--c">
          <img src="assets/images/vall_peru_1.jpg" alt="Peruvian Valley" loading="lazy">
          <span class="img-label">🇵🇪 Peru</span>
        </div>
      </div>
      <span class="hero__launch-badge">
        <span class="hero__launch-dot" aria-hidden="true"></span>
        Launching Soon
      </span>
    </div>

  </div>
</section>

<!-- ══════════════════════ COMING SOON ══════════════════════════════════ -->
<section class="coming" aria-label="Coming soon">
  <div class="container coming__inner">

    <div class="coming__tag" data-aos="fade-up">
      <span class="coming__tag-dot" aria-hidden="true"></span>
      Coming Soon
    </div>

    <h2 class="coming__title" data-aos="fade-up" data-aos-delay="80">
      Our products are <span>arriving soon</span>
    </h2>
    <p class="coming__desc" data-aos="fade-up" data-aos-delay="130">
      Three unique natural formulas, cultivated in Peru to the highest quality standards. Get ready to discover the antioxidant power of Peruvian seeds.
    </p>

    <!-- Cards -->
    <div class="coming__cards" data-aos="fade-up" data-aos-delay="180">
      <div class="coming-card coming-card--golden">
        <div class="coming-card__img">
          <img src="assets/images/aguaymanto_2.jpg" alt="Golden Berry" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(122,77,0,.7),transparent 60%)"></div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🌟</div>
          <div class="coming-card__name notranslate" translate="no">Golden Berry</div>
          <span class="coming-card__mg">500 mg · 60 caps</span>
          <span class="coming-card__soon">Coming Soon</span>
        </div>
      </div>

      <div class="coming-card coming-card--grape">
        <div class="coming-card__img">
          <img src="assets/images/uva_2.jpg" alt="Grape – Peruvian Grape" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(62,16,80,.7),transparent 60%)"></div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🍇</div>
          <div class="coming-card__name notranslate" translate="no">Grape</div>
          <span class="coming-card__mg">500 mg · 60 caps</span>
          <span class="coming-card__soon">Coming Soon</span>
        </div>
      </div>

      <div class="coming-card coming-card--combo">
        <div class="coming-card__img" style="position:relative">
          <img src="assets/images/uva_3.jpg" alt="Grape & Golden Berry – Combined Formula" loading="lazy">
          <div class="coming-card__img-overlay" style="background:linear-gradient(to top,rgba(23,64,32,.7),transparent 60%)"></div>
          <div style="position:absolute;top:8px;right:8px;width:40px;height:40px;border-radius:50%;overflow:hidden;border:2px solid rgba(255,255,255,.6);box-shadow:0 2px 8px rgba(0,0,0,.3)" aria-hidden="true">
            <img src="assets/images/aguaymanto_1.jpg" alt="" style="width:100%;height:100%;object-fit:cover">
          </div>
        </div>
        <div class="coming-card__body">
          <div class="coming-card__emoji">🌿</div>
          <div class="coming-card__name notranslate" translate="no">Grape &amp; Golden Berry</div>
          <span class="coming-card__mg">500 mg · 60 caps</span>
          <span class="coming-card__soon">Coming Soon</span>
        </div>
      </div>
    </div>

    <!-- Countdown -->
    <div class="countdown" data-aos="zoom-in" data-aos-delay="240" role="timer" aria-label="Countdown to launch">
      <div class="countdown__item">
        <span class="countdown__num" id="cd-days">00</span>
        <span class="countdown__label">Days</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-hours">00</span>
        <span class="countdown__label">Hours</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-mins">00</span>
        <span class="countdown__label">Minutes</span>
      </div>
      <div class="countdown__item">
        <span class="countdown__num" id="cd-secs">00</span>
        <span class="countdown__label">Seconds</span>
      </div>
    </div>

  </div>
</section>

<!-- ═════════════════════════ PRODUCTS ══════════════════════════════════ -->
<section class="products section" aria-label="Product catalogue">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">Catalogue</span>
      <h2 class="section-title">Three formulas, <span>one purpose</span></h2>
      <p class="section-desc">100% extracts from Peru's most potent seeds, in non-GMO vegetable capsules.</p>
    </div>

    <div class="products__grid">
      <!-- GRAPE -->
      <div class="product-card product-card--grape" data-aos="fade-up" data-aos-delay="100">
        <div class="product-card__img">
          <img src="assets/images/uva_2.jpg" alt="Grape – Peruvian Grape Seed Extract" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <span class="product-card__version">v1.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Grape</h3>
          <div class="product-card__sub">100% Proanthocyanidins · Grape</div>
          <div class="product-card__mg">500 mg</div>
          <span class="product-card__caps">60 Vegetable Capsules</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">100% proanthocyanidin extract from Peruvian grape seeds. A powerful antioxidant to support your cardiovascular and circulatory health.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Peruvian grape – 100% proanthocyanidins</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Free from sugar, dairy and soy</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 capsule per day · Minimum 1 month</span></div>
          </div>
          <a href="pages/productos.php#grape" class="product-card__cta">View Details →</a>
        </div>
      </div>

      <!-- GOLDEN BERRY -->
      <div class="product-card product-card--golden" data-aos="fade-up">
        <div class="product-card__img">
          <img src="assets/images/aguaymanto_1.jpg" alt="Golden Berry Extract" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <span class="product-card__version">v2.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Golden Berry</h3>
          <div class="product-card__sub">Golden Berry Extract</div>
          <div class="product-card__mg">500 mg</div>
          <span class="product-card__caps">60 Vegetable Capsules</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">A rich source of antioxidants to help maintain good health. May help relieve symptoms associated with chronic venous insufficiency.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Non-GMO · Natural vegetable capsule</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>No preservatives or artificial colours</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 capsule per day · Minimum 1 month</span></div>
          </div>
          <a href="pages/productos.php#golden" class="product-card__cta">View Details →</a>
        </div>
      </div>

      <!-- COMBO -->
      <div class="product-card product-card--combo" data-aos="fade-up" data-aos-delay="200">
        <div class="product-card__img" style="position:relative">
          <img src="assets/images/uva_3.jpg" alt="Grape & Golden Berry – Combined Formula" loading="lazy">
          <div class="product-card__img-overlay"></div>
          <div style="position:absolute;bottom:10px;right:10px;width:48px;height:48px;border-radius:10px;overflow:hidden;border:2px solid rgba(255,255,255,.7);box-shadow:0 3px 10px rgba(0,0,0,.3)" aria-hidden="true">
            <img src="assets/images/aguaymanto_3.jpg" alt="" style="width:100%;height:100%;object-fit:cover">
          </div>
          <span class="product-card__version">v3.0</span>
        </div>
        <div class="product-card__header">
          <h3 class="product-card__title notranslate" translate="no">Grape &amp; Golden Berry</h3>
          <div class="product-card__sub">Combined Formula</div>
          <div class="product-card__mg">250 mg + 250 mg</div>
          <span class="product-card__caps">60 Vegetable Capsules</span>
        </div>
        <div class="product-card__body">
          <p class="product-card__desc">The perfect synergy: grape seed and golden berry extract combined in a single 500 mg capsule for maximum antioxidant power.</p>
          <div class="product-card__facts">
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Dual action: Grape + Golden Berry</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>Non-GMO · 100% natural</span></div>
            <div class="product-card__fact"><span class="product-card__fact-check">✓</span><span>1 capsule per day · Minimum 1 month</span></div>
          </div>
          <a href="pages/productos.php#combo" class="product-card__cta">View Details →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══════════════════════════ BENEFITS ═════════════════════════════════ -->
<section class="benefits section" style="background:var(--surface)" aria-label="Why JOVI">
  <div class="container">
    <div class="section-header" data-aos="fade-up">
      <span class="section-tag">Why JOVI?</span>
      <h2 class="section-title">Pure nature, <span>real science</span></h2>
    </div>
    <div class="benefits__grid">
      <?php
      $bens = [
        ['🌿', '100% Natural',        'No preservatives, artificial colours, or flavourings in any of our products.'],
        ['🇵🇪', 'Grown in Peru',      'Seeds carefully selected and processed directly in Peru under rigorous quality standards.'],
        ['💊', 'Vegetable Capsule',    'Non-GMO vegetable capsules made from plant-based carbohydrate gum and purified water.'],
        ['🔬', '100% Extract',         '100% proanthocyanidin concentration for maximum efficacy and bioavailability.'],
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

<!-- ══════════════════════════ ORIGIN ════════════════════════════════════ -->
<section class="land section" aria-label="Our origin">
  <div class="container land__inner">
    <div class="land__imgs" data-aos="fade-right">
      <div class="land__img land__img--tall">
        <img src="assets/images/vall_peru_1.jpg" alt="Fertile Peruvian valley" loading="lazy">
      </div>
      <div class="land__img">
        <img src="assets/images/aguaymanto_2.jpg" alt="Golden berry growing in Peru" loading="lazy">
      </div>
      <div class="land__img">
        <img src="assets/images/uva_1.jpg" alt="Peruvian vineyard" loading="lazy">
      </div>
    </div>
    <div class="land__text" data-aos="fade-left">
      <span class="section-tag">Our Origin</span>
      <h2>From Peruvian soil<br><span style="color:var(--golden);font-style:italic">to your well-being</span></h2>
      <p>Peru is one of the world's most biodiverse countries. Its unique valleys, mountains, and climates produce exceptional-quality ingredients found nowhere else on the planet.</p>
      <p>JOVI Enterprise works directly with local growers to source the purest grape seeds and golden berry, processed using extraction technology that preserves their active compounds to the fullest.</p>
      <p>Every bottle is the result of a genuine commitment to nature, to Peru, and to your health.</p>
      <a href="pages/nosotros.php" class="btn btn--outline" style="margin-top:10px">
        Learn More →
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════ COMBO SHOWCASE ════════════════════════════════ -->
<section class="combo-show section" aria-label="Combined formula">
  <div class="container combo-show__inner">
    <div data-aos="fade-right">
      <div style="border-radius:var(--rxl);overflow:hidden;box-shadow:var(--shl);position:relative">
        <div style="display:grid;grid-template-columns:1fr 1fr;height:clamp(260px,38vw,480px)">
          <img src="assets/images/uva_2.jpg"        alt="Grape Extract" style="width:100%;height:100%;object-fit:cover">
          <img src="assets/images/aguaymanto_1.jpg" alt="Golden Berry Extract" style="width:100%;height:100%;object-fit:cover">
        </div>
        <div style="position:absolute;inset:0;background:linear-gradient(90deg,transparent 41%,rgba(42,112,53,.32) 50%,transparent 59%)"></div>
        <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:rgba(255,255,255,.95);backdrop-filter:blur(12px);border-radius:100px;padding:9px 20px;font-size:.76rem;font-weight:700;color:var(--combo-3);white-space:nowrap;box-shadow:var(--sh)">
          🍇 Grape + Golden Berry 🌟
        </div>
        <div style="position:absolute;bottom:14px;left:50%;transform:translateX(-50%);background:rgba(23,64,32,.92);color:white;border-radius:100px;padding:7px 18px;font-size:.74rem;font-weight:700;white-space:nowrap">
          <span class="notranslate" translate="no">
            Grape &amp; Golden Berry v3.0
          </span>
        </div>
      </div>
    </div>
    <div class="combo-show__text" data-aos="fade-left">
      <span class="section-tag" style="color:var(--combo-3);background:var(--combo-bg);border-color:rgba(42,112,53,.28)">Star Formula</span>
      <h2>The synergy your<br><span style="color:var(--combo);font-style:italic">body needs</span></h2>
      <p>Our Grape &amp; Golden Berry combined formula brings together Peru's two most powerful superfoods in a single 500 mg capsule.</p>
      <p>250 mg of grape seed extract + 250 mg of golden berry extract, both with 100% proanthocyanidins, in perfect antioxidant synergy.</p>
      <div class="combo-pills">
        <span class="combo-pill combo-pill--grape">🍇 250 mg Peruvian Grape</span>
        <span class="combo-pill combo-pill--golden">🌟 250 mg Golden Berry</span>
      </div>
      <a href="pages/productos.php#combo" class="btn btn--primary" style="background:linear-gradient(135deg,var(--combo),var(--combo-2));box-shadow:0 4px 18px rgba(42,112,53,.32)">
        View Full Formula →
      </a>
    </div>
  </div>
</section>

<!-- ══════════════════════════ CERTS ═════════════════════════════════════ -->
<section class="certs" aria-label="Certifications and guarantees">
  <div class="container">
    <div class="certs__row" data-aos="fade-up">
      <div class="cert-item"><div class="cert-item__icon">🌿</div><div><div class="cert-item__title">100% Natural</div><div class="cert-item__desc">No artificial ingredients</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">🚫</div><div><div class="cert-item__title">Non-GMO</div><div class="cert-item__desc">Not genetically modified</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">🇵🇪</div><div><div class="cert-item__title">Made in Peru</div><div class="cert-item__desc">Grown in Peru</div></div></div>
      <div class="cert-item"><div class="cert-item__icon--capsule">💊</div><div><div class="cert-item__title">Vegetable Capsule</div><div class="cert-item__desc">No animal gelatine</div></div></div>
      <div class="cert-item"><div class="cert-item__icon">⚗️</div><div><div class="cert-item__title">100% Extract</div><div class="cert-item__desc">High purity</div></div></div>
    </div>
  </div>
</section>

<!-- ══════════════════════════ FINAL CTA ════════════════════════════════ -->
<section class="cta-section section">
  <div class="container">
    <div class="cta-box" data-aos="zoom-in">
      <span class="section-tag" style="position:relative">Have questions?</span>
      <h2 class="section-title" style="margin-top:12px;position:relative">
        Be the first to<br><span>receive our products</span>
      </h2>
      <p class="section-desc" style="margin-bottom:clamp(24px,4vw,36px);position:relative">
        Sign up and we'll notify you as soon as they're available. Ask us about ingredients, dosage, and availability.
      </p>
      <div class="cta-box__actions">
        <a href="pages/contacto.php" class="btn btn--primary btn--lg">
          Notify Me
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true"><path d="M5 12h14M12 5l7 7-7 7"/></svg>
        </a>
        <a href="pages/productos.php" class="btn btn--outline btn--lg">View Products</a>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>