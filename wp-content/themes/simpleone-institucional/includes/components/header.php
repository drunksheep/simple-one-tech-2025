<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/CircularStd-Bold.woff"
        as="font" type="font/woff" crossorigin="anonymous">
    <link rel="preload" href="<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Inter.ttf" as="font"
        type="font/truetype" crossorigin="anonymous">
    <style>
        @font-face {
            font-family: 'Circular Std';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/CircularStd-Bold.woff') format('woff');
            font-weight: 800;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Circular Std';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/CircularStd-Bold.woff') format('woff');
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter';
            src: url('<?php echo get_template_directory_uri(); ?>/src/assets/fonts/Inter.ttf') format('truetype');
            font-weight: 100 900;
            font-stretch: 75% 125%;
            font-style: normal;
            font-display: swap;
        }
    </style>
</head>

<body class="<?php body_class('overflow-x-hidden text-white font-inter'); ?>">
    <header class="fixed top-0 left-0 w-full z-20 backdrop-blur-lg" id="masthead">

        <nav class="w-full py-6 lg:py-0">
            <div class="container mx-auto flex flex-row items-center justify-between border-white">

                <!-- hamburger -->
                <button class="block lg:hidden hamburger hamburger--3dx" type="button" id="open-menu">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <?php $logo = !wp_is_mobile() ? get_field('logo', 'option') : image_dir('logo-mobile.svg'); ?>

                <?php if ($logo): ?>
                    <a href="<?php echo site_url('/'); ?>" id="header-logo">
                        <?php if (wp_is_mobile()): ?>

                            <img src="<?php echo $logo; ?>" alt="">

                        <?php else: ?>

                            <img width="<?php echo $logo['width']; ?>" height="<?php echo $logo['height'] ?>"
                                src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">

                        <?php endif; ?>
                    </a>
                <?php endif; ?>

                <?php $menu = get_menu_tree('Principal'); ?>

                <?php if ($menu): ?>

                    <ul id="header-menu"
                        class="fixed top-0 left-0 w-[100vw] h-[100vh] lg:h-auto bg-purple-400 lg:bg-transparent p-6 lg:w-auto lg:static text-lg flex flex-col lg:flex-row flex-nowrap items-start lg:items-center justify-start gap-y-4 lg:gap-x-6 py-24 lg:py-12 opacity-0 lg:opacity-100 invisible lg:visible transition duration-300">

                        <?php foreach ($menu as $menu_item): ?>
                            <li class="text-white relative group">
                                <a class="" href="<?php echo $menu_item->url; ?>"><?php echo $menu_item->title; ?></a>

                                <?php if (!empty($menu_item->children)): ?>

                                    <i class="fa fa-chevron-down text-white text-sm"></i>

                                    <ul
                                        class="static lg:absolute top-8 left-0 lg:invisible lg:opacity-0 group-hover:opacity-100 group-hover:visible transition-opacity duration-300">
                                        <?php foreach ($menu_item->children as $child_item): ?>
                                            <li>
                                                <a class="block py-2 lg:py-4 lg:px-6 lg:bg-gray-500 lg:min-w-[300px] hover:bg-gray-600 transition duration-300"
                                                    href="<?php echo $child_item->url; ?>">
                                                    <?php echo $child_item->title; ?>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                <?php endif; ?>
                            </li>

                        <?php endforeach; ?>

                    </ul>

                <?php endif; ?>

                <button class="btn border-white/25 font-bold hover:bg-white/25 modal-trigger">
                    Solicitar demonstração
                    <i class="fa fa-arrow-right text-white text-sm"></i>
                </button>


                <!-- close menu -->
                <button
                    class="w-10 h-10 bg-white rounded-full text-xl fixed z-40 top-6 left-3 opacity-0 invisible lg:hidden"
                    id="close-menu">
                    <i class="fa fa-times"></i>
                </button>

            </div>
        </nav>
    </header>