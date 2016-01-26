$(document).ready(function(){
    var galleryIntro = $('.gallery-intro');

    setHeight(1, 1, 2);
    setHeight(2, 2, 1);

    function getElement(parentElement, childElement) {
        return '.row-fluid:nth-child(' + parentElement + ') > div:nth-child(' + childElement + ')';
    }

    function setHeight(parentElement, firstChildElement, secondtChildElement) {
        var height = galleryIntro.find(getElement(parentElement, firstChildElement)).innerHeight();
        galleryIntro.find(getElement(parentElement, secondtChildElement)).css({
            height: height,
            visibility: 'visible'
        });
    }

    $('.photoset-grid-lightbox').photosetGrid({
        highresLinks: true,
        rel: 'withhearts-gallery',
        gutter: '2px',

        onComplete: function(){
            $('.photoset-grid-lightbox').attr('style', '');
            $('.photoset-grid-lightbox a').colorbox({
                opacity: 0.85,
                photo: true,
                scalePhotos: true,
                maxHeight:'90%',
                maxWidth:'90%',
                transition: 'none'
            });
        }
    });
});