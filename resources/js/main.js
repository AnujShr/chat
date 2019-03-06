$(function () {
    $('.custom-bars').click(function () {
        $("#sidebar").slideToggle(500, function () {
            $("#right-area").toggle("slow");
        });
    });
});