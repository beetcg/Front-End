function mostrar() {
    document.getElementById("sidebar").style.width = "300px";
}

function ocultar() {
    document.getElementById("sidebar").style.width = "0";
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
}