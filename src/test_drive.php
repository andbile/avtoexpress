<?php require_once 'template-parts/page_head.php' ?>
<!-- top main menu -->
<? require_once 'template-parts/header.php' ?>
<main>
    <section class="section-test-drive">

        <div class="test-drive__col-1 container">
            <div class="content__title">Запись на тест-драйв</div>
            <div class="test-drive__text">Расскажем и покажем все об автомобиле</div>


            <div class="form-test-drive-wrp">

                <form action="" method="post" name="test-drive" class="form-test-drive">

                    <div class="form-test-drive__select-wrp">

                        <div class="form-test-drive__select-wrp-1">
                            <div class='form-test-drive__select form-test-drive__select--address'>
                                <label for="select-shop">Выберите автоцентр</label>
                                <select id="select-shop" name="select-shop">
                                    <option value="s1">«Автоэкспресс», ул. Калашникова, д. 26a</option>
                                    <option value="s2">«Автоэкспресс», ул. Загородная, д. 22а</option>
                                </select>
                            </div>

                            <div class='form-test-drive__select form-test-drive__select--car'>
                                <label for="select-car">Автомобиль</label>
                                <select id="select-car" name="select-car">
                                    <option value="c1">LADA Granta Седан (МКПП)</option>
                                    <option value="c2">Лифтбек Норма Платина</option>
                                    <option value="c3">Лифтбек Норма Платина</option>
                                    <option value="c4">Лифтбек Норма Платина</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-test-drive__select-wrp-2">
                            <div class='form-test-drive__select' id="test-drive-calendar">
                                <label for="select-date">Удобный день</label>
                                <input type="text" id="select-date" name="test-drive-calendar">
                            </div>


                            <div class='form-test-drive__select form-test-drive__select--time'>
                                <label for="select-time">Удобное время</label>
                                <select id="select-time" name="select-time" >
                                    <option value="time-8-1">8:00-08:30</option>
                                    <option value="time-8-2">8:30-09:00</option>
                                    <option value="time-8-1">9:00-09:30</option>
                                    <option value="time-8-2">9:30-10:00</option>
                                    <option value="time-8-1">10:00-10:30</option>
                                    <option value="time-8-2">10:30-11:00</option>
                                    <option value="time-8-1">11:00-11:30</option>
                                    <option value="time-8-2">11:30-12:00</option>
                                    <option value="time-8-1">12:00-12:30</option>
                                    <option value="time-8-2">12:30-13:00</option>
                                    <option value="time-8-1">13:00-13:30</option>
                                    <option value="time-8-2">13:30-14:00</option>
                                    <option value="time-8-1">14:00-14:30</option>
                                    <option value="time-8-2">14:30-15:00</option>
                                    <option value="time-8-1">15:00-15:30</option>
                                    <option value="time-8-2">15:30-16:00</option>
                                    <option value="time-8-1">16:00-16:30</option>
                                    <option value="time-8-2">16:30-17:00</option>
                                    <option value="time-8-1">17:00-17:30</option>
                                    <option value="time-8-2">17:30-18:00</option>
                                </select>
                            </div>
                        </div>





                    </div>


                    <div class="form-test-drive__input-wrp">

                        <div class="title">Контактные данные</div>


                        <div class="form-test-drive__item">
                            <label><input type="text" name="full-name" placeholder="ФИО" required></label>
                        </div>


                        <div class="form-test-drive__item">
                            <label><input type="tel" name="tel" placeholder="Телефон" required data-tel></label>
                        </div>

                        <div class="form-test-drive__item">
                            <label><input type="email" name="mail" placeholder="Электронная почта"></label>
                        </div>


                        <div class="form-test-drive__item form-test-drive__item--checkbox">
                            <input type="checkbox" name="per-data" value="yes" id="per-data" required>
                            <label for="per-data">Соглашаюсь с «обработкой персональнных данных»</label>
                        </div>

                        <input type="submit" class="btn btn--orange" name="send_req" value="Отправить заявку">



                    </div>



                </form>

            </div>

        </div>



        <div class="test-drive__img bock_img-full" data-bock-img--full><img src="img/test_drive_01.jpg" alt="Фото автомобиля"></div>









    </section>


</main>
<!-- footer -->
<?php require_once 'template-parts/footer.php'?>
<?php require_once 'template-parts/privacy_policy.php' ?>
<?php require_once 'template-parts/page_bottom.php' ?>
