<?php
/**
 * JOVI Enterprise – Header / Nav include
 * Expected variables (optional):
 *   $page_title   – browser tab title
 *   $page_desc    – meta description
 *   $extra_css    – additional CSS filename (no path, e.g. 'productos.css')
 */
$current = basename($_SERVER['PHP_SELF'], '.php');
$base    = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#d4860a">
  <title><?= htmlspecialchars($page_title ?? 'JOVI Enterprise – Natural Supplements from Peru') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc ?? '100% natural medicinal supplements made from grape seeds and golden berry. Grown & Cultivated in Peru.') ?>">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400;1,600&family=DM+Sans:opsz,wght@9..40,300;9..40,400;9..40,500;9..40,600;9..40,700&display=swap" rel="stylesheet">

  <!-- AOS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

  <!-- CSS: variables → base → page-specific -->
  <link rel="stylesheet" href="<?= $base ?>assets/css/variables.css">
  <link rel="stylesheet" href="<?= $base ?>assets/css/base.css">
  <?php if (!empty($extra_css)): ?>
  <link rel="stylesheet" href="<?= $base ?>assets/css/<?= htmlspecialchars($extra_css) ?>">
  <?php endif; ?>

  <!-- Favicon -->
  <link rel="icon" href="data:image/svg+xml,<svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 100 100'><text y='.9em' font-size='90'>🌿</text></svg>">
</head>
<body>

<!-- ════════════════════════════════ NAV ═════════════════════════════════ -->
<nav class="nav" id="nav" role="navigation" aria-label="Main navigation">
  <div class="container nav__inner">

    <a href="<?= $base ?>index.php" class="nav__logo" aria-label="JOVI Enterprise – Home">
      <img src="<?= $base ?>assets/images/logo_jovi_light.png"
          alt="JOVI Enterprise"
          class="nav__logo-img nav__logo-img--light">

      <img src="<?= $base ?>assets/images/logo_jovi_dark.png"
          alt="JOVI Enterprise"
          class="nav__logo-img nav__logo-img--dark">
    </a>

    <ul class="nav__links" role="list">
      <li><a href="<?= $base ?>index.php"           class="nav__link <?= $current === 'index'    ? 'nav__link--active' : '' ?>">Home</a></li>
      <li><a href="<?= $base ?>pages/productos.php" class="nav__link <?= $current === 'productos' ? 'nav__link--active' : '' ?>">Products</a></li>
      <li><a href="<?= $base ?>pages/nosotros.php"  class="nav__link <?= $current === 'nosotros'  ? 'nav__link--active' : '' ?>">About Us</a></li>
      <li><a href="<?= $base ?>pages/contacto.php"  class="nav__link <?= $current === 'contacto'  ? 'nav__link--active' : '' ?>">Contact</a></li>
    </ul>

    <a href="<?= $base ?>pages/contacto.php" class="btn btn--primary btn--sm nav__cta" aria-label="Get in touch">
      Get in Touch
    </a>

    <button class="nav__hamburger" id="navToggle" aria-label="Open menu" aria-expanded="false" aria-controls="mobileMenu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<!-- ═════════════════════════ MOBILE MENU ═══════════════════════════════ -->
<div class="nav__mobile-menu" id="mobileMenu" role="dialog" aria-modal="true" aria-label="Navigation menu">
  <div class="nav__mobile-menu-header">
    <a href="<?= $base ?>index.php" class="nav__mobile-logo" aria-label="JOVI Enterprise – Home">
      <img src="<?= $base ?>assets/images/logo_jovi_dark.png" alt="JOVI Enterprise" class="nav__mobile-logo-img">
    </a>

    <button class="nav__mobile-close" id="mobileClose" aria-label="Close menu">
      ✕
    </button>
  </div>
  <nav aria-label="Mobile navigation">
    <a href="<?= $base ?>index.php" class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🏠</span>Home
    </a>
    <a href="<?= $base ?>pages/productos.php" class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🌟</span>Products
    </a>
    <a href="<?= $base ?>pages/nosotros.php"  class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🌿</span>About Us
    </a>
    <a href="<?= $base ?>pages/contacto.php"  class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">📧</span>Contact
    </a>
  </nav>
  <div class="nav__mobile-cta">
    <a href="<?= $base ?>pages/contacto.php" class="btn btn--primary btn--full btn--lg">
      Get in Touch →
    </a>
    <a href="<?= $base ?>pages/productos.php" class="btn btn--outline btn--full">
      View Products
    </a>
  </div>
</div>