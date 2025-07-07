<?php
// Template name: Home

get_template_part('includes/components/header', 'header');
?>

<main class="min-h-screen bg-gray-500">

    <section class="relative">

        <img class="absolute top-0 left-0 w-full h-full object-cover" src="<?php echo image_dir('bg-section-1.png'); ?>"
            alt="">

        <div
            class="container mx-auto min-h-screen pt-80 pb-10 lg:py-10 flex flex-col items-start justify-center relative z-10">
            <div class="lg:w-8/12 text-white">
                <img class="mb-4" src="<?php echo image_dir('customers.png'); ?>" alt="">
                <h1 class="hero-title mb-3">Tecnologia que <br /> Simplifica o Compliance</h1>
                <p class="text-base font-bold lg:text-2xl mb-4">
                    Automatize processos fiscais e contábeis com soluções inteligentes.
                </p>
                <p class="text-base lg:text-2xl mb-6">
                    Mais do que tecnologia, entregamos performance, <br /> segurança e tranquilidade para sua operação.
                </p>
                <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                    Solicitar demonstração
                    <i class="fa fa-arrow-right text-white text-sm"></i>
                </button>
            </div>
        </div>

        <img class="absolute top-0 right-0 max-w-[220px] lg:max-w-[500px] 2xl:max-w-[670px]"
            src="<?php echo image_dir('shape.png'); ?>" alt="">
    </section>

    <section class="bg-purple-400" id="numbers">
        <div class="container mx-auto py-10 grid grid-cols-1 gap-y-8 lg:grid-cols-4">
            <p class="text-white text-center">
                <strong class="text-6xl block font-black">
                    +500
                </strong>
                <span class="text-white/75">CNPJs atendidos</span>
            </p>
            <p class="text-white text-center">
                <strong class="text-6xl block font-black">
                    +50 Mil
                </strong>
                <span class="text-white/75">Consultas realizadas via API homologada Serpro</span>
            </p>
            <p class="text-white text-center">
                <strong class="text-6xl block font-black">
                    +100 Mil
                </strong>
                <span class="text-white/75">XML do ESocial retificados</span>
            </p>
            <p class="text-white text-center">
                <strong class="text-6xl block font-black">
                    +40
                </strong>
                <span class="text-white/75">Consultorias de automação e melhorias domínio contábil</span>
            </p>
        </div>
    </section>

    <section class="relative bg-gray-400">

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-190 top-30"></div>

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -left-190 bottom-30"></div>

        <div class="container mx-auto py-20 relative z-10">

            <p class="subtitle text-center">
                Soluções
            </p>
            <h2 class="title text-center">
                Nossas soluções integradas
            </h2>

            <div
                class="hidden timeline-companion absolute left-0 h-[80%] top-[50%] translate-y-[-50%] lg:flex flex-col items-center justify-center">
                <img class="sticky top-[200px]" src="<?php echo image_dir('wheel-white.svg'); ?>" />
                <img class="h-full" src="<?php echo image_dir('timeline.svg'); ?>" alt="">
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:max-w-[85%] mx-auto">

                <div class="card order-2 lg:order-none">
                    <img width="40" height="40" src="<?php echo image_dir('simple-docs-tributario.svg'); ?>" alt="">
                    <h2 class="font-bold text-3xl">
                        Simple Docs Tributário
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75">
                        Organize e automatize a gestão de documentos fiscais com segurança e praticidade. Elimine o
                        retrabalho e centralize tudo em um só lugar.
                    </p>
                    <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                        Solicitar demonstração
                        <i class="fa fa-arrow-right text-white text-sm"></i>
                    </button>
                </div>

                <div class="card-image order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl" src="<?php echo image_dir('01.jpg'); ?>" alt="">
                </div>

                <!--  -->

                <div class="card-image order-3 lg:order-none">
                    <img class="w-full object-cover rounded-xl" src="<?php echo image_dir('02.jpg'); ?>"
                        alt="">
                </div>

                <div class="card order-4 lg:order-none">
                    <img width="40" height="40" src="<?php echo image_dir('simple-bot-ai.svg'); ?>" alt="">
                    <h2 class="font-bold text-3xl">
                        Simple Bot AI
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75">
                        Atendimento automatizado via WhatsApp e chat com IA, para escalar e otimizar o relacionamento
                        com
                        clientes.
                    </p>
                    <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                        Solicitar demonstração
                        <i class="fa fa-arrow-right text-white text-sm"></i>
                    </button>
                </div>

                <!--  -->

                <div class="card order-6 lg:order-none">
                    <img width="40" height="40" src="<?php echo image_dir('simple-tech-sign.svg'); ?>" alt="">
                    <h2 class="font-bold text-3xl">
                        Simple Tech Sign
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75">
                        Solução de assinatura digital com validade jurídica, impulsionada pelo Carimbo de Tempo
                        ICP-Brasil.
                    </p>
                    <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                        Solicitar demonstração
                        <i class="fa fa-arrow-right text-white text-sm"></i>
                    </button>
                </div>

                <div class="card-image order-5 lg:order-none">
                    <img class="w-full object-cover rounded-xl" src="<?php echo image_dir('03.jpg'); ?>"
                        alt="">
                </div>

                <!--  -->


                <div class="card-image order-7 lg:order-none">
                    <img class="w-full object-cover rounded-xl" src="<?php echo image_dir('04.jpg'); ?>"
                        alt="">
                </div>

                <div class="card order-8 lg:order-none">
                    <img width="40" height="40" src="<?php echo image_dir('social-tech.svg'); ?>" alt="">
                    <h2 class="font-bold text-3xl">
                        Social Tech
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75">
                        Solução que garante a conformidade trabalhista ao auditar, analisar e monitoraros dados enviados
                        ao eSocial.
                    </p>
                    <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                        Solicitar demonstração
                        <i class="fa fa-arrow-right text-white text-sm"></i>
                    </button>
                </div>

            </div>

        </div>

    </section>

    <?php get_template_part('includes/sections/about', 'about'); ?>


    <section class="relative" id="differentials">

        <div class="absolute left-0 bottom-0 bg-gradient-to-t from-purple-400 to-transparent h-[90%] lg:h-[70%] w-full">
        </div>

        <div class="container mx-auto py-14 z-10 relative">

            <?php get_template_part('includes/components/cards-title', 'cards-title') ?>

            <div class="grid lg:grid-cols-4 gap-x-8 gap-y-10">

                <?php get_template_part('includes/components/cards', 'cards'); ?>

            </div>

        </div>

        </div>
    </section>

    <section>

        <div class="container mx-auto py-10 lg:py-20">
            <div
                class="flex flex-col lg:flex-row flex-wrap lg:flex-nowrap justify-start lg:justify-between items-start lg:items-center gap-y-10">
                <div class="flex flex-col flex-wrap items-start justify-start lg:w-6/12">
                    <p class="subtitle mb-4">
                        Integrações
                    </p>
                    <h2 class="title mb-4">
                        Conecte tudo. <br /> Controle tudo.
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75 mb-6">
                        Nossas plataformas se integram com os principais sistemas do mercado, como SAP, TOTVS, Oracle, e
                        sistemas governamentais como e-CAC e SERPRO.
                    </p>
                    <button class="btn w-full lg:max-w-[300px] btn-purple gap-x-3 modal-trigger">
                        Solicitar demonstração
                        <i class="fa fa-arrow-right text-white text-sm"></i>
                    </button>
                </div>

                <div class="lg:w-5/12 relative">
                    <img src="<?php echo image_dir('logos-1.png'); ?>" alt="">
                    <img src="<?php echo image_dir('logos-2.png'); ?>" alt="">

                    <div
                        class="w-40 lg:w-120 h-40 lg:h-120 blur-[100px] opacity-30 rounded-full bg-purple-400 absolute top-0 lg:top-[50%] translate-y-[-50%] left-0 right-0 mx-auto">
                    </div>
                </div>
            </div>
        </div>

    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>

    <section class="relative overflow-hidden" id="depoimentos">
        <div class="container mx-auto py-12 lg:py-28">
            <div
                class="flex flex-col lg:flex-row items-start lg:items-center justify-start lg:justify-between mb-10 lg:gap-x-6">
                <div class="lg:w-10/12">
                    <p class="subtitle">
                        depoimentos
                    </p>
                    <h2 class="title">
                        O que Nossos Clientes Dizem
                    </h2>
                </div>
                <p class="text-white/75 text-sm lg:text-lg">
                    Empresas de diversos setores confiam na <b>Simple One Tech</b> para tornar seus processos mais
                    eficientes.
                </p>
            </div>

            <div class="flex flex-col flex-wrap w-full items-start justify-center lg:text-center mb-10">
                <?php
                $items = [
                    [
                        'Meu parecer sobre a utilização do programa de vocês está sendo muito favorável para o meu negócio. Tem sido uma ferramentade grande utilidade na gestão do meu escritório. É uma solução prática, útil e fácil de usar!',
                        'Jeferson',
                        'Contador jja',
                        'jja.png'
                    ],
                    [
                        'Eficiência no recálculo: 10% do tempo utilizado anteriormente para o Simples Nacional e DARF INSS. Controle de certificados e de procurações da RFB disponíveis de forma rápida.',
                        'Daniel',
                        'contador plaemac',
                        'plaemac.png'
                    ],
                    [
                        'O Simple Docs Tributário otimizou minha rotina. Agora acesso dados e documentos de forma rápida e segura, sem perder tempo em portais. Ganhei produtividade e foco estratégico. Ferramenta essencial para o contador moderno.',
                        'Emanuel',
                        'eva gestão e negócios',
                        'eva.png'
                    ],
                    [
                        'Meu parecer sobre a utilização do programa de vocês está sendo muito favorável para o meu negócio. Tem sido uma ferramentade grande utilidade na gestão do meu escritório. É uma solução prática, útil e fácil de usar!',
                        'Jeferson',
                        'Contador jja',
                        'jja.png'
                    ],
                    [
                        'Eficiência no recálculo: 10% do tempo utilizado anteriormente para o Simples Nacional e DARF INSS. Controle de certificados e de procurações da RFB disponíveis de forma rápida.',
                        'Daniel',
                        'contador plaemac',
                        'plaemac.png'
                    ],
                    [
                        'O Simple Docs Tributário otimizou minha rotina. Agora acesso dados e documentos de forma rápida e segura, sem perder tempo em portais. Ganhei produtividade e foco estratégico. Ferramenta essencial para o contador moderno.',
                        'Emanuel',
                        'eva gestão e negócios',
                        'eva.png'
                    ],
                ];

                ?>


                <div class="lg:w-[90vw] w-full">
                    <div class="swiper customer-swiper">
                        <div class="swiper-wrapper">
                            <?php
                            foreach ($items as $item):
                                ?>
                                <div class="swiper-slide">
                                    <div
                                        class="p-6 flex flex-col items-between justify-center gap-y-4 text-left bg-black/20 min-h-[300px] hover:bg-purple-400/50 transition duration-300 group">

                                        <div
                                            class="flex flex-row flex-wrap gap-x text-lg text-purple-400 group-hover:text-white transition duration-300">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>

                                        <p class="text-base lg:text-lg text-white/75">
                                            <?php echo $item[0]; ?>
                                        </p>

                                        <div class="flex flex-row flex-wrap items-center justify-between w-full">
                                            <div class="flex flex-col flex-wrap items-start justify-start">
                                                <p class="text-white font-bold text-xl">
                                                    <?php echo $item[1] ?>
                                                    <span class="block text-lg text-white/75 uppercase mt-2">
                                                        <?php echo $item[2] ?>
                                                    </span>
                                                </p>
                                            </div>
                                            <img src="<?php echo image_dir($item[3]); ?>" />
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                        <div class="swiper-controls w-full flex flex-row items-center justify-between mt-10">
                            <div class="navigation flex flex-row items-center justify-start gap-x-4">
                                <div class="swiper-button swiper-button-next">
                                    <i class="fa fa-arrow-left"></i>
                                </div>
                                <div class="swiper-button swiper-button-prev">
                                    <i class="fa fa-arrow-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <section>
        <div class="container mx-auto pt-0 pb-12 lg:py-12">

            <div class="flex flex-row items-center justify-between mb-10 gap-x-6">
                <div class="w-10/12">
                    <p class="subtitle">
                        blog
                    </p>
                    <h2 class="title">
                        Acompanhe nossos Artigos
                    </h2>
                </div>
                <p class="text-white text-xs lg:text-lg font-bold">
                    <a class="hover:underline hover:text-purple-400 transiton-all duraiton-300" href="#">
                        VER TUDO &nbsp;
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </p>
            </div>

            <?php
            $latest = new WP_Query([
                'posts_per_page' => 3,
                'post_type' => 'post'
            ]);
            $i = 0;
            ?>

            <?php if ($latest->have_posts()): ?>
                <div class="grid grid-cols-1 lg:grid-cols-4 gap-y-8 lg:gap-x-8">
                    <?php while ($latest->have_posts()):
                        $i++;
                        $latest->the_post(); ?>

                        <article class="relative bg-white/5 hover:rounded-2xl transition duration-300 overflow-hidden group <?php echo $i == 1 ? 'lg:col-span-2' : '' ?>" id="<?php echo $i; ?>">
                            <div class="min-h-[280px] lg:min-h-[360px] bg-black w-full relative">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('full', ['class' => 'absolute w-full h-full object-cover']);
                                endif; ?>
                            </div>
                            <div class="p-6 flex flex-col items-start justify-start gap-y-4">
                                <p class="text-sm lg:text-lg text-white/75 w-full">
                                    <?php echo get_the_time('M d, Y'); ?>
                                </p>
                                <h3 class="font-bold text-white text-lg lg:text-2xl w-full">
                                    <a class="hover:underline" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="hidden lg:flex top-0 left-0 absolute w-full h-full bg-gradient-to-b from-purple-400/20 via-purple-400/40 to-purple-400/90 flex-col items-center justify-end pb-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 ">
                                <p class="text-white text-center text-lg font-bold">
                                    LER ARTIGO
                                </p>
                            </a>
                        </article>

                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <?php get_template_part('includes/sections/cta', 'cta'); ?>

</main>

<?php get_template_part('includes/components/footer', 'footer'); ?>