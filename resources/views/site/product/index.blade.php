@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('site/js/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/product.css') }}">
@stop
@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="row p-3">
                    <div class="col-12 col-lg-8 order-1 order-lg-0">
                        <div class="row h-100">
                            <div class="col-12 pb-2 pb-md-3 pb-lg-0 ">
                                <div class="product-image-carousel ">
                                    {{--                                    @for($i = 0 ; $i < 7 ; $i ++)--}}
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/3_optimized.jpg)">
                                    </div>
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/1_optimized.jpg)">
                                    </div>
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/2_optimized.jpg)">
                                    </div>
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/4_optimized.jpg)">
                                    </div>
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/1_optimized.jpg)">
                                    </div>
                                    <div class="img_cover mx-2 slider-image"
                                         style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/2_optimized.jpg)">
                                    </div>
                                    {{--                                    @endfor--}}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="product-image-carousel-nav">
                                    {{--                                    @for($i = 0 ; $i < 7 ; $i ++)--}}
                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/3_optimized.jpg)">
                                    </div>
                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/1_optimized.jpg)">
                                    </div>

                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/2_optimized.jpg)">
                                    </div>

                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/4_optimized.jpg)">
                                    </div>

                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/1_optimized.jpg)">
                                    </div>

                                    <div class="img_cover"
                                         style="height: 20vh ;background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/2_optimized.jpg)">
                                    </div>

                                    {{--                                    @endfor--}}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-0">
                        <div class="row">
                            <div class="col-12 p-0 ">
                                <span class="text-width-color">Game Title </span>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="row g-md-2 mt-md-2 mt-lg-0 g-lg-4">
                                    <div class="col-12 img_cover mt-lg-0"
                                         style="height: 25vh;background-image: url(https://www.opiumpulses.com/uploads/product/5999/main_image_optimized.jpg)">

                                    </div>
                                    <div class="bg_color col-12 mt-md-2 mt-lg-0 ">
                                        <div class="row justify-content-around align-items-center py-3">
                                            <div class="col-auto">
                                                <span>{{ $data['product']->getTimeStampAttribute() }}</span>
                                            </div>
                                            <div class="col-auto fs-9">
                                        <span class="hover px-1">
                                            <img src="{{ asset('/assets/v2/img/icon-watch.png') }}"
                                                 alt="icon"> 00
                                        </span>
                                                <span class="hover px-1">
                                            <img src="{{ asset('/assets/v2/img/icon-like.png') }}"
                                                 alt="icon"> 00
                                        </span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-12">
                                <div class="row">
                                    <div class="bg_color col-12 my-2 my-md-0 my-lg-2 ">
                                        <div class="row ">
                                            <div class="col-6">
                                                <div class="row h-100 align-items-center text-center">
                                                    <div class="col-12 h-50 bg_color-white">
                                                        <div class="row h-100">
                                                            <div class="col-12 h-25">
                                                                <div class="d-inline-block stock-clip">
                                                                    10000 in Stock
                                                                </div>
                                                            </div>

                                                            <div class="col-12 h-75">
                                                                <div class="py-2 fs-9">
                                                                    <span>{{ $data['productCategory']->name }}</span>
                                                                </div>
                                                                <div>
                                                                    <img height="25vh"
                                                                         src="{{ asset('/assets/v2/img/store/'.$data['productCategory']->image) }}"
                                                                         alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 h-50 bg_color-white">
                                                        <div class="row align-items-center h-100">
                                                            <div class="col-12">
                                                                <div class="py-2">
                                                                    <span class="fs-9">Systems</span>
                                                                </div>
                                                                <div>
                                                                    {{ $data['product']->getPlatformsArray() }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="row text-center align-items-center ">
                                                    <div class="col-12 py-4">
                                                        <del class="fs-6">RRP: $49.99</del>
                                                        <br>
                                                        <span class="fs-5 text-width-color">OUR PRICE: $27.72</span>

                                                    </div>
                                                    <div class="col-12 align-middle">
                                                        <button class="btn_style">add to cart
                                                            <svg fill="#fff" x="0px" y="0px" width="2vw" height="3vh">
                                                                <use xlink:href="#cart"></use>
                                                            </svg>
                                                        </button>
                                                        <button class="btn_style my-3">add to wishlist +</button>
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
            </div>
            <div class="col-12 ">
                <div class="row py-3">
                    <div class="col-12">
                        <div class="flex-column-reverse flex-lg-row row">
                            <div class="col-12 col-lg-6">
                                <nav>
                                    <div class="nav nav-tabs nav-pills nav-justified" id="nav-tab" role="tablist">
                                        <a class="nav-link mx-2 py-3  active" id="nav-home-tab" data-bs-toggle="tab"
                                           href="#nav-home"
                                           role="tab" aria-controls="nav-home" aria-selected="true">Description</a>
                                        <a class="nav-link mx-2 py-3 " id="nav-profile-tab" data-bs-toggle="tab"
                                           href="#nav-profile"
                                           role="tab" aria-controls="nav-profile" aria-selected="false">Achievement</a>
                                        <a class="nav-link mx-2 py-3 " id="nav-contact-tab" data-bs-toggle="tab"
                                           href="#nav-contact"
                                           role="tab" aria-controls="nav-contact" aria-selected="false">Reviews</a>

                                    </div>
                                </nav>
                            </div>
                            <div class="col-12 col-lg-6 pt-2  text-lg-end">
                                <span class="fs-9 ps-2">share</span>
                                <span><img
                                        src="http://127.0.0.1:8000/assets/v2/img/icon/icon-f.png"
                                        alt="fb" class="img"></span>
                                <span><img
                                        src="http://127.0.0.1:8000/assets/v2/img/icon/icon-tw.png"
                                        alt="tw" class="img"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-8 bg_color ">
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row justify-content-between px-3 py-5">
                                    <div class="col-12 ">
                                        @for($i = 0; $i < 4 ; $i++)
                                            <div class="description-content-text">
                                                <h6>A PLAYING FIELD MADE FOR YOU, BY YOU</h6>
                                                <p class="fs-8">Use the comprehensive Academy editing suite to create a
                                                    player just like
                                                    YOU as well as your own courts, or you can download thousands of
                                                    community creations.</p>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="col-12">
                                        <div class="row noListIcon justify-content-center">
                                            <div class="col-12">
                                                <h4>SYSTEM REQUIREMENTS</h4>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div style="background: #1C2B3C;font-weight: bold;" class="py-3 px-4">
                                                    Windows
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 ps-4">
                                                        <strong class="ps-3">Minimum:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>
                                                                    Requires a 64-bit processor and operating system
                                                                </span><br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong>
                                                                <span>Windows 10 x64</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i3-3210 / AMD Athlon II X4 555</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span> 4 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span> Radeon HD 6670 or NVIDIA Geforce GT710 with Min 2GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span> Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span> Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong> 15 GB available space
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6"><strong>Recommended:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>Requires a 64-bit processor and operating system</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong>
                                                                <span>Windows 10 x64</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i5-4200 / AMD Phenom II X4 970</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span>8 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span>AMD Radeon R9 390X or NVIDIA GeForce GTX 970 with minimum 4GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span>Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span>Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong>
                                                                <span>15 GB available space</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div style="background: #1C2B3C;font-weight: bold;" class="py-3 px-4">
                                                    Windows
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 ps-4">
                                                        <strong class="ps-3">Minimum:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>Requires a 64-bit processor and operating system</span><br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong><span>Windows 10 x64</span><br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i3-3210 / AMD Athlon II X4 555</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span> 4 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span> Radeon HD 6670 or NVIDIA Geforce GT710 with Min 2GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span> Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span> Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong> 15 GB available space
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6"><strong>Recommended:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>Requires a 64-bit processor and operating system</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong>
                                                                <span>Windows 10 x64</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i5-4200 / AMD Phenom II X4 970</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span>8 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span>AMD Radeon R9 390X or NVIDIA GeForce GTX 970 with minimum 4GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span>Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span>Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong>
                                                                <span>15 GB available space</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 py-2">
                                                <div style="background: #1C2B3C;font-weight: bold;" class="py-3 px-4">
                                                    Windows
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-6 ps-4">
                                                        <strong class="ps-3">Minimum:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>
                                                                    Requires a 64-bit processor and operating system
                                                                </span><br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong>
                                                                <span>Windows 10 x64</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i3-3210 / AMD Athlon II X4 555</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span> 4 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span> Radeon HD 6670 or NVIDIA Geforce GT710 with Min 2GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span> Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span> Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong> 15 GB available space
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6"><strong>Recommended:</strong><br>
                                                        <ul class="bb_ul">
                                                            <li>
                                                                <span>Requires a 64-bit processor and operating system</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>OS:</strong>
                                                                <span>Windows 10 x64</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Processor:</strong>
                                                                <span>Intel Core i5-4200 / AMD Phenom II X4 970</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Memory:</strong>
                                                                <span>8 GB RAM</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Graphics:</strong>
                                                                <span>AMD Radeon R9 390X or NVIDIA GeForce GTX 970 with minimum 4GB Memory</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>DirectX:</strong>
                                                                <span>Version 11</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Network:</strong>
                                                                <span>Broadband Internet connection</span>
                                                                <br>
                                                            </li>
                                                            <li>
                                                                <strong>Storage:</strong>
                                                                <span>15 GB available space</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="row description-content-image my-2 align-items-center justify-content-around img_cover" style="background-image: url(https://www.opiumpulses.com/uploads/product/5999/extra/2_optimized.jpg)">
                                            <div class="col-6 text-end">
                                                <button class="btn_style ">
                                                    add to cart
                                                    <svg fill="#fff" x="0px" y="0px" width="2vw" height="3vh">
                                                        <use xlink:href="#cart"></use>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="col-6">
                                                <button class="btn_style ">add to wishlist +</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="row justify-content-between px-3 py-5 g-2">

                                    <div class="col-auto text-center achievements-item bg_color-white pt-3 ">
                                         <div class="row align-items-center h-100">
                                             <div class="col">
                                                 <div>
                                                     <span>NOT POINTLESS</span>
                                                 </div>
                                                 <div class="py-3">
                                                     <img src="https://www.opiumpulses.com/uploads/product/5999/achievements/0_optimized.jpg" alt="">
                                                 </div>
                                                 <div>
                                                     <span>Win a point.</span>
                                                 </div>
                                             </div>
                                         </div>
                                    </div>

                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="row justify-content-between">
                                    ...
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 bg_color">
                        <div class="row">
                            <div class="col-12 pt-4">
                                <div class="py-2">
                                    <span class="fs-5">Developer :</span>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="" class="tag-a active">{{ $data['product']->game_developer }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <div class="py-2">
                                    <span class="fs-5">Publisher :</span>
                                </div>
                                <div class="row">
                                    <div class="col-auto">
                                        <a href="" class="tag-a  ">{{ $data['product']->game_publisher }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pt-4">
                                <div class="py-2">
                                    <span class="fs-5">Product Categories :</span>
                                </div>
                                <div class="row flex-wrap">
                                   @foreach($data['tags'] as $tag)
                                        <div class="col-auto mt-2 mb-3">
                                            <a href="" class="tag-a ">{{ $tag->name }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-12"></div>
                            <div class="col-12"></div>
                            <div class="col-12"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('site/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/index.js') }}"></script>

    <script>
        $('.product-image-carousel').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            fade: true,
            asNavFor: '.product-image-carousel-nav'
        });
        $('.product-image-carousel-nav').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            asNavFor: '.product-image-carousel',
            dots: false,
            arrows: false,
            focusOnSelect: true,
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 6,
                        infinite: true,

                    }
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 2,
                    }
                },
            ]
        });
    </script>
@stop
