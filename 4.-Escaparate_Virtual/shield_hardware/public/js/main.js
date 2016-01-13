
$(document).ready(function() {
    $('.parent').click(function() {
        $('.sub-nav').toggleClass('visible');
    });
    $('.parent2').click(function() {
        $('.sub-nav2').toggleClass('visible2');
    });
    $('.parent3').click(function() {
        $('.sub-nav3').toggleClass('visible3');
        $(".sub-nav3 input").focus();
    });
    $('.order-by select').change(function() {
        if($('.order-by select').val() !== "0") {
            $('.no_display').click();
        }
    });
}); 
