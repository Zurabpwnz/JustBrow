<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
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

    <section class="article">
        <div class="row">
            <div class="col-12">
                <h1 class="title article__title"><?php the_title(); ?></h1>
            </div>

            <?php
            if (have_posts()) : ?>

                <?php /* Start the Loop */
                while (have_posts()) :
                    the_post();

                    /*
                     * Include the Post-Type-specific template for the content.
                     * If you want to override this in a child theme, then include a file
                     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                     */
                    get_template_part('template-parts/content', get_post_type());

                endwhile; ?>

                <div class="col-12">

                    <?php the_posts_pagination(array(
                        'end_size' => 2,
                        'prev_text' => __('Начало'),
                        'next_text' => __('Конец'),
                    )); ?>

                </div>

            <?php else : ?>

                <?php get_template_part('template-parts/content', 'none'); ?>

            <?php endif; ?>

        </div>
    </section>

<?php
get_footer();
