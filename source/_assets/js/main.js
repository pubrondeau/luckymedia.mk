import {
    tns
} from "tiny-slider/src/tiny-slider.module.js";

const testimonials = document.querySelector('.testimonials');

if (testimonials) {
    let slider = tns({
        container: testimonials,
        nav: true,
        controls: false,
        autoHeight: true,
        items: 3,
        center: true,
        autoplay: true,
        autoplayTimeout: 6000,
        autoplayButtonOutput: false,
        responsive: {
            320: {
                items: 1,
            },
            766: {
                items: 2,
            },
            1024: {
                items: 3,
            }
        }
    });
}

const burger = document.getElementById('burger');
const body = document.querySelector('body');

burger.addEventListener('change', (event) => {
    if (event.target.checked) {
        setTimeout(() => { body.classList.add('overflow-hidden'); }, 500);
    } else {
        setTimeout(() => { body.classList.remove('overflow-hidden'); }, 500);
    }
});


