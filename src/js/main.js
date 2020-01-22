jQuery(document).ready(function($) {
    // main-menu
    showMainMenu();

    // появление модального окна в слайдере (index.php) при наведении на название марки машины
    showPopupWindowInMainSlider();

    // разворачивание списка
    expandSingleList ('[data-single-expandingList-open]', '[data-single-list-open-btn]');

    // разворачивание списка vacancies.php
    expandingList();

    // модальное окно
    modal();

    //  маска ввода в полях ввода телефона
    $('[data-tel]').mask('+7 (000) 000-00-00');

    // слайдер фото зданий в index.html
    $('[data-slider-building]').slick({
        speed: 1000,
        /* autoplay: true,
         autoplaySpeed: 4000,*/
        arrows:false,
        dots:true,
        dotsClass: 'slick-dots slick-dots--type1'
    });

    // слайдер фото зданий в model_page.html
    $('[data-slider-model-page]').slick({
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 4000,
        dots:false,
        prevArrow: $(''),
        nextArrow: $('.mp-slider__btn .slick-next')
    });


    // about.php
    $('[data-fancybox-img]').fancybox(
        {
            buttons: ["close"],
            clickSlide: 'close',
            clickContent : "close",
            clickOutside: "close"
        });

    // select
    $('select').niceSelect();

    // календарь
    calendarInput();


    // слайдер сертификаты // информация
    var certSlider = new Slider('[data-slider-certificates]');
    certSlider.run();

    // слайдер информация
    var informationSlider = new Slider('[data-slider-information]');
    informationSlider.run();


    // адаптивное изображение img
    $(".bock_img").each(function(){
        var adapBlock = $(this);
        var adapImg = adapBlock.find("img");
        if(adapBlock.height() > adapImg.height()){
            adapImg.css("max-width", "none");
        }
        else if(adapBlock.width() > adapImg.width()){
            adapImg.css("max-height", "none");
        }
    });

    // адаптивное изображение, которое должно заполнить абсолютно всю ширину и высоту блока
    fixResponsiveImg();
    var isEventResizeImg = false;
    $(window).resize(function() {

        setTimeout(function () {
            if(!isEventResizeImg){
                fixResponsiveImg();
                isEventResizeImg = true;
            }

        },500);
        isEventResizeImg = false;
    });

    // Инициализация маски ввода телефона
    $(function(){
        $('input[name="tel"]').mask('+7 (999) 999-99-99');
    });


});
// -- END -- jQuery(document).ready)



function modal() {

    // модальные окна
    var $modalWindows = $('.modal-window');

    // коллекция ссылок при нажатии на которые открываются модальные окна
    var $modalButtonLinks = $('[data-action="modal_window"]');

    // подключение обработчика событий к кнопкам
    $modalButtonLinks.on('click', function (event) {
        event.preventDefault();

        var targetModal = $(this).data('target');

        var $currentModalWindow = getCurrentModalWindow(targetModal);

        showModalWindow($currentModalWindow);

        var $btnClose = $currentModalWindow.find('.modal-window__btn-close');

        $btnClose.on('click', function () {
            closeWindow($currentModalWindow);
        });
    });

    function getCurrentModalWindow(dataAttr) {
        if(dataAttr){
            var selector = '[data-target="' + dataAttr +  '"]';
            return  $modalWindows.filter(selector);
        }
    }
    
    function showModalWindow($modalWindow) {

        $modalWindow.addClass("modal-window--show");

        setTimeout(function () {
            $modalWindow.addClass("modal-window--opacity");
        },500);
    }

    function closeWindow($modalWindow) {
        $modalWindow.removeClass("modal-window--opacity");

        setTimeout(function () {
            $modalWindow.removeClass('modal-window--show');
        },400);
    }
}



