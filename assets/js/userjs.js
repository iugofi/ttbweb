function testimonials() {
    const owl = $(".testimonial-content");
    owl.owlCarousel({
        loop: true,
        margin: 8,
        dots: false,
        nav: false,
        mouseDrag: true,
        autoplay: true,
        autoplayTimeout: 3000,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 2
            }
        }
    });

    $(".owl-prev").click(function() {
        owl.trigger('prev.owl.carousel');
    });

    $(".owl-next").click(function() {
        owl.trigger('next.owl.carousel');
    });
}
