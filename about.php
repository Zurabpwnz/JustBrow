<?php
/**
 * Template Name: Обо мне
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

    <section class="about">
        <div class="row">
            <div class="col-12 col-xl-6 d-flex">
                <div class="about-block__info">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="col-12 col-xl-6 d-flex justify-content-center d-xl-block">
                <div class="about-block__img bg-gradient">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="certificate">
        <div class="row">
            <div class="col-12">
                <h2 class="title">Мои сертификаты</h2>
            </div>


            <?php
            $post_objects = get_field('sertifikat_-_vertikalnyj');
            if ($post_objects): ?>
                <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center">
                    <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>

                        <div class="certificate__img"><?php the_post_thumbnail(); ?></div>

                    <?php endforeach; ?>
                </div>
                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif; ?>



            <?php
            $post_objects = get_field('moi_sertifikaty');
            if ($post_objects): ?>

                <div class="col-12 col-md-6 col-xl-8">
                    <div class="row">

                        <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>

                            <div class="col-12 col-xl-6 d-flex justify-content-center">
                                <div class="certificate__img"><?php the_post_thumbnail(); ?></div>
                            </div>

                        <?php endforeach; ?>

                    </div>
                </div>

                <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
            <?php endif; ?>

        </div>
    </section>

    <div class="inst-link d-flex align-items-center flex-column">
        <a href="https://www.instagram.com/<?php the_field('ssylka_na_instagram'); ?>" target="_blank"
           class="inst-link__link">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ins.svg"
                 alt="instagram icon">@<?php the_field('ssylka_na_instagram'); ?> </a>
        <a href="#" class="btn btn-border inst-link__btn">подписаться</a>
    </div>


<?php
get_footer();