// адаптивное изображение, которое должно заполнить абсолютно всю ширину и высоту блока
function fixResponsiveImg() {

    // сброс настроек
    function reset($img){
        $img.removeAttr("width")
            .removeAttr("height")
            .css({ width: "", height: "" })
            .css({ maxWidth: "100%", maxHeight: "100%" });
    }

    $("[data-bock-img--full]").each(function(){
            var $adapBlock = $(this);
            var $adapImg = $adapBlock.find("img");

            reset($adapImg);

            // ширина и высота фото из атрибутов img
            var imgWidth = $adapImg.width();
            var imgHeight = $adapImg.height();
            // соотношение ширины к высоты
            var ratio = imgWidth / imgHeight;

            var newWidth, newHeight;

            if($adapBlock.width() > $adapImg.width()){

                $adapImg.css({width: "100%", height: ""});

                // получаем новую высоту после увеличения ширины
                newHeight = $adapBlock.width() / ratio;
                $adapImg.css({height: (newHeight + 'px'), maxHeight: "none"});
            }

            if($adapBlock.height() > $adapImg.height()){
                $adapImg.css("height", "100%");
                // получаем новую ширину после увеличения высоты
                newWidth = $adapBlock.height() * ratio;
                $adapImg.css("width", (newWidth + 'px'))
                        .css("max-width", 'none');
            }
        });
}

