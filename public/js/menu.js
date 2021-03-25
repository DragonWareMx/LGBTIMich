var ancho;
jQuery('document').ready(function ($) {
    var menuD = $('.menu-desktop'),
        menuP = $('.menu-phone');
    ancho = $(window).width();
    if (ancho < 800) {
        menuD.addClass('hide');
        menuP.removeClass('hide');
    }
    else {
        menuD.removeClass('hide');
        menuP.addClass('hide');
    }
    $(window).resize(function () {
        ancho = $(window).width();
        if (ancho < 800) {
            menuD.addClass('hide');
            menuP.removeClass('hide');
        }
        else {
            menuD.removeClass('hide');
            menuP.addClass('hide');
        }
    });
});