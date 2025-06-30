<footer class="bg-gray-500 text-white text-sm">
    <div class="container mx-auto py-16">

        <div class="flex flex-col lg:flex-row flex-wrap gap-y-4 lg:gap-8 justify-start lg:justify-between w-full mb-10">
            <div class="lg:w-6/12 flex flex-wrap lg:flex-nowrap lg:flex-row gap-x-8 items-center">
                <a href="">
                    <img src="<?php echo image_dir('logo-footer.svg') ?>" alt="<?php echo $logo['alt']; ?>">
                </a>
                <div class="flex flex-col lg:flex-row flex-wrap items-start gap-4 w-full lg:w-auto mt-4 lg:mt-0">
                    <img width="44px" src="<?php echo image_dir('pin.svg'); ?>" alt="">
                    <p class="text-white/75">
                        <strong class="text-white">Rua Frei Caneca, 1246 – CJ 12</strong><br>
                        Consolação - São Paulo - SP, 01307-002
                    </p>
                </div>
            </div>
            <div class="grid grid-cols-3 lg:flex lg:flex-row lg:flex-wrap gap-x-4 items-center justify-start">
                <a href="#"
                    class="py-2 text-center lg:p-3 border border-white transtion duration-300 hover:rounded-lg hover:bg-white/20"><i
                        class="fab text-2xl fa-instagram"></i> </a>
                <a href="#"
                    class="py-2 text-center lg:p-3 border border-white transtion duration-300 hover:rounded-lg hover:bg-white/20"><i
                        class="fab text-2xl fa-linkedin-in"></i> </a>
                <a href="#"
                    class="py-2 text-center lg:p-3 border border-white transtion duration-300 hover:rounded-lg hover:bg-white/20"><i
                        class="fab text-2xl fa-facebook"></i> </a>
                <button class="btn py-4 btn-purple gap-x-3 col-span-full mt-4 lg:mt-0 modal-trigger">
                    Solicitar demonstração
                    <i class="fa fa-arrow-right text-white text-sm"></i>
                </button>
            </div>
        </div>


        <!-- Footer Menus from WP -->
        <?php $footer_menu = get_menu_tree('Footer'); ?>
        <?php if ($footer_menu): ?>
            <div class="grid lg:grid-cols-4 gap-8 w-full text-sm">
                <?php foreach ($footer_menu as $column): ?>
                    <div>
                        <h4 class="font-bold text-lg uppercase mb-4"><?php echo $column->title; ?></h4>
                        <ul class="space-y-1">
                            <?php if (!empty($column->children)): ?>
                                <?php foreach ($column->children as $item): ?>
                                    <li class="text-lg text-white/75">
                                        <a href="<?php echo $item->url; ?>" class="hover:underline"><?php echo $item->title; ?></a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                <?php endforeach; ?>
                <div></div>
                <div class="border border-purple-400 p-4 flex flex-col gap-3 items-start justify-start">
                    <p class="font-bold text-white text-lg uppercase">Meios de Contato</p>
                    <a class="text-white/75 underline flex flex-row flex-wrap items-center justify-start gap-x-2" href="">
                        <i class="fab fa-whatsapp text-xl"></i>
                        WhatsApp
                    </a>
                    <a class="text-white/75 underline flex flex-row flex-wrap items-center justify-start gap-x-2" href="">
                        <i class="far fa-envelope text-xl"></i>
                        E-mail
                    </a>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <!-- Bottom bar -->
    <div class="bg-black/10 py-8 text-center text-xs text-white/75">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between items-center gap-2">
            <p class="">
                Copyright © <?php echo date('Y'); ?> <strong>SimpleOne Tech</strong>. Todos os direitos reservados.
            </p>
            <div class="flex flex-row gap-x-2 items-center justify-start">
                Criação de Sites:
                <a href="https://artedez.com.br" class="hover:underline">
                    <img src="<?php echo image_dir('artedez.svg'); ?>" alt="">
                </a>
            </div>
        </div>
    </div>
</footer>

<div class="modal-overlay ">
    <div class="modal-body">
        <p class="subtitle">
            CONTATO
        </p>
        <h2 class="title mb-4">
            Vamos transformar seu negócio juntos
        </h2>
        <p class="text-sm lg:text-lg text-white/75 mb-4">
            Estamos prontos para te ajudar e te atender. Preencha o formulário e entre em contato conosco.
        </p>
        <?php get_template_part('includes/components/form-body', 'form-body'); ?>
        <button
            class="cursor-pointer h-10 w-10 bg-transparent text-white border border-white/50 absolute top-6 right-6 flex flex-col items-center justify-center transition-all duration-300 hover:rounded-lg hover:bg-white/25 close-modal">
            <i class="fa fa-times"></i>
        </button>
    </div>
</div>


<a href="https://wa.me/5511918448464" target="_blank"
    class="h-[60px] w-[60px] px-0 lg:px-4 lg:h-auto lg:w-auto p-3 rounded-full bg-green-600 hover:scale-110 transition duration-300 fixed right-4 lg:right-10 lg:top-[50%] lg:translate-y-[-50%] bottom-4 lg:bottom-auto flex flex-nowrap flex-row items-center justify-center border-0 z-20">
    <img class="filter w-[32px] h-[32px]" width="24" height="24" src="<?php echo image_dir('whatsapp-white.svg'); ?>"
        alt="">
    <p class="hidden lg:block text-white text-sm ml-2"> WhatsApp</p>
</a>


<?php wp_footer(); ?>
</body>

</html>