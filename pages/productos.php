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

      <button type="button" class="nutri-trigger" data-modal-open="modalGolden">
        🔬 View full nutritional profile
      </button>
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

      <button type="button" class="nutri-trigger" data-modal-open="modalGrape">
        🔬 View full nutritional profile
      </button>
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
      
      <button type="button" class="nutri-trigger" data-modal-open="modalCombo">
        🔬 View full nutritional profile
      </button>
    </div>
  </div>
</section>

<!-- ══════════════ MODAL: Golden Berry — Nutritional Profile ══════════════ -->
<div class="nutri-modal" id="modalGolden" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="nutri-modal__overlay" data-modal-close></div>
  <div class="nutri-modal__box">
    <button type="button" class="nutri-modal__close" data-modal-close aria-label="Close">✕</button>
    <span class="nutri-modal__eyebrow">Golden Berry · Nutritional Profile</span>
    <h3 class="nutri-modal__title">Vitamins &amp; Health Benefits</h3>

    <div class="nutri-chips">
      <span class="nutri-chip">🅰️ Vitamin A</span>
      <span class="nutri-chip">🅲 Vitamin C</span>
      <span class="nutri-chip">🅱️ B-Complex (B1, B2, B3, B12)</span>
    </div>

    <ul class="nutri-list">
      <li><span class="nutri-list__bullet">•</span><span><strong>Vitamin A:</strong> High in beta-carotene, which is essential for vision, immune function, and skin health.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Vitamin C:</strong> An excellent source of this antioxidant, which supports collagen production, immune system strength, and iron absorption.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>B-Complex Vitamins:</strong> They contain significant amounts of Vitamin B1 (thiamine), B2 (riboflavin), B3 (niacin), and B12, which are vital for energy metabolism and neurological health.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>High Antioxidant Capacity:</strong> They are rich in polyphenols and carotenoids, which help fight oxidative stress and may lower the risk of chronic diseases.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Anti-inflammatory Properties:</strong> Compounds within the fruit, such as withanolides, have been studied for their potential to reduce inflammation in the body.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Bone Health:</strong> They are a good source of Vitamin K, which is necessary for bone mineralization and blood clotting.</span></li>
    </ul>

    <div class="nutri-accordion">
      <div class="nutri-accordion__item">
        <button type="button" class="nutri-accordion__toggle" aria-expanded="false">
          <span>How do these antioxidants work in your body? Learn more</span>
          <span class="nutri-accordion__icon">+</span>
        </button>
        <div class="nutri-accordion__panel">
          <p>The antioxidant properties of golden berries are primarily attributed to their high concentration of bioactive compounds, which work together to protect cells from oxidative damage.</p>
          <p><strong>Key Antioxidant Compounds</strong></p>
          <p><strong>Polyphenols:</strong> Golden berries are rich in various phenolic compounds. These act as "free radical scavengers," meaning they neutralize unstable molecules that cause cellular damage and contribute to aging and chronic diseases.</p>
          <p><strong>Carotenoids:</strong> These are pigments that give the fruit its deep yellow-orange color. The most prominent is beta-carotene, which the body converts into Vitamin A. Beyond its role as a vitamin, it acts as a potent antioxidant that protects cell membranes and supports immune function.</p>
          <p><strong>Withanolides:</strong> These are a group of naturally occurring steroids found in the Solanaceae (nightshade) family. They are considered the "signature" bioactive compounds of golden berries. They are widely studied for their ability to modulate the body's inflammatory response and provide significant protection against oxidative stress.</p>
          <p><strong>How These Properties Benefit the Body</strong></p>
          <p><strong>Neutralizing Oxidative Stress:</strong> By stabilizing free radicals, these antioxidants prevent the "chain reaction" of damage that can lead to cell mutation, DNA damage, and the development of chronic conditions like heart disease or certain cancers.</p>
          <p><strong>Anti-Inflammatory Synergy:</strong> The combination of withanolides and polyphenols helps inhibit pro-inflammatory enzymes. By lowering chronic, low-grade inflammation, these compounds help protect tissues and organs throughout the body.</p>
          <p><strong>Cellular Protection:</strong> The antioxidants in golden berries help maintain the integrity of cell walls, which is crucial for overall cellular health and longevity. This is particularly beneficial for high-stress areas, such as the eyes (where carotenoids help filter harmful light) and the skin.</p>
          <p><strong>Enhanced Immune Response:</strong> By reducing the "oxidative burden" on the immune system, the antioxidants allow the body to respond more effectively to pathogens and external stressors.</p>
          <p>In essence, the antioxidant profile of golden berries is not just about a single nutrient, but rather a synergistic blend of compounds that help the body maintain balance, reduce inflammation, and defend against the daily wear and tear of oxidative stress.</p>
          <a class="nutri-accordion__link" data-modal-open="modalPolifenoles" data-modal-switch>→ Learn more about polyphenols</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ══════════════ MODAL: Grape — Nutritional Profile ══════════════ -->
