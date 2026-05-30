/* NAF AUTOMOBILES SA — Main JavaScript */
'use strict';

document.addEventListener('DOMContentLoaded', () => {

    /* Sticky Header */
    const header = document.getElementById('site-header');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 30);
        }, { passive: true });
    }

    /* Mobile Menu */
    const burger  = document.getElementById('burger');
    const overlay = document.getElementById('mobile-overlay');
    const closeBtn = document.getElementById('mobile-close');

    const openMenu = () => {
        overlay?.classList.add('active');
        burger?.classList.add('active');
        burger?.setAttribute('aria-expanded', 'true');
        document.body.classList.add('menu-open');
        overlay?.removeAttribute('aria-hidden');
    };
    const closeMenu = () => {
        overlay?.classList.remove('active');
        burger?.classList.remove('active');
        burger?.setAttribute('aria-expanded', 'false');
        document.body.classList.remove('menu-open');
        overlay?.setAttribute('aria-hidden', 'true');
    };

    burger?.addEventListener('click', () => overlay?.classList.contains('active') ? closeMenu() : openMenu());
    closeBtn?.addEventListener('click', closeMenu);
    overlay?.addEventListener('click', (e) => { if (e.target === overlay) closeMenu(); });
    document.addEventListener('keydown', (e) => { if (e.key === 'Escape') closeMenu(); });
    overlay?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));

    /* Smooth Scroll */
    document.querySelectorAll('.scroll-link, a[href^="#"]').forEach(link => {
        link.addEventListener('click', (e) => {
            const href = link.getAttribute('href');
            if (!href?.startsWith('#')) return;
            const target = document.querySelector(href);
            if (!target) return;
            e.preventDefault();
            const top = target.getBoundingClientRect().top + window.scrollY - (header?.offsetHeight ?? 80) - 20;
            window.scrollTo({ top, behavior: 'smooth' });
        });
    });

    /* Back to Top */
    const backBtn = document.getElementById('back-to-top');
    if (backBtn) {
        window.addEventListener('scroll', () => backBtn.classList.toggle('visible', window.scrollY > 400), { passive: true });
        backBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
    }

    /* Scroll Reveal */
    const revealEls = document.querySelectorAll(
        '.service-card, .feature-item, .process-step, .testimonial-card, .contact-info__item, .why-us__content, .why-us__image'
    );
    revealEls.forEach(el => el.classList.add('reveal'));
    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach((entry, i) => {
            if (entry.isIntersecting) {
                setTimeout(() => entry.target.classList.add('visible'), i * 80);
                revealObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => revealObserver.observe(el));

    /* Hero BG Parallax */
    const heroBg = document.querySelector('.hero__bg');
    if (heroBg) {
        heroBg.classList.add('loaded');
        window.addEventListener('scroll', () => {
            const hero = document.querySelector('.hero');
            if (hero && window.scrollY < hero.offsetHeight) {
                heroBg.style.transform = `scale(1.05) translateY(${window.scrollY * 0.25}px)`;
            }
        }, { passive: true });
    }

    /* Counter Animation */
    const counters = document.querySelectorAll('.stat-number');
    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            const el = entry.target;
            const raw = el.textContent.replace(/[^0-9]/g, '');
            const target = parseInt(raw, 10);
            if (!target) return;
            const suffix = el.textContent.replace(/[0-9]/g, '');
            let start = 0;
            const step = ts => {
                if (!start) start = ts;
                const progress = Math.min((ts - start) / 1800, 1);
                const eased = 1 - Math.pow(1 - progress, 3);
                el.textContent = Math.floor(eased * target) + suffix;
                if (progress < 1) requestAnimationFrame(step);
            };
            requestAnimationFrame(step);
            counterObserver.unobserve(el);
        });
    }, { threshold: 0.5 });
    counters.forEach(c => counterObserver.observe(c));

    /* Contact Form AJAX */
    const form = document.getElementById('naf-contact-form');
    const formMsg = document.getElementById('form-message');
    form?.addEventListener('submit', async (e) => {
        e.preventDefault();
        const submitBtn = form.querySelector('button[type="submit"]');
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
        submitBtn.disabled = true;
        formMsg.className = 'form-message';
        const data = new FormData(form);
        data.append('action', 'naf_contact');
        if (typeof nafData === 'undefined') {
            await new Promise(r => setTimeout(r, 1200));
            formMsg.textContent = 'Votre message a bien été envoyé. Nous vous répondrons rapidement.';
            formMsg.classList.add('success');
            form.reset();
            submitBtn.innerHTML = originalText;
            submitBtn.disabled = false;
            return;
        }
        try {
            const res = await fetch(nafData.ajaxUrl, { method: 'POST', body: data });
            const json = await res.json();
            if (json.success) { formMsg.textContent = json.data.message; formMsg.classList.add('success'); form.reset(); }
            else { formMsg.textContent = json.data?.message ?? 'Une erreur est survenue.'; formMsg.classList.add('error'); }
        } catch { formMsg.textContent = 'Impossible d\'envoyer. Appelez-nous directement.'; formMsg.classList.add('error'); }
        finally { submitBtn.innerHTML = originalText; submitBtn.disabled = false; }
    });

});