<?php require_once 'template-parts/page_head.php' ?>
<!-- top main menu -->
<? require_once 'template-parts/header.php' ?>
<main>
<section class="mp-main_preview container">

    <div class="mp-main_preview__content">
        <div class="mp-main_preview__link link-line">
            <span class="icon icon-path_left"></span>
            <a href="brand_page.php">LADA Granta</a>
        </div>
        <div class="content__title--type2">Лифтбек Норма Платина</div>
    </div>


    <div class="mp-main_preview__img"><img src="img/model_big_01.png" alt="Фото машины"></div>



    <div class="mp-main_preview__content--price-btn">
        <div class="mp-main_preview__price">от 499 400 &#x20bd;</div>
        <div class="btn btn--orange"><a href="test_drive.php">Записаться на тест-драйв</a></div>
    </div>

</section>


<section class="mp-links container">
    <div class="mp-links__col-1">

        <div class="mp-link link-line link-line--grey" data-action="modal_window" data-target="request_credit">
            <span class="icon icon-steering_wheel"></span>
            <a href="">Заявка на кредит</a>
        </div>

        <div class="mp-link link-line link-line--grey" data-action="modal_window" data-target="make_request">
            <span class="icon icon-speedometer"></span>
            <a href="">Заявка на покупку</a>
        </div>

        <div class="mp-link link-line link-line--grey">
            <span class="icon icon-rocket"></span>
            <a href="">Аксессуары</a>
        </div>

    </div>

    <div class="mp-links__col-2">
        <div class="mp-link--type2"><a href="#t_spec">Характеристики</a></div>
        <div class="mp-link--type2"><a href="#t_equipment">Комплектация</a></div>
    </div>
</section>


<section class="mp-slider container">
    <div class="mp-slider__content">
        <div class="content__title--type2">Новая LADA Granta держит слово</div>
        <p class="mp-slider__text">
            Моя сила не в блеске внешних украшений и вещей. Не в достижениях виртуальной жизни. Моя сила в том, что я выполняю обещания. Не меняю мировоззрение раз в полгода, а иду к цели и помогаю другим достичь ее.
        </p>
    </div>


    <div class="mp-slider__wrp">
        <div class="mp-slider__btn">
            <button class="mp-slider-btn slick-prev slick-arrow" aria-label="Prev" type="button" style="">Pre</button>
            <button class="mp-slider-btn slick-next slick-arrow" aria-label="Next" type="button" style="">Next</button>
        </div>
        <div class="mp-slider__items" data-slider-model-page>
            <div class="mp-slider__img bock_img-full" data-bock-img--full><img src="img/slider_img_01.jpg" alt="фото автомобиля"></div>
            <div class="mp-slider__img bock_img-full" data-bock-img--full><img src="img/slider_img_01.jpg" alt="фото автомобиля"></div>
            <div class="mp-slider__img bock_img-full" data-bock-img--full><img src="img/slider_img_01.jpg" alt="фото автомобиля"></div>
            <div class="mp-slider__img bock_img-full" data-bock-img--full><img src="img/slider_img_01.jpg" alt="фото автомобиля"></div>
            <div class="mp-slider__img bock_img-full" data-bock-img--full><img src="img/slider_img_01.jpg" alt="фото автомобиля"></div>
        </div>
    </div>

</section>


<section class="mp-bars">

        <div class="bars__row bars__row--container">

            <div class="bar__one-two bar--mp-margin-1">
                <div class="bock_img-full" data-bock-img--full><img src="img/bar_1-2_01.jpg" alt="Фото автомобиля"></div>
            </div>

            <div class="bar__one-two bar__common--type2 bar--mp-margin-2">

                    <div class="bar__one-two bar__one-two--half-height">
                        <div class="bock_img-full" data-bock-img--full><img src="img/bar_1-2_02.jpg" alt="Фото автомобиля"></div>
                    </div>

                    <div class="bars__row bars__row--container bars__row--container-fourth">
                        <div class="bar__common--type2 bar__fourth">
                            <div class="bock_img-full" data-bock-img--full><img src="img/bar_1-2_03.jpg" alt="Фото автомобиля"></div>
                        </div>

                        <div class="bar__common--type2 bar__fourth">
                            <div class="bock_img-full" data-bock-img--full><img src="img/bar_1-2_04.jpg" alt="Фото автомобиля"></div>
                        </div>

                    </div>

            </div>
        </div>
    </section>