// slider
function Slider(dataAttr) {
    this.$parentSlider = $(dataAttr);
    var self = this;

    this.run = function () {
        if(!self.$parentSlider.is(dataAttr)) return;

        this.initialSliders();

        // расстановка кнопок
        this.setBtnPosition($btnRight);
        this.setBtnPosition($btnLeft);
    };

    if(!this.$parentSlider.is(dataAttr)) return;


    // --- слайды ---
    // коллекция слайдов
    var $slides = this.$parentSlider.find('.slide-item');
    // ширина видимой часть слайдера
    var visibleWidth = this.$parentSlider.innerWidth();
    // ширина слайда
    var slideWidth = $slides.filter(':first').innerWidth();
    // первый слайд в слайдере, который будем двигать
    var $firstSlide = this.$parentSlider.find('.slide-item').filter(':first');


    // --- кнопки ---
    // родитель навигационных кнопок
    var $parentBtn = this.$parentSlider.find('.slider-btn-wrp');
    // кнопка
    var $btnRight = $parentBtn.find('[data-next]');
    var $btnLeft = $parentBtn.find('[data-prev]');
    // --- end кнопки ---


    // --- смена слайдов ---
    // текущий сдвиг
    var currentMargin = 0;
    // счётчик прокрученных слайдов
    var countSliders = 0;

    // смена слайдов
    $parentBtn.on('click', show);

    // при сресайзе, сбрасываем все настройки по умолчанию
    var isEventResize = false;
    $(window).resize(function() {

        setTimeout(function () {
            if(!isEventResize){
                reset();
                isEventResize = true;
            }

        },500);
        isEventResize = false;
    });

    function reset() {
        // ширина видимой часть слайдера
        visibleWidth = self.$parentSlider.innerWidth();
        // ширина слайда
        slideWidth = $slides.filter(':first').innerWidth();

        currentMargin = 0;
        // счётчик прокрученных слайдов
        countSliders = 0;

        // перематываем слайды на начало
        TweenMax.to($firstSlide, 0.5, {marginLeft: 0, onComplete:function () {

                // заново инициируем слайды
                self.initialSliders();

                // расстановка кнопок
                self.setBtnPosition($btnRight);
                $btnRight.css('display', '');
                self.setBtnPosition($btnLeft);
                $btnLeft.css('display', 'none');
            }});

        // удаляем классы "slide-item--opacity"
        var $sliders = self.$parentSlider.find('.slide-item');
        $sliders.each(function (index) {
           $(this).removeClass('slide-item--opacity');

           if($(this).css('opacity') === '1'){
               $(this).css('opacity', '');
           }
        });

    }


    // смена слайдов
    function show (event) {
        var $target = $(event.target);
        if(!$target.is('.slider-btn')) return;

        var shift = 0;

        if($target.is('[data-next]')){

            // проверка наличия слайдов, которые не влезли в видимую область
            var $unVisibleSliders = self.$parentSlider.find('.slide-item--opacity');
            if($unVisibleSliders.length > 0){

                // вычисление необходимого сдвига
                shift = currentMargin - slideWidth;
                currentMargin = shift;

                // поиск текущего невидимого слайда
                var $currentUnVisibleSliders = $unVisibleSliders.filter(':first');

                // двигаем слайды
                TweenMax.to($currentUnVisibleSliders, 0.5, {opacity: 1, onStart:function () {
                        $currentUnVisibleSliders.removeClass('slide-item--opacity');
                        // прячем правую кнопку, если блоков которые не влазят больше не осталось
                        // сравниваем с 1, так как на последнем событии присутствовал один элемент
                        if($unVisibleSliders.length === 1){
                            $btnRight.css('display', 'none');
                        }
                    }});

                TweenMax.to($firstSlide, 0.5, {marginLeft: shift});

                countSliders++;

                // показываем левую кнопку
                $btnLeft.css('display', 'inline-block');
            }
        }

        if($target.is('[data-prev]')){

            // проверка количества прокрученных слайдов, которые не влезли в видимую область
            if(countSliders > 0){

                // вычисление необходимого сдвига
                shift = currentMargin + slideWidth;
                currentMargin = shift;

                // поиск последнего видимого слайда, который нужно зарисовать
                var $lastVisibleSlide =  self.$parentSlider.find('.slide-item').not('.slide-item--opacity').filter(':last');

                TweenMax.to($lastVisibleSlide, 0.5, {opacity: 0.2, onStart:function () {
                        $lastVisibleSlide.addClass('slide-item--opacity');
                        // прячем правую кнопку, сравниваем с 1, так как расчёт количества одет ниже по коду
                        if(countSliders === 0){
                            $btnLeft.css('display', 'none');
                        }

                    }});

                TweenMax.to($firstSlide, 0.5, {marginLeft: shift});

                countSliders--;

                // показываем левую кнопку
                $btnRight.css('display', 'inline-block');
            }
        }
    }

    this.setBtnPosition = function ($btnNode) {

        // показываем правую кнопку на последнем видимом слайде
        if($btnNode.is('[data-next]')){
            var $lastVisibleSlide =  $slides.not('.slide-item--opacity').filter(':last');
            // координаты последнего слайда

            var rightPositionLastVisibleSlide;
            // если все не видимые слайды (когда, ширина больше ширины окна)
            // TODO исправить - если ширина слайда больше ширины окна то все слайды делать видимыми
            if($lastVisibleSlide.length === 0) {
                rightPositionLastVisibleSlide = 0;
            }else rightPositionLastVisibleSlide = $lastVisibleSlide.position().left + slideWidth;

            // координаты сдвига кнопки
            var rightBtnPosition =  visibleWidth - rightPositionLastVisibleSlide - $btnNode.innerWidth() / 2;

            if(rightBtnPosition < 0) rightBtnPosition = 0;
            // если меньше двух слайдов
            if($slides.not('.slide-item--opacity').length < 2){
                rightBtnPosition = $(window).width()/2 - $btnNode.innerWidth()*2 + 10;
            }

            $btnNode.css('right', rightBtnPosition);
        }

        // показываем левую кнопку на первом видимом слайде
        if($btnNode.is('[data-prev]')){
            var leftBntPosition = slideWidth - $btnNode.innerWidth() / 2;

            if($slides.not('.slide-item--opacity').length < 2){
                leftBntPosition = $(window).width()/2 - $btnNode.innerWidth() + 10;
            }

            $btnNode.css('left', leftBntPosition);
        }
    };

    // первоначальное определение видимых/не видимых слайдов и расстановка классов
    this.initialSliders = function () {
        // количество слайдов, которые полностью входят в видимую часть сладера
        var numberVisibleSlides = Math.floor(visibleWidth / slideWidth);

        // расстановка классов для слайдеров которые не влазят в видимую часть
        for(var i = numberVisibleSlides; i < $slides.length; i++){
            $slides.eq(i).addClass('slide-item--opacity');
        }
    };
}



