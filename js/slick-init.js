$(document).ready(function() {
    $('.slider__content').slick({
        slidesToShow: 1,
        dots: true,
        arrows: false,
        infinite: false,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 480,
                settings: {
                    infinite: false,
                    slidesToShow: 2,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    infinite: false,
                    slidesToShow: 3,
                    dots: true
                }
            },
            {
                breakpoint: 1024,
                settings: {
                    infinite: false,
                    slidesToShow: 3,
                    dots: true
                }
            },
            {
                breakpoint: 1500,
                settings: 'unslick'
            }
        ]
    });
});
