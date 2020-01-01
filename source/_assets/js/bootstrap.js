import {tns} from "tiny-slider/src/tiny-slider.module.js";

const testimonials = document.querySelector('.testimonials');

if(testimonials)
{
    let slider = tns({
        container: testimonials,
        nav: true,
        controls: false,
        autoHeight: true,
        items: 3,
        center: true,
        autoplay: true,
        autoplayTimeout: 3500,
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