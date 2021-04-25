<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JustBrow
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon"
          href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon/favicon.ico">
    <link rel="icon" type="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/vnd.microsoft.icon"
          href="img/favicon/favicon.ico">
    <link rel="icon" type="<?php echo esc_url(get_template_directory_uri()); ?>/assets/image/x-icon"
          href="img/favicon/favicon.ico">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/favicon/favicon.ico">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<main>
    <nav class="site-nav">
        <div class="btn btn-grad site-nav__burger js-header-burger">
            <img class="js-header-burger" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/brgr.svg" alt=""></div>
        <div class="btn btn-grad site-nav__call js-call">
            <img class="js-call" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/call.svg" alt=""></div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-2 d-none d-xl-block">
                <header data-da=".modal-header,1199,1" class="header">
                    <div class="header__exit">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hex.jpg" alt="" class="js-header-exit">
                    </div>
                    <a href="#" class="logo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="">
                    </a>
                    <p class="header__text">cтудия перманентного<br>макияжа бровей №1<br>в городе Киров</p>

                    <nav class="header__menu">
                        <a href="#">Услуги</a>
                        <a href="#">Мои работы</a>
                        <a href="#">Цены</a>
                        <a href="#">Отзывы</a>
                        <a href="#">Обо мне</a>
                        <a href="#">Контакты</a>
                    </nav>

                    <div class="header__social">
                        <a href="#" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/inst.svg" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/vk.svg" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/yt.svg" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/viber.svg" alt="">
                        </a>
                        <a href="#" target="_blank">
                            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/whatsapp.svg" alt="">
                        </a>
                    </div>
                </header>
            </div>

            <div class="col-12 col-xl-10">
                <header class="header-2">
                    <a href="#" class="logo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt="">
                    </a>
                    <a href="#" class="logo-min">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logom.svg" alt="">
                    </a>
                </header>
