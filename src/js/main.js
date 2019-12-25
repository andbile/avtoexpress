jQuery(document).ready(function() {
    // main-menu
    showMainMenu();

    // появление модального окна в слайдере (index.php) при наведении на название марки машины
    showPopupWindowInMainSlider();


    // слайдер фото зданий в index.html
    $('[data-slider-building]').slick({
        speed: 1000,
        /* autoplay: true,
         autoplaySpeed: 4000,*/
        arrows:false,
        dots:true,
        dotsClass: 'slick-dots slick-dots--type1'
    });

    // select
    $('select').niceSelect();

});


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
        imageAlign();

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
    var menuHeight = $menu.innerHeight();
    // установка высоты главному меню
    $parentMenu.innerHeight(menuHeight);
    // подменю
    var $submenu = $('[data-main-submenu]');

    // при скроле двигаем меню
    $(window).scroll(function(){
        var scrollTop = $(window).scrollTop();
        if (scrollTop > 1){
            $menu.addClass("fixed");
        } else if(scrollTop <= 1) {
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
