$(function(){

    const topSpace = () => {
        const headerHeight = jQuery('#header').outerHeight();
        jQuery('.top-section').css({'padding-top': `${headerHeight + 50}px`});
        jQuery('#page--header').css({'margin-top': `${headerHeight}px`});
    }

    const fixedHeader = () => {

        const scrollPos = jQuery(window).scrollTop();
        if(scrollPos > 10) jQuery('#header').addClass('fixedHeader');
        else jQuery('#header').removeClass('fixedHeader');

    }

    topSpace();
    
    fixedHeader();
    jQuery(window).scroll(fixedHeader);


    const processSlider = jQuery('.process--slider-wrapper').slick({
        asNavFor: '.process--slider-sliderNav',
        fade: true
        
    });

    const processSliderNav = jQuery('.process--slider-sliderNav').slick({
        arrows: false,
        asNavFor: '.process--slider-wrapper',
        fade: true
    });

    $('.process--slider-wrapper').on('beforeChange', function(event, slick, currentSlide, nextSlide){
        jQuery('.process--slider-circular-circle-btn').each(function(){
            const slideNumber = jQuery(this).data('slide');
            if(slideNumber == nextSlide) jQuery(this).addClass('active')
            else jQuery(this).removeClass('active')
        })

        const totalSlides = 7;
        const totalRotate = 360;
        const perSlideRotate = totalRotate / totalSlides;
        
        const toRotate = (perSlideRotate * (nextSlide + 1)).toFixed(0);
        let leftRotate = toRotate;
        let rightRotate = 0;

        let leftTimeout = 400;
        let rightTimeout = 0;

        if(toRotate > 180){
            leftRotate = 180;
            rightRotate = toRotate - 180;
            rightTimeout = 400;
            leftTimeout = 0;
        }

        setTimeout(() => {
            jQuery('#leftRotate').css({'transform': `rotate(${leftRotate}deg)`})
        }, leftTimeout);
        setTimeout(() => {            
            jQuery('#rightRotate').css({'transform': `rotate(${rightRotate}deg)`})
        }, rightTimeout);
    });

    jQuery('.process--slider-circular-circle-btn').click(function(){
        
        const goToSlide = jQuery(this).data('slide');
        
        jQuery('.process--slider-circular-circle-btn').removeClass('active')
        jQuery(this).addClass('active')
        processSlider[0].slick.slickGoTo(parseInt(goToSlide));
    })


    processSlider[0].slick.slickGoTo(1);
    setTimeout(()=>{
        processSlider[0].slick.slickGoTo(0);
    }, 500)
    

    const packageSelector = () => {
        const currentPackage = jQuery('.packages--package.current-package').data('package');
        
        jQuery('.packages--features-list ul li').each(function() {
            console.log(jQuery(this));
            if(currentPackage == 'basic' && jQuery(this).data('basic') == 1)
                jQuery(this).addClass('current-feature')
            if(currentPackage == 'starter' && jQuery(this).data('starter') == 1)
                jQuery(this).addClass('current-feature')
            if(currentPackage == 'premium' && jQuery(this).data('premium') == 1)
                jQuery(this).addClass('current-feature')
        });
    }

    packageSelector();

    jQuery('.packages--package').click(function(){
        jQuery('.packages--package').removeClass('current-package');
        jQuery(this).addClass('current-package');
        
        jQuery('.packages--features-list ul li').removeClass('current-feature');
        packageSelector();
    })


    document.querySelectorAll( '.process--slider-circular-ciclegraph' ).forEach( ( ciclegraph )=>{
        let circles = ciclegraph.querySelectorAll( '.process--slider-circular-circle-btn' )
        let angle = 360-90, dangle = 360 / circles.length
        for( let i = 0; i < circles.length; ++i ){
          let circle = circles[i]
          angle += dangle
          circle.style.transform = `rotate(${angle}deg) translate(${ciclegraph.clientWidth / 2 + 10}px) rotate(-${angle}deg)`
        }
    })


    jQuery('.resume--slider').slick({
    fade: true
    })

    jQuery('.testimonial--slider').slick({
    slidesToShow: 3,
    centerMode: true
    })

    jQuery('.faq--box-header').click(function(){
        const currentAccordion = jQuery(this);
        if(!(currentAccordion.parent().hasClass('active'))){

            jQuery('.faq--box').removeClass('active');
            currentAccordion.parent().addClass('active');
            jQuery('.faq--box-body').slideUp();
            currentAccordion.next('.faq--box-body').slideDown();
        }
    })

})