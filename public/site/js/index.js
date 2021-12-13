$(document).ready(function(){
    $('.first-carousel-div').slick({
        dots: false,
        infinite: true,
        autoplay:true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 3,
                    infinite: true,

                }
            },
            {
                breakpoint: 1020,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
    $('.second-carousel-div').slick({
        dots: true,
        infinite: true,
        autoplay:true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
        padding:'10px',
    });
    $('.mobile-carousel-articles').slick({
        dots: true,
        infinite: true,
        autoplay:true,
        speed: 1000,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        padding:'10px',
    });
    $('.latest-giveaway-carousel').slick({
        dots: true,
        infinite: true,
        autoplay:false,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:true,
        responsive: [
            {
                breakpoint: 1440,
                settings: {
                    slidesToShow: 3,
                    infinite: true,

                }
            },
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows:false,
                }
            }
        ]
    });
    $('.trove-carousel-div').slick({
        dots: true,
        infinite: true,
        autoplay:false,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        padding:'10px',
    });



});

function addProductToCart(productId) {
    $.post(window.location.origin + `/add/${productId}/cart`,
        {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')})
        .done(function(response) {
        if (response) {
            Swal.fire({
                title: 'Success!',
                text: 'You successfully added a product to your cart',
                icon: 'success',
            });
            $('.page-header__nav-func-cart-num').text(response);
        } else {
            Swal.fire({
                title: 'Oups!',
                text: 'This product could not be added to your cart at this time',
                icon: 'error',
            });
        }
        return false;
    });
}



