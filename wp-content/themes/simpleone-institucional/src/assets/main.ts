import '@/assets/style.css';
import Swal from 'sweetalert2';
import { Autoplay, Navigation, Pagination } from 'swiper/modules';
import { swiperFactory } from './carousel';
import fontAwesomeWatch from './fontAwesome';
import { mobileHeader } from './header';
import setupModalHandler from './modalHandler';


window.onload = () => {
    fontAwesomeWatch();

    setupModalHandler();

    mobileHeader();

    const forms = document.querySelectorAll('form');

    forms.length > 0 &&
        forms.forEach((form) => {
            form.addEventListener('submit', function (e: SubmitEvent) {
                e.preventDefault();
                Swal.fire({
                    'icon': 'success',
                    'title': 'Obrigado!',
                    'text': 'Seu E-mail foi enviado com sucesso!'
                })
            })
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