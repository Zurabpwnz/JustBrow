<?php
/**
 * Template Name: Цены
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


    <section class="services-block">
        <h1 class="title services-block__title">Цены на услуги по уходу за бровями</h1>

        <div class="services-block__items">

            <div class="services-item">
                <div class="services-item__wrapper"><a href="#" class="services-item__img bg-gradient"><img src="img/s1.jpg" alt=""> </a><a href="#" class="services-item__name">Перманентный макияж</a>
                    <p class="services-item__price">от 2000 ₽</p>
                </div>
            </div>
            <div class="services-item">
                <div class="services-item__wrapper"><a href="#" class="services-item__img bg-gradient"><img src="img/s2.jpg" alt=""> </a><a href="#" class="services-item__name">Уход за бровями</a>
                    <p class="services-item__price">от 200 ₽</p>
                </div>
            </div>
            <div class="services-item">
                <div class="services-item__wrapper"><a href="#" class="services-item__img bg-gradient"><img src="img/s3.jpg" alt=""> </a><a href="#" class="services-item__name">Комплексные услуги</a>
                    <p class="services-item__price">от 900 ₽</p>
                </div>
            </div>
            <div class="services-item">
                <div class="services-item__wrapper"><a href="#" class="services-item__img bg-gradient"><img src="img/s4.jpg" alt=""> </a><a href="#" class="services-item__name">Депиляция</a>
                    <p class="services-item__price">от 200 ₽</p>
                </div>
            </div>
            <div class="services-item">
                <div class="services-item__wrapper"><a href="#" class="services-item__img bg-gradient"><img src="img/s5.jpg" alt=""> </a><a href="#" class="services-item__name">Уход за ресницами</a>
                    <p class="services-item__price">от 400 ₽</p>
                </div>
            </div>
        </div>

        <div class="prices">
            <div class="prices__header">
                <div class="prices__name">Услуги</div>
                <div class="prices__descr">Описание</div>
                <div class="prices__price">Цена</div>
            </div>
            <div class="prices-item">
                <div class="prices-item__name">Перманентный макияж</div>
                <div class="prices-item__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="prices-item__price">от 2000 ₽</div>
            </div>
            <div class="prices-item">
                <div class="prices-item__name">Перманентный макияж</div>
                <div class="prices-item__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="prices-item__price">от 2000 ₽</div>
            </div>
            <div class="prices-item">
                <div class="prices-item__name">Перманентный макияж</div>
                <div class="prices-item__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="prices-item__price">от 2000 ₽</div>
            </div>
            <div class="prices-item">
                <div class="prices-item__name">Перманентный макияж</div>
                <div class="prices-item__descr">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                <div class="prices-item__price">от 2000 ₽</div>
            </div>
        </div>
    </section>


<?php get_template_part('template-parts/sections/request'); ?>


<?php
get_footer();
