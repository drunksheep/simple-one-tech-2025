<?php
get_template_part('includes/components/header', 'header');
?>

<main class="min-h-screen bg-gray-500 pt-40 relative">

    <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 -top-80"></div>
    <div class="lg:pt-20"></div>

    <section>
        <div class="container mx-auto py-48 relative rounded-xl overflow-hidden">
            <div class="bg-gradient-to-t from-black/80 to-transparent z-[3] top-0 left-0 w-full max-w-[95%] lg:max-w-none mx-auto"></div>
            <img class="absolute top-0 left-0 right-0 w-full h-full object-cover z-[2] rounded-3xl max-w-[95%] lg:max-w-none mx-auto"
                src="<?php echo image_dir('bg-onvio.jpg'); ?>" alt="">
            <div class="absolute top-[50%] translate-y-[-50%] left-0 right-0 mx-auto text-center z-[4]">
                <h1 class="title mb-2">
                    Módulos Onvio e Consultoria:
                </h1>
                <p class="text-white text-3xl">
                    Potencializando a Contabilidade na Nuvem
                </p>
            </div>
            <h1 class=""></h1>
        </div>
    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>


    <section class="relative">
        <img class="absolute top-0 left-0 h-[320px] lg:h-full w-full lg:w-auto lg:max-w-[45vw] object-cover"
            src="<?php echo image_dir('onvio.png') ?>" alt="">

        <div
            class="container mx-auto py-10 lg:min-h-[80vh] flex flex-col lg:flex-row flex-wrap items-start lg:items-center justify-start">
            <div class="lg:w-6/12 h-[320px] mb-8 lg:h-auto lg:mb-0"></div>
            <div class="lg:w-6/12">
                <p class="subtitle">
                    Introdução
                </p>
                <h2 class="title mb-4">
                    A Consultoria como Catalisadora do Sucesso com Onvio
                </h2>
                <p class="text-white/75 text-sm lg:text-lg mb-4">
                    A transição para a nuvem com a plataforma <b>Onvio</b> traz desafios que tornam a consultoria
                    especializada essencial. A consultoria de implantação cuida da configuração inicial, definição de
                    acessos e integração com o <b>Domínio</b>. Treinamentos garantem que equipes e clientes utilizem os
                    portais, gerenciadores de tarefas e outras funções de forma eficiente. Já a consultoria de
                    otimização analisa processos, propondo automações e melhorias. A gestão da mudança apoia na
                    adaptação a um modelo mais digital e colaborativo. Com suporte especializado, seu escritório garante
                    uma transição segura, maior produtividade e total aproveitamento da Onvio.
                </p>
            </div>
        </div>
    </section>

    <section class="relative">

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 bottom-0"></div>

        <div class="pt-24 pb-20 container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10 items-center">
                <div>
                    <p class="subtitle">FUNCIONALIDADES</p>
                    <h2 class="title mb-3">
                        Funcionalidades dos<br /> Módulos Onvio e Serviços de Consultoria Associados
                    </h2>
                </div>
                <div>
                    <p class="text-white/75 text-xl">
                        A plataforma Onvio, integrada ao ecossistema Domínio Sistemas da Thomson Reuters, representa a
                        evolução das soluções contábeis para a nuvem, oferecendo módulos projetados para aumentar a
                        colaboração, automação e eficiência dos escritórios de contabilidade e seus clientes.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-10">

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Portal do Cliente
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Comunicação Segura;</li>
                        <li>Publicação de Documentos;</li>
                        <li>Solicitação de Serviços;</li>
                        <li>Busca e Emissão de CNDs;</li>
                        <li>Acesso via Web/App;</li>
                        <li>Histórico e Protocolo.</li>
                    </ul>
                </div>

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Portal do Empregado
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Acesso a Documentos da Folha;
                        <li>Publicação Direta pelo Módulo Folha;
                        <li>Redução de Demandas ao RH/Contador;
                        <li>Acesso via Web/App.
                    </ul>
                </div>


                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Processos
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Gerenciador de Tarefas Contábeis;</li>
                        <li>Automação de Cobrança de Documentos;</li>
                        <li>Baixa Automática de Tarefas;</li>
                        <li>Relatórios de Desempenho;</li>
                        <li>Integração com Domínio e Evolução em Nuvem.</li>
                    </ul>
                </div>

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Tarefas
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Gestão de Atividades;</li>
                        <li>Visibilidade e Controle.</li>
                    </ul>
                </div>

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Circular
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Comunicação em Massa;</li>
                        <li>Controle de Envio.</li>
                    </ul>
                </div>

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Documentos
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Gestão Eletrônica de Documentos (GED);</li>
                        <li>Digitalização via App.</li>
                    </ul>
                </div>

                <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white">
                    <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
                        <h3 class="font-bold text-2xl text-white">
                            Messenger
                        </h3>
                    </div>
                    <ul class="text-white/75 list-disc pl-10">
                        <li>Comunicação Instantânea.</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="relative">
        <img class="absolute left-0 top-0 w-full h-full object-cover"
            src="<?php echo image_dir('consultoria-stock.png'); ?>" alt="">

        <div class="container mx-auto py-16 z-10 relative">

            <div class="grid grid-cols-1 lg:grid-cols-6 items-center lg:gap-x-4">

                <div class="lg:col-span-2">
                    <p class="subtitle">Serviços</p>
                    <h2 class="title mb-3">
                        Serviços de Consultoria para Onvio
                    </h2>
                    <p class="text-white/75">
                        A implementação e o uso eficaz da plataforma Onvio podem ser potencializados por serviços de consultoria, similares aos oferecidos para o sistema Domínio desktop, mas com foco nas particularidades da nuvem e dos módulos específicos:
                    </p>
                </div>

                <div class="lg:col-span-4 grid lg:grid-cols-2 gap-6">
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Consultoria de Implantação Onvio
                        </h3>
                        <p>
                           Configuração inicial da plataforma, definição de acessos, parametrização dos módulos e integração com o sistema Domínio.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Treinamento Onvio
                        </h3>
                        <p>
                            Capacitação da equipe e, se necessário, dos clientes, para uso eficiente dos portais, gerenciador de tarefas, GED e demais funções.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Consultoria de Otimização de Processos com Onvio
                        </h3>
                        <p>
                           Análise dos processos para automatizar tarefas, melhorar a comunicação e aumentar a eficiência com os módulos Onvio.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Consultoria de Gestão da Mudança
                        </h3>
                        <p>
                           Apoio na adaptação a um modelo de trabalho digital e colaborativo, incentivando o uso efetivo da Onvio.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white lg:col-span-2">
                        <h3 class="font-bold text-xl mb-4">
                            Suporte Especializado Onvio
                        </h3>
                        <p>
                          Assistência para dúvidas e problemas específicos da plataforma e sua integração com o Domínio.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </section>

    <section class="relative">

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -left-160 bottom-0"></div>

        <div class="container py-12 mx-auto">
            <div class="text-center">
                <p class="subtitle">
                    benefícios
                </p>
                <h2 class="title">
                    Benefícios da<br/>Consultoria Onvio
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/onvio.php';

                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 py-10 px-6 group hover:rounded-2xl transition duration-300 hover:bg-purple-400">
                        <div class="flex flex-row flex-nowrap gap-x-4 items-center justify-start mb-4">
                            <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200" src="<?php echo image_dir('/simple-docs/icon-' . $index . '.svg') ?>" alt="">
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

    <?php get_template_part('includes/sections/cta', 'cta'); ?>

</main>

<?php get_template_part('includes/components/footer', 'footer'); ?>