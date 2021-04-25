<?php

$ID = get_the_ID();

$post_objects = get_field('uslugi_na_404', 'option');

if ($post_objects): ?>
    <section class="services-block">
        <div class="services-block__items">
            <?php foreach ($post_objects as $post): // Переменная должна быть названа обязательно $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>

                <div class="services-item">
                    <div class="services-item__wrapper">
                        <a href="<?php the_permalink(); ?>" class="services-item__img bg-gradient">
                            <?php the_post_thumbnail('service-thumb');?></a>
                        <a href="<?php the_permalink(); ?>" class="services-item__name"><?php the_title(); ?></a>
                        <p class="services-item__price"><?php the_field('czena_uslugi');?></p>
                    </div>
                </div>

            <?php endforeach; ?>
        </div>
    </section>
    <?php wp_reset_postdata(); // ВАЖНО - сбросьте значение $post object чтобы избежать ошибок в дальнейшем коде ?>
<?php endif;

?>