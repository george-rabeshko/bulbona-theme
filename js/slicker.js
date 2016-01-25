$(document).ready(function(){
    // about
    var missionCarousel = $('.mission-carousel');
    missionCarousel.slick({
        arrows: false,
        autoplay: true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1
    });

    missionCarousel.css('display', 'block');

    // front-page
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

    slicker.css({
        height: slickerHeight,
        visibility: 'visible'
    });
});