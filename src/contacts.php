<?php require_once 'template-parts/page_head.php' ?>
<!-- top main menu -->
<? require_once 'template-parts/header.php' ?>
<main>
<section class="contacts-page container">

    <div class="contacts__col-1">

        <div class="contacts__content">
            <div class="contacts__name">Дилерский центр «Автоэкспресс»</div>
            <div class="contacts__address--big">ул. Калашникова</div>
            <div class="contacts__address--full">
                <span class="icon icon-mark_map"></span>
                <span>г. Иваново, ул. Калашникова, д. 26а</span>
            </div>

            <div class="contacts__wrp">
                <div class="contacts__type">Отдел продаж</div>
                <a href="tel:+74932334444">+7 (4932) 33 44 44</a>
            </div>

            <div class="contacts__wrp">
                <div class="contacts__type">Автосервис</div>
                <a href="tel:+74932335862">+7 (4932) 33 58 62</a>
            </div>

            <div class="contacts__wrp">
                <div class="contacts__type">Горячая линия</div>
                <a href="tel:+79106689280">+7 (910) 668-92-80</a>
            </div>

            <div class="contacts__schedule">
                <div class="schedule">График работы <b>Пн–Вс</b></div>
                <div class="schedule__time">СТО <b>с 08:00 до 20:00</b></div>
                <div class="schedule__time">ОП <b>с 09:00 до 20:00</b></div>
            </div>




        </div>

        <div class="contacts__map-wrp">
            <script src="https://api-maps.yandex.ru/2.1/?apikey=40b8a09d-8389-4a22-a0ac-2e18995eae34&lang=ru_RU"
                    type="text/javascript">
            </script>
            <div id="contacts__map1">
            </div>

            <script>
                ymaps.ready(function () {
                    var myMap = new ymaps.Map("contacts__map1", {
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

        </div>


    </div>




    <div class="contacts__col-2">

        <div class="contacts__content">
            <div class="contacts__name">Дилерский центр «Автоэкспресс»</div>
            <div class="contacts__address--big">ул. Загородная</div>
            <div class="contacts__address--full">
                <span class="icon icon-mark_map"></span>
                <span>г. Иваново, ул. Загородная, д. 22а</span>
            </div>

            <div class="contacts__wrp">
                <div class="contacts__type">Отдел продаж</div>
                <a href="tel:+74932938720">+7 (4932) 938 720</a><br>
                <a href="tel:+74932939292">+7 (4932) 93 92 92</a>
            </div>

            <div class="contacts__wrp">
                <div class="contacts__type">Автосервис</div>
                <a href="tel:+74932938852">+74932938852</a>
            </div>


            <div class="contacts__schedule">
                <div class="schedule">График работы <b>Пн–Вс</b></div>
                <div class="schedule__time">СТО <b>с 08:00 до 20:00</b></div>
                <div class="schedule__time">ОП <b>с 09:00 до 20:00</b></div>
            </div>
        </div>



        <div class="contacts__map-wrp">
         <!--   <script src="https://api-maps.yandex.ru/2.1/?apikey=40b8a09d-8389-4a22-a0ac-2e18995eae34&lang=ru_RU"
                    type="text/javascript">
            </script>-->
            <div id="contacts__map2">
            </div>

            <script>
                ymaps.ready(function () {
                    var myMap = new ymaps.Map("contacts__map2", {
                        center: [57.065721, 40.972573],
                        zoom: 16,
                        controls: []
                    });


                    var myPlacemark = new ymaps.GeoObject({
                        geometry: {
                            type: "Point",
                            coordinates:  [57.065721, 40.972573]
                        },
                        properties: {
                            // Контент метки.
                            hintContent: 'г. Иваново, ул. Калашникова, д. 26а'
                        }
                    });

                    myMap.geoObjects.add(myPlacemark);
                });
            </script>

        </div>

    </div>

</section>

</main>
<!-- footer -->
<?php require_once 'template-parts/footer.php'?>
<?php require_once 'template-parts/privacy_policy.php' ?>
<?php require_once 'template-parts/modal.php' ?>
<?php require_once 'template-parts/page_bottom.php' ?>
