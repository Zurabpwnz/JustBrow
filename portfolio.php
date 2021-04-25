<?php
/**
 * Template Name: Мои работы
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JustBrow
 */

get_header();
?>

<?php if (function_exists('kama_breadcrumbs')) {
    kama_breadcrumbs('');
} ?>


    <section class="portfolio">
        <div class="row">
            <div class="col-12">
                <h1 class="title portfolio__title">Мои работы по уходу за бровями</h1>
            </div>


            <?php if (have_rows('moi_raboty_-_tegi')): ?>

                <div class="col-12">
                    <aside class="tags">
                        <div class="swiper-container-tags">
                            <div class="swiper-wrapper">

                                <?php while (have_rows('moi_raboty_-_tegi')): the_row();

                                    $content = get_sub_field('nazvanie_tega');
                                    $link = get_sub_field('ssylka_tega');

                                    ?>

                                    <div class="swiper-slide tags-slide">
                                        <a href="<?php echo $link; ?>"
                                           class="btn btn-border tags__btn"><?php echo $content; ?></a></div>

                                <?php endwhile; ?>

                            </div>
                        </div>
                        <div class="tags__prev">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/arrleft.svg"
                                 alt=""></div>
                        <div class="tags__next">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/arrleft.svg"
                                 alt=""></div>
                    </aside>

                </div>

            <?php endif; ?>




            <?php

            $post_objects = get_field('moi_raboty_-_spisok_rabot');

            if ($post_objects): ?>
                <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                    <?php setup_postdata($post); ?>

                    <div class="col-12 col-lg-6">
                        <div class="portfolio-item">
                            <a href="<?php the_permalink(); ?>" class="portfolio-item__img">
                                <?php the_post_thumbnail(array(9999999, 400)); ?>
                                <div class="portfolio-item__info">
                                    <p class="portfolio-item__name"><?php the_title(); ?></p>
                                    <p class="portfolio-item__price"><?php the_field('czena_raboty'); ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif; ?>

        </div>
    </section>


    <section class="reviews-block">
        <h2 class="title reviews__title">Отзывы мойх любимых клиентов</h2>
        <div class="reviews-block__slider">
            <div class="swiper-reviews">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="reviews-item">
                            <div class="reviews-item__left"><img src="img/revl.jpg" alt=""></div>
                            <div class="reviews-item__right"><img src="img/revr.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviews-item">
                            <div class="reviews-item__left"><img src="img/revl.jpg" alt=""></div>
                            <div class="reviews-item__right"><img src="img/revr.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviews-item">
                            <div class="reviews-item__left"><img src="img/revl.jpg" alt=""></div>
                            <div class="reviews-item__right"><img src="img/revr.jpg" alt=""></div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="reviews-item">
                            <div class="reviews-item__left"><img src="img/revl.jpg" alt=""></div>
                            <div class="reviews-item__right"><img src="img/revr.jpg" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="reviews__prev"><img src="img/arrleft.svg" alt=""></div>
            <div class="reviews__next"><img src="img/arrleft.svg" alt=""></div>
        </div>
        <div class="inst-link d-flex align-items-center flex-column"><a href="#" target="_blank"
                                                                        class="inst-link__link"><img src="img/ins.svg"
                                                                                                     alt="">
                @stasey_brow_artist </a><a href="#" class="btn btn-border inst-link__btn">подписаться</a></div>
    </section>


<?php get_template_part('template-parts/sections/request'); ?>


    <section class="about-block">
        <div class="row">
            <div class="col-12 col-xl-6 d-flex">
                <div class="about-block__info">
                    <h2 class="title about-block__title">Обо мне</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Velit sed ullamcorper morbi tincidunt ornare massa eget egestas
                        purus. Fringilla ut morbi tincidunt augue interdum velit. Risus at ultrices mi tempus imperdiet
                        nulla malesuada pellentesque. Ullamcorper sit amet risus nullam eget felis eget nunc. Diam in
                        arcu cursus euismod quis viverra. Duis ut diam quam nulla. At auctor urna nunc id cursus metus
                        aliquam eleifend mi. Tellus molestie nunc non blandit massa. Luctus accumsan tortor posuere ac
                        ut consequat semper viverra. Nisl condimentum id venenatis a condimentum vitae sapien. Eget duis
                        at tellus at urna condimentum mattis. Vulputate odio ut enim blandit volutpat. Dui accumsan sit
                        amet nulla facilisi morbi. Interdum velit laoreet id donec ultrices tincidunt.</p>
                    <p>Praesent elementum facilisis leo vel fringilla est. Viverra mauris in aliquam sem fringilla.
                        Mauris a diam maecenas sed enim ut sem viverra aliquet. Enim sit amet venenatis urna. Laoreet
                        non curabitur gravida arcu ac tortor. Nulla porttitor massa id neque aliquam vestibulum morbi.
                        Congue nisi vitae suscipit tellus mauris. Mi tempus imperdiet nulla malesuada pellentesque elit
                        eget gravida cum. Et egestas quis ipsum suspendisse. Sed adipiscing diam donec adipiscing
                        tristique risus nec feugiat in. Sem viverra aliquet eget sit amet tellus. Cras pulvinar mattis
                        nunc sed blandit libero. Vitae aliquet nec ullamcorper sit. Mi proin sed libero enim sed. Mauris
                        augue neque gravida in. Sollicitudin ac orci phasellus egestas tellus rutrum tellus pellentesque
                        eu. Pretium aenean pharetra magna ac placerat vestibulum. Diam vel quam elementum pulvinar etiam
                        non quam.</p>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex justify-content-center align-items-center">
                <div class="about-block__img bg-gradient"><img src="img/ab1.jpg" alt=""></div>
            </div>
        </div>
    </section>


<?php
get_footer();
