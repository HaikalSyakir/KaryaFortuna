import './bootstrap';

import Alpine from 'alpinejs';
import { animate, hover, inView } from 'motion';
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

const runCountUp = (element) => {
    const target = Number.parseInt(element.dataset.countUp, 10);

    if (Number.isNaN(target)) {
        return;
    }

    if (prefersReducedMotion) {
        element.textContent = target.toLocaleString('id-ID');
        return;
    }

    const counter = { value: 0 };

    animate(counter, { value: target }, {
        duration: 1.4,
        easing: [0.22, 1, 0.36, 1],
        onUpdate: () => {
            element.textContent = Math.round(counter.value).toLocaleString('id-ID');
        },
    });
};

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
        { opacity: [0, 1], x: [18, 0] },
        { delay: 0.24, duration: 0.7, easing: [0.22, 1, 0.36, 1] },
    );

    inView('[data-reveal]', (element) => {
        animate(
            element,
            { opacity: [0, 1], y: [22, 0] },
            { duration: 0.62, easing: [0.22, 1, 0.36, 1] },
        );
    }, { margin: '0px 0px -12% 0px' });

    hover('.motion-scale', (element) => {
        animate(element, { scale: 1.03 }, { duration: 0.18 });

        return () => animate(element, { scale: 1 }, { duration: 0.18 });
    });
}

document.querySelectorAll('[data-count-up]').forEach((element) => {
    inView(element, () => runCountUp(element), { margin: '0px 0px -8% 0px' });
});
