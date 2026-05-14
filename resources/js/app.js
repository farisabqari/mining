import './bootstrap';
import gsap from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import AOS from 'aos';
import 'aos/dist/aos.css';

gsap.registerPlugin(ScrollTrigger);

AOS.init({
    duration: 800,
    once: true,
    offset: 100,
    easing: 'ease-out-cubic',
});

document.addEventListener('DOMContentLoaded', () => {
    // Counter animation
    const counters = document.querySelectorAll('[data-counter]');
    counters.forEach(counter => {
        const target = parseFloat(counter.dataset.counter) || parseInt(counter.dataset.counter);
        const isFloat = counter.dataset.counter && counter.dataset.counter.includes('.');
        gsap.fromTo(counter, { textContent: 0 }, {
            textContent: target,
            duration: 2.5,
            ease: 'power2.out',
            snap: isFloat ? { textContent: 0.1 } : { textContent: 1 },
            scrollTrigger: {
                trigger: counter,
                start: 'top 80%',
            },
        });
    });

    // Hero text fade-in
    const heroText = document.querySelector('.hero-text');
    if (heroText) {
        gsap.from(heroText, {
            opacity: 0,
            y: 50,
            duration: 1.2,
            ease: 'power3.out',
        });
    }

    // Navbar hide/show and blur on scroll
    const navbar = document.querySelector('nav');
    if (navbar) {
        let lastScroll = 0;
        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;
            if (currentScroll > 80) {
                navbar.style.backdropFilter = 'blur(12px)';
                navbar.style.backgroundColor = 'rgba(30,57,50,0.92)';
            } else {
                navbar.style.backdropFilter = 'none';
                navbar.style.backgroundColor = '';
            }
            if (currentScroll > 200) {
                if (currentScroll > lastScroll) {
                    navbar.style.transform = 'translateY(-100%)';
                } else {
                    navbar.style.transform = 'translateY(0)';
                }
                lastScroll = currentScroll;
            } else {
                navbar.style.transform = 'translateY(0)';
            }
        });
    }

    // Parallax effect on hero background
    const heroBg = document.querySelector('.hero-bg');
    if (heroBg) {
        window.addEventListener('scroll', () => {
            const scrollY = window.pageYOffset;
            heroBg.style.transform = `translateY(${scrollY * 0.3}px)`;
        });
    }

    // Section reveal animation with GSAP
    gsap.utils.toArray('.reveal-section').forEach(section => {
        gsap.from(section, {
            opacity: 0,
            y: 60,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: section,
                start: 'top 85%',
            },
        });
    });

    // Magnetic button effect
    document.querySelectorAll('.magnetic-btn').forEach(btn => {
        btn.addEventListener('mousemove', function (e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left - rect.width / 2;
            const y = e.clientY - rect.top - rect.height / 2;
            gsap.to(this, { x: x * 0.3, y: y * 0.3, duration: 0.3, ease: 'power2.out' });
        });
        btn.addEventListener('mouseleave', function () {
            gsap.to(this, { x: 0, y: 0, duration: 0.5, ease: 'elastic.out(1,0.3)' });
        });
    });
});
