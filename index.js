
var listMode = 0; // 0 -> Grid, 1 -> List

$(document).ready(function() {

    // Dynamically changes height of grid elements upon load
    var cw = $('.grid-card').width();
    $('.grid-card').css({'height':cw+'px'});

    // Changes the info height to be twice the height of cw
    var infoHeight = 2 * cw;
    $('.info').css({'height':infoHeight+'px'});

    // Upon load, hide the List view
    $(".list").hide();

    // Changing to List view
    $(".toolbar-list").click(function() {
        if (listMode == 0) {
            listMode = 1;
            $(".grid").hide();
            $(".list").show();
        }
    });

    // Changing to Grid view
    $(".toolbar-grid").click(function() {
        if (listMode == 1) {
            listMode = 0;
            $(".list").hide();
            $(".grid").show();

            // Resize Grid
            var cw = $('.grid-card').width();
            $('.grid-card').css({'height': cw + 'px'});

            // Changes the info height to be twice the height of cw
            var infoHeight = 2 * cw;
            $('.info').css({'height': infoHeight + 'px'});
        }
    });
});

// Dynamically changes height of grid elements upon window resize
$(window).resize(function(){
    if (listMode == 0) {
        var cw = $('.grid-card').width();
        $('.grid-card').css({'height': cw + 'px'});

        // Changes the info height to be twice the height of cw
        var infoHeight = 2 * cw;
        $('.info').css({'height': infoHeight + 'px'});
    }
});
