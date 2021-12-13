@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/media.css') }}">
@stop
@section('content')
    <section class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center img_cover p-5"
                         style="background-image: url({{ asset('/assets/v2/img/media/podcast-img.jpg') }});">
                        <div class="col-12">
                            <h2>podcasts</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <p>
                                A regular comedy podcast with a mixture of facts, news, reviews with a big dollop of
                                randomness on top. Warning: These are very much 18+ rated and not for the sensitive
                                types!
                            </p>
                        </div>
                        <div class="col-12">
                            <button class="btn_style">OPEN PODCAST</button>
                        </div>
                        <div class="col-12 py-2">
                            <span>share</span>
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                            </a>
                            <a target="_blank"
                               href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center img_cover p-5"
                         style="background-image: url({{ asset('/assets/v2/img/media/freebies-img.jpg') }});;">
                        <div class="col-12">
                            <h2>FREEBIES</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <p>Download free avatars, signatures and wallpapers – all specially created for our fans.</p>
                        </div>
                        <div class="col-12">
                            <button class="btn_style">OPEN GALLERY</button>
                        </div>
                        <div class="col-12 py-2">
                            <span>share</span>
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                            </a>
                            <a target="_blank"
                               href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center img_cover p-5"
                         style="background-image: url({{ asset('/assets/v2/img/media/videos-img.jpg') }});">
                        <div class="col-12">
                            <h2>VIDEOS</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <p>
                                A mixture of reviews and unboxings - especially aimed at special editions and generally hard to find stuff!
                            </p>
                        </div>
                        <div class="col-12">
                            <button class="btn_style">OPEN Video</button>
                        </div>
                        <div class="col-12 py-2">
                            <span>share</span>
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                            </a>
                            <a target="_blank"
                               href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center img_cover p-5"
                         style="background-image: url({{ asset('/assets/v2/img/media/photos-img.jpg') }});">
                        <div class="col-12">
                            <h2>PHOTOS</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <p>Check out our snaps from some of the best gaming events we’ve attended in the UK.</p>
                        </div>
                        <div class="col-12">
                            <button class="btn_style">OPEN Gallery</button>
                        </div>
                        <div class="col-12 py-2">
                            <span>share</span>
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                            </a>
                            <a target="_blank"
                               href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center img_cover p-5"
                         style="background-image: url({{ asset('/assets/v2/img/media/fan-art-img.jpg') }});">
                        <div class="col-12">
                            <h2>FAN ART</h2>
                        </div>
                        <div class="col-12 col-lg-6 offset-lg-3">
                            <p>A collection of Opium Pulses inspired artwork created by our loyal fans and customers.</p>
                        </div>
                        <div class="col-12">
                            <button class="btn_style">OPEN Gallery</button>
                        </div>
                        <div class="col-12 py-2">
                            <span>share</span>
                            <a target="_blank"
                               href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                            </a>
                            <a target="_blank"
                               href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                               class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="container py-3">
                    <div class="row text-center align-items-center"
                         style="background-image: url({{ asset('/assets/v2/img/media/last-item.png') }}); background-position: left; background-size: cover">
                        <div class="mt-5 pt-3 col-8 col-lg-7 pt-lg-4">
                            <span class="hover">Contact US</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@stop
