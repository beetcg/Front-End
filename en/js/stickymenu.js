$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        var h = $('#navmenu-light').height();
        if (scroll > h ) {

            $("#navmenu-light").css({ 'background-color' : '#232322' });
            $(".dropdown-item").css({ 'color' : '#fff' });
            $(".dropdown-dark").css({ 'background-color' : '#232322', 'border' : 'none' });
        }

        else{
            $("#navmenu-light").css({ 'background-color' : 'transparent' });
            $(".dropdown-item").css({ 'color' : '#212529' });
            $(".dropdown-dark").css({ 'background-color' : '#fff', 'border' : '1px solid rgba(0, 0, 0, 0.15)' });
        }
    })
})