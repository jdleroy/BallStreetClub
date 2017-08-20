
$(document).ready(function() {
    var cw = $('.square').width() + 10;
    $('.square').css({
        'height': cw + 'px'
    });

    $(window).resize(function() {
        var cw = $('.square').width() + 10;
        $('.square').css({
            'height': cw + 'px'
        });
    });
});