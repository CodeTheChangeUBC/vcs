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


    // carousel init <switch all to either owl or flickity>
    $(document).ready(function(){
        $('#concert-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>']
        });
        $('#concerts-modal-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>'],
            autoHeight: true
        });
        $('#community-modal-carousel').owlCarousel({
            items : 1,
            nav: true,
            navText: ['<','>'],
            autoHeight: true
        });
        $('.home-carousel').flickity({
            setGallerySize: false
        });
        $('.zone-seating-carousel').flickity({
        })
        if($(window).width() < 760) {
            $('#choir #member-carousel').flickity({
                imagesLoaded: true
            })
            $('.member-carousel-modal').flickity({
                imagesLoaded: true
            });
            $('#our-choir-photo-carousel').flickity({
                setGallerySize: false,
                wrapAround: true,
                pageDots: false
            });
        }
        if($(window).width() > 760) {
            $('.member-carousel-modal').flickity({
                imagesLoaded: true,
                adaptiveHeight: true
            });
            $('#our-choir-photo-carousel').flickity({
                setGallerySize: false,
                wrapAround: true,
                pageDots: false
            });
        }
    });


    //frontpage desktop flickity height set
    $(document).ready(function(){
        var $bodyHeight = parseFloat($(document).height()),
        $navHeight = parseFloat($('#masthead').height()),
        $footerHeight = parseFloat($('#colophon').height()),
        $slideHeight = $bodyHeight - $navHeight - $footerHeight;

        $('.home .flickity-viewport').css('min-height', $slideHeight);
    })


    //img resize features
    $(document).ready(function(){
        $('.carousel-img-container img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('.carousel-img-container').width(),
                $containerHeight = $('.carousel-img-container').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%', 'height': '100%', 'max-width': 'none'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'min-height': '100%', 'max-width': 'none',})
            }     
        })
        $('#photos .photo img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('#photos .photo').width(),
                $containerHeight = $('#photos .photo').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'height': '100%', 'min-height': '100%', 'max-width': 'none',})
            }   
        })
        $('.page-timeline .timeline-img-container img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('.page-timeline .timeline-img-overlay').width(),
                $containerHeight = $('.page-timeline .timeline-img-overlay').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'height': '100%', 'min-height': '100%', 'max-width': 'none',})
            }   
        })
        $('.page-conductors .conductors-img-container img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('.page-conductors .conductors-img-overlay').width(),
                $containerHeight = $('.page-conductors .conductors-img-overlay').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'height': '100%', 'min-height': '100%', 'max-width': 'none',})
            }   
        })
        $('.page-history #timeline .timeline-img-container img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('.page-conductors .conductors-img-overlay').width(),
                $containerHeight = $('.page-conductors .conductors-img-overlay').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'height': '100%', 'min-height': '100%', 'max-width': 'none',})
            }   
        })
        $('.page-history #conductor .conductor-img-container img').each(function(){
            var $width = $(this).width(),
                $height = $(this).height(),
                $containerWidth = $('.page-conductors .conductors-img-overlay').width(),
                $containerHeight = $('.page-conductors .conductors-img-overlay').height(),
                $calcWidth = $containerWidth - $width,
                $calcHeight = $containerHeight - $height

            if($calcWidth > $calcHeight){
                $(this).css({'min-width': '100%'})
            } 
            if($calcWidth < $calcHeight){
                $(this).css({'height': '100%', 'min-height': '100%', 'max-width': 'none',})
            }   
        })
    })


    //season pack functions
    $(document).ready(function(){
        var $initInfoHeight = $('.pack3-info').height()
        if($(window).width() < 760 ) {
            $('.pack-info-container').css('height', $initInfoHeight)
        }
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
    })


    //modal functions
    $('.modal-close').on('click', function(){
        console.log('close clicked')
        $('.modal-container').addClass('hide')
        $('body').removeClass('no-scroll')
    })
    $('.concert-img').on('click', function(){
        var $modalContainer = $(this).siblings('.modal-container');
        $modalContainer.removeClass('hide')
        $('body').addClass('no-scroll')
    });
    $('#choir .member').on('click', function(){
        var $carousel = $('.member-carousel-modal').flickity()
        var $memberIndex = $(this).index()
        console.log($memberIndex)
        $('#choir .member-carousel-container').removeClass('hide')
        $carousel.flickity('resize')
        $carousel.flickity( 'select', $memberIndex )
        $('body').addClass('no-scroll');
    })



    //Conductors and timeline read more 
    $('.page-conductors .read-more-container').on('click', function(){
        $(this).siblings('.trimmed').addClass('hide')
        $(this).siblings('.untrimmed').removeClass('hide')
        $(this).css('display', 'none')
    })
    $('.page-timeline .read-more-container').on('click', function(){
        $(this).siblings('.trimmed').addClass('hide')
        $(this).siblings('.untrimmed').removeClass('hide')
        $(this).css('display', 'none')
    })
    $('.page-history #timeline .read-more-container').on('click', function(){
        $(this).siblings('.trimmed').addClass('hide')
        $(this).siblings('.untrimmed').removeClass('hide')
        $(this).css('display', 'none')
    })
    $('.page-history #conductor .read-more-container').on('click', function(){
        $(this).siblings('.trimmed').addClass('hide')
        $(this).siblings('.untrimmed').removeClass('hide')
        $(this).css('display', 'none')
    })


})(jQuery);