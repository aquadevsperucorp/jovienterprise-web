<?php
$page_title = 'Products – JOVI Enterprise';
$page_desc  = 'Golden Berry, Grape and Grape & Golden Berry. 100% natural supplements made from Peruvian seeds. 60 vegetable capsules.';
$extra_css  = 'productos.css';
include '../includes/header.php';
?>

<!-- Page Hero -->
<section class="page-hero" aria-label="Product catalogue">
  <div class="page-hero__bg" style="background-image:url('../assets/images/valle_peru_2.jpg')"></div>
  <div class="page-hero__overlay"></div>
  <div class="container">
    <span class="section-tag" data-aos="fade-up">Full Catalogue</span>
    <h1 data-aos="fade-up" data-aos-delay="80">Our <span>Products</span></h1>
    <p data-aos="fade-up" data-aos-delay="140">Three natural formulas, cultivated and processed in Peru to world-class standards.</p>
  </div>
</section>

<!-- Banner -->
<div class="alert-banner alert-banner--golden" role="status">
  🚀&nbsp; These products are launching <strong>soon</strong> —
  <a href="contacto.php">Notify me when they're available</a>
</div>

<!-- ══════════════════ GOLDEN BERRY ════════════════════════════════════ -->
<section class="section" id="golden" style="background:var(--bg)" aria-label="Golden Berry">
  <div class="container detail-grid">

    <!-- Images -->
    <div data-aos="fade-right">
      <div class="detail-img-card">
        <img src="../assets/images/aguaymanto_3.jpg" alt="Golden Berry – Peruvian golden berry close-up" loading="lazy">
      </div>
      <div class="detail-img-secondary">
        <img src="../assets/images/aguaymanto_2.jpg" alt="Peruvian golden berry field" loading="lazy">
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#fff8e0,#ffd97a);border:2px solid rgba(212,134,10,.25)">
        <span style="display:inline-block;background:var(--golden);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v2.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.3rem,2.5vw,1.6rem);color:var(--golden-3);margin-bottom:5px;font-weight:600">
          <span class="notranslate" translate="no">
            Golden Berry
          </span>
        </h3>
        <p style="font-size:.76rem;font-weight:700;color:var(--golden);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">EXTRACT 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">500mg</span><span class="detail-stat__label">Per capsule</span></div>
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">60</span><span class="detail-stat__label">Capsules</span></div>
          <div class="detail-stat" style="background:var(--golden-light)"><span class="detail-stat__val" style="color:var(--golden-3)">100%</span><span class="detail-stat__label">Extract</span></div>
        </div>
      </div>
    </div>

    <!-- Info -->
    <div data-aos="fade-left">
      <span class="section-tag notranslate" translate="no">🌟 Golden Berry · Aguaymanto</span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        Golden Berry<br>Seed Extract
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        A source of antioxidants to help maintain good health. Golden berry seed extract may help relieve symptoms associated with uncomplicated chronic venous insufficiency, such as feelings of swelling, heaviness, and tingling in the legs.
      </p>

      <?php
      $facts_golden = [
        ['🌱', 'Medicinal ingredient',        'Golden berry seed extract (Peruvian aguaymanto) 100% — 500 mg'],
        ['🧪', 'Non-medicinal ingredients',   'Vegetable magnesium stearate in a non-GMO vegetable capsule made of plant-based carbohydrate gum and purified water.'],
        ['🚫', 'Contains no',                 'Artificial preservatives, flavourings or colours, sugar, dairy, wheat, corn, starch, soy, or yeast.'],
        ['💊', 'Recommended use',             'Adults: 1 capsule per day or as directed by a healthcare professional. Allow a minimum of 1 month to see benefits. Consult a doctor for use beyond 3 months.'],
        ['⚠️', 'Cautions',                   'Consult a healthcare professional before use if you are pregnant, breastfeeding, or taking prescription medications.'],
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
        Check Availability →
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
      <span class="section-tag" style="color:var(--grape-3);background:var(--grape-bg);border-color:rgba(107,37,128,.28)">
        <span class="notranslate" translate="no">🍇 Grape</span> · Peruvian Grape
      </span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        Grape Seed<br>Extract
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        A source of antioxidants to help maintain good health. The 100% proanthocyanidin grape seed extract may help relieve symptoms associated with uncomplicated chronic venous insufficiency.
      </p>

      <?php
      $facts_grape = [
        ['🍇', 'Medicinal ingredient',        'Grape seed extract (Peruvian grape) 100% proanthocyanidins — 500 mg'],
        ['🧪', 'Non-medicinal ingredients',   'Vegetable magnesium stearate in a non-GMO vegetable capsule made of plant-based carbohydrate gum and purified water.'],
        ['🚫', 'Contains no',                 'Artificial preservatives, flavourings or colours, sugar, dairy, wheat, corn, starch, soy, or yeast.'],
        ['💊', 'Recommended use',             'Adults: 1 capsule per day or as directed by a healthcare professional. Allow a minimum of 1 month to see benefits. Consult a doctor for use beyond 3 months.'],
        ['⚠️', 'Cautions',                   'Consult a healthcare professional before use if you are pregnant, breastfeeding, or taking prescription medications.'],
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
        Check Availability →
      </a>
    </div>

    <!-- Images -->
    <div data-aos="fade-left">
      <div class="detail-img-card">
        <img src="../assets/images/uva_2.jpg" alt="Grape – Peruvian Grape" loading="lazy">
      </div>
      <div class="detail-img-secondary">
        <img src="../assets/images/uva_1.jpg" alt="Peruvian vineyard" loading="lazy">
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#f5eafa,#dda0f0);border:2px solid rgba(107,37,128,.25)">
        <span style="display:inline-block;background:var(--grape);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v1.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.3rem,2.5vw,1.6rem);color:var(--grape-3);margin-bottom:5px;font-weight:600">
          <span class="notranslate" translate="no">Grape</span>
        </h3>
        <p style="font-size:.76rem;font-weight:700;color:var(--grape);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">100% PROANTHOCYANIDINS 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">500mg</span><span class="detail-stat__label">Per capsule</span></div>
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">60</span><span class="detail-stat__label">Capsules</span></div>
          <div class="detail-stat" style="background:var(--grape-light)"><span class="detail-stat__val" style="color:var(--grape-3)">100%</span><span class="detail-stat__label">Extract</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="section-divider section-divider--grape" aria-hidden="true"></div>

<!-- ══════════════════════ COMBO ════════════════════════════════════════ -->
<section class="section" id="combo" style="background:var(--bg)" aria-label="Grape & Golden Berry">
  <div class="container detail-grid">

    <!-- Images -->
    <div data-aos="fade-right">
      <div class="combo-split-img">
        <div class="combo-split-img__grid">
          <img src="../assets/images/uva_3.jpg"        alt="Grape Extract">
          <img src="../assets/images/aguaymanto_1.jpg" alt="Golden Berry Extract">
        </div>
        <div class="combo-split-img__overlay"></div>
        <div class="combo-split-img__label">🍇 + 🌟 The perfect synergy</div>
      </div>
      <div class="detail-badge-box" style="background:linear-gradient(160deg,#e8f5ea,#a8e6aa);border:2px solid rgba(42,112,53,.25)">
        <span style="display:inline-block;background:var(--combo);color:white;font-size:.66rem;font-weight:700;letter-spacing:.1em;text-transform:uppercase;padding:4px 13px;border-radius:100px;margin-bottom:10px">v3.0</span>
        <h3 style="font-family:var(--font-d);font-size:clamp(1.1rem,2.5vw,1.4rem);color:var(--combo-3);margin-bottom:5px;font-weight:600">
          <span class="notranslate" translate="no">
            Grape &amp; Golden Berry
          </span>
        </h3>
        <p style="font-size:.74rem;font-weight:700;color:var(--combo);letter-spacing:.08em;text-transform:uppercase;margin-bottom:12px">EXTRACT 500 MG</p>
        <div class="detail-stat-row">
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">250mg</span><span class="detail-stat__label">Grape</span></div>
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">250mg</span><span class="detail-stat__label">G. Berry</span></div>
          <div class="detail-stat" style="background:var(--combo-light)"><span class="detail-stat__val" style="color:var(--combo-3)">60</span><span class="detail-stat__label">Capsules</span></div>
        </div>
      </div>
    </div>

    <!-- Info -->
    <div data-aos="fade-left">
      <span class="section-tag" style="color:var(--combo-3);background:var(--combo-bg);border-color:rgba(42,112,53,.28)">🌿 Combined Formula</span>
      <h2 style="font-family:var(--font-d);font-size:clamp(1.7rem,3.5vw,2.6rem);color:var(--text);margin:14px 0 16px;font-weight:600">
        <span class="notranslate" translate="no">Grape &amp; Golden Berry</span><br>Extract
      </h2>
      <p style="font-size:clamp(.87rem,1.7vw,.97rem);color:var(--text-2);line-height:1.8;margin-bottom:26px">
        The perfect synergy of Peru's two most powerful superfoods. The combined golden berry and grape seed extract delivers maximum antioxidant potency in a single capsule.
      </p>

      <?php
      $facts_combo = [
        ['🌿', 'Medicinal ingredients',       'Grape seed extract (Peruvian grape) 100% proanthocyanidins — 250 mg<br>Golden berry seed extract (Peruvian aguaymanto) 100% proanthocyanidins — 250 mg'],
        ['🧪', 'Non-medicinal ingredients',   'Vegetable magnesium stearate in a non-GMO vegetable capsule made of plant-based carbohydrate gum and purified water.'],
        ['🚫', 'Contains no',                 'Artificial preservatives, flavourings or colours, sugar, dairy, wheat, corn, starch, soy, or yeast.'],
        ['💊', 'Recommended use',             'Adults: 1 capsule per day or as directed by a healthcare professional. Allow a minimum of 1 month to see benefits. Consult a healthcare professional for use beyond 3 months.'],
        ['⚠️', 'Cautions',                   'Consult a healthcare professional before use if you are pregnant, breastfeeding, or taking prescription medications.'],
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
        Check Availability →
      </a>
    </div>
  </div>
</section>

<?php include '../includes/footer.php'; ?>