$(document).ready(function() {
    $('.slogan-button').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $('#feedback-block').offset().top
        }, 1000);
    });
});
