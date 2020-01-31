<?php require_once 'template-parts/page_head.php' ?>
<!-- top main menu -->
<? require_once 'template-parts/header.php' ?>
<main>

<section class="section-top-photo container">
        <div class="brand__bg">
            <div class="brand__bg-gradient"></div>
            <img src="img/bg_brand_01.jpg" alt="Фото автомобиля">
        </div>

        <div class="brand__content">
                <div class="content__title--type2">Автомобили<br> с пробегом</div>
        </div>
    </section>

<section class="car-filter car-filter--brand container">

        <form action="" method="post" name="car-filter">

            <div class="car-filter__wrp">
                <div class="car-filter__title">Автомобили<br> в наличии</div>

                <div class='car-filter__select'>
                    <label for="select-brand">Марка</label>
                    <select id="select-brand" name="select-brand">
                        <option value="b1">LADA</option>
                        <option value="b2">УАЗ</option>
                        <option value="b3">ГАЗ</option>
                        <option value="b4">Все</option>
                    </select>
                </div>


                <div class='car-filter__select'>
                    <label for="select-model">Модель</label>
                    <select id="select-model" name="select-model">
                        <option value="b1">Все</option>
                        <option value="b2">Модель 1</option>
                        <option value="b3">Модель 2</option>
                        <option value="b4">Модель 3</option>
                    </select>
                </div>

                <div class="car-filter__num-cars"><a href="">34 новых <br> автомобиля</a></div>
            </div>


            <div class="car-filter__links-wrp">
                <div class="credit link-line link-line-white">
                    <span class="icon icon-palm"></span>
                    <a href="">Заявка на кредит</a>
                </div>
                <div class="service link-line link-line-white">
                    <span class="icon icon-steering_wheel"></span>
                    <a href="">Запись на ТО</a>
                </div>
            </div>

            <input type="submit" class="" name="car-filter" value="">
        </form>
    </section>

<section class="section-models-used container">


    <div class="models-used__header-wrp">
        <div class="content__title">Доступно 22 авто</div>
        <div class="models-used__header-links">

            <div class="link-with-border--path-bottom">
                <a href="">По свежести</a>
                <span class="icon icon-path_left"></span>
            </div>

            <div class="link-with-border--path-bottom">
                <a href="">Все марки</a>
                <span class="icon icon-path_left"></span>
            </div>
        </div>
    </div>



    <div class="models-used__items">

        <div class="models-used__item">
            <div class="models-used__item-wrp">
                <div class="models-used__img bock_img-full" data-bock-img--full><a href="current_model_used.php"><img src="img/used_avto_1.jpg" alt="Фото автомобиля"></a></div>
                <div class="models-used__content">
                    <div class="content__title"><a href="current_model_used.php">Chery Tiggo 2009</a></div>
                    <div class="models-used__specifications">
                        <div class="col-1">
                            <div><span>Год </span><b class="">2009</b></div>
                            <div><span>Пробег </span><b>118 000</b></div>
                            <div> <span>Двигатель </span><b>Бензин</b></div>
                        </div>
                        <div class="col-2">
                            <div><span>КПП </span><b>Механическая</b></div>
                            <div><span>Цвет </span><b>Серебристый</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="models-used__cost">
                <div class="models-used__price-wrp">
                    <div class="text">Стоимость</div>
                    <div class="price">305 000 &#x20bd;</div>
                </div>

                <div class="btn btn--orange" data-action="modal_window" data-target="make_request"><a href="">Оформить заявку</a></div>

            </div>
        </div>



        <div class="models-used__item">
            <div class="models-used__item-wrp">
                <div class="models-used__img bock_img-full" data-bock-img--full><a href="current_model_used.php"><img src="img/used_avto_2.jpg" alt="Фото автомобиля"></a></div>
                <div class="models-used__content">
                    <div class="content__title"><a href="current_model_used.php">Chevrolet NIVA</a></div>
                    <div class="models-used__specifications">
                        <div class="col-1">
                            <div><span>Год </span><b class="">2010</b></div>
                            <div><span>Пробег — </span><b></b></div>
                            <div> <span>Двигатель </span><b>Бензин</b></div>
                        </div>
                        <div class="col-2">
                            <div><span>КПП </span><b>Механическая</b></div>
                            <div><span>Цвет </span><b>Темно-зеленый</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="models-used__cost">
                <div class="models-used__price-wrp">
                    <div class="text">Стоимость</div>
                    <div class="price">300 000 &#x20bd;</div>
                </div>
                <div class="btn btn--orange" data-action="modal_window" data-target="make_request"><a href="">Оформить заявку</a></div>

            </div>
        </div>

        <div class="models-used__item">
            <div class="models-used__item-wrp">
                <div class="models-used__img bock_img-full" data-bock-img--full><a href="current_model_used.php"><img src="img/used_avto_3.jpg" alt="Фото автомобиля"></a></div>
                <div class="models-used__content">
                    <div class="content__title"><a href="current_model_used.php">Daewoo Matiz 2005</a></div>
                    <div class="models-used__specifications">
                        <div class="col-1">
                            <div><span>Год </span><b class="">2010</b></div>
                            <div><span>Пробег — </span><b></b></div>
                            <div> <span>Двигатель </span><b>Бензин</b></div>
                        </div>
                        <div class="col-2">
                            <div><span>КПП </span><b>Механическая</b></div>
                            <div><span>Цвет </span><b>Темно-зеленый</b></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="models-used__cost">
                <div class="models-used__price-wrp">
                    <div class="text">Стоимость</div>
                    <div class="price">120 000 &#x20bd;</div>
                </div>
                <div class="btn btn--orange" data-action="modal_window" data-target="make_request"><a href="">Оформить заявку</a></div>

            </div>
        </div>

    </div>

</section>


<section class="section-models-slider   container">
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

