// =====================================================
// JOVI ENTERPRISE — perfil-nutricional.js
// Carrusel de fondo del hero (cross-fade cada 4s).
// Independiente de main.js y de nutri-modal.js.
// =====================================================

'use strict';

(function () {
  const slides = document.querySelectorAll('.pn-hero-slide');
  if (slides.length < 2) return;

  let current = 0;

  setInterval(() => {
    slides[current].classList.remove('is-active');
    current = (current + 1) % slides.length;
    slides[current].classList.add('is-active');
  }, 4000);
})();