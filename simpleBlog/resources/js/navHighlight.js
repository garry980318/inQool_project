function checkRoute() {
    console.log($(location).attr("pathname"));
    if ($(location).attr("pathname") == "/articles") {
        $("#new-article").removeClass("active");
        $("#articles").addClass("active");
    } else {
        $("#new-article").addClass("active");
        $("#articles").removeClass("active");
    }
}

$(window).on("load", checkRoute);
