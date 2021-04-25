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
        <div class="page404__img">
            <img src="<?php the_field('img-404', 'option'); ?>" alt="404">
        </div>
        <h1 class="page404__title"><?php the_field('error-desc', 'option'); ?></h1>
    </section>


<?php get_template_part('template-parts/sections/services-block'); ?>


<?php
get_footer();
