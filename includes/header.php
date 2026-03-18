<?php
/**
 * JOVI Enterprise – Header / Nav include
 * Variables esperadas (opcionales):
 *   $page_title   – título de la pestaña
 *   $page_desc    – meta descripción
 *   $extra_css    – nombre del archivo CSS adicional (sin ruta, p.ej. 'productos.css')
 */
$current = basename($_SERVER['PHP_SELF'], '.php');
$base    = (strpos($_SERVER['PHP_SELF'], '/pages/') !== false) ? '../' : '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#d4860a">
  <title><?= htmlspecialchars($page_title ?? 'JOVI Enterprise – Suplementos Naturales del Perú') ?></title>
  <meta name="description" content="<?= htmlspecialchars($page_desc ?? 'Productos medicinales 100% naturales a base de semillas de uva y aguaymanto. Grown & Cultivated in Peru.') ?>">

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
<nav class="nav" id="nav" role="navigation" aria-label="Menú principal">
  <div class="container nav__inner">

    <a href="<?= $base ?>index.php" class="nav__logo" aria-label="JOVI Enterprise – Inicio">
      <img src="<?= $base ?>assets/images/logo_jovi_light.png"
          alt="JOVI Enterprise"
          class="nav__logo-img nav__logo-img--light">

      <img src="<?= $base ?>assets/images/logo_jovi_dark.png"
          alt="JOVI Enterprise"
          class="nav__logo-img nav__logo-img--dark">
    </a>

    <ul class="nav__links" role="list">
      <li><a href="<?= $base ?>index.php"           class="nav__link <?= $current === 'index'    ? 'nav__link--active' : '' ?>">Inicio</a></li>
      <li><a href="<?= $base ?>pages/productos.php" class="nav__link <?= $current === 'productos' ? 'nav__link--active' : '' ?>">Productos</a></li>
      <li><a href="<?= $base ?>pages/nosotros.php"  class="nav__link <?= $current === 'nosotros'  ? 'nav__link--active' : '' ?>">Nosotros</a></li>
      <li><a href="<?= $base ?>pages/contacto.php"  class="nav__link <?= $current === 'contacto'  ? 'nav__link--active' : '' ?>">Contacto</a></li>
    </ul>

    <a href="<?= $base ?>pages/contacto.php" class="btn btn--primary btn--sm nav__cta" aria-label="Consultar ahora">
      Consultar ahora
    </a>

    <button class="nav__hamburger" id="navToggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="mobileMenu">
      <span></span><span></span><span></span>
    </button>

  </div>
</nav>

<!-- ═════════════════════════ MOBILE MENU ═══════════════════════════════ -->
<div class="nav__mobile-menu" id="mobileMenu" role="dialog" aria-modal="true" aria-label="Menú de navegación">
  <div class="nav__mobile-menu-header">
    <a href="<?= $base ?>index.php" class="nav__mobile-logo" aria-label="JOVI Enterprise – Inicio">
      <img src="<?= $base ?>assets/images/logo_jovi_dark.png" alt="JOVI Enterprise" class="nav__mobile-logo-img">
    </a>

    <button class="nav__mobile-close" id="mobileClose" aria-label="Cerrar menú">
      ✕
    </button>
  </div>
  <nav aria-label="Navegación móvil">
    <a href="<?= $base ?>index.php"           class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🏠</span>Inicio
    </a>
    <a href="<?= $base ?>pages/productos.php" class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🌟</span>Productos
    </a>
    <a href="<?= $base ?>pages/nosotros.php"  class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">🌿</span>Nosotros
    </a>
    <a href="<?= $base ?>pages/contacto.php"  class="nav-mobile-link">
      <span class="nav-icon" aria-hidden="true">📧</span>Contacto
    </a>
  </nav>
  <div class="nav__mobile-cta">
    <a href="<?= $base ?>pages/contacto.php" class="btn btn--primary btn--full btn--lg">
      Consultar ahora →
    </a>
    <a href="<?= $base ?>pages/productos.php" class="btn btn--outline btn--full">
      Ver productos
    </a>
  </div>
</div>
