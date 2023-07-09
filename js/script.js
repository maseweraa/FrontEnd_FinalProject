$(document).ready(function() {
    $.getJSON("json/data.json", function(data) {
        $.each(data, function(index, item) {
            var imageRow = $(".imageRow").eq(index);
            var img = $("<img>").attr("src", "img/" + item.image);
            imageRow.append(img);
        });
    });

    $("#formButton").click(function() {
        $("html, body").animate({
            scrollTop: $("#formContainer").offset().top
        }, 800);
    });
});

$(document).ready(function() {
    var currentUrl = window.location.pathname;

    if (currentUrl.includes("index.html")) {
        $("#homeLink").addClass("active");
    } else if (currentUrl.includes("shop.html")) {
        $("#shopLink").addClass("active");
    }
});
