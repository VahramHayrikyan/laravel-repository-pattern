@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/checkout.css?v=1') }}">
@stop
@section('content')
    <section class="container-fluid" style="background-color: #212121;">
        <div class="row g-1 py-5 justify-content-center ">
            <div class="col-12 checkout-main">
                <div class="row g-2 ">
                    <div class="col-12 p-2">
                        <div class="row">
                            <div class="d-none d-sm-flex col-sm-3 col-lg-3">
                                <h5>CHECKOUT</h5>
                            </div>
                            <div class="col-12 col-sm-9 col-lg-6 default-color">
                                <ul class="d-flex justify-content-between">
                                    <li>Product</li>
                                    <li>Quantity</li>
                                    <li>Price</li>
                                </ul>
                            </div>
                            <div class="d-none d-lg-block col-lg-3 text-end">
                                <a href="{{ url('/cart') }}" class="btn_style">Edit Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-2">
                        <div class="row">
                            <div class="col-12 col-lg-10">
                                <div class="row">
                                    @foreach($data['products_collection'] as $product)
                                        <div class="col-12">
                                            <div class="row text-center">
                                                <div class="col-5 border-solid">
                                                    <div class="row">
                                                        <div class="col-12 col-sm-6 img_contain img-vw"
                                                             style="background-image: url(https://www.opiumpulses.com/uploads/product/5951/94e81a38-c680-4897-967d-7af165cd0dd4_optimized.jpeg)">

                                                        </div>
                                                        <div class="col-12 col-sm-6 fs-9">
                                                            <div
                                                                class="d-flex align-items-center justify-content-center h-100">
                                                                {{ $product->title }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-3 border-solid text-width-color">
                                                    <div class="d-flex align-items-center justify-content-center h-100">
                                                        {{ isset($data['products'][$product->id]) ? $data['products'][$product->id] : 1 }}
                                                    </div>
                                                </div>
                                                <div class="col-4 border-solid text-width-color">
                                                    <div class="d-flex align-items-center justify-content-center h-100">
                                                        {{ isset($data['prices'][$product->id]) ? $data['prices'][$product->id] : $product->prices }}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="row mt-4">
                                    <div class="col-12">
                                        <div class="row text-center">
                                            <div class="col-8 py-3 border-solid text-width-color">

                                            </div>
                                            <div class="col-4 py-3 border-solid ">
                                                <div class="row align-items-center justify-content-center h-100 fs-9">
                                                    <div class="col">Total Price</div>
                                                    <div class="col text-width-color">{{  $data['total_price'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row text-center">
                                            <div class="col-8 py-3 border-solid text-width-color">

                                            </div>
                                            <div class="col-4 py-3 border-solid ">
                                                <div class="row align-items-center justify-content-center h-100 fs-9">
                                                    <div class="col">Final Price</div>
                                                    <div class="col text-width-color">{{  $data['total_price'] }}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-2">
                                <div class="row">
                                    <div class="col-12 d-none d-lg-block">
                                        <img class="img-fluid"
                                             src="{{ asset('/assets/v2/img/checkout/checkout-banner.jpg') }}">
                                    </div>
                                    <div class="col-12">
                                        <div class="paypal-points-text">
                                            YOU'RE GOING TO EARN 1467 POINTS IF YOU PAY WITH PAYPAL
                                        </div>
                                        <div class="paypal-points-text">
                                            PAYPAL PAYMENTS SMALLER THAN $5.00 WILL BE CHARGED WITH A PAYMENT PROCESSING
                                            FEE
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="text-left">
                                            <img class="img-fluid"
                                                 src="{{ asset('/assets/v2/img/checkout/paypal.png') }}">
                                            <img class="img-fluid"
                                                 src="{{ asset('/assets/v2/img/checkout/payment-types.png') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 py-2 text-center d-lg-none">
                                        <a href="" class="btn_style">Edit Cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 checkout-main mt-3">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-6 text-center">
                        <div>
                            <form action="{{ url('paypal') }}" method="POST">
                                @csrf
                                <input type="hidden" name="payment_method" value="paypal">
                                <button href="{{ url('/paypal') }}" class="btn_style">PAYPAL PAYMENT</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center mt-2">

                        <form action="{{ url('paypal') }}" method="POST">
                            @csrf
                            <input type="hidden" name="payment_method" value="credit">
                            <button href="{{ url('/paypal') }}" class="btn_style">ACCOUNT CREDIT PAYMENT</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@stop

