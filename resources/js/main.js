$(function () {
    $('.custom-bars').click(function () {
        $("#sidebar").slideToggle();
        $("#right-area").toggle("slow");
    });
});