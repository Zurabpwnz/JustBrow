<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JustBrow
 */

?>

<footer class="footer">
    <div class="row">
        <div class="col-12 d-flex justify-content-center d-lg-none"><a href="index.html" class="footer__logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/logo.svg" alt=""></a></div>
        <div class="col-6 col-xl-3">
            <h3 class="footer__title">О СТУДИИ</h3>
            <nav class="footer__menu"><a href="#">О мастере</a> <a href="#">Цены</a> <a href="#">Мои работы</a> <a href="#">Отзывы</a> <a href="#">Контакты</a> <a href="#">Статьи</a></nav>
        </div>
        <div class="col-6 col-xl-3">
            <h3 class="footer__title">УСЛУГИ</h3>
            <nav class="footer__menu"><a href="#">Перманентный макияж</a> <a href="#">Уход за бровями</a> <a href="#">Уход за ресницами</a> <a href="#">Депиляция</a> <a href="#">Комплексные услуги</a></nav>
        </div>
        <div class="col-12">
            <div class="footer__copy">Вся информация на сайте – собственность Опариной А.А</div>
            <div class="footer__copy">Публикация информации с сайта Опариной А.А без разрешения запрещена. Все права защищены.</div>
        </div>
    </div>
</footer>
</div>
</div>
</div>
</main>
<aside class="js-sidebars">
    <section class="modal-header"></section>
    <section class="modal modal-call">
        <div class="modal__wrapper">
            <div class="modal-call__exit"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/hex.jpg" alt="" class="js-call-exit"></div>
            <div class="map-form">
                <form action="POST"><a href="tel:89648615856" class="map__tel">8 (964) 861-58-56</a>
                    <p class="map__text-b">Ангеловская<br>Анастасия Андреевна</p>
                    <p class="map__text-b">Записаться на приём</p>
                    <div class="map-form__wrapper"><span><input type="text" class="form-control form__input" placeholder="Имя"> </span><span><input type="tel" class="form-control form__input" placeholder="Телефон"> </span><span><select name="services" id="services" class="form-control form__select">
                  <option value="Выбрать услугу" selected="selected" disabled="disabled" style="display:none; font-size: 16px;font-weight: 300;">Выбрать услугу</option>\<option value="Ресницы">Ресницы</option>
                  <option value="Брови">Брови</option>
                  <option value="Ресницы2">Ресницы 2</option>
                  <option value="Ресницы3">Ресницы 3</option>
                </select></span>
                        <p class="form__agreement">Я согласен условиями предоставления<br>услуг и обработкой моих персональных<br>данных при нажатии “Заказать звонок”</p><button class="btn btn-grad map-form__btn" type="submit">заказать звонок</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</aside><!-- !MODAL -->

<?php wp_footer(); ?>

</body>
</html>
