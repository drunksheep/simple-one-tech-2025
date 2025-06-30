<section class="relative">

    <div class="hidden lg:block w-240 h-240 blur-[100px] opacity-30 rounded-full bg-purple-400 absolute -left-140 top-10">
    </div>
    <div class="hidden lg:block w-240 h-240 blur-[100px] opacity-30 rounded-full bg-purple-400 absolute -right-140 top-10">
    </div>

    <div class="container mx-auto py-10 lg:py-20 relative z-10 flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-start justify-between">

        <div class="flex flex-col flex-wrap items-start justify-start lg:w-6/12 mb-10 lg:mb-0">
            <p class="subtitle mb-4">
                Contato
            </p>
            <h2 class="title mb-4">
                Vamos transformar seu negócio juntos
            </h2>
            <p class="text-sm lg:text-xl text-white/75">
                Estamos prontos para te ajudar e te atender. Preencha o formulário e entre em contato conosco.
            </p>
        </div>

        <div class="lg:w-7/12 relative">

            <?php get_template_part('includes/components/form-body', 'form-body'); ?>

        </div>

    </div>

</section>