// появление модального окна в слайдере (index.php) при наведении на название марки машины
function showPopupWindowInMainSlider() {

    // слайдер фото зданий в index.html
    $('[data-main-slider]').slick({
        speed: 1000,
        arrows:false,
        dots:true,
        dotsClass: 'slick-dots slick-dots--type1'
    });

    // сбрасываем стили при прокрутке слайда
    $('[data-main-slider]').on('afterChange', function (event, slick, currentSlide, nextSlide) {
        resetStyles();
    });


    // родительский узел ссылок
    var $btnList =  $('[data-btn-hover-list]');

    // текущие активные узлы/слайды
    var currentState = {
        // нажатая кнопка
        btn: $(),
        // родительский элемент нажатой кнопки
        parentBtn: $(),
        // узел с фото машины над кнопкой
        imgBtn: $(),
        // родительский узел слайда
        parentSlide: $(),
        // контент слайда за заднем фоне
        slideContent: $(),
        // фото родительского узла слайда
        slideImg: $(),
        // обёртки модального окна в текущем слайде
        modalWindowsWrp: $(),
        // текущее модальное окно
        currentWindow: $()
    };


    $btnList.on('click mouseover',function (event) {

        // TODO если повторно навестись на ту же кнопку идет лишняе мегание
        var $target = $(event.target);
        if(!$target.is('span.list-btn')) return;

        // сбрасываем стили если нажата другая кнопка
        resetStyles();

        currentState.btn = $target;

        // родительский элемент кнопки, тег li
        var $parentBtn = $target.parent('.main-slider__list-item');
        currentState.parentBtn = $parentBtn;

        // узел с фото на кнопке
        currentState.imgBtn = currentState.parentBtn.find('.car__img');

        // родительский узел слайда
        currentState.parentSlide = $parentBtn.closest('.main-slider__item');


        // отображаем фото машины
        showBtnImg();

        // показываем окно
        showWindow($parentBtn);

    });

    function showWindow($parentLiNode, $modalWindows) {

        // получаем id кнопки
        var id = currentState.parentBtn.data('hoverSlideId');

        // поиск и отображаем обёртки модального окна
        var $modalWindowsWrp = currentState.parentSlide.find('[data-popup-items]');
        $modalWindowsWrp.addClass('active');
        currentState.modalWindowsWrp = $modalWindowsWrp;

        // получаем и отображаем нужное модальное окно
        var $currentWindow = currentState.modalWindowsWrp.find('[data-slide-id="' + id + '"]');
        $currentWindow.addClass('active');
        TweenMax.to($currentWindow, 0.5, {delay:0, backgroundColor: 'rgba(19,19,20,0.5)'});
        currentState.currentWindow = $currentWindow;

        // прячем контент слайда за заднем фоне
        var $slideContent = currentState.parentSlide.find('.main-slider__content');
        $slideContent.addClass('hidden');
        currentState.slideContent = $slideContent;

        // эффект blur на фото слайда
        var $slideImg = currentState.parentSlide.find('.main-slider__img');
        $slideImg.addClass('blur');
        currentState.slideImg = $slideImg;

        // узел переключения слайдов
        // TODO неизвесно как выходить на просмотр слайдов
        var slideControls = currentState.parentSlide.find('.slick-dots--type1');
        slideControls.css('display', 'none');

    }
    
    // прячем все ранее показанное
    function resetStyles() {

        // сбрасываем стили изображений машин
        if(currentState.imgBtn.is('.car__img')){
            currentState.imgBtn.removeClass('active');
            currentState.imgBtn.css('opacity', '0');
        }

        // TODO прятать обертку при закрытии модальных окно или выходе за пределы экрана, надо предусмотреть выход на мобилках
        //

        // сбрасываем стили в обертки и модального окна
        if(currentState.modalWindowsWrp.is('.active')){
            currentState.modalWindowsWrp.removeClass('active');
        }

        if(currentState.currentWindow.is('.active')){
            currentState.currentWindow.removeClass('active');
            currentState.currentWindow.css('background-color', 'rgba(19,19,20,0)');
        }

        // возвращаем назад контент слайда
        if(currentState.slideContent.is('.hidden')){
            currentState.slideContent.removeClass('hidden');
        }

        if(currentState.slideImg.is('.blur')){
            currentState.slideImg.removeClass('blur');
        }
    }

    // отображаем фото машины
    function showBtnImg() {
        currentState.imgBtn.addClass('active');

        // вызваниваем по центру фото относительно нажатой кнопки
        //imageAlign();

        // анимация появления
        TweenMax.to(currentState.imgBtn, 0.4, {delay:0.1, opacity: 1});
    }

    // вызваниваем по центру фото относительно нажатой кнопки
    function imageAlign() {
        var imgWidth = currentState.imgBtn.innerWidth();
        var btnWidth = currentState.btn.innerWidth();
        var shift = 0;

        if(imgWidth > btnWidth){
            shift = '-' +  ((imgWidth - btnWidth) / 2) + 'px';
        }

        if(imgWidth < btnWidth){
            shift = ((btnWidth - imgWidth) / 2) + 'px';
        }

        currentState.imgBtn.css('left', shift);
    }
}

