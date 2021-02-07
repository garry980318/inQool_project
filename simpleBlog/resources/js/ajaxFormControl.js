$("#create-btn").click(function (event) {
    event.preventDefault();

    let title = $("input[name=title]").val();
    let categories = $("input[name=categories]").val();
    let content = $("textarea[name=content]").val();
    let _token = $('meta[name="csrf-token"]').attr("content");

    $.ajax({
        url: "/store",
        type: "POST",
        data: {
            title: title,
            categories: categories,
            content: content,
            _token: _token,
        },
        dataType: "json",
        timeout: 9000,
        success: function (response) {
            if (response) {
                $("#success-alert strong").text(response.success);
                $("#success-alert").show(300);
                $("#article-form")[0].reset();
            }
        },
        error: function (response) {
            var errors = response.responseJSON.errors;
            $.each(errors, function (key, value) {
                $("#" + key).addClass("is-invalid");
                $("#" + key + "-error strong").text(value[0]);
                $("#" + key + "-error").show();
            });
        },
    });
});

function hideAlert() {
    $("#success-alert").hide(300);
    $("#success-alert strong").text("");
}

function hideErrors() {
    $("#title").removeClass("is-invalid");
    $("#categories").removeClass("is-invalid");
    $("#content").removeClass("is-invalid");

    $("#title-error").hide();
    $("#categories-error").hide();
    $("#content-error").hide();

    $("#title-error strong").text("");
    $("#categories-error strong").text("");
    $("#content-error strong").text("");
}

$(window).on("load", hideAlert);
$(window).on("load", hideErrors);

$(".btn-close").click(hideAlert);

$("#create-btn").click(hideAlert);
$("#create-btn").click(hideErrors);
