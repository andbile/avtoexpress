jQuery(document).ready(function() {

    // menu
    showMainMenu();

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

        // при склоре двигаем меню
        $(window).scroll(function(){
            var scrollTop = $(window).scrollTop();
            if (scrollTop > 1){
                $menu.addClass("fixed");
           } else if(scrollTop <= 1) {
                $menu.removeClass("fixed");
            }
        });

        // показываем выпадающе меню
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
        $('.main-menu__search-icon').on('click', function (e) {
            e.preventDefault();
            console.log($(this));

            $(".input").toggleClass("active");
            $(".main-menu__search").toggleClass("active");
            $(this).toggleClass('active');
        });
    }






    // слайдер в index.html
    $('[data-main-slider]').slick({
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 4000,
        arrows:false,
        dots:true,
        dotsClass: 'slick-dots slick-dots--type1'
    });

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
