$(document).ready(function(){
    var slicker = $('.slicker');
    var slickerHeight = $(window).height() - $('.navbar-custom').outerHeight();

    slicker.slick({
        autoplay: true,
        autoplaySpeed: 4500,
        focusOnSelect: true,
        dots: true,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });

    slicker.css('height', slickerHeight);
});