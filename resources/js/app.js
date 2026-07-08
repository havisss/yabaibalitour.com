import './bootstrap';

/* ═══════════════════════════════════════════════════════
   NAVBAR SCROLL BEHAVIOR
   ═══════════════════════════════════════════════════════ */
document.addEventListener('DOMContentLoaded', () => {
  const navbar = document.querySelector('.navbar');

  if (navbar) {
    const handleScroll = () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    };

    window.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll(); // initial check
  }

  /* ═══════════════════════════════════════════════════════
     MOBILE MENU TOGGLE
     ═══════════════════════════════════════════════════════ */
  const mobileBtn = document.querySelector('.mobile-menu-btn');
  const mobileMenu = document.querySelector('.mobile-menu');
  const mobileClose = document.querySelector('.mobile-close-btn');

  if (mobileBtn && mobileMenu) {
    mobileBtn.addEventListener('click', () => {
      mobileMenu.classList.add('open');
      document.body.style.overflow = 'hidden';
    });

    const closeMenu = () => {
      mobileMenu.classList.remove('open');
      document.body.style.overflow = '';
    };

    if (mobileClose) mobileClose.addEventListener('click', closeMenu);

    // Close when clicking any link
    mobileMenu.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', closeMenu);
    });
  }

  /* ═══════════════════════════════════════════════════════
     SCROLL-TRIGGERED ANIMATIONS (Intersection Observer)
     ═══════════════════════════════════════════════════════ */
  const animateOnScroll = () => {
    const elements = document.querySelectorAll('[data-animate]');

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const animation = el.dataset.animate;
          const delay = el.dataset.animateDelay || '0';

          el.style.transitionDelay = delay + 'ms';
          el.classList.add('animate-visible');
          el.classList.add('animate-' + animation);
          observer.unobserve(el);
        }
      });
    }, {
      threshold: 0.1,
      rootMargin: '0px 0px -40px 0px'
    });

    elements.forEach(el => {
      el.classList.add('animate-hidden');
      observer.observe(el);
    });
  };

  animateOnScroll();

  /* ═══════════════════════════════════════════════════════
     COUNTUP ANIMATION
     ═══════════════════════════════════════════════════════ */
  const countUpElements = document.querySelectorAll('[data-countup]');

  if (countUpElements.length > 0) {
    const countUpObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.dataset.countup);
          const duration = 2000;
          const start = 0;
          const startTime = performance.now();

          const update = (currentTime) => {
            const elapsed = currentTime - startTime;
            const progress = Math.min(elapsed / duration, 1);
            // easeOutCubic
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.floor(start + (target - start) * eased);
            el.textContent = current.toLocaleString();

            if (progress < 1) {
              requestAnimationFrame(update);
            } else {
              el.textContent = target.toLocaleString() + (el.dataset.suffix || '');
            }
          };

          requestAnimationFrame(update);
          countUpObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    countUpElements.forEach(el => countUpObserver.observe(el));
  }
});

/* ═══════════════════════════════════════════════════════
   CSS-BASED ANIMATION CLASSES
   (injected via JS to keep CSS clean)
   ═══════════════════════════════════════════════════════ */
const style = document.createElement('style');
style.textContent = `
  .animate-hidden {
    opacity: 0;
    transition: opacity 0.6s cubic-bezier(0.4, 0, 0.2, 1),
                transform 0.6s cubic-bezier(0.4, 0, 0.2, 1);
  }

  .animate-hidden[data-animate="fade-up"] { transform: translateY(30px); }
  .animate-hidden[data-animate="fade-left"] { transform: translateX(-30px); }
  .animate-hidden[data-animate="fade-right"] { transform: translateX(30px); }
  .animate-hidden[data-animate="fade-down"] { transform: translateY(-30px); }
  .animate-hidden[data-animate="zoom-in"] { transform: scale(0.95); }
  .animate-hidden[data-animate="fade"] { transform: none; }

  .animate-visible {
    opacity: 1 !important;
    transform: translateY(0) translateX(0) scale(1) !important;
  }
`;
document.head.appendChild(style);
