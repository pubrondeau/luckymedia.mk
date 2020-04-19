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
        autoplayTimeout: 4500,
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

let vh = window.innerHeight * 0.01;
document.documentElement.style.setProperty('--vh', `${vh}px`);

const burger = document.getElementById('burger');
const body = document.querySelector('body');

burger.addEventListener('change', (event) => {
    if (event.target.checked) {
        body.classList.add('overflow-hidden');
    } else {
        body.classList.remove('overflow-hidden');
    }
});


