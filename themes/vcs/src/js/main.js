(function($) {
    //mobile nav menu open/close
    $('.nav-icon').on('click', function(){
        $('.mobile-menu-container').css('display', 'flex');
        $('.body-gradient').css('display', 'block');
    })
    $('.nav-icon-close').on('click', function(){
        $('.mobile-menu-container').css('display', 'none');
        $('.body-gradient').css('display', 'none');
    })
    $('.body-gradient').on('click', function(){
        $('.mobile-menu-container').css('display', 'none');
        $('.body-gradient').css('display', 'none');
    })



    // $(document).ready(function(){
    //     $('#concert-carousel').owlCarousel({
    //         items : 1,
    //         nav: true,
    //         navText: ['<','>']
    //     });
    // });
    // $(document).ready(function(){
    //     $('#concerts-modal-carousel').owlCarousel({
    //         items : 1,
    //         nav: true,
    //         navText: ['<','>'],
    //         autoHeight: true
    //     });
    // });
    // $(document).ready(function(){
    //     $('#community-modal-carousel').owlCarousel({
    //         items : 1,
    //         nav: true,
    //         navText: ['<','>'],
    //         autoHeight: true
    //     });
    // });

    ////////////our choir 
    ///////members
    $('.member-carousel').flickity({

    });
    $('.member-carousel-modal').flickity({
        
    });
    ///////photos
    $('#our-choir-photo-carousel').flickity({
        setGallerySize: false,
        wrapAround: true,
        pageDots: false
    });


    $('.home-carousel').flickity({
        setGallerySize: false
    });


    $(document).ready(function(){
        var $bodyWidth = parseFloat($('body').css('width')),
            $blogPaddingLeft = parseFloat($('.blog-post').css('padding-left')),
            $blogPaddingRight = parseFloat($('.blog-post').css('padding-right')),
            $blogImageWidth = $bodyWidth - $blogPaddingLeft - $blogPaddingRight;

        $('.blog-image-container').css('height', $blogImageWidth);
        $('.blog-image-container').css('width', $blogImageWidth);
    });

    var $bodyHeight = parseFloat($(document).height()),
        $navHeight = parseFloat($('#masthead').height()),
        $footerHeight = parseFloat($('#colophon').height()),
        $slideHeight = $bodyHeight - $navHeight - $footerHeight;

        $('.flickity-viewport').css('min-height', $slideHeight);




    //concert
    
    $('.concert-img').on('click', function(){
        var $modalContainer = $(this).siblings('.modal-container');
        $modalContainer.css('display','block')
        $modalContainer.children('.concert-modal').css('display','block')
        $('body').addClass('no-scroll')
    });
    $('.modal-close').on('click', function(){
        console.log('hope')
        var $modalContainer = $(this).parents('.modal-container');
        $modalContainer.css('display', 'none')
        $modalContainer.children('.concert-modal').css('display', 'none')
        $('body').removeClass('no-scroll')
    })

})(jQuery);