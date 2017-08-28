(function($) {
    //mobile nav menu open/close
    $('.nav-icon').on('click', function(){
        $('.mobile-menu-container').css('display', 'flex');
    })
    $('.nav-icon-close').on('click', function(){
        $('.mobile-menu-container').css('display', 'none');
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


})(jQuery);