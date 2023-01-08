$(function(){


    AOS.init();

    // AOS.init({
    //     delay: 1000,
    //     duration: 8000
    // });

    const topSpace = () => {
        const headerHeight = jQuery('#header').outerHeight();
        jQuery('.top-section').css({'padding-top': `${headerHeight + 50}px`});
        jQuery('#page--header').css({'margin-top': `${headerHeight + 50}px`});
    }

    const fixedHeader = () => {

        const scrollPos = jQuery(window).scrollTop();
        if(scrollPos > 10) jQuery('#header').addClass('fixedHeader');
        else jQuery('#header').removeClass('fixedHeader');

    }

    setTimeout(() => {
        topSpace();

    }, 0)
    
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


    if(jQuery('.process--slider-wrapper').length > 0){
        processSlider[0].slick.slickGoTo(1);
        setTimeout(()=>{
            processSlider[0].slick.slickGoTo(0);
        }, 500)
    }
    

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
        centerMode: true,
        responsive: [
            {
                breakpoint: 981,
                settings: {
                    slidesToShow: 2,
                    arrows: false
                }
            },
            {
                breakpoint: 667,
                settings: {
                    slidesToShow: 1,
                    arrows: false,
                    adaptiveHeight: true,
                    autoplay: true,
                    autoplaySpeed: 8000
                }
            }
        ]
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

    jQuery('.review--play').click(function(){
        const popupOverlay = document.createElement('div');
        const popupWrapper = document.createElement('div');
        const popupVideo = document.createElement('iframe');

        const popupCloseBtn = document.createElement('span');

        popupCloseBtn.setAttribute('class', 'review--popup-close');

        const videoURL = jQuery(this).data('video-url');

        popupOverlay.setAttribute('class', 'review--popup-overlay');
        popupWrapper.setAttribute('class', 'review--popup');
        popupVideo.setAttribute('src', videoURL);

        popupWrapper.append(popupCloseBtn);
        popupWrapper.append(popupVideo);

        document.body.append(popupOverlay);
        document.body.append(popupWrapper);

        setTimeout(() => {
            jQuery('.review--popup-overlay').addClass('show');
            jQuery('.review--popup').addClass('show');

            jQuery('.review--popup-overlay').click(function(){
                jQuery('.review--popup-overlay').removeClass('show');
                jQuery('.review--popup').removeClass('show');    
            
                setTimeout(() => {
                    jQuery('.review--popup-overlay').remove();
                    jQuery('.review--popup').remove();
                }, 200)
            });

            


        }, 200);


    })



    jQuery('.selectPackage--box').click(function(){
        const currentPackage = jQuery(this).data('package-name');
        const currentPackagePrice = jQuery(this).data('package-price');

        if( !(jQuery(this).hasClass('active')) ){
            jQuery('.selectPackage--box').removeClass('active')
            jQuery(this).addClass('active');

            jQuery('.payment--amount span').text(`${currentPackagePrice}`);

        }    
    });

    jQuery('.payment--mode button').click(function(){
        const currentPaymentMode = jQuery(this).data('payment-mode');

        if( !(jQuery(this).hasClass('active')) ){
            jQuery('.payment--mode button').removeClass('active');
            jQuery(this).addClass('active');

            jQuery('.payment--mode-tab').removeClass('active');
            jQuery('.payment--mode-tab').each(function(){
                const paymentModeTab = jQuery(this).data('payment-mode');
                if(paymentModeTab == currentPaymentMode){
                    jQuery(this).addClass('active');
                }
            })
        }

    })



    if(jQuery('.stripe-pay').length > 0){
     
        jQuery('.stripe-pay').bind('submit', async function(e) {     
            
            if(jQuery('input[name="stripeToken"]').length == 0){
                e.preventDefault();
                const STRIPE_KEY = jQuery(this).data('stripe-publishable-key');
    
                jQuery('.form--submit-row input').attr('disabled', 'disabled');
                jQuery('.ajax--loader').show();
    
    
                Stripe.setPublishableKey(STRIPE_KEY);
                await Stripe.createToken({
                    number: jQuery('input[name=card_number]').val(),
                    cvc: jQuery('input[name=cvv]').val(),
                    exp_month: 12,
                    exp_year: 23 
                }, stripeResponseHandler);
            } 
        
        });
          
        /*------------------------------------------
        --------------------------------------------
        Stripe Response Handler
        --------------------------------------------
        --------------------------------------------*/
        function stripeResponseHandler(status, response) {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
                
            if(response.error){
                jQuery('.form--error-row').show();
                jQuery('.form--error-row p').text(response.error.message);
            } else {
                const token =  response['id'];

                const data = {
                    stripeToken: token,
                    amount: jQuery('.selectPackage--box.active').data('package-price'),
                    description: jQuery('.selectPackage--box.active').data('package-name')
                }

                $.ajax({
                    url: jQuery('.stripe-pay').attr('action'),
                    type: "POST",
                    data: data,
                    dataType: "json",
                    success: function(response){
                        jQuery('.form--error-row').hide();
                        jQuery('.form--submit-row input').removeAttr('disabled');
                        jQuery('.ajax--loader').hide();
                
                        if(response.status){
                            window.location = response.thankyou
                        }
                    }
                  });

                  
    
            }
            console.log(response);
            

        }

    }

















})