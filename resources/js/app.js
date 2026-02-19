import "./bootstrap";

import Alpine from "alpinejs";

window.heroCarousel = function () {
    return {
        currentSlide: 0,
        slideCount: 3,
        autoplayInterval: null,

        init() {
            if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
                return;
            }
            this.startAutoplay();

            const container = this.$refs.container;
            let scrollTimeout;
            container.addEventListener('scroll', () => {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(() => {
                    this.currentSlide = Math.round(container.scrollLeft / container.offsetWidth);
                }, 100);
            }, { passive: true });
        },

        scrollTo(index) {
            const container = this.$refs.container;
            container.scrollTo({ left: index * container.offsetWidth, behavior: 'smooth' });
            this.currentSlide = index;
        },

        next() {
            this.scrollTo((this.currentSlide + 1) % this.slideCount);
        },

        startAutoplay() {
            this.stopAutoplay();
            this.autoplayInterval = setInterval(() => this.next(), 5000);
        },

        stopAutoplay() {
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = null;
            }
        },
    };
};

window.Alpine = Alpine;
Alpine.start();
