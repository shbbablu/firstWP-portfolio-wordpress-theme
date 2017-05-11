jQuery(window).scroll(function () {
    var sticky = jQuery('#headerBar'),
        scroll = jQuery(window).scrollTop();

    if (scroll >= 100) sticky.addClass('headerScroll');
    else sticky.removeClass('headerScroll');
});
//------- MAGNIFICENT POPUP ---//

jQuery(document).ready(function ($) {

    "use strict";

    jQuery('body').scrollspy({
        offset: 200,
        target: '.navigation'
    });

    //This is for portfolio lightbox
    
    jQuery('#portfolio').magnificPopup({
        delegate: 'a',
        type: 'image',
        image: {
            cursor: null,
            titleSrc: 'title'
        },
        gallery: {
            enabled: true,
            preload: [0, 1], // Will preload 0 - before current, and 1 after the current image
            navigateByImgClick: true
        }
    });
    
    //This is for smooth scroll
    
    jQuery(function () {
        jQuery('a[href*="#"]:not([href="#"])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = jQuery(this.hash);
                target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    jQuery('html, body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });



});
