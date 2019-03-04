$(function () {

    const $file = $('#file');
    $file.change(function (e) {
        const $imageName = e.target.files[0].name;
        $('#file-label').html($imageName);
    })
});