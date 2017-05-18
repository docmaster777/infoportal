$(function() {
    $('.nav li a').stop().animate({'marginLeft':'-95px'},2000);

    $('ul').hover(
        function () {
            $('a',$(this)).stop().animate({'marginLeft':'-2px'},200);
        },
        function () {
            $('a',$(this)).stop().animate({'marginLeft':'-85px'},200);
        }
    );
});
