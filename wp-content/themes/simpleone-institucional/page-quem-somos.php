<?php
get_template_part('includes/components/header', 'header');
?>

<main class="min-h-screen bg-gray-500 pt-40 relative">

    <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 -top-80"></div>

    <?php get_template_part('includes/sections/about', 'about'); ?>

    <section class="bg-purple-400 relative">

        <img class="absolute top-0 right-0" src="<?php echo image_dir('vec-top-about.png'); ?>" alt="">
        <img class="absolute bottom-0 left-0" src="<?php echo image_dir('vec-bottom-about.png'); ?>" alt="">

        <div class="container mx-auto lg:pb-24 lg:pt-12">

            <?php get_template_part('includes/components/cards-title', 'cards-title') ?>

            <div class="grid lg:grid-cols-4 gap-x-8 gap-y-10">

                <?php get_template_part('includes/components/cards', 'cards'); ?>

            </div>

        </div>

    </section>

    <section class="relative overflow-hidden">
        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -left-160 -bottom-80"></div>
        <div class="container mx-auto py-24 flex flex-row flex-wrap items-center justify-start">
            <div class="w-4/12 relative">
                <div class="absolute rounded-2xl lg:min-w-[640px] bg-gray-450 p-6 z-2 top-[50%] translate-y-[-50%] shadow-sm shadow-purple-400/10">
                    <p class="subtitle">Objetivo</p>
                    <h2 class="title">
                        O que fazemos?
                    </h2>
                    <p class="text-lg text-white">
                        Nosso sistema atende à crescente demanda do mercado por soluções de gerenciamento de documentos e guias, incluindo mensagens da caixa postal e-CAC, situação fiscal, Certidões Negativas de Débito (CNDs), PGDAS, Parcelamentos e Busca de Notas.
                    </p>
                </div>
            </div>
            <div class="w-8/12 aspect-video">
                <img class="aspect-video rounded-2xl w-full object-cover" src="<?php echo image_dir('about-stock.jpg') ?>" alt="">
            </div>
        </div>
    </section>

    <?php get_template_part('includes/sections/cta', 'cta'); ?>

</main>

<?php get_template_part('includes/components/footer', 'footer'); ?>