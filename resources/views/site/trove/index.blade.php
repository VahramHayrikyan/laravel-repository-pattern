@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('site/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/trove.css') }}">
@stop
<link rel="stylesheet" href="{{ asset('site/bootstrap5/css/bootstrap.min.css') }}">
@section('content')
    <section class="container" style="margin-top: 133px">
        <div class="row img_cover py-5" style="background-image: url(assets/v2/img/trove/trove-header-bg.jpg);margin-left: -62px;
    margin-right: -64px">
            <div class="col-12 col-md text-center text-md-start" >
                <div class="trove-store-header-phrase text-center pb-3" style="

                font-family: 'Stadium 1946', sans-serif;
                font-size: 50px;
                font-weight: normal;
                color: #dc291e;
                text-transform: uppercase;
                text-shadow: 4px 5px 0 #000000;">
                    Treasure <br> Trove
                    <img src="{{ asset('/assets/v2/img/trove/coin.png') }}" alt="img">
                </div>
            </div>
            <div class="col-12 col-md-5 col-lg-7 col-xl-6">
                <div class="mobile-carousel-logo pb-5">
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/store/filter-icon-all-red.png"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                 class="d-inline-block" alt="icon-all">
                               <img src='https://www.opiumpulses.com/uploads/category/1/filter-icon-stream-red.png' alt="icon-all" class="store-header-filters-item-img-hover">


                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                    <div class="text-center">
                        <div class="store-header-filters-item-img-wrapper">
                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all.png') }}"
                                 class="d-inline-block" alt="icon-all">
                            {{--                            <img src="{{ asset('/assets/v2/img/store/filter-icon-all-red.png') }}" alt="icon-all" class="store-header-filters-item-img-hover">--}}
                        </div>
                        <div class="store-header-filters-item-name p-2">all</div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md text-center text-md-start mt-5 mt-md-0" >
                <div class="store-header-info" style="
            -webkit-tap-highlight-color: rgba(0,0,0,0);
            box-sizing: border-box;
            backface-visibility: hidden;
            flex-shrink: 0;
            max-width: 200px;
            font-family: 'Stadium 1946', sans-serif;
            font-size: 24px;
            font-weight: normal;
            line-height: 1;
            color: #f4f3f3;
            text-transform: uppercase;
            text-align: center;
            text-shadow: 4px 5px 0 #000000;">
                    all games delivered
                    <span class="store-header-info-big">instantly!</span><br>
                    <span class="store-header-info-small">SPEND POINTS FOR FREE GAMES</span>
                </div>
            </div>
        </div>
        <div class="row py-5" style="background-color: #2b2a2a;    margin-left: -62px;
    margin-right: -64px;">
            <div class="col-12 pb-3">
                <div class="row img_cover py-2 align-items-center"
                     style="background-image: url(assets/v2/img/store/store-settings-filters-img-bg.jpg);margin: 0">
                    <div class="col-6 filter-text">
                        <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                        filter games
                    </div>
                    <div class="col-6">
                        {{--                        <div class="menu-icon" data-behaviour="toggle-menu-icon">--}}
                        {{--                            <span class="menu-icon__bar"></span>--}}
                        {{--                        </div>--}}
                        <div class="menu-icon float-end">
                            <span class="menu-icon__bar"></span>
                        </div>
                        <div class="settings-filters-hide-block">
                            <div class="settings-filters-blocks-wrapper">
                                <div class="settings-filters-blocks text-center pb-2">
                                    <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                                        aria-controls="flush-collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                                 aria-labelledby="flush-headingOne"
                                                 data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body">hello 1</div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="flush-headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
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
                                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
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
            </div>
            <div class="col-12 text-center">
                <div class="row">
                    @foreach($data['trove'] as $trove)
                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                            <div class="trove-header p-2">
                                <img width="20vw" data-original-title="Steam"
                                     src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                     alt="icon">
                                <a href="" class="px-2">{{ $trove->title }}</a>
                            </div>
                            <div class="trove-content  img_cover"
                                 style="height:25vh;background-image: url(https://www.opiumpulses.com/uploads/product/5493/main_image_optimized.jpg)"></div>
                            <div class="trove-footer">
                                <div class="points p-2"><span class="text-danger">{{ $trove->points_price }}</span> Points</div>
                                <div class="row">
                                    <div class="col-6 store-item-systems">
                                        icon
                                        icon
                                    </div>
                                    <div class="col-6 p-2 text-center store-item-btn-wrapper">
                                        <button class="btn ">
                                            Buy
                                            <svg fill="#fff" x="0px" y="0px" width="5vw" height="5vh">
                                                <use xlink:href="#pig-coin"></use>
                                            </svg>
                                        </button>
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
            speed: 600,
            slidesToShow: 9,
            slidesToScroll: 3,
            arrows: false,
            responsive: [
                {
                    breakpoint: 1300,
                    settings: {
                        slidesToShow: 6,
                        infinite: true,
                        dots: true,

                    }
                },
                {
                    breakpoint: 1100,
                    settings: {
                        slidesToShow: 3,
                        dots: true,
                    }
                },
            ]
        });
        $('div.float-end.menu-icon').on('click',function (){
            $(this).toggleClass('menu-icon--open')
            $(this).next('div.settings-filters-hide-block').toggleClass('activeH')
        })
    </script>
@stop
