import Swiper, { Navigation, Pagination, EffectFade } from 'swiper';

function init() {

    Swiper.use([ Navigation, Pagination, EffectFade ]);

    const slider = new Swiper(".slider__swiper", {
        loop: true,
        edgeSwipeThreshold: 150,
        edgeSwipeThreshold: 150,
        effect: 'fade',
        speed: 1000,
        fadeEffect: {
            crossFade: true
        },
        navigation: {
            prevEl: '.slider__arrow--prev',
            nextEl: '.slider__arrow--next'
        },
        pagination: {
            el: '.slider__pagination',
            type: 'bullets',
            clickable: true,
            bulletActiveClass: 'slider__bullet--active',
            bulletClass: 'slider__bullet',
        },
    });

}

export default { init }