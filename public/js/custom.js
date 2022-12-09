$(function(){

    const topSpace = () => {
        const headerHeight = jQuery('#header').outerHeight();
        jQuery('.top-section').css({'padding-top': `${headerHeight + 50}px`});
    }

    const fixedHeader = () => {

        const scrollPos = jQuery(window).scrollTop();
        if(scrollPos > 10) jQuery('#header').addClass('fixedHeader');
        else jQuery('#header').removeClass('fixedHeader');

    }

    topSpace();
    
    fixedHeader();
    jQuery(window).scroll(fixedHeader);

})