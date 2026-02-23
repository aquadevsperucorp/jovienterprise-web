// =====================================================
// JOVI ENTERPRISE — main.js
// =====================================================

'use strict';

// ── AOS INIT ──
AOS.init({
  duration: 680,
  once: true,
  easing: 'ease-out-quart',
  offset: 40,
});

// ── NAV SCROLL ──
// Solo toggle de clase — los colores los maneja CSS (.nav vs .nav.scrolled)
const nav = document.getElementById('nav');
if (nav) {
  const onScroll = () => nav.classList.toggle('scrolled', window.scrollY > 40);
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();
}

// ── MOBILE MENU ──
const hamburger  = document.getElementById('navToggle');
const mobileMenu = document.getElementById('mobileMenu');
const mobileClose = document.getElementById('mobileClose');

function openMenu() {
  if (!hamburger || !mobileMenu) return;
  hamburger.classList.add('active');
  mobileMenu.classList.add('open');
  document.body.style.overflow = 'hidden';
}
function closeMenu() {
  if (!hamburger || !mobileMenu) return;
  hamburger.classList.remove('active');
  mobileMenu.classList.remove('open');
  document.body.style.overflow = '';
}

if (hamburger) hamburger.addEventListener('click', () =>
  mobileMenu.classList.contains('open') ? closeMenu() : openMenu()
);
if (mobileClose) mobileClose.addEventListener('click', closeMenu);
if (mobileMenu) {
  mobileMenu.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
}

// Close menu on escape key
document.addEventListener('keydown', e => {
  if (e.key === 'Escape' && mobileMenu?.classList.contains('open')) closeMenu();
});

// ── COUNTDOWN ──
// ⚠️  PARA CAMBIAR LA FECHA:
//     Descomenta la línea `const launch = new Date('...')` y ajusta la fecha.
//     Ejemplo: new Date('2025-09-01T00:00:00')
(function () {
  const now    = new Date();
  const launch = new Date(now.getFullYear(), now.getMonth() + 3, now.getDate());
  // const launch = new Date('2025-09-01T00:00:00');

  const els = {
    days:  document.getElementById('cd-days'),
    hours: document.getElementById('cd-hours'),
    mins:  document.getElementById('cd-mins'),
    secs:  document.getElementById('cd-secs'),
  };

  if (!els.days) return;

  const pad = n => String(n).padStart(2, '0');

  function tick() {
    const diff = launch - new Date();
    if (diff <= 0) {
      Object.values(els).forEach(el => { el.textContent = '00'; });
      return;
    }
    els.days.textContent  = pad(Math.floor(diff / 86_400_000));
    els.hours.textContent = pad(Math.floor((diff % 86_400_000) / 3_600_000));
    els.mins.textContent  = pad(Math.floor((diff % 3_600_000) / 60_000));
    els.secs.textContent  = pad(Math.floor((diff % 60_000) / 1_000));
  }

  tick();
  setInterval(tick, 1000);
})();

// ── CONTACT FORM UI FEEDBACK ──
const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', () => {
    const btn = contactForm.querySelector('[type="submit"]');
    if (btn) {
      btn.innerHTML = '<span>Enviando…</span>';
      btn.disabled  = true;
    }
  });
}

// ── SMOOTH IMAGE FADE-IN (avoids CLS) ──
document.querySelectorAll('img').forEach(img => {
  if (img.complete) return;
  img.style.opacity    = '0';
  img.style.transition = 'opacity 0.4s';
  img.addEventListener('load',  () => { img.style.opacity = '1'; });
  img.addEventListener('error', () => { img.style.opacity = '0.4'; });
});

// ── PAGE HERO BG PARALLAX TRIGGER ──
document.querySelectorAll('.page-hero__bg').forEach(bg => {
  bg.classList.add('loaded'); // triggers CSS scale animation
});

// ── SUBTLE CARD TILT (desktop only) ──
if (window.matchMedia('(hover: hover)').matches) {
  document.querySelectorAll('.product-card, .coming-card').forEach(card => {
    card.addEventListener('mousemove', e => {
      const r = card.getBoundingClientRect();
      const x = ((e.clientX - r.left)  / r.width  - 0.5) * 5;
      const y = ((e.clientY - r.top)   / r.height - 0.5) * 5;
      card.style.transform = `translateY(-7px) rotateX(${-y}deg) rotateY(${x}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });
}
