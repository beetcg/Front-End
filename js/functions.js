function mostrar() {
    document.getElementById("sidebar").style.width = "200px";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
}

function menuShow() {
    document.getElementById("sidebar-horizontal").style.height = "500px";
    $("#show").css("display","none");
    $("#hide").css("display","block");
    $("#sidebar-horizontal").css("background-color","#2f2f2e");
}

function menuHide() {
    document.getElementById("sidebar-horizontal").style.height = "0";
    $("#hide").css("display","none");
    $("#show").css("display","block");
    $("#sidebar-horizontal").css("background-color","#fff");
}

function cascade() {
    $("#cascade li").css({
        left: -800,
        position: "relative"
    }).each(function (i) {
        var el = $(this);
        setTimeout(function () {
            el.animate({
                left: 0
            }, 500);
        }, i * 200);
    });

    $("#cascade-horizontal li").css({
        left: -800,
        position: "relative"
    }).each(function (i) {
        var el = $(this);
        setTimeout(function () {
            el.animate({
                left: 0
            }, 500);
        }, i * 200);
    });
}

$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip();
    $('[data-toggle="popover"]').popover();

    $('.tech-list-item').hover(function () {
            $(this).find('#btn-accept').fadeIn('fast').css("display", "flex");
        },
        function () {
            $(this).find('#btn-accept').fadeOut('fast');
        });
    $('.clockpicker').clockpicker({
        twelvehour: true,
        donetext: 'Done'
    });

    $('#demo-input').clockpicker({
        autoclose: true,
        twelvehour: true
    });

    if (something) {
        // Manual operations (after clockpicker is initialized).
        $('#demo-input').clockpicker('show') // Or hide, remove ...
            .clockpicker('toggleView', 'minutes');
    }
});
