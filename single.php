<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package JustBrow
 */

get_header();
?>

<?php if (function_exists('kama_breadcrumbs')) {
    kama_breadcrumbs('');
} ?>

    <section class="article">
        <h1 class="title article__title"><?php the_title(); ?></h1>
        <div class="article__img"><?php the_post_thumbnail(); ?></div>
        <div class="article__content">

            <?php the_content(); ?>

        </div>


        <?php if (have_rows('tegi_stati')): ?>

            <aside class="tags">
                <div class="swiper-container-tags">
                    <div class="swiper-wrapper">

                        <?php while (have_rows('tegi_stati')): the_row();

                            $content = get_sub_field('nazvanie_tega');
                            $link = get_sub_field('ssylka_tega');

                            ?>

                            <div class="swiper-slide tags-slide">
                                <a href="<?php echo $link; ?>"
                                   class="btn btn-border tags__btn"><?php echo $content; ?></a>
                            </div>

                        <?php endwhile; ?>

                    </div>
                </div>
                <div class="tags__prev">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/arrleft.svg"
                         alt="arrleft"></div>
                <div class="tags__next">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/arrleft.svg"
                         alt="arrleft"></div>
            </aside>

        <?php endif; ?>

    </section>


<?php

$post_objects = get_field('pohozhie_stati');

if ($post_objects): ?>
    <section class="article">
        <div class="row">
            <div class="col-12">
                <h2 class="title article__title">Похожие статьи</h2>
            </div>

            <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>

                <div class="col-12 col-xl-6">
                    <div class="article-item">
                        <div class="article-item__img"><?php the_post_thumbnail(); ?></div>
                        <h3 class="article-item__name"><?php the_title(); ?></h3>
                        <div class="article-item__descr"><?php the_excerpt(); ?>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="btn btn-border article-item__btn">читать</a>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>
    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif; ?>


<?php
get_footer();
