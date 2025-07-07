<?php
// Template name: Blog
get_template_part('includes/components/header', 'header');
?>
<main class="bg-gray-500 pt-40 relative">

    <div class="w-200 h-200 blur-[100px] opacity-50 rounded-full bg-purple-400 absolute -right-160 -top-80"></div>


    <?php
    $main_post = new WP_Query([
        'posts_per_page' => 1,
        'post_type' => 'post',
        'ignore_sticky_posts' => true,
    ]);
    ?>

    <?php if ($main_post->have_posts()): ?>
        <?php while ($main_post->have_posts()): $main_post->the_post(); ?>
            <section class="py-12">
                <div class="container mx-auto">
                    <div class="flex flex-col lg:flex-row flex-wrap lg:flex-nowrap items-start justify-start lg:gap-x-10">
                        <div class="relative w-full lg:w-5/12 aspect-square lg:aspect-none mb-6 lg:mb-0">
                            <?php the_post_thumbnail('full', ['class' => 'rounded-xl overflow-hidden fullwidth-bg object-cover h-full']); ?>
                        </div>
                        <div class="lg:w-5/12">
                            <p class="subtitle">NOVO</p>
                            <h1 class="title text-white mb-6"><?php the_title(); ?></h1>
                            <p class="text-white/75 text-lg mb-6">
                                <?php echo strip_tags(get_the_excerpt()); ?>
                            </p>
                            <a class="btn btn-purple max-w-[160px] font-bold" href="<?php echo get_the_permalink(); ?>">
                                VER MAIS
                            </a>
                        </div>
                    </div>
                </div>
            </section>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>


    <?php
    $other_posts = new WP_Query([
        'posts_per_page' => -1,
        'post_type' => 'post',
        'offset' => 1,
        'ignore_sticky_posts' => true
    ]);

    if ($other_posts->have_posts()):
    ?>
        <section class="postgrid">
            <div class="container mx-auto pt-10 pb-24">

                <p class="subtitle text-center">TODOS OS ARTIGOS</p>
                <h2 class="title text-white text-center">Confira todos os artigos</h2>

                <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 mt-10">
                    <?php while ($other_posts->have_posts()): $other_posts->the_post(); ?>
                         <article class="relative bg-white/5 hover:rounded-2xl transition duration-300 overflow-hidden group" id="<?php echo $i; ?>">
                            <div class="min-h-[280px] lg:min-h-[360px] bg-black w-full relative">
                                <?php if (has_post_thumbnail()):
                                    the_post_thumbnail('full', ['class' => 'absolute w-full h-full object-cover']);
                                endif; ?>
                            </div>
                            <div class="p-6 flex flex-col items-start justify-start gap-y-4">
                                <p class="text-sm lg:text-lg text-white/75 w-full">
                                    <?php echo get_the_time('M d, Y'); ?>
                                </p>
                                <h3 class="font-bold text-white text-lg lg:text-2xl w-full">
                                    <a class="hover:underline" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="hidden lg:flex top-0 left-0 absolute w-full h-full bg-gradient-to-b from-purple-400/20 via-purple-400/40 to-purple-400/90 flex-col items-center justify-end pb-20 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition duration-300 ">
                                <p class="text-white text-center text-lg font-bold">
                                    LER ARTIGO
                                </p>
                            </a>
                        </article>
                    <?php endwhile; ?>
                </div>

            </div>
        </section>
    <?php endif; wp_reset_postdata(); ?>

</main>
<?php get_template_part('includes/components/footer', 'footer'); ?>
