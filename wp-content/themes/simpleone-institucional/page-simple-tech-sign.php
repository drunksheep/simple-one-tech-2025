<?php get_template_part('includes/components/header', 'header'); ?>
<main class="bg-gray-400 relative">

    <section class="relative pt-20 lg:pt-30">
        <img class="absolute bottom-0 left-0 w-full h-full object-cover"
            src="<?php echo image_dir('bg-simple-tech-sign.jpg'); ?>" alt="">
        <div class="absolute -bottom-1 h-full w-full left-0 bg-gradient-to-b from-transparent to-gray-400 blur-2xl">
        </div>
        <div class="container mx-auto grid lg:grid-cols-2 gap-x-10 py-16 relative z-10">
            <h1 class="title flex flex-row items-center justify-start gap-x-8">
                <i class="fa-regular fa-edit text-white text-2xl lg:text-6xl"></i>
                Simple Tech Sign
            </h1>
            <p class="text-white text-xl">
                Plataforma de assinatura digital e eletrônica com validade jurídica, impulsionada pelo Carimbo do Tempo
                ICP-Brasil.
            </p>
        </div>
    </section>

    <?php get_template_part('includes/sections/form-section', 'form-section'); ?>

    <section>
        <div
            class="container mx-auto py-12 pb-6 lg:pb-20 flex flex-col lg:flex-row lg:flex-nowrap items-center gap-x-10 justify-between">
            <div class="lg:min-w-[320px]">
                <img width="320" height="240" src="<?php echo image_dir('icon-scales-purple-glow.svg'); ?>" alt="">
            </div>
            <div>
                <p class="subtitle">
                    Ambiente seguro
                </p>
                <h2 class="title mb-8">
                    Validade Jurídica <br /> e Conformidade com a Lei
                </h2>
                <p class="text-white text-sm lg:text-xl">
                    Nossa plataforma oferece Assinatura Digital Qualificada com Certificado Digital ICP-Brasil e Carimbo
                    de Tempo, garantindo autenticidade, integridade e validade temporal aos documentos. Tudo conforme a
                    MP 2.200-2/2001 e a Lei 14.063/2020.
                </p>
            </div>
        </div>
    </section>

    <section>

        <div class="container mx-auto pt-20 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:gap-y-20">

                <div class="card order-2 lg:order-none">
                    <p class="subtitle mb-0">
                        Passo à passo
                    </p>
                    <h2 class="title mb-0">
                        Como Funciona a Solução
                    </h2>
                    <ol class="pl-4 text-sm lg:text-base text-white/75 list-decimal">
                        <li>
                            <b>Upload do Documento:</b> Carregue o arquivo a ser assinado.
                        </li>
                        <li>
                            <b>Identificação do Signatário:</b> Autenticação com certificado digital ICP-Brasil (A1 ou
                            A3).
                        </li>
                        <li>
                            <b>Assinatura Digital:</b> Geração de hash criptográfico e assinatura com chave privada.
                        </li>
                        <li>
                            <b>Carimbo de Tempo:</b> Emissão por ACT credenciada, com registro oficial da data e hora.
                        </li>
                        <li>
                            <b>Verificação:</b> Validação pública da autenticidade, integridade e temporalidade da
                            assinatura.
                        </li>
                    </ol>
                </div>

                <div class="card-image relative order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full" src="<?php echo image_dir('/simple-tech-sign/01.jpg'); ?>"
                        alt="">
                </div>

            </div>

        </div>

    </section>

    <section class="relative">
        <div class="overlay absolute top-0 left-0 w-full h-full bg-white/5"></div>
        <div class="container mx-auto py-8 z-10 relative grid grid-cols-1 gap-y-10 lg:grid-cols-5 gap-x-4">
            <div class="lg:col-span-2 lg:pt-15">
                <p class="subtitle">
                    Segurança e Evidência
                </p>
                <h2 class="title mb-0">
                    O Carimbo de Tempo ICP-Brasil assegura
                </h2>
            </div>
            <div class="p-8 bg-purple-400 text-white">
                <p class="font-bold text-2xl mb-4">
                    Tempestividade
                </p>
                <p class="text-white/75 text-lg">
                    Prova que o documento foi assinado dentro do prazo correto.
                </p>
            </div>
            <div class="p-8 bg-purple-400 text-white">
                <p class="font-bold text-2xl mb-4">
                    Irretroatividade
                </p>
                <p class="text-white/75 text-lg">
                    Evita fraudes de data, garantindo a marcação real do momento da assinatura.
                </p>
            </div>
            <div class="p-8 bg-purple-400 text-white">
                <p class="font-bold text-2xl mb-4">
                    Validade a longo prazo
                </p>
                <p class="text-white/75 text-lg">
                    Mesmo após expiração do certificado, a assinatura continua válida.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="container mx-auto py-12 lg:py-20">
            <div class="text-center">
                <p class="subtitle">
                    Benefícios
                </p>
                <h2 class="title">Recursos e Benefícios para sua Empresa</h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <?php
                $tools = require get_template_directory() . '/includes/content/simple-one-sign.php';

                foreach ($tools as $index => [$title, $desc]):
                    ?>

                    <div class="bg-black/20 py-10 px-6 group hover:rounded-2xl transition duration-300 hover:bg-purple-400">
                        <div class="flex flex-row flex-nowrap gap-x-4 items-center justify-start mb-4">
                            <img class="group-hover:invert group-hover:brightness-0 group-hover:contrast-200" src="<?php echo image_dir('/simple-bot-1/icon-' . $index . '.svg') ?>" alt="">
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

        <div class="container mx-auto pt-20 pb-12">

            <div class="grid grid-cols-1 lg:grid-cols-3 lg:gap-8 lg:gap-y-20">


                <div class="card-image relative order-1 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full" src="<?php echo image_dir('/simple-tech-sign/02.jpg'); ?>"
                        alt="">
                </div>

                <div class="card order-2 lg:order-none">
                    <p class="subtitle mb-0">
                        Integração Técnica com Conformidade ICP-Brasil
                    </p>
                    <h2 class="title mb-0">
                        Seguimos rigorosamente os padrões técnicos da ICP-Brasil
                    </h2>
                    <ul class="text-sm pl-4 lg:text-base text-white/75 list-disc">
                        <li>
                            Formatos de Assinatura: Suporte a AD-T, CAdES, XAdES e outros.
                        </li>
                        <li>
                            Algoritmos Criptográficos: SHA-256, RSA, ECC.
                        </li>
                        <li>
                            Certificados Compatíveis: ICP-Brasil A1 e A3 (e-CPF, e-CNPJ).
                        </li>
                        <li>
                            <b>Carimbo de Tempo:</b> Emissão por ACT credenciada, com registro oficial da data e hora.
                        </li>
                        <li>
                            Validação Completa: Verificação da cadeia de certificação, status de revogação e
                            conformidade com políticas de assinatura.

                        </li>
                    </ul>
                </div>

                <!--  -->

                <div class="card order-4 lg:order-none">
                    <p class="subtitle mb-0">
                        Integração
                    </p>
                    <h2 class="title mb-0">
                        Assinatura Digital com Integração Simplificada
                    </h2>
                    <p class="text-sm lg:text-xl text-white/75 list-disc">
                        Nossa plataforma possui APIs bem documentadas, que permitem a integração direta da
                        funcionalidade de assinatura digital com carimbo de tempo ao seu:
                    </p>
                    <ul class="text-sm pl-4 lg:text-base text-white/75 list-disc">
                        <li>
                            Website ou portal de clientes
                        </li>
                        <li>
                            Sistema de gestão documental (GED/ECM)
                        </li>
                        <li>
                            Sistema ERP, CRM ou jurídico
                        </li>
                    </ul>
                </div>

                <div class="card-image relative order-3 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full" src="<?php echo image_dir('/simple-tech-sign/03.jpg'); ?>"
                        alt="">
                </div>

                <!--  -->

                <div class="card-image relative order-5 lg:order-none">
                    <img class="w-full object-cover rounded-xl h-full" src="<?php echo image_dir('/simple-tech-sign/04.jpg'); ?>"
                        alt="">
                </div>

                <div class="card order-6 lg:order-none">
                    <p class="subtitle mb-0">
                        Por que contratar?
                    </p>
                    <h2 class="title mb-0">
                        Aplicações Ideais
                    </h2>
                    <ul class="text-sm pl-4 lg:text-base text-white/75 list-disc">
                        <li>
                            Contratos com clientes e fornecedores
                        </li>
                        <li>
                            Acordos de confidencialidade (NDA)
                        </li>
                        <li>
                            Aprovações internas e workflows jurídicos
                        </li>
                        <li>
                            Documentos de RH (admissão, políticas, termos)
                        </li>
                    </ul>
                </div>


            </div>

        </div>

    </section>

    <section>
        <div
            class="container mx-auto py-12 pb-6 lg:pb-20 flex flex-col lg:flex-row items-center gap-x-20 justify-between">
            <div>
                <p class="subtitle">
                    Seus contratos modernizados
                </p>
                <h2 class="title mb-8">
                    Simple Tech Sign é a evolução das assinaturas digitais e eletrônicas
                </h2>
                <p class="text-white text-sm lg:text-xl">
                    Segura, legalmente válida, 100% online — com tudo o que sua empresa precisa para assinar, controlar
                    e integrar documentos de forma rápida, eficiente e sustentável.
                </p>
            </div>
            <div>
                <i class="fa fa-signature text-purple-400 mb-10 lg:mb-0 text-[200px]"></i>
            </div>
        </div>
    </section>



    <?php get_template_part('includes/sections/cta', 'cta'); ?>


</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>