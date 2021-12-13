@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('site/js/slick/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/arcade.css?v=1') }}">
@stop
@section('content')
    <section class="container-fluid" style="background-color: #212121;">
        <div class="row">
            <div class="col-12">
                <div class="row img_cover py-5 align-items-center"
                     style="background-image: url(https://www.opiumpulses.com/images/man_background.png);">
                    <div class="col-12 text-center">
                        <h4>FEATURED GAMES</h4>
                    </div>
                    <div class="d-none d-lg-block col-lg-3 col-xl-3">
                        <div class="img_contain"
                             style="background-image: url(https://www.opiumpulses.com/uploads/banner/promo-big-slide2-img.png)">
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 col-xl-6">
                        <div class="mobile-carousel-logo pb-5">
                            @foreach($data['arcade_games_recently'] as $key => $arcade)
                                <div class="text-center">
                                    <div class="img_cover mx-1"
                                         style="height: 90px;width:90px;background-image: url('https://www.opiumpulses.com/{{ $arcade->image }}');">
                                        <a href="">
                                            <div class="slider pt-2 hover-div"
                                                 style="background-color:rgba(220, 41, 30, 0.5);font-size: 12px">
                                                <span class="pb-1 " style="color: white">title</span>
                                                <div class="mt-2 " style="color: black;border-bottom:2px solid black;border-top: 2px solid black">
                                                    Played <br>
                                                    0 Times
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="d-none d-xl-block col-xl-3">
                        <div class="store-header-info" style="color: #dc291e">
                            FREE TO PLAY <br>
                            <span class="store-header-info-big" style="color: #fff">BROWSER!</span><br>
                            GAMES
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row py-5" style="background-color: #2b2a2a">
                    <div class="col-12 pb-3">
                        <div class="row img_cover py-2 align-items-center"
                             style="background-image: url(assets/v2/img/store/store-settings-filters-img-bg.jpg)">
                            <div class="col-6 col-lg-3 filter-text">
                                <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                                filter games
                            </div>
                            <div class="col-6 d-lg-none">
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
                                                                data-bs-target="#flush-collapseOne"
                                                                aria-expanded="false"
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
                            <div class="d-none d-lg-flex col-9">
                                <div class="row justify-content-between w-100">
                                    <div class="col-4 text-center">
                                        <span class="filter-button">Genre</span>
                                        <ul class="collapsed_genre " >
                                            @foreach($data['genres'] as $genre)
                                            <li class="my-2 hover">{{ $genre }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-4 text-center">
                                        <span class="filter-button">Engine</span>
                                        <ul class="collapsed_genre " >
                                            @foreach($data['engines'] as $engine)
                                                <li class="my-2 hover">{{ $engine }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="col-4 text-end">
                                        <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                                        <span>reset filters</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <nav>
                            <div class="nav nav-tabs nav-pills nav-justified" id="nav-tab" role="tablist">
                                <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home"
                                   role="tab" aria-controls="nav-home" aria-selected="true">RECENTLY ADDED</a>
                                <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile"
                                   role="tab" aria-controls="nav-profile" aria-selected="false">SINGLE PLAYER GAMES</a>
                                <a class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact"
                                   role="tab" aria-controls="nav-contact" aria-selected="false">MULTIPLAYER GAMES</a>
                                <a class="nav-link" id="nav-popular-tab" data-bs-toggle="tab" href="#nav-popular"
                                   role="tab" aria-controls="nav-popular" aria-selected="false">MOST PLAYED GAMES</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                 aria-labelledby="nav-home-tab">
                                <div class="row justify-content-between">
                                    @foreach($data['arcade_games_recently'] as $arcade)
                                        <div class="trove-carousel-div-content col-auto my-2 mx-1">
                                            <div class="trove-carousel-div-header">
                                                Free
                                            </div>
                                            <div class="trove-carousel-div-midle img_cover  "
                                                 style="background-image: url({{ $arcade->image }})">
                                                <div class="h-100 w-100 hover-div"
                                                     style="background-color:rgba(220, 41, 30, 0.5);">
                                                    <a href="{{ url("/arcade/$arcade->id/play") }}">
                                                        <button class="btn_style"
                                                                style="min-width: unset;position: relative;top: 30%;">
                                                            Play
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="trove-carousel-div-footer p-3">
                                                {{ $arcade->title }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                 aria-labelledby="nav-profile-tab">
                                <div class="row justify-content-between">
                                    @foreach($data['arcade_games_single_player'] as $arcade)
                                        <div class="trove-carousel-div-content col-auto my-2 mx-1">
                                            <div class="trove-carousel-div-header">
                                                Free
                                            </div>
                                            <div class="trove-carousel-div-midle img_cover  "
                                                 style="background-image: url({{ $arcade->image }})">
                                                <div class="h-100 w-100 hover-div"
                                                     style="background-color:rgba(220, 41, 30, 0.5);">
                                                    <a href="{{ url("/arcade/$arcade->id/play") }}">
                                                        <button class="btn_style"
                                                                style="min-width: unset;position: relative;top: 30%;">
                                                            Play
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="trove-carousel-div-footer p-3">
                                                {{ $arcade->title }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                 aria-labelledby="nav-contact-tab">
                                <div class="row justify-content-between">
                                    @foreach($data['arcade_games_multiplayer'] as $arcade)
                                        <div class="trove-carousel-div-content col-auto my-2 mx-1">
                                            <div class="trove-carousel-div-header">
                                                Free
                                            </div>
                                            <div class="trove-carousel-div-midle img_cover  "
                                                 style="background-image: url({{ $arcade->image }})">
                                                <div class="h-100 w-100 hover-div"
                                                     style="background-color:rgba(220, 41, 30, 0.5);">
                                                    <a href="{{ url("/arcade/$arcade->id/play") }}">
                                                        <button class="btn_style"
                                                                style="min-width: unset;position: relative;top: 30%;">
                                                            Play
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="trove-carousel-div-footer p-3">
                                                {{ $arcade->title }}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-popular" role="tabpanel"
                                 aria-labelledby="nav-popular-tab">
                                <div class="row justify-content-between">
                                    @foreach($data['arcade_games_most'] as $arcade)
                                        <div class="trove-carousel-div-content col-auto my-2 mx-1">
                                            <div class="trove-carousel-div-header">
                                                Free
                                            </div>
                                            <div class="trove-carousel-div-midle img_cover  "
                                                 style="background-image: url({{ $arcade->image }})">
                                                <div class="h-100 w-100 hover-div"
                                                     style="background-color:rgba(220, 41, 30, 0.5);">
                                                    <a href="{{ url("/arcade/$arcade->id/play") }}">
                                                        <button class="btn_style"
                                                                style="min-width: unset;position: relative;top: 30%;">
                                                            Play
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="trove-carousel-div-footer p-3">
                                                {{ $arcade->title }}
                                            </div>
                                        </div>
                                    @endforeach
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
    <script src="{{ asset('site/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/index.js') }}"></script>
    <script>
        $('.mobile-carousel-logo').slick({
            dots: true,
            infinite: false,
            autoplay: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 3,
            arrows: true,
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
                        slidesToShow: 5,
                    }
                },
                {
                    breakpoint: 425,
                    settings: {
                        slidesToShow: 3,
                    }
                },
            ]
        });
        $('div.float-end.menu-icon').on('click', function () {
            $(this).toggleClass('menu-icon--open')
            $(this).next('div.settings-filters-hide-block').toggleClass('activeH')
        })
        $('.filter-button').on('click', function () {
            $(this).next('ul.collapsed_genre').toggleClass('opened_gere')
        })
    </script>
@stop