<div class="nutri-modal" id="modalGrape" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="nutri-modal__overlay" data-modal-close></div>
  <div class="nutri-modal__box">
    <button type="button" class="nutri-modal__close" data-modal-close aria-label="Close">✕</button>
    <span class="nutri-modal__eyebrow">Grape · Nutritional Profile</span>
    <h3 class="nutri-modal__title">Nutrients &amp; Health Benefits</h3>

    <div class="nutri-chips">
      <span class="nutri-chip">🅴 Vitamin E</span>
      <span class="nutri-chip">🍇 Proanthocyanidins</span>
    </div>

    <ul class="nutri-list">
      <li><span class="nutri-list__bullet">•</span><span><strong>Vitamin E:</strong> Grape seeds are a notable source of Vitamin E, which acts as a powerful antioxidant protecting cells from damage.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Proanthocyanidins:</strong> While not a vitamin, this is the primary active component—a class of flavonoids that provide the majority of the health benefits associated with grape seeds.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Cardiovascular Support:</strong> Grape seed extract is widely recognized for its ability to help improve blood flow and maintain healthy blood pressure levels.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Powerful Antioxidant Protection:</strong> The proanthocyanidins are significantly more potent than vitamins C and E alone in neutralizing free radicals, which helps support overall cellular health.</span></li>
      <li><span class="nutri-list__bullet">•</span><span><strong>Skin Health:</strong> Due to its high antioxidant content, grape seed extract is often used to support skin elasticity and protect against UV-induced damage.</span></li>
    </ul>

    <div class="nutri-accordion">
      <div class="nutri-accordion__item">
        <button type="button" class="nutri-accordion__toggle" aria-expanded="false">
          <span>Proanthocyanidins are a type of polyphenol — see how they work</span>
          <span class="nutri-accordion__icon">+</span>
        </button>
        <div class="nutri-accordion__panel">
          <p>Proanthocyanidins belong to the broader family of polyphenols, the plant compounds responsible for most of grape seed extract's health benefits.</p>
          <a class="nutri-accordion__link" data-modal-open="modalPolifenoles" data-modal-switch>→ Learn more about polyphenols</a>
        </div>
      </div>
    </div>

    <div class="nutri-disclaimer">
      <span class="nutri-disclaimer__icon">⚠️</span>
      <span><strong>Disclaimer:</strong> While these foods offer health benefits, they should be part of a balanced diet. If you are considering taking concentrated grape seed extract supplements, it is advisable to consult with a healthcare professional, especially if you are taking blood-thinning medications or have upcoming surgery, as they can affect blood clotting.</span>
    </div>
  </div>
</div>

