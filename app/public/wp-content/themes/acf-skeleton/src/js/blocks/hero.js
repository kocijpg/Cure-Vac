import 'slick-carousel';

$(function () {
    heroSlides();
});

function heroSlides() {
    var slideElements = $('.background-slides');

    slideElements.slick({
        autoplay: true,
        pauseOnHover: false,
        rows: '0',
        dots: false,
        arrows: false,
        infinite: false,
        speed: 300, 
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
    });   
}