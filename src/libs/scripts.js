import gsap from 'gsap';
import slider from '../libs/modules/slider.js';
import marquee from '../libs/modules/Marquee3k.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    slider.init();
    marquee.init();
    
});