

$(function () {
    $('.slider').slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: '',
        nextArrow: '',
        autoplay: true,
        autoplaySpeed: 3000,
    });
});

$('.dropbtn').on('click touch', function (){
    console.log('yes')
    if ($('.links__item').hasClass("active__menu")){
        $('.links__item').css('display', 'none').removeClass('active__menu')
        $('.index__logo').css('display', 'block')
        $('.dropbtn').css('background-color', 'white')
        console.log('has class')
    } else{
        $('.links__item').addClass("active__menu").css('display', 'block')

    }
})