<section class="mp-specifications container">

    <div class="mp-specifications__col-1" id="t_spec">
        <div class="content__title">Характеристики</div>

        <table class="mp-specifications__table">
            <tr>
                <td>Марка</td>
                <td class="table__content">LADA</td>
            </tr>
            <tr>
                <td>Модель</td>
                <td class="table__content">Granta</td>
            </tr>
            <tr>
                <td>Комплектация</td>
                <td class="table__content">Норма</td>
            </tr>
            <tr>
                <td>Цвет</td>
                <td class="table__content">Персей</td>
            </tr>
            <tr>
                <td> Год выпуска</td>
                <td class="table__content">2017</td>
            </tr>
            <tr>
                <td>Кузов</td>
                <td class="table__content">Лифтбек</td>
            </tr>
            <tr>
                <td> Тип двигателя</td>
                <td class="table__content">Бензин</td>
            </tr>
            <tr>
                <td>Привод</td>
                <td class="table__content">—</td>
            </tr>
            <tr>
                <td>Объем двиг.</td>
                <td class="table__content">1,6 см<sup>3</sup></td>
            </tr>
            <tr>
                <td>Коробка</td>
                <td class="table__content">5МТ</td>
            </tr>
            <tr>
                <td>Мощность двиг.</td>
                <td class="table__content">87 л.с.</td>
            </tr>
        </table>
    </div>


    <div class="mp-specifications__col-2">
        <div class="content__title" id="t_equipment">Комплектация</div>

        <div class="mp-specifications__list-wrp" data-single-expandingList-open>

            <ul class="list-with-squares">
                <li>Подушка безопасности водителя;</li>
                <li>Подголовники задних сидений 2 шт.;</li>
                <li>Крепления для детских сидений ISOFIX;</li>
                <li>Блокировка задних дверей от открывания детьми;</li>
                <li>Иммобилайзер;</li>
                <li>Дневные ходовые огни;</li>
                <li>Антиблокировочная система тормозов с усилителем экстренного торможения (ABS+BAS);</li>
                <li>Электронная система распределения тормозных усилий (EBD);</li>
                <li>Бортовой компьютер;</li>
                <li>Подсказчик переключения передач в комбинации приборов;</li>
                <li>Заднее сиденье с раскладкой в пропорции 60/40;</li>
            </ul>

            <ul class="list-with-squares">
                <li>Розетка 12V;</li>
                <li>Электроусилитель рулевого управления;</li>
                <li>Регулируемая по высоте рулевая колонка;</li>
                <li>Воздушный фильтр салона;</li>
                <li>Легкая тонировка стекол;</li>
                <li>Электростеклоподъемники передних дверей;</li>
                <li>Аудиоподготовка;</li>
                <li>Рамки дверей черного цвета;</li>
                <li>Молдинги боковых дверей;</li>
                <li>Колеса штампованные 14’’;</li>
                <li>Колпаки колес декоративные;</li>
                <li>Запасное колесо штампованное полноразмерное 14’’.</li>
            </ul>
        </div>

        <div class="link-with-border--path-bottom" data-single-list-open-btn>
            <a href="">Показать все</a>
            <span class="icon icon-path_left"></span>
        </div>

    </div>

</section>

<section class="mp-links--2 container">
        <div class="mp-links__col-1">

            <div class="mp-link link-line link-line--grey">
                <span class="icon icon-steering_wheel"></span>
                <a href="">Заявка на кредит</a>
            </div>

            <div class="mp-link link-line link-line--grey">
                <span class="icon icon-speedometer"></span>
                <a href="">Заявка на покупку</a>
            </div>

            <div class="mp-link link-line link-line--grey">
                <span class="icon icon-rocket"></span>
                <a href="">Аксессуары</a>
            </div>

        </div>


        <div class="btn btn--orange"><a href="test_drive.php">Записаться на тест-драйв</a></div>

    </section>

<section class="mp-other-equipment">
        <div class="mp-other-equipment__head container">
            <div class="content__title">Другие комплектации</div>
            <div class="link-with-border--path-bottom">
                <a href="">По названию</a>
                <span class="icon icon-path_left"></span>
            </div>
        </div>

        <div class="mp-other-equipment__content">

            <div class="mp-other-equipment__content-row">
                <div class="col-1">
                    <span class="spec">1.6л 8-кл (87 л.с.), 5МТ / Standart
                        <span class="art">(21901-A0-545)</span>
                    </span>
                </div>
                <div class="col-2">
                    <div class="price">444 900 &#x20bd;</div>
                    <div class="col-2__links-wrp">
                        <div class="test-link link-line">
                            <a href="test_drive.php">Тест-драйв</a>
                        </div>
                        <div class="content__link content__link--link-line">
                            <a href="">Смотреть</a>
                            <span class="icon icon-path_right"></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mp-other-equipment__content-row">
                <div class="col-1">
                    <span class="spec">1.6л 8-кл (87 л.с.), 5МТ / Classic
                        <span class="art">(21901-A1-567)</span>
                    </span>
                </div>
                <div class="col-2">
                    <div class="price">480 500 &#x20bd;</div>
                    <div class="col-2__links-wrp">
                        <div class="test-link link-line">
                            <a href="test_drive.php">Тест-драйв</a>
                        </div>
                        <div class="content__link content__link--link-line">
                            <a href="">Смотреть</a>
                            <span class="icon icon-path_right"></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mp-other-equipment__content-row">
                <div class="col-1">
                    <span class="spec">1.6л 8-кл (87 л.с.), 5МТ / Classic / Optima
                        <span class="art">(21901-A1-575)</span>
                    </span>

                </div>
                <div class="col-2">
                    <div class="price">506 500 &#x20bd;</div>
                    <div class="col-2__links-wrp">
                        <div class="test-link link-line">
                            <a href="test_drive.php">Тест-драйв</a>
                        </div>
                        <div class="content__link content__link--link-line">
                            <a href="">Смотреть</a>
                            <span class="icon icon-path_right"></span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mp-other-equipment__content-row">
                <div class="col-1">
                    <span class="spec">1.6л 8-кл (87 л.с.), 5МТ / Comfort
                         <span class="art">(21901-A1-568)</span>
                    </span>
                </div>
                <div class="col-2">
                    <div class="price">526 500 &#x20bd;</div>
                    <div class="col-2__links-wrp">
                        <div class="test-link link-line">
                            <a href="test_drive.php">Тест-драйв</a>
                        </div>
                        <div class="content__link content__link--link-line">
                            <a href="">Смотреть</a>
                            <span class="icon icon-path_right"></span>
                        </div>
                    </div>
                </div>
            </div>


        </div>
