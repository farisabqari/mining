import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
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
                navbar.style.transform = currentScroll > lastScroll ? 'translateY(-100%)' : 'translateY(0)';
                lastScroll = currentScroll;
            } else {
                navbar.style.transform = 'translateY(0)';
            }
        });
    }
});
