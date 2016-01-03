$(document).ready(function () {

    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });


    $('.img').on('click', function () {
        var src = $(this).attr('src');
        $('.main-img img').attr('src',src);
    })
});