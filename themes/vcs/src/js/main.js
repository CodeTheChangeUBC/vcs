(function($) {
    //mobile nav menu open/close
    $('.nav-icon').on('click', function(){
        $('.mobile-menu-container').css('display', 'flex');
        $('.body-gradient').css('display', 'block');
        $('body').addClass('no-scroll');
    })
    $('.nav-icon-close').on('click', function(){
        $('.mobile-menu-container').css('display', 'none');
        $('.body-gradient').css('display', 'none');
        $('body').removeClass('no-scroll');
    })
    $('.body-gradient').on('click', function(){
        $('.mobile-menu-container').css('display', 'none');
        $('.body-gradient').css('display', 'none');
    })


    // use either owl or flickity
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
    $(document).ready(function(){
        $('#member-carousel').flickity({
            imagesLoaded: true
        });

        $('.member-carousel-modal').flickity({
            
        });
        ///////photos
        $('#our-choir-photo-carousel').flickity({
            setGallerySize: false,
            wrapAround: true,
            pageDots: false
        });
        $('.zone-seating-carousel').flickity({
        })


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
        $modalContainer.children('.concert-modal-container').css('display','block')
        $('body').addClass('no-scroll')
    });
    $('.modal-close').on('click', function(){
        var $modalContainer = $(this).parents('.modal-container');
        $modalContainer.css('display', 'none')
        $modalContainer.children('.concert-modal-container').css('display', 'none')
        $('body').removeClass('no-scroll')
    })
    $('.season').on('click', function() {
        event.preventDefault()
    });

$(window).load(function(){
    $('.carousel-img-container img').each(function(){
        var $width = $(this).width(),
            $height = $(this).height(),
            $containerWidth = $('.carousel-img-container').width(),
            $containerHeight = $('.carousel-img-container').height(),
            $calcWidth = $containerWidth - $width,
            $calcHeight = $containerHeight - $height

        if($calcWidth > $calcHeight){
            $(this).css({'min-width': '100%'})
        } 
        if($calcWidth < $calcHeight){
            $(this).css({'min-height': '100%', 'max-width': 'none',})
        }     
    })
})

$(document).ready(function(){
    var $initInfoHeight = $('.pack3-info').height()
    if($(window).width() < 760 ) {
        $('.pack-info-container').css('height', $initInfoHeight)
    }
    
})

$('.pack-tab').on('click', function(){
    $('.pack-tab').removeClass('pack-selected')
    $(this).addClass('pack-selected')

})
$('.pack3-tab').on('click', function(){
    $('.pack-info').css('display', 'none')
    $('.pack3-info').css('display', 'flex')

    var $infoHeight = $('.pack3-info').height()
    $('.pack-info-container').css('height', $infoHeight)
})
$('.pack4-tab').on('click', function(){
    $('.pack-info').css('display', 'none')
    $('.pack4-info').css('display', 'flex')

    var $infoHeight = $('.pack4-info').height()
    $('.pack-info-container').css('height', $infoHeight)
})
$('.pack5-tab').on('click', function(){
    $('.pack-info').css('display', 'none')
    $('.pack5-info').css('display', 'flex')

    var $infoHeight = $('.pack5-info').height()
    $('.pack-info-container').css('height', $infoHeight)
})

})(jQuery);