// main-menu
function showMainMenu(){
    // кнопка
    var $btn = $('[data-popup-btn]');
    // обёртка меню
    var $parentMenu = $('.main-menu');
    // основное меню
    var $menu = $('[data-main-menu]');
    // высота меню
    var menuHeight = $menu.innerHeight() - 1;
    // установка высоты главному меню
    $parentMenu.innerHeight(menuHeight);
    // подменю
    var $submenu = $('[data-main-submenu]');

    // при скроле двигаем меню
    $(window).scroll(function(){

        // отключением движение меню за склором на мобилках

        if($(window).width() > '769'){

            var scrollTop = $(window).scrollTop();
            if (scrollTop > 1){
                $menu.addClass("fixed");
            } else if(scrollTop <= 1) {
                $menu.removeClass("fixed");
            }

        }else if($(window).width() <= '769'){
            $menu.removeClass("fixed");
        }

    });

    // показываем выпадающее меню
    $btn.on('click', function (e) {
        $(this).toggleClass('active');

        if($btn.hasClass('active')){
            $submenu.addClass('active');
            var height = menuHeight + 'px';
            TweenMax.to($submenu, 1, {delay:0.3, top: height, opacity: 1});
        }else{
            TweenMax.to($submenu, 1, {delay:0.3, top: '-1000px', opacity: 0});
        }
    });


    // кнопка поиска
    $('[data-btn-search]').on('click', function (e) {
        e.preventDefault();

        $(".input").toggleClass("active");
        $(".main-menu__search").toggleClass("active");
        $(this).toggleClass('active');
    });
}

// календарь test_drive.php
function calendarInput(){
    var dateRangePickerOptions = {
        singleDatePicker: true,
        showDropdowns: true,
        "locale": {
            "format": "MM/DD/YYYY",
            "separator": " - ",
            "applyLabel": "Применить",
            "cancelLabel": "Отмена",
            "fromLabel": "От",
            "toLabel": "До",
            "customRangeLabel": "Свой",
            "daysOfWeek": [
                "Вс",
                "Пн",
                "Вт",
                "Ср",
                "Чт",
                "Пт",
                "Сб"
            ],
            "monthNames": [
                "Январь",
                "Февраль",
                "Март",
                "Апрель",
                "Май",
                "Июнь",
                "Июль",
                "Август",
                "Сентябрь",
                "Октябрь",
                "Ноябрь",
                "Декабрь"
            ],
            "firstDay": 1
        }
    };

    if(document.getElementById('test-drive-calendar')){
       $('#test-drive-calendar input[name="test-drive-calendar"]').daterangepicker(dateRangePickerOptions);
    }
}

// список vacancies.php
function expandingList() {

    var listNode = document.querySelector('[data-expanding-list]');
    if(!listNode) return;

    listNode.addEventListener('click', showList);

    function showList() {
        var target = event.target;
        var listItemNode = target.parentElement;
        console.log(listItemNode);

        if(!listItemNode.classList.contains('list__item')) return;
        listItemNode.classList.toggle('list__item--current');

        if(listItemNode.getAttribute('data-is-show') === 'false'){
            listItemNode.setAttribute('data-is-show', 'true');
        }else if(listItemNode.getAttribute('data-is-show') === 'true'){
            listItemNode.setAttribute('data-is-show', 'false');
            resetStiles(listItemNode);
        }
    }

    // сбрасываем стили 'list__item--current' у родителя и потомков
    function resetStiles(node) {
        var currentList = node.querySelectorAll('.list__item--current');

        for(var i = 0; i < currentList.length; i++){
            if(currentList[i].classList.contains('list__item--current')){
                currentList[i].classList.remove('list__item--current');
            }
        }
    }
}

// разворачивание списка
function expandSingleList(selectorList, selectorBtn){

    var $btn = $(selectorBtn);
    var $list = $(selectorList);

    $btn.on('click', showList);

    function showList(event) {
        event.preventDefault();
        var $target = $(event.target);

        console.log($target);
        console.log($list);

        $btn.toggleClass('active');
        $list.toggleClass('active');
    }

}
