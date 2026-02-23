<?php
/**
 * JOVI Enterprise – Footer include
 */
?>

<!-- ═════════════════════════════ FOOTER ═════════════════════════════════ -->
<footer class="footer" role="contentinfo">
  <div class="container">
    <div class="footer__grid">

      <!-- Brand -->
      <div>
        <div class="footer__logo">
          <span class="footer__logo-icon" aria-hidden="true">🌿</span>
          Jovi Enterprise
        </div>
        <p class="footer__tagline">
          Suplementos medicinales 100% naturales a base de semillas de uva y aguaymanto peruano.<br>
          <em>Grown &amp; Cultivated in Peru.</em>
        </p>
      </div>

      <!-- Nav -->
      <div>
        <h4 class="footer__col-title">Navegación</h4>
        <ul class="footer__links">
          <li><a href="<?= $base ?>index.php">Inicio</a></li>
          <li><a href="<?= $base ?>pages/productos.php">Productos</a></li>
          <li><a href="<?= $base ?>pages/nosotros.php">Nosotros</a></li>
          <li><a href="<?= $base ?>pages/contacto.php">Contacto</a></li>
        </ul>
      </div>

      <!-- Products -->
      <div>
        <h4 class="footer__col-title">Productos</h4>
        <ul class="footer__links">
          <li><a href="<?= $base ?>pages/productos.php#golden">🌟 Golden Berry</a></li>
          <li><a href="<?= $base ?>pages/productos.php#grape">🍇 Grape</a></li>
          <li><a href="<?= $base ?>pages/productos.php#combo">🌿 Grape &amp; Golden Berry</a></li>
        </ul>
      </div>

      <!-- Contacto — icono siempre alineado con el texto -->
      <div>
        <h4 class="footer__col-title">Contacto</h4>
        <div class="footer__links">
          <a href="https://maps.google.com/?q=Ica,Peru" target="_blank" rel="noopener" class="footer__contact-item">
            <span class="footer__contact-icon">📍</span>
            <span class="footer__contact-text">Ica, Perú</span>
          </a>
          <a href="mailto:contacto@jovienterp.com" class="footer__contact-item">
            <span class="footer__contact-icon">✉️</span>
            <span class="footer__contact-text">jovienterp@gmail.com</span>
          </a>
          <a href="https://wa.me/51999999999" class="footer__contact-item">
            <span class="footer__contact-icon">💬</span>
            <span class="footer__contact-text">+51 999 999 999</span>
          </a>
        </div>
      </div>

    </div>

    <div class="footer__bottom">
      <span>&copy; <?= date('Y') ?> JOVI Enterprise. Todos los derechos reservados.</span>
      <span>🌿 Grown &amp; Cultivated in Peru</span>
    </div>
  </div>
</footer>

<!-- ═══════════════════════════════ SCRIPTS ══════════════════════════════ -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="<?= $base ?>assets/js/main.js"></script>
</body>
</html>
