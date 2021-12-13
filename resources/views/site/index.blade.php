@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('site/js/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/index.css') }}">
@stop
@section('content')
    <section class="container-fluid">
        {{--  First-Carousel Start  --}}
        <div class="row py-3" style="background-color: #212121;">
            <div class="col">
                <div class="first-carousel-div">
                    @for($i = 0;$i < 7;$i++)
                        <div class="a-div">
                            <a href="" class="first-carousel-a"
                               style="background-image: url(https://www.opiumpulses.com/uploads/product/5756/AC-0_optimized.jpg)"></a>
                        </div>
                    @endfor
                </div>
            </div>
        </div>
        {{--  First-Carousel End   --}}
        {{-- Staff-pickes and big-slider start   --}}
        <div class="row py-3 bg-color-gray">
            <div class="col-12 order-1 staff-picks col-xl-3 order-xl-0">
                <div style="background-image: url(site/image/bg/promo-top-games-title-bg.jpg)"
                     class="text-center my-2 mt-md-0">
                    STAFF PICKS
                </div>
                <div class="row justify-content-center staff-pick">
                    @for($staff = 0;$staff < 3;$staff++)
                        <div class="col-12 col-sm-6 col-lg-4 col-xl-12 ">
                            {{--                        <img src="https://www.opiumpulses.com{{ $data['products'][$staff]->getStaffPickImageUrl() }}" alt=""--}}
                            <div class="row justify-content-center row-cols-1">
                                <div class="col-12 col-xsm-9 col-md-10 col-xl-12 ">
                                    <img src="https://www.opiumpulses.com/uploads/product/5733/doome_optimized.png" alt=""
                                         width="100%" class="img_contain">
                                </div>
                                <div class="col-12 col-xsm-9 col-md-10 col-xl-12 py-2">
                                    <span class="pt-2">{{ isset($data['products']) && count($data['products']) > 1 ? $data['products'][$staff]->title : 'Title' }}</span>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="col-12 order-0 col-xl-9 order-xl-1 staff-picks-carousel">
                <div class="text-center second-carousel-div">
                    <div class="img_cover"
                         style="background-image: url('https://www.opiumpulses.com/uploads/banner/promo-big-slide2-bg.jpg')">
                        <div class="row align-items-center h-100">
                            <div class="col-12 order-1 col-md-4 col-xl-3 order-md-0 h-50 ">
                                <div class="h-100 w-100 img_contain second-carousel-div-bg"
                                     style="background-image: url(https://www.opiumpulses.com/uploads/banner/promo-big-slide2-img.png)">
                                </div>
                            </div>
                            <div class="col-12 order-0 col-md-8 col-xl-9 order-md-1">
                                <div class="container-fluid ">
                                    <div class="container pt-4">
                                        <div class="d-flex align-items-end justify-content-center">
                                            <img
                                                src="https://www.opiumpulses.com/uploads/banner/promo-big-slide1-logo.png"
                                                alt="logo">
                                            <span class="second-carousel-first-span">Store</span>
                                        </div>
                                        <p class="second-carousel-midl-span">ESSENTIAL SOFTWARE</p>
                                        <p class="second-carousel-last-span d-inline-block ">at the best prices!</p>
                                        <br>
                                        <a href="https://opiumpulses.com/store/type/software" target="_self"
                                           class="btn_style ">
                                            <!--button_link-->
                                            view software
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Staff-pickes and big-slider end   --}}
        {{-- Latest Articles Start  --}}
        <div class="row py-3 text-center pt-5 articles justify-content-xxl-center" style="background-image: url(assets/v2/img/articles-bg.jpg)">
            <div class="col-12 my-3">
                <span class="fw-bold articles-header">LATEST ARTICLES</span>
            </div>
            <div class="col-12">
                <div class="mobile-carousel-articles d-md-none pb-5">
                    @foreach($data['articles'] as $article)
                        <div class=" col-md-6 col-xl-3">
                            <div class="img_cover mobile-carousel-articles-img"
                                      style="background-image: url('https://www.opiumpulses.com/uploads/articles/415/H2x1_NSwitchDS_ChickenPolicePaintItRed_image1600w.jpg');">
{{--                                 style="background-image: url({{ $article->getImageUrl() }}); height: 50vh;">--}}

                            </div>
                            <div class="span-div">
                                <span>{{ $article->title }}</span>
                            </div>
                            <div class="article-div">
                                {!! $article->shortContent(50) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12 col-xxl-10 ">
                <div class="row d-none d-md-flex g-3 ">
                    @foreach($data['articles'] as $article)
                        <div class="img_contain col-md-6 col-xl-3">
                            <div class="img_cover latest-article-bg"
                                 style="background-image: url('https://www.opiumpulses.com/uploads/articles/415/H2x1_NSwitchDS_ChickenPolicePaintItRed_image1600w.jpg');">
{{--                            style="background-image: url({{ $article->getImageUrl() }}); height: 50vh;">--}}

                            </div>
                            <div class="span-div">
                                <span>{{ $article->title }}</span>
                            </div>
                            <div class="article-div">
                                {!! $article->shortContent(50) !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="col-12">
                <button class="btn_style my-4 px-5">View All</button>
            </div>
        </div>
        {{-- Latest Articles End--}}
        {{-- COMPLETE-QUEST Quest Start--}}
        <div class="row pt-3 bg-img complete-quest align-items-center corner-box "
             style="background-image: url(assets/v2/img/articles-points-bg.jpg)">
            <div class="corner"></div>
            <div class="col-12 col-md-7 col-xxl-5 offset-2 text-center text-md-start ps-xl-5">
                <p>Complete quests - earn points</p>
                <span>Exchange points for games!</span>
            </div>
            <div class="col-12 col-md-5 ">
                <div class=" justify-content-around img_contain complete-quest-img mt-4 mt-md-0 d-md-flex align-items-md-center "
                     style="background-image: url(/assets/v2/img/articles-points-img.png);">
                    <div class="w-100">
                        <button class="btn_style ">Start Collection points</button>
                    </div>
                </div>

            </div>
        </div>
        {{-- Complite Quest End   --}}
        {{-- Latest Giveaway start  --}}
        <div class="row py-3" style="background-image: url(assets/v2/img/giveaways-bg.jpg)">
            <div class="col-12">
                <div class="text-center py-5 d-flex giveaways-title justify-content-md-center align-items-md-end">
                    <img src="{{ asset('/assets/v2/img/icon-fire.png') }}" alt="icon">
                    <h3 class="fw-bold ">
                        LATEST GIVEAWAYS</h3>
                </div>
                <div class="row justify-content-xxl-center">
                    <div class="col-12 col-xxl-10">
                        <div class="latest-giveaway-carousel pb-5">
                            @foreach($data['giveaways'] as $giveaway)
                                <div class="latest-giveaway-carousel-content ">
                                    <div class="carousel-content-header d-flex justify-content-between ">
                                        <div class=""
                                             data-countdown="2021-01-31 22:00:39">
                                            <img src="{{ asset('assets/v2/img/icon-unlock-white.png') }}"
                                                 class="d-inline-block" alt="">
                                            {{ \Carbon\Carbon::parse($giveaway->end_date)->longAbsoluteDiffForHumans() }}</div>
                                        <div class="">
                                            {{--                                    {{ $giveaway->max_entrants }}--}}
                                            {{ $giveaway->fee >0 ? $giveaway->fee . ' points' : 'FREE' }}
                                            {{--                                    .Yii::t('giveaway',' point| points',$giveaway->fee) --}}
                                        </div>
                                    </div>
                                    <div class="latest-giveaway-carousel-content-img">
                                        <img src="https://www.opiumpulses.com/uploads/giveaway/9588/riseofinsanity-4.jpg" alt="">
                                    </div>
                                    <div class="carousel-content-footer m-0 row">
                                        <div class="col-10 p-0">
                                            <div class="d-flex">
                                                <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                                     data-container="body"
                                                     style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                                     src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                                     alt="img">
                                                <img src="{{ asset('/assets/v2/img/giveaways/jointype/everyone.png') }}"
                                                     data-toggle="tooltip" data-container="body"
                                                     data-original-title="Open for everyone. Anyone can join this giveaway."
                                                     data-placement="top" style="width: 25px;height: 25px;margin-right: 10px;">
                                                {{ $giveaway->title }}
                                            </div>
                                        </div>
                                        <div class="col-2 p-0">
                                            <div class="d-flex">
                                                <img class="d-inline-block me-2" src="{{ asset('assets/v2/img/icon-comments-red.png') }}" alt="icon">
                                                <span>0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center">
                <button class="btn_style my-4 px-5">View All</button>
            </div>
        </div>
        {{-- Latest Givaway end  --}}
        {{-- Join Us start   --}}
        <div class="row py-3 corner-box">
            <div class="corner"></div>
            <div class="col" style="background-image: url(assets/v2/img/giveaways-join-bg.jpg)">
                <div class="row join-us text-center ">
                    <div class="col-12 ">Come & join us on discord.gg</div>
                    <div class="col-12 col-lg-4 my-2">
                        <img src="{{ asset('/assets/v2/img/giveaways-join-img1.png') }}" alt="">
                    </div>
                    <div class="col-12 col-lg-4 my-2">
                        <img src="{{ asset('/assets/v2/img/giveaways-join-img2.png') }}" alt="">
                    </div>
                    <div class="col-12 col-lg-4 my-2">
                        <img src="{{ asset('/assets/v2/img/giveaways-join-img3.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        {{-- Join Us end   --}}
        {{-- Trov Start   --}}
        <div class="row justify-content-xxl-center py-3" style="background-image: url(assets/v2/img/trove-bg.jpg)">
            <div class="col col-xxl-10">
                <div class="row trove ">
                    <div class="col-12 py-2 text-center">
                        <h3 class="fw-bold trove-title">TREASURE TROVE</h3>
                    </div>
                    <div class="col-12 py-4 text-center">
                        <span style="font-size: smaller">FEATURED GAMES</span>
                    </div>
                    <div class="col-12">
                        <div class="row d-md-none">
                            <div class="col trove-carousel-div pb-5">
                                @for($i = 0;$i < 7;$i++)
                                    <div class="trove-carousel-div-content">
                                        <div class="trove-carousel-div-header d-flex">
                                            <div class="row w-100 m-0">
                                                <div class="col-2  text-start">
                                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                                         data-container="body" style="height: 20px;width: auto;"
                                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">

                                                </div>
                                                <div class="col-10 text-end">
                                                    <span class="fw-bold">4410 points</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trove-carousel-div-midle img_cover"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/product/5903/main_image_optimized.jpg');"></div>
                                        <div class="trove-carousel-div-footer py-3">
                                            <div class="row m-0 w-100">
                                                <div class="col-10">
                                                    <span> Crew 167: The Grand Block Odyssey</span>
                                                </div>
                                                <div class="col-2">
                                                    <img src="http://127.0.0.1:8000/assets/v2/img/icon-comments-red.png" alt="icon" class="d-inline-block">
                                                    <span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        </div>
                        <div class="row d-none d-md-flex g-md-3">
                            @for($i = 0;$i < 7;$i++)
                                <div class="col-6 col-lg-4 col-xl-3">
                                    <div class="trove-carousel-div-content">
                                        <div class="trove-carousel-div-header d-flex">
                                            <div class="row w-100 m-0">
                                                <div class="col-2  text-start">
                                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                                         data-container="body" style="height: 20px;width: auto;"
                                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">

                                                </div>
                                                <div class="col-10 text-end">
                                                    <span class="fw-bold">4410 points</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="trove-carousel-div-midle img_cover"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/product/5903/main_image_optimized.jpg');"></div>
                                        <div class="trove-carousel-div-footer py-3">
                                            <div class="row m-0 w-100">
                                                <div class="col-10">
                                                    <span> Crew 167: The Grand Block Odyssey</span>
                                                </div>
                                                <div class="col-2">
                                                    <img src="http://127.0.0.1:8000/assets/v2/img/icon-comments-red.png" alt="icon" class="d-inline-block">
                                                    <span>0</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Trov End   --}}
        {{-- Tresures Start  --}}
        <div class="row py-3 text-center bg-img corner-box" style="background-image: url(assets/v2/img/trove-join-bg.jpg)">
            <div class="corner"></div>
            <div class="col-12 order-1 col-md-5 text-md-end order-md-0">
                <img src="{{ asset('/assets/v2/img/trove-join-img.png') }}" alt="">
            </div>
            <div class="col-12 order-0 col-md-7 text-md-start align-self-md-center order-md-1">
                <div class="">
                    <p class="treasure-title d-inline-block">Dive into our other treasures!</p>
                </div>
                <button class="btn_style">Dive into our Trove</button>
            </div>
        </div>
        {{-- Tresures End  --}}
        {{-- Group News Start  --}}
        <div class="row justify-content-center py-3 group-news-wrapper">
            <div class="col-12 col-lg-9 " style="background-image: url(assets/v2/img/group-news-bg.jpg)">
                <div class="text-center my-4 group-news-header-title">
                    <h1 class="fw-bold">Group News</h1>
                </div>
                <ul>
                    <li class="row justify-content-center">
                        <div class="col-12 col-xl-9">
                            <div class="row group-news p-3 m-0 mb-3">
                                <div class="col-12">
                                    <div class=" row group-news-header py-2">
                                        <div class="col-6 col-md-1 order-md-0 ">
                                            <div class="group-news-header-logo"></div>
                                        </div>
                                        <div class="col-6 col-md-3 order-md-2 align-self-md-center text-end group-news-share">
                                            <sapn>SHARE</sapn>
                                            <a target="_blank"
                                               href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesGiveaways%2Fannouncements%2Fdetail%2F2934623681400416672">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="icon-fb">
                                            </a>
                                            <a target="_blank"
                                               href="https://twitter.com/home?status=x30+Z+SHOW+GIVEAWAY+https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesGiveaways%2Fannouncements%2Fdetail%2F2934623681400416672">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="icon-tw">
                                            </a>
                                        </div>
                                        <div class="col-12 col-md-8 order-md-1 group-news-title pt-2">
                                            <span>x30 Z SHOW GIVEAWAY</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 p-0">
                                    <div class="row group-news-content">
                                        <div class="col-12 col-md-2 my-3">
                                            <div class="group-news-content-time">
                                                23.12<br>
                                                2020
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-7 my-3 group-news-content-text">
                                            <div>
                                                @<span class="default-color">SlipSlot</span>
                                            </div>

                                            <div class="my-2">
                                                Hey all,We're giving away THIRTY copies of Z Show for the
                                                Oculus Go in our Discord server.
                                                All you have to do is:
                                                Join our Discord server: https://discord.gg/opiumpulses
                                                Agree to our rules
                                                Click the #z-show-giveaway channel
                                                Tell us your most favourite VR game ever and why
                                                We'll pick 30 of our favourite entries sometime tomorrow evening and
                                                DM the winners their keys..
                                                If you do not have, or do not plan to get an Oculus Go,
                                                please ignore this giveaway.
                                                Good luck everyone!
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-3 my-3 group-news-content-text">
                                            <div class="my-2">
                                                <span>
                                                    Opium Pulses
                                                    <span class="default-color">News</span>
                                                </span>
                                            </div>
                                            <button class="btn_style ">Read More</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="recent-videos-content container-fluid">
                    <div class="row">
                        <div class="recent-videos-title text-center col-12 mt-3">Recent Videos</div>
                        <div class="col-12 p-0 py-2">
                            <iframe width="100%" src="https://www.youtube.com/embed/Ecb3_lUBpOc"
                                    frameborder="0"></iframe>
                            <div class="videos-item-name">We level up exclusively on other players! │ OSRS</div>
                        </div>
                        <div class="col-12 p-0 py-2">
                            <iframe width="100%" src="https://www.youtube.com/embed/Ecb3_lUBpOc"
                                    frameborder="0"></iframe>
                            <div class="videos-item-name">We level up exclusively on other players! │ OSRS</div>
                        </div>
                        <div class="col-12 p-0 py-2">
                            <iframe width="100%" src="https://www.youtube.com/embed/Ecb3_lUBpOc"
                                    frameborder="0"></iframe>
                            <div class="videos-item-name">We level up exclusively on other players! │ OSRS</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Group News End  --}}
    </section>
@endsection
@section('js')
    <script src="{{ asset('site/js/slick/slick.min.js') }}"></script>
    <script src="{{ asset('site/js/index.js') }}"></script>
@stop
