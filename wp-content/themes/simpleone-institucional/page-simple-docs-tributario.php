<?php get_template_part('includes/components/header', 'header'); ?>
<main class="bg-gray-400 relative">

    <section class="relative pt-20 lg:pt-30">
        <img class="absolute bottom-0 left-0 w-full h-full object-cover"
            src="<?php echo image_dir('bg-simple-docs.jpg'); ?>" alt="">
        <div class="absolute -bottom-1 h-full w-full left-0 bg-gradient-to-b from-transparent to-gray-400 blur-2xl">
        </div>
        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 -top-80">
        </div>
        <div class="container mx-auto grid lg:grid-cols-2 gap-x-10 py-16 relative z-10">
            <h1 class="title flex flex-row items-center justify-start gap-x-8">
                <i class="fa fa-file text-white text-2xl lg:text-6xl"></i>
                Simple Docs Tributário
            </h1>
            <p class="text-white text-lg">
                A <b>Simple Docs Tributário</b> é a plataforma inteligente da <b>Simple One Tech</b> feita para
                transformar a rotina fiscal e contábil do seu negócio, entregando segurança, automação, monitoramento e
                gestão completa em um único ambiente. Tudo o que sua empresa precisa para centralizar documentos,
                obrigações acessórias e atendimentos em massa, com o máximo desempenho e conformidade.
            </p>
        </div>
    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>

    <section>
        <div
            class="container mx-auto py-12 pb-6 lg:pb-12 flex flex-col lg:flex-row lg:flex-nowrap items-center gap-x-10 justify-between">
            <div class="lg:min-w-[240px]">
                <img width="240" height="240" src="<?php echo image_dir('shield-check-purple-glow.svg'); ?>" alt="">
            </div>
            <div>
                <p class="subtitle">
                    Ambiente seguro
                </p>
                <h2 class="title mb-8">
                    Segurança e Autorização
                </h2>
                <p class="text-white text-sm lg:text-xl">
                    Sabemos que segurança e privacidade são prioridades no universo fiscal. Por isso, o <b>Simple Docs
                        Tributário</b> exige autorização em conformidade com a LGPD, assegurando o sigilo fiscal dos
                    dados dos seus clientes a cada passo do processo.
                </p>
            </div>
        </div>
    </section>

    <section>

        <div class="container mx-auto pt-20 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:gap-y-12">

                <div class="card order-2 lg:order-none">
                    <p class="subtitle mb-0">
                        Dashboard
                    </p>
                    <h2 class="title mb-0">
                        Inteligência e Controle em Tempo Real
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Nosso dashboard interativo oferece KPIs e indicadores gerenciais detalhados, alertando sobre
                        prazos, obrigações fiscais e movimentações importantes. Você acompanha a geração de guias e o
                        controle das entregas em um único painel, mantendo total domínio sobre todas as demandas do
                        escritório ou do departamento fiscal.
                    </p>
                </div>

                <div class="card-image relative order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-docs/01.jpg'); ?>" alt="">
                </div>

                <!--  -->

                <div class="card-image relative order-3 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-docs/02.jpg'); ?>" alt="">
                </div>

                <div class="card order-4 lg:order-none">
                    <p class="subtitle mb-0">
                        Centralização
                    </p>
                    <h2 class="title mb-0">
                        Agenda Tributária Inteligente
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Nosso dashboard interativo oferece KPIs e indicadores gerenciais detalhados, alertando sobre
                        prazos, obrigações fiscais e movimentações importantes. Você acompanha a geração de guias e o
                        controle das entregas em um único painel, mantendo total domínio sobre todas as demandas do
                        escritório ou do departamento fiscal.
                    </p>
                </div>


            </div>

    </section>

    <section class="relative">
        <div class="overlay absolute top-0 left-0 w-full h-full bg-white/5"></div>
        <div class="container mx-auto py-8 z-10 relative grid grid-cols-1 gap-y-10 lg:grid-cols-8 gap-x-10">
            <div class="lg:col-span-2">
                <p class="subtitle">
                    Rápido e Fácil
                </p>
                <h2 class="title mb-0">
                    Gestão Moderna de Clientes
                </h2>
            </div>
            <div class="p-8 bg-purple-400 text-white col-span-3">
                <p class="font-bold text-2xl mb-4">
                    Cadastro simplificado
                </p>
                <p class="text-white/75 text-lg">
                    Cadastre clientes de forma manual ou em lote, garanta análise detalhada do DTE e otimize sua base de
                    dados.
                </p>
            </div>
            <div class="p-8 bg-purple-400 text-white col-span-3">
                <p class="font-bold text-2xl mb-4">
                    Gestão proativa
                </p>
                <p class="text-white/75 text-lg">
                    Controle o vencimento de certificados digitais e a expiração de procurações, evitando contratempos e
                    protegendo a continuidade das operações.
                </p>
            </div>
        </div>
    </section>

    <section>

        <div class="container mx-auto pt-20 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:gap-y-12">

                <div class="card order-2 lg:order-none">
                    <p class="subtitle mb-0">
                        Caixa postal
                    </p>
                    <h2 class="title mb-0">
                        Caixa Postal eCAC Avançada
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Visualize todas as mensagens enviadas pela Receita Federal com facilidade, inclusive a
                        sinalização automática de novas mensagens. O grande diferencial é o acesso centralizado:
                        monitore várias caixas postais (de todos os clientes) em um só lugar e ainda faça a leitura
                        dentro da própria ferramenta.
                    </p>
                </div>

                <div class="card-image relative order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-docs/03.jpg'); ?>" alt="">
                </div>

                <!--  -->

                <div class="card-image relative order-3 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-docs/04.jpg'); ?>" alt="">
                </div>

                <div class="card order-4 lg:order-none">
                    <p class="subtitle mb-0">
                        Sistema completo
                    </p>
                    <h2 class="title mb-0">
                        Automação, Monitoramento e Eficiência
                    </h2>
                    <ul class="pl-4 text-sm lg:text-base text-white/75 list-disc">
                        <li>
                            Gere CNDs, consulta situação fiscal, dívida ativa federal, FGTS e débitos trabalhistas de
                            maneira centralizada, com análise em lote para todas as empresas do seu portfólio.
                        </li>
                        <li>
                            Consulte pagamentos de tributos com detalhamento, gere e baixe comprovantes, otimizando o
                            controle financeiro do escritório.
                        </li>
                    </ul>
                </div>

                <!--  -->

                <div class="card order-6 lg:order-none">
                    <p class="subtitle mb-0">
                        Personalização
                    </p>
                    <h2 class="title mb-0">
                        Customização Total
                    </h2>
                    <p class="text-sm lg:text-lg text-white/75">
                        Personalize sua base, ajuste senhas, cadastre novos colaboradores e defina regras para a
                        operação da sua empresa, tudo em uma interface simples e fácil de usar.
                    </p>
                </div>

                <div class="card-image relative order-5 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full"
                        src="<?php echo image_dir('/simple-docs/05.jpg'); ?>" alt="">
                </div>


            </div>

    </section>

    <section>
        <div class="container mx-auto">
            <div class="text-center">
                <p class="subtitle">
                    Funcionalidades
                </p>
                <h2 class="title">Ferramentas Essenciais<br /> para a Rotina do Contador</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/simple-docs-tributario.php';

                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 py-10 px-6 group hover:rounded-2xl transition duration-300 hover:bg-purple-400">
                        <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                            <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200"
                                src="<?php echo image_dir('/simple-docs/icon-' . $index . '.svg') ?>" alt="">
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

    <section class="py-28 lg:pt-40">
        <div class="container mx-auto bg-purple-400 p-10 relative">
            <img class="hidden lg:block absolute -top-24 -left-18" src="<?php echo image_dir('sparkle.svg'); ?>" alt="">
            <div class="text-center">
                <p class="subtitle text-gray-500">Novidades</p>
                <h2 class="title mb-8">
                    Confira o que vem por aí!
                </h2>
                <p class="text-xl text-white/75 mb-10 lg:max-w-[900px] mx-auto">
                    Estamos sempre inovando para entregar ferramentas cada vez mais completas para a gestão fiscal e
                    tributária. E já estamos preparando novidades que expandiram ainda mais as possibilidades da
                    plataforma.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <?php
                $items = [
                    [
                        'Monitoramento “Amarelo e Verde”',
                        'Um novo sistema de alertas visuais na plataforma, facilitando o acompanhamento do status de obrigações e documentos essenciais.'
                    ],
                    [
                        'Novos recursos de declarações',
                        'Mais opções para consulta, envio e gestão de diferentes tipos de declarações fiscais, tornando o processo ainda mais centralizado e simples.'
                    ],
                    [
                        'Monitoramento obrigações estaduais e municipais',
                        'controle de entrega obrigações como GIA RS, GIA SP, DIME SC certidões negativas de débitos estados e municípios '
                    ]
                ];

                foreach ($items as $key => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 p-6 rounded-xl">
                        <h3 class="font-bold text-white text-2xl mb-2">
                            <?php echo $title; ?>
                        </h3>
                        <p class="text-white/75 text-xl">
                            <?php echo $desc; ?>
                        </p>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php get_template_part('includes/sections/cta', 'cta'); ?>


</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>