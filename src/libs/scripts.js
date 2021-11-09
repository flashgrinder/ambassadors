import gsap from 'gsap';
import slider from '../libs/modules/slider.js';
import marquee from '../libs/modules/Marquee3k.js';
import revealAjax from '../libs/modules/reveal-ajax';
import modalForm from '../libs/modules/modal-form.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    slider.init();
    marquee.init();
    revealAjax.init();
    modalForm.init();
    
});