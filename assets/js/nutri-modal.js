// =====================================================
// JOVI ENTERPRISE — nutri-modal.js
// Lógica genérica para los modales de perfil nutricional.
// No modifica main.js, funciona de forma independiente.
// =====================================================

'use strict';

(function () {
  function openModal(id) {
    const modal = document.getElementById(id);
    if (!modal) return;
    modal.classList.add('is-open');
    modal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeModal(modal) {
    if (!modal) return;
    modal.classList.remove('is-open');
    modal.setAttribute('aria-hidden', 'true');
    if (!document.querySelector('.nutri-modal.is-open')) {
      document.body.style.overflow = '';
    }
  }

  function closeAllModals() {
    document.querySelectorAll('.nutri-modal.is-open').forEach(closeModal);
  }

  document.addEventListener('click', function (e) {
    const opener = e.target.closest('[data-modal-open]');
    if (opener) {
      const targetId = opener.getAttribute('data-modal-open');
      if (opener.hasAttribute('data-modal-switch')) closeAllModals();
      openModal(targetId);
      return;
    }

    const closer = e.target.closest('[data-modal-close]');
    if (closer) {
      closeModal(closer.closest('.nutri-modal'));
      return;
    }

    const accToggle = e.target.closest('.nutri-accordion__toggle');
    if (accToggle) {
      const panel = accToggle.nextElementSibling;
      const expanded = accToggle.getAttribute('aria-expanded') === 'true';
      accToggle.setAttribute('aria-expanded', String(!expanded));
      if (panel) panel.classList.toggle('is-open', !expanded);
    }
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') closeAllModals();
  });
})();