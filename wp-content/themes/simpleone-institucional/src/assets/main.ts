import '@/assets/style.css';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { swiperFactory } from './carousel';
import submitEmail from './contactform';
import fontAwesomeWatch from './fontAwesome';
import { mobileHeader } from './header';
import setupModalHandler from './modalHandler';

declare global {
    interface Window {
        helpers?: {
            ajax_url?: string;
            theme_url?: string;
        };
    }
}


window.onload = () => {



    fontAwesomeWatch();

    setupModalHandler();

    mobileHeader();

    const forms = document.querySelectorAll<HTMLFormElement>('form');

    forms &&
        forms.forEach((form) => {
            form.addEventListener('submit', submitEmail)
        })


    const customerSwiper = document.querySelector('.customer-swiper') as HTMLElement;
    customerSwiper &&
        swiperFactory(customerSwiper, {
            loop: true,
            slidesPerView: 1.2,
            autoplay: {
                delay: 5000
            },
            modules: [Autoplay, Navigation, Pagination],
            spaceBetween: "10px",
            breakpoints: {
                1025: {
                    slidesPerView: 3.3,
                    spaceBetween: "32px",
                }
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        })

}