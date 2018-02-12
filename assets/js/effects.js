$(function() {
    $(window).on('scroll', function() {
        $('.movimiento-arriba').css('margin-top', $(window).scrollTop() * -.3);
    });
});