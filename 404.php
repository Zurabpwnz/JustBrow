<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package JustBrow
 */

get_header();
?>

    <section class="page404">
        <div class="page404__img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/404.svg"
                                       alt=""></div>
        <h1 class="page404__title">что то пошло не так, страница не найдена.<br>Но есть много товаров в каталоге</h1>
    </section>


<?php get_template_part('template-parts/sections/services-block'); ?>


<?php
get_footer();
