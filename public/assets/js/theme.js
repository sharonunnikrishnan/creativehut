(function(a) {
    a(".scroll-top").on("click", function() {
        a("html, body").animate({
            scrollTop: 0
        });
        return !1;
    });
     
    a(window).on("scroll", function() {
        var b = a(".sticky-menu");
        100 <= a(window).scrollTop() ? b.addClass("fixed") : b.removeClass("fixed");
    });
    a(window).on("scroll", function() {
        200 < a(this).scrollTop() ? a(".scroll-top").fadeIn() : a(".scroll-top").fadeOut();
    });
     
    a(window).on("load", function() {
        // a("#ctn-preloader").fadeOut(100000);
        a("#preloader").delay(350).fadeOut(1000);
        a("body").delay(350).css({
            overflow: "visible"
        });
        
    });
})(jQuery);