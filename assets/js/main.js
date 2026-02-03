/**
 * Main Theme JavaScript
 * Scroll reveal, navbar, no typewriter/sliders
 *
 * @package My_Portfolio
 */

(function() {
    'use strict';

    function initStickyNavbar() {
        const navbar = document.getElementById('sticky-navbar');
        if (!navbar) return;
        function handleScroll() {
            const shouldShow = window.scrollY > window.innerHeight * 0.6;
            if (shouldShow) {
                navbar.classList.remove('-translate-y-full', 'opacity-0');
                navbar.classList.add('translate-y-0', 'opacity-100');
            } else {
                navbar.classList.add('-translate-y-full', 'opacity-0');
                navbar.classList.remove('translate-y-0', 'opacity-100');
            }
        }
        window.addEventListener('scroll', handleScroll);
        handleScroll();
    }

    function initSectionAnimations() {
        const sections = document.querySelectorAll('section.section-reveal');
        if (!sections.length) return;
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('section-visible');
                }
            });
        }, { threshold: 0.05, rootMargin: '0px 0px -80px 0px' });
        sections.forEach((section) => observer.observe(section));
    }

    function initSmoothScroll() {
        document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                var targetId = this.getAttribute('href');
                if (targetId === '#') return;
                var target = document.querySelector(targetId);
                if (target) {
                    e.preventDefault();
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    }

    function initScrollIndicator() {
        var indicator = document.querySelector('.hero-section .scroll-indicator');
        if (!indicator) return;
        function hideOnScroll() {
            if (window.scrollY > 80) {
                indicator.classList.add('is-hidden');
            }
        }
        window.addEventListener('scroll', hideOnScroll, { passive: true });
    }

    function initMobileNav() {
        var body = document.body;
        var toggle = document.getElementById('nav-mobile-toggle');
        var closeBtn = document.getElementById('nav-mobile-close');
        var overlay = document.getElementById('nav-mobile-overlay');
        var sidebar = document.getElementById('nav-mobile-sidebar');

        function isOpen() {
            return overlay && overlay.classList.contains('is-open');
        }
        function openMenu() {
            body.classList.add('nav-mobile-open');
            if (overlay) overlay.classList.add('is-open');
            if (sidebar) {
                sidebar.classList.add('is-open');
                sidebar.setAttribute('aria-hidden', 'false');
            }
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'true');
                toggle.setAttribute('aria-label', 'Close menu');
            }
            var openIcon = document.querySelector('.nav-mobile-open-icon');
            var closeIcon = document.querySelector('.nav-mobile-close-icon');
            if (openIcon) openIcon.classList.add('hidden');
            if (closeIcon) closeIcon.classList.remove('hidden');
        }
        function closeMenu() {
            body.classList.remove('nav-mobile-open');
            if (overlay) overlay.classList.remove('is-open');
            if (sidebar) {
                sidebar.classList.remove('is-open');
                sidebar.setAttribute('aria-hidden', 'true');
            }
            if (toggle) {
                toggle.setAttribute('aria-expanded', 'false');
                toggle.setAttribute('aria-label', 'Open menu');
            }
            var openIcon = document.querySelector('.nav-mobile-open-icon');
            var closeIcon = document.querySelector('.nav-mobile-close-icon');
            if (openIcon) openIcon.classList.remove('hidden');
            if (closeIcon) closeIcon.classList.add('hidden');
        }

        if (!toggle && !overlay) return;

        /* Start closed: ensure no leftover open state */
        closeMenu();

        toggle.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            if (isOpen()) closeMenu(); else openMenu();
        });
        if (closeBtn) closeBtn.addEventListener('click', function(e) { e.preventDefault(); closeMenu(); });
        overlay.addEventListener('click', function(e) {
            e.preventDefault();
            closeMenu();
        });
        document.querySelectorAll('.nav-mobile-link, #nav-mobile-sidebar a[href^="#"]').forEach(function(link) {
            link.addEventListener('click', closeMenu);
        });
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && isOpen()) closeMenu();
        });
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) closeMenu();
        });
    }

    function init() {
        initStickyNavbar();
        initSectionAnimations();
        initSmoothScroll();
        initScrollIndicator();
        initMobileNav();
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', init);
    } else {
        init();
    }
})();
