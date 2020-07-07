$(document).ready(function(){
    $('.yith-wcwl-icon.fa.fa-heart-o').addClass('fas fa-heart');
    $('.fas.fa-heart').removeClass('yith-wcwl-icon');

    $('.wpcf7-submit').addClass('btn green-button');

    $(window).scroll(function() {    
        var scroll = $(window).scrollTop();
    
        if (scroll >= 150) {
            $("header").addClass("position-fixed");
        } else {
            $("header").removeClass("position-fixed");
        }
    });
    
   
});