import Swiper, { Autoplay } from 'swiper';

function init() {

    Swiper.use([ Autoplay ]);

    const sliderPartners = new Swiper(".partners__item--slider", {
        loop: true,
        slidesPerView: 5,
        spaceBetween: 100,
        effect: 'slide',
        speed: 10000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
              slidesPerView: 3,
              spaceBetween: 50
            },
            768: {
              slidesPerView: 4,
              spaceBetween: 50
            },
            1280: {
              slidesPerView: 5,
            }
        }
    });

}

export default { init }