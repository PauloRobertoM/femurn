(function($, window) {
	$('#owl-vitrine').owlCarousel({
        loop: true,
        autoplay: true,
        margin:0,
        nav: false,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-destaque-galeria').owlCarousel({
        loop: true,
        autoplay: true,
        margin:0,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
    $('#owl-destaque').owlCarousel({
        loop: true,
        autoplay: true,
        margin: 30,
        nav:true,
        navText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:2
            }
        }
    });
})(jQuery, window);