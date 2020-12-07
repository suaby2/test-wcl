jQuery(window).scroll(function($) {
    if( jQuery(window).width() > 992 )  {
        if(jQuery(window).scrollTop()  > 0) {
            jQuery(".header__box").addClass('sticky');
        } else{
            jQuery(".header__box").removeClass('sticky');
        }
    }
});