// Author: Radoslav Grenčík, xgrenc00@stud.fit.vutbr.cz

function checkWidth() {
    if ($(window).width() > 800) {
        $(".navbar-nav").height("100%");
        $(".navbar-nav li").show();
    } else {
        $(".navbar-nav").height(0);
        $(".navbar-nav li").hide();
    }
}

$(window).on("load", checkWidth);
$(window).resize(checkWidth);

// DISPLAY AND HIDE THE HAMBURGER STYLE MENU
$("#hamburger").click(function () {
    if ($(".navbar-nav li").is(":visible")) {
        $(".navbar-nav").height(0);
        $(".navbar-nav li").hide();
    } else {
        $(".navbar-nav").height($(".navbar-nav li").height() * 2);
        $(".navbar-nav li").show();
    }
});

// HIDE HAMBURGER STYLE MENU WHEN CLICKED ON ITEM
$(".navbar-nav li a").click(function () {
    if ($(window).width() <= 800) {
        $(".navbar-nav").height(0);
        $(".navbar-nav li").hide();
    }
});
