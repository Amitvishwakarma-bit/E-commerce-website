import "https://code.jquery.com/jquery-3.4.1.min.js"
$(".crop-img").click(function() {
    $("#bigImage").attr('src',
        $(this).attr('src'));
});