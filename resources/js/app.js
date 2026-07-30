import './bootstrap';

import Alpine from 'alpinejs';
import { animate, hover } from 'motion';
import EmblaCarousel from 'embla-carousel';
import Autoplay from 'embla-carousel-autoplay';
import Fade from 'embla-carousel-fade';

window.Alpine = Alpine;

Alpine.start();

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
const carouselNode = document.querySelector('[data-embla-carousel]');

if (carouselNode) {
    const viewportNode = carouselNode.querySelector('[data-embla-viewport]');
    const autoplay = Autoplay({ delay: 4200, stopOnInteraction: false, stopOnMouseEnter: true });

    EmblaCarousel(
        viewportNode,
        {
            align: 'start',
            containScroll: false,
            dragFree: false,
            loop: true,
            watchDrag: true,
        },
        [autoplay, Fade()],
    );
}

if (!prefersReducedMotion) {
    animate(
        '.site-navbar',
        { opacity: [0, 1], y: [-18, 0] },
        { duration: 0.55, easing: [0.22, 1, 0.36, 1] },
    );

    animate(
        '[data-hero-text]',
        { opacity: [0, 1], y: [18, 0] },
        { delay: 0.12, duration: 0.55, easing: [0.22, 1, 0.36, 1] },
    );

    animate(
        '[data-carousel-shell]',
        { opacity: [0, 1] },
        { delay: 0.24, duration: 0.7, easing: [0.22, 1, 0.36, 1] },
    );

    animate(
        '[data-page-shell], [data-cta-section]',
        { opacity: [0, 1], y: [18, 0] },
        { delay: 0.16, duration: 0.55, easing: [0.22, 1, 0.36, 1] },
    );

    hover('.motion-scale', (element) => {
        animate(element, { scale: 1.035 }, { duration: 0.18 });

        return () => animate(element, { scale: 1 }, { duration: 0.18 });
    });
}
