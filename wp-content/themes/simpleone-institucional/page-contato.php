<?php
get_template_part('includes/components/header', 'header');
?>

<main class="min-h-screen bg-gray-500 pt-40 relative">

    <?php get_template_part('includes/sections/form-section', 'form-section') ?>

    <section>
        <div class="container mx-auto pt-10 pb-20">
            <div class="flex flex-col justify-center items-center gap-y-4">
                <p class="subtitle">
                    Meios de contato
                </p>
                <h2 class="title">
                    Fale com a gente
                </h2>
                <div class="grid lg:grid-cols-3 w-full gap-x-8">
                    <div class="aspect-video bg-purple-400 flex flex-col items-start p-10 justify-center text-white gap-y-6 transition duration-300 hover:rounded-2xl group hover:bg-white">
                        <i class="fab fa-whatsapp text-5xl group-hover:text-purple-400 transition duration-300"></i>
                        <p class="text-2xl font-bold group-hover:text-purple-400 transition duration-300">WhatsApp</p>
                        <a class="text-base group-hover:text-purple-400 transition duration-300" href="">
                            ENVIAR MENSAGEM <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="aspect-video bg-purple-400 flex flex-col items-start p-10 justify-center text-white gap-y-6 transition duration-300 hover:rounded-2xl group hover:bg-white">
                        <i class="fa-regular fa-envelope text-5xl group-hover:text-purple-400 transition duration-300"></i>
                        <p class="text-2xl font-bold group-hover:text-purple-400 transition duration-300">E-mail</p>
                        <a class="text-base group-hover:text-purple-400 transition duration-300" href="">
                            ENVIAR E-MAIL <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                    <div class="aspect-video bg-purple-400 flex flex-col items-start p-10 justify-center text-white gap-y-6 transition duration-300 hover:rounded-2xl group hover:bg-white">
                        <i class="fa fa-phone text-5xl group-hover:text-purple-400 transition duration-300"></i>
                        <p class="text-2xl font-bold group-hover:text-purple-400 transition duration-300">Celular</p>
                        <a class="text-base group-hover:text-purple-400 transition duration-300" href="">
                            LIGAR <i class="fa fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="relative py-48">
        <iframe class="absolute w-full h-full object-cover top-0 left-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.3084058430036!2d-46.66052352389145!3d-23.557364561446924!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59ccdd1ec573%3A0x85ee76a94eeca5b9!2sR.%20Frei%20Caneca%2C%201246%20-%20Conj%2012%20-%20Consola%C3%A7%C3%A3o%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001307-002!5e0!3m2!1spt-BR!2sbr!4v1750713752986!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

</main>

<?php get_template_part('includes/components/footer', 'footer'); ?>