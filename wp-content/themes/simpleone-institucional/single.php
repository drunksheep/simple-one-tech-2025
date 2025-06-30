<?php get_template_part('includes/components/header', 'header');
the_post(); ?>
<main class="bg-gray-500 relative">
    <section class="bg-purple-400 py-48 w-full relative">
        <?php if (has_post_thumbnail()):
            the_post_thumbnail('full', ['class' => 'object-cover absolute w-full h-full top-0 left-0']);
        endif; ?>
        <div class="bg-gradient-to-r from-black/50 to-transparent absolute top-0 left-0 w-full h-full"></div>
    </section>
    <section class="py-28 relative">

        <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-140 -top-30"></div>
        

        <div class="container mx-auto">

            <ul class="text-xl flex flex-row items-center justify-start gap-x-4 mb-10">
                <li class="text-white/75">
                    <a href="<?php echo site_url('/blog/') ?>">
                        Blog
                    </a>
                </li>
                <li><i class="fa fa-chevron-right text-lg text-purple-400"></i></li>
                <li class="text-white font-bold">
                    <?php the_title(); ?>
                </li>
            </ul>

            <div class="flex flex-col items-start justify-start">
                <p class="subtitle">
                    <?php
                    $categories = get_the_category();
                    if ($categories) {
                        $names = wp_list_pluck($categories, 'name');
                        echo implode(', ', $names);
                    }
                    ?>
                </p>
            </div>

            <h1 class="title">
                <?php the_title(); ?>
            </h1>

            <p class="text-lg text-white/75">
                <?php echo date_i18n('j \d\e F \d\e Y', get_the_time('U')); ?>
            </p>

            <hr class="my-10 border border-white/10">

            <div class="content">
                <?php the_content(); ?>
            </div>

        </div>
    </section>


    <?php
    $other_posts = new WP_Query([
        'post_type' => 'post',
        'post__not_in' => [get_the_ID()],
        'posts_per_page' => 3,
    ]);

    if ($other_posts->have_posts()):
        ?>

        <section class="py-12 relative">

            <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -left-180 -bottom-10"></div>

            <div class="container mx-auto">

                <div class="flex flex-row items-center justify-between mb-10 gap-x-6">
                    <div class="w-10/12">
                        <p class="subtitle">
                            blog
                        </p>
                        <h2 class="title">
                            Leia mais
                        </h2>
                    </div>
                    <p class="text-white text-xs lg:text-lg font-bold">
                        <a href="<?php echo site_url('/blog/'); ?>">
                            VER TUDO &nbsp;
                            <i class="fa fa-chevron-right"></i>
                        </a>
                    </p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <?php while ($other_posts->have_posts()):
                        $other_posts->the_post(); ?>
                        <article class="bg-white/5" id="<?php echo $i; ?>">
                            <div class="min-h-[280px] lg:min-h-[300px] bg-black w-full relative">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('full', ['class' => 'absolute w-full h-full object-cover']);
                                endif; ?>
                            </div>
                            <div class="p-6 flex flex-col items-start justify-start gap-y-4">
                                <p class="text-sm lg:text-lg text-white/75 w-full">
                                    <?php echo get_the_time('M d, Y'); ?>
                                </p>
                                <h3 class="font-bold text-white text-lg lg:text-2xl w-full hover:underline">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>

            </div>

        </section>
    <?php endif; ?>

    <?php get_template_part('includes/sections/cta', 'cta'); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>