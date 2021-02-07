function checkWidth() {
    if ($(window).width() > 900) {
        $("#links").show();
    }
}

$(window).resize(checkWidth);

// DISPLAY AND HIDE THE HAMBURGER STYLE MENU
$("#hamburger").click(function () {
    if ($("#links").is(":visible")) {
        $("#links").hide(300);
    } else {
        $("#links").show(300);
    }
});

// HIDE HAMBURGER STYLE MENU WHEN CLICKED ON ITEM
$("nav ul li a").click(function () {
    if ($(window).width() <= 900) {
        $("#links").hide(300);
    }
});
