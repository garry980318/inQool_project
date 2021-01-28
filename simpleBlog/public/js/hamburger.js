function checkWidth() {
    if ($(window).width() > 900) {
        $(".navbar-nav").show();
    } else {
        $(".navbar-nav").hide();
    }
}

$(window).on("load", checkWidth);
$(window).resize(checkWidth);

// DISPLAY AND HIDE THE HAMBURGER STYLE MENU
$("#hamburger").click(function () {
    if ($(".navbar-nav").is(":visible")) {
        $(".navbar-nav").hide();
    } else {
        $(".navbar-nav").show();
    }
});

// HIDE HAMBURGER STYLE MENU WHEN CLICKED ON ITEM
$(".navbar-nav li a").click(function () {
    if ($(window).width() <= 900) {
        $(".navbar-nav").hide();
    }
});
