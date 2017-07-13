$(document).ready(function(e) {

/* Слайдер jcarousel */
    $('.jcarousel')
    .jcarousel({
// Core configuration goes here
    })
    .jcarouselAutoscroll({
        interval: 5000,
        target: '+=1',
        autostart: true
    });
}); // конец ready