</section>


<section class="mp-information-slider container">
        <div class="information-title_wrp">
            <h2 class="content__title">Новости и события</h2>
            <div class="content__link">
                <a href="">Смотреть все новости</a>
                <span class="icon icon-path_right"></span>
            </div>
        </div>

    <div class="slider__wrapper" data-slider-information>

        <div class="slider-btn-wrp  slider-btn-wrp--information">
            <span class="slider-btn slider-btn--prev" data-prev></span>
            <span class="slider-btn slider-btn--next" data-next></span>
        </div>

        <div class="slider-items-wrp">

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_01.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">ГАЗель Некст от 333 руб. в день</p>
                        <p  class="information_description">Данная программа призвана обезопасить клиента, который …</p>
                        <p class="information_description__date">27 сентября 2016</p>
                    </div>
                </a>
            </div>

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_02.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">Лифан в Иваново, цены и комплектации</p>
                        <p  class="information_description">С появлением на отечественном авторынке такой марки как …</p>
                        <p class="information_description__date">3 марта 2017</p>
                    </div>
                </a>
            </div>

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_03.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">Конкурс «Мисс ЛАДА» Иваново </p>
                        <p  class="information_description">21 августа состоялся яркий полуфинал конкурса «Автоледи …</p>
                        <p class="information_description__date">21 августа 2016</p>
                    </div>
                </a>
            </div>

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_04.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">Пятидесятилетие «АвтоВаза». Как это было!</p>
                        <p  class="information_description">В субботу, 16 июля, по всей России официальные дилеры LADA …</p>
                        <p class="information_description__date">16 июля 2016</p>
                    </div>
                </a>
            </div>

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_01.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">ГАЗель Некст от 333 руб. в день</p>
                        <p  class="information_description">Данная программа призвана обезопасить клиента, который …</p>
                        <p class="information_description__date">27 сентября 2016</p>
                    </div>
                </a>
            </div>

            <div class="slide-item slide-item--information">
                <a href="" class="information__item">
                    <div class="information__img">
                        <img  src="img/information_preview_02.jpg" alt="Полезная информация">
                    </div>
                    <div class="information__content">
                        <p class="information__title">ГАЗель Некст от 333 руб. в день</p>
                        <p  class="information_description">Данная программа призвана обезопасить клиента, который …</p>
                        <p class="information_description__date">27 сентября 2016</p>
                    </div>
                </a>
            </div>

        </div>
    </div>




</section>

<section class="section-map">
        <script src="https://api-maps.yandex.ru/2.1/?apikey=40b8a09d-8389-4a22-a0ac-2e18995eae34&lang=ru_RU"
                type="text/javascript">
        </script>
        <div id="map">

        </div>

        <script>
            ymaps.ready(function () {
                var myMap = new ymaps.Map("map", {
                    center: [57.026488, 40.968522],
                    zoom: 16,
                    controls: []
                });


                var myPlacemark = new ymaps.GeoObject({
                    geometry: {
                        type: "Point",
                        coordinates:  [57.026488, 40.968522]
                    },
                    properties: {
                        // Контент метки.
                        hintContent: 'г. Иваново, ул. Калашникова, д. 26а'
                    }
                });

                myMap.geoObjects.add(myPlacemark);
            });
        </script>
    </section>
</main>
<!-- footer -->
<?php require_once 'template-parts/footer.php'?>
<?php require_once 'template-parts/privacy_policy.php' ?>
<?php require_once 'template-parts/modal.php' ?>
<?php require_once 'template-parts/page_bottom.php' ?>

