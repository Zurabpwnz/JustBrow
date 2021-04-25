<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JustBrow
 */

?>

<div class="col-12 col-xl-6" id="post-<?php the_ID(); ?>">
    <div class="article-item">
        <div class="article-item__img"><?php the_post_thumbnail('thumbnail'); ?></div>
        <h3 class="article-item__name"><?php the_title(); ?></h3>
        <div class="article-item__descr"><?php the_excerpt(); ?></div>
        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn btn-border article-item__btn">читать</a>
    </div>
</div>
