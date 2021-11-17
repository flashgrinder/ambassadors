import gsap from 'gsap';
import burgerMenu from '../libs/modules/burger-menu.js';
import slider from '../libs/modules/slider.js';
import sliderPartners from '../libs/modules/slider-partners.js';
import revealAjax from '../libs/modules/reveal-ajax';
import modalForm from '../libs/modules/modal-form.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    burgerMenu.init();
    slider.init();
    sliderPartners.init();
    revealAjax.init();
    modalForm.init();
    
});