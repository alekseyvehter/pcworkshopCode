// document.addEventListener('DOMContentLoaded', function () {
//     var carousel = document.querySelector('.multiple-card-slider .carousel-inner');
//     var cardWidth = document.querySelector('.multiple-card-slider .carousel-item').offsetWidth;
//     var scrollPosition = 0;
//
//     document.querySelector('.carousel-control-prev').addEventListener('click', function () {
//         if (scrollPosition > 0) {
//             console.log('prev');
//             scrollPosition -= cardWidth;
//             carousel.scrollTo({
//                 left: scrollPosition,
//                 behavior: 'smooth'
//             });
//         }
//     });
//
//     document.querySelector('.carousel-control-next').addEventListener('click', function () {
//         var maxScroll = carousel.scrollWidth - carousel.clientWidth;
//         if (scrollPosition < maxScroll) {
//             console.log('next');
//             scrollPosition += cardWidth;
//             carousel.scrollTo({
//                 left: scrollPosition,
//                 behavior: 'smooth'
//             });
//         }
//     });
// });

$(document).ready(function() {
    var carousel = $('.multiple-card-slider .carousel-inner');
    var cardWidth = $('.multiple-card-slider .carousel-item').outerWidth();
    var scrollPosition = 0;
    var maxScroll = carousel[0].scrollWidth - carousel.outerWidth();

    $('.carousel-control-prev').click(function() {
        scrollPosition -= cardWidth;
        if (scrollPosition < 0) {
            scrollPosition = maxScroll;
            carousel.animate({
                scrollLeft: scrollPosition
            }, 'slow');
        } else {
            carousel.animate({
                scrollLeft: scrollPosition
            }, 'slow');
        }
    });

    $('.carousel-control-next').click(function() {
        scrollPosition += cardWidth;
        if (scrollPosition > maxScroll) {
            scrollPosition = 0;
            carousel.animate({
                scrollLeft: scrollPosition
            }, 'slow');
        } else {
            carousel.animate({
                scrollLeft: scrollPosition
            }, 'slow');
        }
    });
});




