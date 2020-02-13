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
        <div class="brand__logo">
            <div class="brand__img"><img src="img/logotype_lada.png" alt="Логотип"></div>
            <div class="content__title--type2">LADA</div>
        </div>
        <div class="brand__text">Автомобили LADA у официального дилера «Автоэкспресс»</div>
    </div>
</section>

<section class="car-filter car-filter--brand container">

        <form action="" method="post" name="car-filter">

            <div class="car-filter__wrp">

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


<section class="model__items">


    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_01.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">Granta лифтбек</div>
                    <div class="model__price">Стоимость от <b>404 800 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="" >Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_02.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">Vesta</div>
                    <div class="model__price">Стоимость от <b>648 900 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_03.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">XRAY</div>
                    <div class="model__price">Стоимость от <b>404 800 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_04.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">Largus</div>
                    <div class="model__price">Стоимость от <b>648 900 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_01.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">Kalina</div>
                    <div class="model__price">Стоимость от <b>648 900 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_02.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">Priora</div>
                    <div class="model__price">Стоимость от <b>648 900 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="model__item">
        <div class="model__item-wrp">
            <div class="model__img"><a href="model_page.php"><img src="img/model_02.png" alt="Фото автомобиля"></a></div>
            <div class="model__content">
                <div> <div class="model__brand">LADA</div>
                    <div class="model__model-name">4x4</div>
                    <div class="model__price">Стоимость от <b>648 900 &#x20bd;</b></div>
                </div>
                <div class="model__get-links-wrp">
                    <div class="model__get-phone link-line" data-action="modal_window" data-target="request_call"><a href="">Заказать звонок</a></div>
                    <div class="model__get-request content__link link-line" data-action="modal_window" data-target="make_request">
                        <a href="">Оформить заявку</a>
                        <span class="icon icon-path_right"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>


</section>


<section class="bars__section">

    <div class="bars__row">
        <div class="bar__common bar_third bar--m-right">
            <div class="bock_img-full" data-bock-img--full><img src="img/bar_1-3_03.jpg" alt="Фото автомобиля"></div>
            <div class="bar__content-wrp">
                <div class="bar__content">
                    <h2 class="content__title">Мы дарим вам бонусы</h2>
                    <p class="bar_text">За первую покупку или обращение в сервис</p>
                </div>
                <div class="bar__link"><a href="">Узнать подробнее</a></div>
            </div>
        </div>

        <div class="bar__common bar__two-thirds">
            <div class="bock_img-full" data-bock-img--full><img src="img/bar_2-3_03.jpg" alt="Фото автомобиля"></div>
            <div class="bar__content-wrp">
                <div class="bar__content">
                    <h2 class="content__title">Бонус от нашего<br> партнера</h2>
                    <p class="bar_text">Автошколы «Автостарт»</p>
                </div>
                <div class="bar__link"><a href="">Узнать подробнее</a></div>
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
