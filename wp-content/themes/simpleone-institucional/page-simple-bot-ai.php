<?php get_template_part('includes/components/header', 'header'); ?>
<main class="bg-gray-400 relative">
    <section class="relative pt-20 lg:pt-30">
        <img class="absolute bottom-0 left-0 w-full h-full object-cover"
            src="<?php echo image_dir('bg-simple-bot.jpg'); ?>" alt="">
        <div class="absolute -bottom-1 h-full w-full left-0 bg-gradient-to-b from-transparent to-gray-400 blur-2xl">
        </div>
        <div class="container mx-auto grid lg:grid-cols-2 gap-x-10 py-16 relative z-10">
            <h1 class="title flex flex-row items-center justify-start gap-x-8">
                <i class="fa fa-robot text-white text-2xl lg:text-6xl"></i>
                Simple Bot AI
            </h1>
            <p class="text-white text-xl">
                Atendimento automatizado via WhatsApp e chat com IA, para escalar e otimizar o relacionamento com clientes.
            </p>
        </div>
    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>

    <section>
        <div
            class="container mx-auto py-12 pb-6 lg:pb-20 flex flex-col lg:flex-row lg:flex-nowrap items-center gap-x-10 justify-between">
            <div class="lg:min-w-[240px]">
                <img width="240" height="240" src="<?php echo image_dir('whatsapp-purple-shadow.svg'); ?>" alt="">
            </div>
            <div>
                <p class="subtitle">
                    Atendimento Inteligente
                </p>
                <h2 class="title mb-8">
                    Atendimento Inteligente com IA no WhatsApp e Chat Web
                </h2>
                <p class="text-white text-sm lg:text-xl">
                    Transforme o relacionamento com seus clientes com a solução de atendimento automatizado por IA da
                    Simple One Tech. Combinando chatbots inteligentes, atendimento humano e automações estratégicas,
                    nossa ferramenta oferece atendimento 24/7 via WhatsApp e chat — com escalabilidade, integração total
                    e uma experiência mais ágil e eficiente para todos os envolvidos.
                </p>
            </div>
        </div>
    </section>


    <section class="relative">
        <div class="overlay absolute top-0 left-0 w-full h-full bg-white/5"></div>
        <div class="container mx-auto py-8 z-10 relative grid grid-cols-1 gap-y-10 lg:grid-cols-11 gap-x-4">
            <div class="lg:col-span-3">
                <p class="subtitle">
                    Do básico ao avançado
                </p>
                <h2 class="title mb-0">
                    Duas Soluções em Uma Plataforma
                </h2>
            </div>
            <div class="p-8 bg-purple-400 text-white col-span-4">
                <p class="font-bold text-2xl mb-4">
                    Chat Multicanal<br />+ Automação de Envios
                </p>
                <p class="text-white/75 text-lg">
                    Combine atendimento humanizado com automações inteligentes. Envie documentos, mensagens e lembretes
                    aos clientes de forma automática, tudo integrado em um chat centralizado e eficiente.
                </p>
            </div>
            <div class="p-8 bg-purple-400 text-white col-span-4">
                <p class="font-bold text-2xl mb-4">
                    Chatbots<br />com IA generativa
                </p>
                <p class="text-white/75 text-lg">
                    Criação de agentes de atendimentos inteligentes voltados a necessidade de negócio trabalham 24x7.
                </p>
            </div>
        </div>
    </section>

    <section>

        <div class="container mx-auto pt-20 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:gap-y-20 lg:max-w-[85%] lg:mx-auto">

                <div class="card order-2 lg:order-none">
                    <p class="subtitle mb-2">
                        Sempre ativo
                    </p>
                    <h2 class="title mb-4">
                        Atendimento Imediato 24/7
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Clientes entram em contato pelo WhatsApp a qualquer hora, e o bot responde imediatamente,
                        esclarecendo dúvidas, coletando dados e, se necessário, encaminhando para um atendente humano.
                    </p>
                </div>

                <div class="card-image relative order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-bot-1/01.jpg'); ?>" alt="">
                </div>

                <!--  -->

                <div class="card-image relative order-3 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-bot-1/02.jpg'); ?>" alt="">
                </div>

                <div class="card order-4 lg:order-none">
                    <p class="subtitle mb-2">
                        EXPANSÃO
                    </p>
                    <h2 class="title mb-4">
                        Escalabilidade sem Custo Extra
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75 list-disc">
                        Gerencie centenas de atendimentos simultâneos sem sobrecarregar a equipe. O bot resolve o básico
                        e deixa os casos complexos para os humanos.
                    </p>
                </div>

                <!--  -->

                <div class="card order-5 lg:order-none">
                    <p class="subtitle mb-2">
                        IA
                    </p>
                    <h2 class="title mb-4">
                        IA Generativa Inteligente
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Utilizamos tecnologia similar ao ChatGPT para entender intenções, personalizar respostas e até
                        sugerir mensagens para sua equipe.
                    </p>
                </div>

                <div class="card-image relative order-4 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-bot-1/03.jpg'); ?>" alt="">
                </div>

                <!--  -->

                <div class="card-image relative order-6 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-bot-1/04.jpg'); ?>" alt="">
                </div>

                <div class="card order-7 lg:order-none">
                    <p class="subtitle mb-2">
                        Dashboard
                    </p>
                    <h2 class="title mb-4">
                        Gestão Centralizada
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75 list-disc">
                        Todos os canais em um único painel com métricas em tempo real, incluindo tempo médio de
                        resposta, taxa de satisfação, volume de contatos e conversões.
                    </p>
                </div>

                <!--  -->


                <div class="card order-10 lg:order-none">
                    <p class="subtitle mb-2">
                        integração
                    </p>
                    <h2 class="title mb-4">
                        Integração Total
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75 list-disc">
                        Conecte com CRMs, ERPs, e-commerces e outras plataformas para automatizar ainda mais sua
                        operação.
                    </p>
                </div>

                <div class="card-image relative order-9 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-bot-1/05.jpg'); ?>" alt="">
                </div>


            </div>

    </section>

    <section>
        <div class="container mx-auto py-12 lg:py-20">
            <div class="text-center">
                <p class="subtitle">
                    Funcionalidades
                </p>
                <h2 class="title">Funcionalidades Principais</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/simple-bot-ai-1.php';

                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 py-10 px-6 group hover:rounded-2xl transition duration-300 hover:bg-purple-400">
                        <div class="flex flex-row flex-nowrap gap-x-4 items-center justify-start mb-4">
                            <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200"
                                src="<?php echo image_dir('/simple-bot-1/icon-' . $index . '.svg') ?>" alt="">
                            <h3 class="font-bold text-2xl text-white">
                                <?php echo $title ?>
                            </h3>
                        </div>
                        <p class="text-white/75">
                            <?php echo $desc ?>
                        </p>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto py-12 lg:py-20">
            <div class="text-center">
                <p class="subtitle">
                    Funcionalidades
                </p>
                <h2 class="title">Funcionalidades Principais</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/simple-bot-ai-2.php';

                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 py-10 px-6 group hover:rounded-2xl transition duration-300 hover:bg-purple-400">
                        <div class="flex flex-row flex-nowrap gap-x-4 items-center justify-start mb-4">
                            <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200"
                                src="<?php echo image_dir('/simple-bot-2/icon-' . $index . '.svg') ?>" alt="">
                            <h3 class="font-bold text-2xl text-white">
                                <?php echo $title ?>
                            </h3>
                        </div>
                        <p class="text-white/75">
                            <?php echo $desc ?>
                        </p>
                    </div>

                <?php endforeach ?>
            </div>
        </div>
    </section>


    <section>
        <div
            class="container mx-auto py-12 pb-6 lg:pb-20 flex flex-col lg:flex-row lg:flex-nowrap items-center gap-x-10 justify-between">
            <div>
                <p class="subtitle">
                    Potencialize seu atendimento
                </p>
                <h2 class="title mb-8">
                    Atenda, Converta e Fidelize <br /> com Inteligência Artificial
                </h2>
                <p class="text-white text-sm lg:text-xl">
                    Nossa solução oferece o equilíbrio ideal entre automação e atendimento humano. Ideal para empresas
                    que querem escalar com qualidade, reduzir custos e oferecer uma experiência moderna, eficiente e
                    personalizada.
                </p>
            </div>
            <div class="lg:min-w-[240px]">
                <img width="240" height="240" src="<?php echo image_dir('robot-purple-shadow.svg'); ?>" alt="">
            </div>
        </div>
    </section>


    <?php get_template_part('includes/sections/cta', 'cta'); ?>


</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>