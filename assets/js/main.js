/**
 * Elan Law — Main JavaScript
 * Extracted verbatim from original HTML source.
 * Covers: navbar scroll, mobile toggle, fade-up observer,
 *         contact form handler, back-to-top button.
 */

(function () {
  'use strict';

  // ── Navbar: add .scrolled class on scroll ─────────────────
  const header = document.getElementById('main-header');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 60) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll(); // run once on load
  }

  // ── Mobile Nav Toggle ─────────────────────────────────────
  const navToggle = document.getElementById('nav-toggle');
  const navLinks  = document.getElementById('nav-links');

  // Create overlay backdrop if not already in DOM
  let navOverlay = document.querySelector('.nav-overlay');
  if ( ! navOverlay ) {
    navOverlay = document.createElement('div');
    navOverlay.className = 'nav-overlay';
    navOverlay.setAttribute('aria-hidden', 'true');
    document.body.appendChild(navOverlay);
  }

  const openNav = () => {
    navLinks.classList.add('open');
    navToggle.classList.add('active');
    navToggle.setAttribute('aria-expanded', 'true');
    navOverlay.style.display = 'block';
    // Trigger reflow for CSS transition
    void navOverlay.offsetWidth;
    navOverlay.classList.add('show');
    document.body.style.overflow = 'hidden';
  };

  const closeNav = () => {
    navLinks.classList.remove('open');
    navToggle.classList.remove('active');
    navToggle.setAttribute('aria-expanded', 'false');
    navOverlay.classList.remove('show');
    document.body.style.overflow = '';
    // Hide overlay after transition
    setTimeout( () => { navOverlay.style.display = 'none'; }, 400 );
  };

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', () => {
      if ( navLinks.classList.contains('open') ) {
        closeNav();
      } else {
        openNav();
      }
    });

    // Close menu when a nav link is clicked
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeNav);
    });

    // Close on overlay click
    navOverlay.addEventListener('click', closeNav);

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
      if ( e.key === 'Escape' && navLinks.classList.contains('open') ) {
        closeNav();
      }
    });
  }

  // ── Fade-up IntersectionObserver ──────────────────────────
  const fadeEls = document.querySelectorAll('.fade-up');
  if (fadeEls.length) {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
    );
    fadeEls.forEach(el => observer.observe(el));
  }

  // ── Back-to-top Button ────────────────────────────────────
  const backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 400) {
        backToTop.classList.add('show');
      } else {
        backToTop.classList.remove('show');
      }
    }, { passive: true });

    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ── Contact Form (home page static form) ─────────────────
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn     = this.querySelector('.form-submit');
      const success = document.getElementById('form-success');
      const origText = btn.innerHTML;

      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending…';
      btn.disabled  = true;

      // Simulated async delay — replace with real AJAX / form plugin if needed
      setTimeout(() => {
        btn.innerHTML = origText;
        btn.disabled  = false;
        if (success) {
          success.classList.add('show');
          setTimeout(() => success.classList.remove('show'), 6000);
        }
        contactForm.reset();
      }, 1200);
    });
  }

  // ── Smooth Scroll for anchor links ───────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = header ? header.offsetHeight + 16 : 80;
        const top = target.getBoundingClientRect().top + window.scrollY - offset;
        window.scrollTo({ top, behavior: 'smooth' });
      }
    });
  });

})();
