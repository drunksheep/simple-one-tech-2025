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
                src="<?php echo image_dir('consultoria-1.png'); ?>" alt="">
            <div class="absolute top-[50%] translate-y-[-50%] left-0 right-0 mx-auto text-center z-[4]">
                <h1 class="title mb-2">
                    Consultoria para <br />Sistema Domínio:
                </h1>
                <p class="text-white text-2xl lg:text-3xl">
                    Maximizando o Potencial da<br /> Sua Ferramenta Contábil
                </p>
            </div>
            <h1 class=""></h1>
        </div>
    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>


    <section class="relative">
        <img class="absolute top-0 left-0 h-[320px] lg:h-full w-full lg:w-auto lg:max-w-[45vw] object-cover"
            src="<?php echo image_dir('dominio.png') ?>" alt="">

        <div
            class="container mx-auto py-10 lg:min-h-[80vh] flex flex-col lg:flex-row flex-wrap items-start lg:items-center justify-start">
            <div class="lg:w-6/12 h-[320px] mb-8 lg:h-auto lg:mb-0"></div>
            <div class="lg:w-6/12">
                <p class="subtitle">
                    Introdução
                </p>
                <h2 class="title mb-4">
                    A Importância da Consultoria no Ecossistema Domínio
                </h2>
                <p class="text-white/75 text-sm lg:text-lg mb-4">
                    O <b>Domínio</b>, da <b>Thomson Reuters</b>, é uma das principais plataformas contábeis do Brasil,
                    oferecendo gestão contábil, fiscal, folha de pagamento e muito mais. No entanto, sua utilização
                    plena exige mais que a simples aquisição. A complexidade das rotinas fiscais e a variedade de
                    recursos tornam a <b>consultoria especializada essencial.</b> Seja para uma implantação eficiente,
                    treinamento da equipe, otimização de processos ou integração com outras ferramentas, a consultoria
                    garante melhor aproveitamento do sistema, mais eficiência e total conformidade.
                </p>
            </div>
        </div>
    </section>

    <section class="relative">

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 bottom-0"></div>

        <div class="pt-24 pb-20 container mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 mb-10">
                <div>
                    <p class="subtitle">tipos de consultoria</p>
                    <h2 class="title mb-3">
                        Tipos de Serviços de<br />Consultoria e Seus Benefícios
                    </h2>
                </div>
                <div>
                    <p class="text-white/75 text-xl">
                        Garanta que sua empresa ou escritório contábil utilize o máximo potencial do sistema Domínio.
                        Nossos serviços de consultoria ajudam desde a implantação até a otimização, integração e
                        conformidade — tudo adaptado às suas necessidades e com suporte de especialistas certificados.
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-8 mb-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/dominio.php';
                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="py-10 px-6 flex flex-col items-start justify-start gap-y-4 border border-white group hover:rounded-2xl transition duration-300 hover:bg-purple-400 hover:border-purple-400">
                        <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200" width="40" height="40" src="<?php echo image_dir('/dominio/icon-' . $index . '.svg') ?>"
                            alt="">
                        <div class="flex flex-row flex-wrap gap-x-4 items-center justify-start mb-4">
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

    <section class="relative">
        <img class="absolute left-0 top-0 w-full h-full object-cover"
            src="<?php echo image_dir('consultoria-stock.png'); ?>" alt="">

        <div class="container mx-auto py-16 z-10 relative">

            <div class="grid grid-cols-1 lg:grid-cols-6 items-center lg:gap-x-4">

                <div class="lg:col-span-2">
                    <p class="subtitle">Exemplos</p>
                    <h2 class="title mb-3">
                        Casos de Uso da Consultoria
                    </h2>
                </div>

                <div class="lg:col-span-4 grid lg:grid-cols-4 gap-6">
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Implantação Inicial ineficiente
                        </h3>
                        <p>
                            Evite erros comuns na implantação. Com consultoria, a parametrização correta e definição de
                            processos garantem que sua empresa aproveite todo o potencial do sistema desde o início.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Otimização do Departamento Pessoal
                        </h3>
                        <p>
                            Redução de tempo no eSocial, automação de médias, criação de relatórios personalizados e
                            treinamento da equipe — tudo para tornar o DP mais eficiente.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Integração Domínio + ERP
                        </h3>
                        <p>
                            Fluxo de dados automático entre ERP (ex.: Conta Azul) e Domínio. Elimine digitações manuais
                            e garanta dados consistentes.
                        </p>
                    </div>
                    <div class="py-8 px-6 bg-transparent backdrop-blur-lg text-white">
                        <h3 class="font-bold text-xl mb-4">
                            Consultoria Tributária Aplicada
                        </h3>
                        <p>
                            Apoio especializado para apuração correta de IRPJ/CSLL e geração da ECF no Domínio, com
                            revisão de parametrizações e processos.
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
                    Benefícios da Consultoria<br/>no Sistema Domínio
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-4 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/dominio-2.php';

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