<!-- ══════════════ MODAL: Polyphenols — Shared Science ══════════════ -->
<div class="nutri-modal" id="modalPolifenoles" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="nutri-modal__overlay" data-modal-close></div>
  <div class="nutri-modal__box">
    <button type="button" class="nutri-modal__close" data-modal-close aria-label="Close">✕</button>
    <span class="nutri-modal__eyebrow">The Science Behind It</span>
    <h3 class="nutri-modal__title">Polyphenols</h3>

    <div class="nutri-chips">
      <span class="nutri-chip">🛡️ Antioxidant defense</span>
      <span class="nutri-chip">❤️ Cardiovascular</span>
      <span class="nutri-chip">🩸 Metabolic</span>
      <span class="nutri-chip">🦠 Gut microbiome</span>
      <span class="nutri-chip">🧠 Neuroprotection</span>
    </div>

    <p style="font-family:var(--font-b);font-size:.85rem;line-height:1.75;color:var(--text-2);margin-bottom:16px">
      Polyphenols are naturally occurring plant compounds that function as powerful health-promoting agents. While they are best known for their antioxidant activity, their contribution to health is multifaceted and extends throughout several body systems.
    </p>

    <div class="nutri-accordion">
      <div class="nutri-accordion__item">
        <button type="button" class="nutri-accordion__toggle" aria-expanded="false">
          <span>Primary Mechanisms</span>
          <span class="nutri-accordion__icon">+</span>
        </button>
        <div class="nutri-accordion__panel">
          <p><strong>Antioxidant Defense:</strong> Polyphenols neutralize free radicals—unstable molecules produced by normal metabolism and environmental stressors. By stabilizing these molecules, they prevent oxidative damage to DNA, proteins, and lipids, which is a major driver of aging and chronic disease.</p>
          <p><strong>Anti-Inflammatory Action:</strong> They modulate signaling pathways that trigger inflammation. By suppressing pro-inflammatory cytokines and enzymes, they help reduce chronic, low-grade inflammation, which is linked to almost all major lifestyle-related diseases.</p>
        </div>
      </div>
      <div class="nutri-accordion__item">
        <button type="button" class="nutri-accordion__toggle" aria-expanded="false">
          <span>Key Health Benefits</span>
          <span class="nutri-accordion__icon">+</span>
        </button>
        <div class="nutri-accordion__panel">
          <p><strong>Cardiovascular Health:</strong> Polyphenols are widely studied for their ability to improve endothelial function (the health of the lining of your blood vessels). They help maintain healthy blood pressure, prevent the oxidation of LDL cholesterol (which prevents plaque buildup), and improve overall blood flow.</p>
          <p><strong>Metabolic Regulation:</strong> They play a significant role in managing blood sugar. Polyphenols can inhibit enzymes involved in carbohydrate digestion and absorption, and they help improve insulin sensitivity, making them beneficial for metabolic health and the prevention of type 2 diabetes.</p>
          <p><strong>Gut Microbiome Support:</strong> Many polyphenols are not fully absorbed in the small intestine and instead reach the colon, where they act as "prebiotics." They feed beneficial gut bacteria, promoting a diverse and healthy microbiome, which in turn supports immune function and mood regulation.</p>
          <p><strong>Neuroprotection:</strong> Emerging research suggests that certain polyphenols can cross the blood-brain barrier. They are thought to help protect neurons from oxidative stress and may support cognitive function and memory by reducing inflammation in the brain.</p>
        </div>
      </div>
    </div>

    <p style="font-family:var(--font-b);font-size:.85rem;line-height:1.75;color:var(--text-2);margin-top:16px">
      In summary, polyphenols act as a protective layer for your body, supporting the cardiovascular system, stabilizing metabolic processes, nurturing your gut bacteria, and providing defense against the cellular damage that leads to long-term health decline.
    </p>
  </div>
</div>

<!-- ══════════════ MODAL: Combo — Nutritional Profile ══════════════ -->
<div class="nutri-modal" id="modalCombo" role="dialog" aria-modal="true" aria-hidden="true">
  <div class="nutri-modal__overlay" data-modal-close></div>
  <div class="nutri-modal__box">
    <button type="button" class="nutri-modal__close" data-modal-close aria-label="Close">✕</button>
    <span class="nutri-modal__eyebrow">Grape &amp; Golden Berry · Nutritional Profile</span>
    <h3 class="nutri-modal__title">The Best of Both Extracts</h3>

    <p style="font-family:var(--font-b);font-size:.85rem;line-height:1.75;color:var(--text-2);margin-bottom:16px">
      This formula combines golden berry's vitamin-rich antioxidant profile (Vitamin A, C and B-Complex) with grape seed's concentrated proanthocyanidins and Vitamin E — delivering cardiovascular, anti-inflammatory and cellular protection benefits from both sources in a single capsule.
    </p>

    <div class="nutri-chips">
      <button type="button" class="nutri-chip" style="cursor:pointer;border:none" data-modal-open="modalGolden" data-modal-switch>🌟 Golden Berry profile →</button>
      <button type="button" class="nutri-chip" style="cursor:pointer;border:none" data-modal-open="modalGrape" data-modal-switch>🍇 Grape profile →</button>
    </div>

    <div class="nutri-disclaimer">
      <span class="nutri-disclaimer__icon">⚠️</span>
      <span><strong>Disclaimer:</strong> While these foods offer health benefits, they should be part of a balanced diet. If you are considering taking concentrated grape seed extract supplements, it is advisable to consult with a healthcare professional, especially if you are taking blood-thinning medications or have upcoming surgery, as they can affect blood clotting.</span>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>