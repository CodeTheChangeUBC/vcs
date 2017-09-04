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
    $(document).ready(function(){
        $('#concert-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>']
        });
    });
    $(document).ready(function(){
        $('#concerts-modal-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>'],
            autoHeight: true
        });
    });
    $(document).ready(function(){
        $('#community-modal-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>'],
            autoHeight: true
        });
    });

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



    var $blogImageWidth = $('.blog-image-container').width();
    $('.blog-image-container').css('height', $blogImageWidth);



})(jQuery);