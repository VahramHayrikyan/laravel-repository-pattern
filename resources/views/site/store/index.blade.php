@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('site/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/store.css') }}">
@stop
@section('content')
    <section class="container-fluid">
        <div class="row img_cover py-5 justify-content-center"
             style="background-image: url(assets/v2/img/trove/trove-header-bg.jpg);">
            <div class="col-12 col-custom-xxl-10 col-custom-xxxl-8 ">
                <div class="row align-items-center">
                    <div class="col-12 col-md-4 col-lg-3 col-xl-2">
                        <div class="trove-store-header-phrase text-center pb-3">
                            <p> welcome to the</p>
                            <div class="d-flex align-items-end justify-content-center">
                                <img src="{{ asset('/assets/v2/img/store/OP.png') }}"
                                     alt="logo">
                                <span >Store</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-5 col-xl-7">
                        <div class="mobile-carousel-logo pb-5">
                            <div class="text-center">
                                <div class="store-header-filters-item-img-wrapper">
                                    <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                         class="d-inline-block" alt="icon-all">
                                    {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                                </div>
                                <div class="store-header-filters-item-name p-2">all</div>
                            </div>
                            @foreach($data['productCategories'] as $category)
                                <div class="text-center">
                                    <div class="store-header-filters-item-img-wrapper">
                                        <img src="{{ asset('/assets/v2/img/store/'. $category->image) }}"
                                             class="d-inline-block" alt="icon-all">
                                        {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                                    </div>
                                    <div class="store-header-filters-item-name p-2">{{ $category->name }}</div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 col-xl-3">
                        <div class="store-header-info" >
                            all games delivered <br>
                            <span class="store-header-info-big">instantly!</span><br>
                            <span class="store-header-info-small fs-md-5">excluding preorders</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5 justify-content-center " style="background-color: #2b2a2a">
            <div class="col-12 col-custom-xxl-10 col-custom-xxxl-8 ">
                <div class="row">
                    <div class="col-12 pb-3">
                        <div class="row img_cover py-2 align-items-center"
                             style="background-image: url(assets/v2/img/store/store-settings-filters-img-bg.jpg)">
                            <div class="col-8 col-lg-2 filter-text">
                                <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                                filter games
                            </div>
                            <div class="col-4 d-lg-none">
                                <div class="menu-icon float-end">
                                    <span class="menu-icon__bar"></span>
                                </div>
                            </div>
                            <div class="col-12 d-lg-none p-0">
                                <div class="position-relative">
                                    <div class="settings-filters-hide-block">
                                        <div class="settings-filters-blocks-wrapper">
                                            <div class="settings-filters-blocks text-center pb-2">
                                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingOne">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseOne"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseOne">
                                                                Accordion Item #1
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                             aria-labelledby="flush-headingOne"
                                                             data-bs-parent="#accordionFlushExample">
                                                            <div class="settings-filters-block-items">
                                                                <a href="javascript:void(0)" data-filter-all="1" data-multiple-text=" systems selected" class="settings-filters-block-item">All systems</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">Android</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item">iOS</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item settings-filters-block-item--current">Linux</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item settings-filters-block-item--current">Mac</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">Oculus Quest</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item settings-filters-block-item--current">Oculus Rift</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item settings-filters-block-item--current">PS3</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">PS4</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">PSP</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">PSVita</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">SteamOS</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">switch</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">Windows</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">Xbox 360</a>
                                                                <a href="javascript:void(0)" data-filter-system="" class="settings-filters-block-item ">Xbox One</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingTwo">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseTwo"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseTwo">
                                                                Accordion Item #2
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                                             aria-labelledby="flush-headingTwo"
                                                             data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">hello 2</div>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="flush-headingThree">
                                                            <button class="accordion-button collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#flush-collapseThree"
                                                                    aria-expanded="false"
                                                                    aria-controls="flush-collapseThree">
                                                                Accordion Item #3
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseThree" class="accordion-collapse collapse"
                                                             aria-labelledby="flush-headingThree"
                                                             data-bs-parent="#accordionFlushExample">
                                                            <div class="accordion-body">hello 3</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-none d-lg-flex col-10">
                                <div class="row justify-content-between align-items-center  w-100">
                                    <div class="col-2 text-center" >
                                        <span class="filter-button">All Systems</span>
                                        <ul class="collapsed_genre ">
                                            @foreach($data['allSystems'] as $system)
                                                <li class="my-2 hover">{{ $system }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="filter-button">All Genres</span>
                                        <ul class="collapsed_genre ">
                                            @foreach($data['allGenres'] as $genre)
                                                <li class="my-2 hover">{{ $genre }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="filter-button">All types</span>
                                        <ul class="collapsed_genre ">
                                            @foreach($data['allTypes'] as $type)
                                                <li class="my-2 hover">{{ $type }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="filter-button">All Tags</span>
                                        <ul class="collapsed_genre ">
                                            @foreach($data['allTags'] as $tag)
                                                <li class="my-2 hover">{{ $tag }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-2 text-center">
                                        <span class="filter-button">Sort By</span>
                                        <ul class="collapsed_genre ">
                                            <li class="my-2 hover">Release New to Old</li>
                                            <li class="my-2 hover">Release Old to New</li>
                                            <li class="my-2 hover">Price Low to High</li>
                                            <li class="my-2 hover">Price High to Low</li>
                                            <li class="my-2 hover">A to Z</li>
                                            <li class="my-2 hover">Z to A</li>
                                            <li class="my-2 hover">Most Viewed</li>
                                            <li class="my-2 hover">Best Sellers</li>
                                            <li class="my-2 hover">Recently Added</li>
                                        </ul>
                                    </div>
                                    <div class="col-2 text-end">
                                        <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                                        <span class="fs-md-9">reset filters</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12  text-center">
                        <div class="row justify-content-center row-cols-xxl-4 g-4">
                            @foreach($data['trove'] as $trove)
                                <div class="col-12 col-md-6 col-lg-4 col-xxl ">
                                    <div class="trove-product">
                                        <div class="trove-header ">
                                            <img height="50vh" data-original-title="Steam"
                                                 style="max-height: 20px;padding-left: 10px"
                                                 src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                                 alt="icon">
                                            <a href="" class="px-2">{{ $trove->title }}</a>
                                            <div class="fs-5 fw-bold" style="padding: 5px 12px;background-color: #ed1c24;">
                                                -45%
                                            </div>
                                        </div>
                                        <div class="trove-content  img_cover"
                                             style="height: 180px;background-image: url(https://www.opiumpulses.com/uploads/product/5493/main_image_optimized.jpg)">
                                            <div class="row h-100 m-0 w-100  trove-product-hidden "
                                                 style="background-color: rgba(1,1,1,0.6)">
                                                <div class="col-12 text-center">
                                                    <div class="row align-items-end">
                                                        <div class="col">
                                                            <span class="fs-9">share</span>
                                                            <span><img
                                                                    src="http://127.0.0.1:8000/assets/v2/img/icon/icon-f.png"
                                                                    alt="fb" class="img"></span>
                                                            <span><img
                                                                    src="http://127.0.0.1:8000/assets/v2/img/icon/icon-tw.png"
                                                                    alt="tw" class="img"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row g-2">
                                                        <div class="col-12">
                                                            <a href="{{ url('/store/product/'. $trove->id) }}" class="btn_style">more info</a>
                                                        </div>
                                                        <div class="col-12">
                                                            <button class="btn_style" onclick="notLoggedInPopup()">add to wishlist</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="row justify-content-between  h-100 align-items-center">
                                                        <div class="col-auto fs-9">
                                                            Release Date: 9 Jan, 2020
                                                        </div>
                                                        <div class="col-auto  fs-9">
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
                                        <div class="trove-footer px-3">
                                            <div class="row ">
                                                <div class="points py-2 col-6 store-item-systems">
                                                    <div class="d-flex align-items-center justify-content-center h-100">
                                                        <del>RRP: ${{ $trove->normal_price_usd }}</del>
                                                    </div>
                                                </div>
                                                <div class="points py-2 col-6  ">
                                                    PRICE:
                                                    <span class="text-width-color ">${{ $trove->price }}</span>
                                                </div>
                                                <div class="col-6 store-item-systems">
                                                    {{ $trove->getPlatformsArray() }}
                                                </div>
                                                <div class="col-6 py-2 text-center store-item-btn-wrapper">
                                                    <button class="btn_style p-lg-0" onclick="addProductToCart({{ $trove->id }})">
                                                        add to cart
                                                        <svg class="d-none d-lg-inline-block " fill="#fff" x="0px" y="0px" width="30px" height="30px">
                                                            <use xlink:href="#cart"></use>
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endforeach
                        </div>
                        <div class="text-center">
                            {{ $data['trove']->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-3 text-center bg-img" style="background-image: url(assets/v2/img/trove-join-bg.jpg)">
            <div class="col-12 order-1 col-md-6 order-md-0 text-end">
                <img src="http://127.0.0.1:8000/assets/v2/img/store/store-trove-img.png" alt="">
            </div>
            <div class="col-12 order-0 col-md-6 order-md-1 text-start">
                <p class="treasure-title">Spend your points</p>
                <p class="treasure-body">on great value games <br> in the TREASURE TROVE</p>
                <button class="btn_style">Dive into our Trove</button>
            </div>
        </div>
    </section>
@endsection
@section('js')
    <script src="{{ asset('site/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/index.js') }}"></script>
    <script>
        $('.mobile-carousel-logo').slick({
            dots: true,
            infinite: false,
            autoplay: false,
            speed: 300,
            slidesToShow: 9,
            slidesToScroll: 3,
            arrows: false,
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
            ]
        });
        $('div.float-end.menu-icon').on('click', function () {
            $(this).toggleClass('menu-icon--open')
            $ ('div.settings-filters-hide-block').fadeToggle()
        })
        $('.filter-button').on('click', function () {
            $(this).next('ul.collapsed_genre').toggleClass('opened_gere')
        })
        $('.settings-filters-block-item').on('click',function () {
          $(this).toggleClass('settings-filters-block-item--current')

        })
        $('.trove-product').hover(function () {
            $(this).find('div.trove-content').find('.trove-product-hidden').css('visibility', 'unset');
            $(this).find('div.trove-header').css({
                backgroundColor: '#ed1c24',
            })
            $(this).find('div.trove-header').find('a').css('color', '#fff')
        }, function () {
            $(this).find('div.trove-content').find('.trove-product-hidden').css('visibility', 'hidden')
            $(this).find('div.trove-header').css({
                backgroundColor: '#100f0f',
            })
            $(this).find('div.trove-header').find('a').css('color', '#ed1c24')
        });
    </script>
@stop
