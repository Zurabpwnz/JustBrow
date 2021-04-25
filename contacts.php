<?php
/**
 * Template Name: Контакты
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

    <section class="map contacts">
        <div class="row">
            <div class="col-12">
                <h1 class="title"><?php the_title(); ?></h1>
            </div>
            <div class="col-12 col-xl-3 d-flex justify-content-center">
                <div class="contacts__content">
                    <a href="tel:<?php the_field('osnovnoj_telefon_ssylka', 'option'); ?>"
                       class="map__tel contacts__tel"><?php the_field('osnovnoj_telefon_tekst', 'option'); ?></a>

                    <div class="contacts__item">
                        <p class="map__text">Адрес:</p>
                        <p class="map__text-b"><?php the_field('adres', 'option'); ?></p>
                    </div>

                    <div class="contacts__item">
                        <p class="map__text">Часы работы:</p>
                        <p class="map__text-b"><?php the_field('vremya_raboty', 'option'); ?></p>
                    </div>

                    <div class="contacts__item">
                        <p class="map__text">E-mail:</p>
                        <a href="mailto:<?php the_field('e-mail', 'option'); ?>"
                           class="map__text-b"><?php the_field('e-mail', 'option'); ?></a>
                    </div>

                </div>
            </div>
            <div class="col-12 col-xl-9 d-flex">
                <?php the_field('siteMap', 'option'); ?>
            </div>
        </div>
    </section>

<?php get_template_part('template-parts/sections/request'); ?>

<?php
get_footer();
