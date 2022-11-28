$(document).ready(function () {
    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > 100) { 
      //   $('.theme-main-menu').addClass('fadeOutUp');
      //   $('.theme-main-menu').removeClass('fadeOutUp');
        $('.theme-main-menu').addClass('fadeInDown');
        $('.theme-main-menu').removeClass('fadeInUp');
        $('.theme-main-menu').addClass('animated');
        $('.sticky-menu').addClass('fixed');
      } else {
          $('.theme-main-menu').addClass('fadeInUp');
          $('.theme-main-menu').removeClass('fadeInDown');
          $('.theme-main-menu').removeClass('animated');
          $('.sticky-menu').removeClass('fixed');
  
      }
    });
  }); 