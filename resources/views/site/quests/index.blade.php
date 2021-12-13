@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/cart.css') }}">
@stop
@section('content')
    <section class="container-fluid" style="background-color: #212121;">
        <div class="row justify-content-center">
            <div class="col-12 col-xxl-9">
                <div class="row ">
                    <div class="col-12 text-start bg-color-white  border-product-bottom p-3 my-3">
                        <h3>
                            <svg x="0px" y="0px" width="50px" height="50px" fill="#fff">
                                <use xlink:href="#cart"></use>
                            </svg>
                            Shopping Cart </h3>
                    </div>
                    <div class="col-12 my-2">
                        <div class="row py-2">
                            <div class="col-12">
                                <div class="row d-none d-sm-flex text-center default-color">
                                    <div class="col-3 col-xl-2 text-width-color fs-6 ">Image</div>
                                    <div class="col-3 col-lg-4 col-xl-6 text-width-color fs-6 ">Product</div>
                                    <div class="col-3 col-lg-2 text-width-color fs-6 ">Quantity</div>
                                    <div class="col-3 col-xl-2 text-width-color fs-6 ">Price</div>
                                </div>
                            </div>
                            <div class="col-12 mt-2">
                                @foreach($data['products_collection'] as $product)
                                    <div id="product_div_{{ $product->id }}" class="row d-none d-sm-flex " style="background-color: #3A3A3A; height: 150px">
                                        <div class="col-3 col-xxl-2 border-product-bottom img_cover "
                                             style="background-image: url('https://www.opiumpulses.com/uploads/product/5995/capsule_main_deluxe_optimized.jpg')">

                                        </div>
                                        <div class="col-3 col-lg-4 col-xl-5 col-xxl-6  border-product-without-top text-center">
                                            <div class="d-inline-block stock-clip">
                                                {{ $product->stock }} in Stock
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                                <img width="30vw" data-original-title="Steam" class="me-2"
                                                     src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                                     alt="icon">
                                                <span style="font-size: calc(50% + 1vh )">{{ $product->title }}</span>
                                            </div>
                                        </div>
                                        <div class="col-4 col-lg-3 col-xl-2 border-product-without-top p-3"
                                             style="border-left: unset">
                                            <div class="d-flex justify-content-center pt-md-4">

                                                <button class="cart-button w-100" data-enabled="0" onclick="changeQuantity(this, {{ $product->id }}, -1)">-</button>
                                                <input type="number" class="form-control default-color text-center input-mobile" data-productId="{{ $product->id }}" data-enabled="0"
                                                       data-productPrice="{{ $product->price }}" data-type='currency' onchange="changeQuantityByInput({{ $product->id }})"
                                                       value="{{ isset($data['products'][$product->id]) ? $data['products'][$product->id] : 1 }}"
                                                       min="1" max="{{ $product->stock }}">
                                                <button class="cart-button w-100" {{ $product->stock > 1 ? 'data-enabled="1"' : '' }} onclick="changeQuantity(this, {{ $product->id }}, 1)">+</button>
                                            </div>
                                            <div class="d-flex justify-content-center align-items-center mt-1">
                                                <button class="cart-button ">MOVE TO WISHLIST</button>
                                                <button class="cart-button ms-1" onclick="removeCartProduct({{ $product->id }})">Remove</button>
                                            </div>
                                        </div>
                                        <div class="col-2 border-product-bottom">
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                                <span class="text-width-color fs-lg-4" data-productId="{{ $product->id }}" data-price="{{ $product->price }}">
                                                    {{ isset($data['prices'][$product->id]) ? $data['prices'][$product->id] : $product->prices }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    {{--        Mobile Version Product   Start             --}}
                                    <div id="product_div_mobile_{{ $product->id }}" class="row m-2 border-bottom-product d-sm-none">
                                        <div class="col-12 img_cover"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/product/5995/capsule_main_deluxe_optimized.jpg');min-height: 250px">

                                            <div class="row align-items-end h-100">
                                                <div class="col-12 h-50">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="d-inline-block pt-2 ">
                                                                <img width="20vw" data-original-title="Steam" class="me-2"
                                                                     src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                                                     alt="icon">
                                                            </div>

                                                        </div>
                                                        <div class="col-6">
                                                            <div class="d-inline-block stock-clip">
                                                                {{ $product->stock }} in Stock
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 h-50">
                                                    <div class="row text-center align-items-end h-100">
                                                        <div class="col-12">
                                                            <div class="row">
                                                                <div class="col-4">
                                                                    <button class="cart-button w-100" data-enabled="0" onclick="changeQuantity(this, {{ $product->id }}, -1)">-</button>
                                                                </div>
                                                                <div class="col-4">
                                                                    <input type="number" class="form-control default-color text-center" data-productId="{{ $product->id }}" data-enabled="0"
                                                                           data-productPrice="{{ $product->price }}" data-type='currency' onchange="changeQuantityByInput({{ $product->id }})"
                                                                           value="{{ isset($data['products'][$product->id]) ? $data['products'][$product->id] : 1 }}"
                                                                           min="1">
                                                                </div>
                                                                <div class="col-4">
                                                                    <button class="cart-button w-100" {{ $product->stock > 1 ? 'data-enabled="1"' : '' }} onclick="changeQuantity(this, {{ $product->id }}, 1)">+</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="row text-center align-items-center py-2">
                                                <div class="col-4">
                                                    <button class="cart-button w-100">WISHLIST</button>
                                                </div>
                                                <div class="col-4">
                                                    <span class="default-color" data-productId="{{ $product->id }}" data-price="{{ $product->price }}">{{ $product->price }}</span>
                                                </div>
                                                <div class="col-4">
                                                    <button class="cart-button w-100" onclick="removeCartProduct({{ $product->id }})">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{--        Mobile Version Product   End             --}}
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-12 my-3">
                        <div class="row">
                            <div class="col-12"></div>
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-12 bg-color-white">
                                        <div class="row h-100">
                                            <div class="col-6 col-lg-7 col-xl-8 border-product-without-top" style="border-left: unset">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-4">
                                                        <p class="fs-7 text-width-color">
                                                            <img src="{{ asset('/assets/v2/img/cart/coupon-icon.png') }}" alt=""
                                                                 width="30" height="30"> Have a coupon?
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <input type="text" class="form-control input_style"
                                                               placeholder="Use your coupon here">
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <button class="cart-button w-100 my-2">apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-3 col-md-4 col-lg-3 col-xl-2 pt-4 border-product-without-top text-center align-middle"
                                                 style="border-left: unset">
                                                <p class="fs-7"> Total Price</p>
                                                <p class="fs-6 text-width-color " data-total="{{ $data['total_price'] }}"> {{ $data['total_price'] }}</p>
                                            </div>
                                            <div class="col-3 col-md-2 pt-4 border-product-without-top text-center align-middle"
                                                 style="border-left: unset ; border-right: unset;">
                                                <p class="fs-7">Discount</p>
                                                <p class="fs-7">$25123</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 bg-color-white">
                                        <div class="row ">
                                            <div class="col-8 border-product-without-top pt-2" style="border-left: unset">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-4">
                                                        <p class="fs-7 text-width-color ">
                                                            <img src="{{ asset('/assets/v2/img/cart/gift-icon.png') }}" alt=""
                                                                 width="30" height="30"> Have a coupon?
                                                        </p>
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <input type="text" class="form-control input_style"
                                                               placeholder="Email or Username">
                                                    </div>
                                                    <div class="col-xl-4">
                                                        <button class="cart-button w-100 my-2">apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-4 pt-4 border-product-without-top text-center align-middle"
                                                 style="border-left: unset;border-right: unset">
                                                <p class="fs-7">Final Price</p>
                                                <p class="fs-6 text-width-color" data-total="{{ $data['total_price'] }}">{{ $data['total_price'] }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 ">
                                        <div class="row  justify-content-center align-items-center h-100">
                                            <div class="col-auto pt-4">
                                                <button class="btn_style" id="checkout" >Checkout
                                                    <svg fill="#fff" x="0px" y="0px" width="34px" height="34px"
                                                         viewBox="0 0 83.767 83.767">
                                                        <use xlink:href="#cart"></use>
                                                    </svg>
                                                    <i class="fa fa-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script>
        $('#checkout').on('click',function () {
            let quantity = {};
            $('input[type=number][data-productId].input-mobile').each(function (input) {
                quantity[`${$(this).data('productid')}`] = $(this).val();
            })
            quantity['_METHOD'] = 'PUT';
            $.post(window.location.origin + '/checkout',quantity)
                .done(
                    window.location.replace(window.location.origin + '/checkout')
                ).fail(function (xhr, status, error) {
                console.log(xhr, status, error)
                Swal.fire({
                    title: 'Oups!',
                    text: error,
                    icon: 'error',
                })
            })
        })
    </script>
@stop

