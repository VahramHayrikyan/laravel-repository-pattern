$('.hover').hover(function () {
    $(this).find('svg').attr('fill', '#dc291e')
}, function () {
    $(this).find('svg').attr('fill', '#fff')
})


$(function () {
    function init() {
        $('[data-behaviour="toggle-menu-icon"]').on('click', toggleMenuIcon);
        $('[data-behaviour="toggle-link-icon"]').on('click', toggleSubMenu);
    };

    function toggleMenuIcon() {
        $(this).toggleClass('menu-icon--open');
        $('[data-element="toggle-nav"]').toggleClass('nav--active');
    };

    function toggleSubMenu() {
        $(this).toggleClass('nav__link--plus nav__link--minus');
        $('[data-behaviour="toggle-sub-menu"]').slideToggle('nav__sub-list--active');
    };

    init()
});
// input value validation Start
$("input[data-type='currency']").on({
    keyup: function () {
        formatCurrency($(this));
    },
    blur: function () {
        formatCurrency($(this), "blur");
    }
});
function formatNumber(n) {
    // format number 1000000 to 1,234,567
    return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",")
}
function formatNumberPrice(n) {
    return Math.floor(n)+ (Math.round((n % 1)*100))/100
}
function formatCurrency(input, blur) {
    // appends $ to value, validates decimal side
    // and puts cursor back in right position.
    // get input value
    let input_val = input.val();
    // don't validate empty input
    if (input_val === "") {
        return;
    }
    // check for decimal
    if (input_val.indexOf(".") >= 0) {
        // split number by decimal point
        let left_side = input_val.substring(0, decimal_pos);
        // add commas to left side of number
        left_side = formatNumber(left_side);
        // join number by .
        input_val = left_side ;
    } else {
        // no decimal entered
        // add commas to number
        // remove all non-digits
        input_val = formatNumber(input_val);
        // final formatting
    }
    // send updated string to input
    input.val(input_val);
}
// input value validation End
function notLoggedInPopup() {
    Swal.fire({
        title: 'Oops!',
        text: 'You need to be logged in to complete this action',
        icon: 'warning',
    });
}
function changeQuantity(e, product_id, quantity) {
    if ($(e).attr('data-enabled')) {
        let input = $(`input[data-productId=${product_id}]`);
        let original_quantity = parseFloat(input.val());
        let total_quantity = (original_quantity + quantity);
        if (input.attr('max') < total_quantity)
        {
            return;
        }
        let price = $(`span[data-productId=${product_id}]`);
        if (total_quantity <= 1) {
            input.val(1);
            price.html(input.data('productprice'))
            updateTotal()
            return
        } else {
            input.val(total_quantity);
        }
        if (quantity >= 1) {
            let sum = parseFloat(price.html()) + input.data('productprice');
            price.html(formatNumberPrice(sum))
        } else {
            let sum = parseFloat(price.html()) - input.data('productprice');
            price.html(formatNumberPrice(sum))
        }
        updateTotal()
    }
}
function changeQuantityByInput(product_id){
    let input = $(`input[data-productId=${product_id}]`);
    let input_price = input.data('productprice');
    let price = $(`span[data-productId=${product_id}]`);
    let sum = input.val() * input_price;
    price.html(formatNumberPrice(sum))
    updateTotal()
}
function removeCartProduct(productId) {
    $.post(`/remove/${productId}/cart`, {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')})
        .done(function (response) {
            if (response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'You successfully added a product to your cart',
                    icon: 'success',
                });
                let product = $('#product_div_' + productId);
                let product_price = product.find('span[data-price]').data('price');
                let product_quantity = product.find('input').val();
                $('.page-header__nav-func-cart-num').text(response);
                product.remove();
                $('#product_div_mobile_' + productId).remove();
                updateCart(product_price * product_quantity, false);

            } else {
                Swal.fire({
                    title: 'Oups!',
                    text: 'This product could not be added to your cart at this time',
                    icon: 'error',
                });
            }
            return false;
        })
}
function updateTotal() {
    let span = $('span[data-productId].text-width-color.fs-lg-4');
    let p = $('p[data-total]');
    let total = 0;
    span.each(function (e) {
        total += parseFloat($(this).html());
    })
    p.html(formatNumberPrice(total))


}
function updateCart(price, bool) {
    let total = $('p[data-total]');
    if (bool >= 1) {
        let sum = parseFloat(total.html()) + price;
        total.html(formatNumberPrice(sum))
    } else {
        let sum = parseFloat(total.html()) - price;
        total.html(formatNumberPrice(sum))
    }
}

$('.friends-online-wrapper').on('click',function () {
    $(this).find('div.friends ul').toggleClass('friends-active')
})
$('.menu-social div').hover(function () {
    $(this).toggleClass('social-active')
    $(this).find('img[alt=toggle]').fadeToggle()
})


