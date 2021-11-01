import gsap from 'gsap';
import marquee from '../libs/modules/Marquee3k.js';
document.addEventListener('DOMContentLoaded', function(e) {

    gsap.config({
        nullTargetWarn: false
    });

    marquee.init();
    
});