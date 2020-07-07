$(document).ready(function(){
  var scrollTop = $(".go-top");

  $(window).scroll(function() {
    // declare variable
    var topPos = $(this).scrollTop();

    // if user scrolls down - show scroll to top button
    if (topPos > 100) {
      $(scrollTop).css("opacity", "1");
    } else {
      $(scrollTop).css("opacity", "0");
    }

    if (topPos > 50) {
      $(".search-div").css("margin-top", "-24px");
      $(".all-icon-holder").addClass("all-icon-holder-scroll");
      $(".log-div").addClass("log-div-scroll");
      $(".currency").addClass("currency-scroll");
    } else {
      $(".search-div").css("margin-top", "0px");
      $(".all-icon-holder").removeClass("all-icon-holder-scroll");
      $(".log-div").removeClass("log-div-scroll");
      $(".currency").removeClass("currency-scroll");
    }

    if ($(window).width() < 992) {
      if (topPos > 50) {
        $(".search-div").css("margin-top", "0px");        
      } else {
        $(".search-div").css("margin-top", "0px");        
      }
    }
  }); // scroll END

  //Click event to scroll to top
  $(scrollTop).click(function() {
   $("html, body").animate({scrollTop: 0}, 1000);
  }); // click() scroll top END

  // On scroll the very_top_navbar will disappear
  if ($(window).width() < 991) {
    $(".log-div").removeClass("log-div").addClass("log-div-scroll");
    $(".currency").removeClass("currency").addClass("currency-scroll");
    $(".all-icon-holder").removeClass("all-icon-holder").addClass("all-icon-holder-scroll");
  }

  $(".search-ico").click(function() {
    $(this).siblings(".search-div").addClass("search-div-show");
  });

  $(".search-div .fa-times").click(function() {
    $(this).closest(".search-div").removeClass("search-div-show");
  });

  $("#owl1").owlCarousel({
      loop:true,
      margin:10,
      items: 1,
      dots:false,
      autoplay:true,
      autoplayTimeout:5000,
  });

  $("#owl2").owlCarousel({
    items: 4,
    margin:10,
    nav: true,
    dots: false,
    mouseDrag: true,
    responsiveClass: true,
    responsive: {
        0:{
          items: 1
        },
        480:{
          items: 2
        },
        769:{
          items: 2
        },
        1200:{
          items: 4
        }
    }
  });

});