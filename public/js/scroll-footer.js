$(document).ready(function() {
    // Прокрутка страницы вверх при нажатии на кнопку "Наверх"
    $('.footer-btn').click(function() {
        $('html, body').animate({scrollTop: 0}, 'slow');
    });
});
