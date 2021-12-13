@extends('layouts.app')
{{--@section('css')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/account.css') }}">--}}
{{--@stop--}}

@section('content')
    <main class="main" style="margin-top: 65px;">

        <div class="quests-promo-wrapper">
            <div class="container">
                <div class="quests-promo">
                    <div class="quests-promo-header">
                        <div class="quests-promo-header-title">
                            Quests
                        </div>
                        <div class="quests-promo-header-points">
                            <div class="quests-promo-header-points-img">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/giveaways/giveaways-feedback-img.jpg" alt="img">
                            </div>

                            <div class="quests-promo-header-points-descr">
                                <div class="quests-promo-header-points-descr-text">
                                    MY POINTS
                                </div>
                                <div class="quests-promo-header-points-descr-num">
                                    ...                       </div>
                            </div>

                            <a href="#" onclick="refreshGP(event)" class="quests-promo-header-points-btn">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/arrow-round.png" alt="icon-btn">
                            </a>
                        </div><!-- .quests-promo-header-points -->
                    </div><!-- .quests-promo-header -->

                    <div class="quests-promo-content">
                        <div class="quests-promo-content-img1">
                            <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-promo-img1.png" alt="img">
                        </div>

                        <div class="quests-promo-content-text">
                            <div class="quests-promo-content-text-title">
                                COMPLETE MY QUESTS
                            </div>
                            <div class="quests-promo-content-text-descr">
                                earn points and spend<br>
                                them in my tresure trove
                            </div>
                        </div><!-- .quests-promo-content-text -->

                        <div class="quests-promo-content-trove-wrapper">
                            <a href="/treasure/index" class="quests-promo-content-trove">
                                <div class="quests-promo-content-trove-descr">
                                    browse my treasure trove
                                </div>
                                <div class="quests-promo-content-trove-btn-wrapper">
                                    <div href="/treasure/index" class="quests-promo-content-trove-btn">
                                        browse trove
                                    </div>
                                </div>
                            </a><!-- .quests-promo-content-trove -->
                        </div><!-- .quests-promo-content-trove-wrapper -->
                    </div><!-- .quests-promo-content -->
                </div><!-- .quests-promo -->
            </div><!-- .container -->
        </div><!-- .quests-promo-wrapper -->

        <div class="quests-wrapper">
            <div class="container">
                <div class="quests-inner-wrapper">
                    <div class="quests-sidebar">
                        <div class="quests-sidebar-items">
                            <a href="#" class="quests-sidebar-item quests-sidebar-item--active" data-url="/quests/instructions">
                                Guidelines
                            </a>
                            <a href="#" class="quests-sidebar-item" data-url="/quests/personaly">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-personaly.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-personaly-red.png" alt="img" class="img-hover">
                            </a>

                            <a href="#" class="quests-sidebar-item" data-url="/quests/adgatemedia">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-adgate-25.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-adgate-25-red.png" alt="img" class="img-hover">
                            </a>
                            <a href="#" class="quests-sidebar-item" data-url="/quests/adscend">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-adscendmedia.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-sidebar-adscendmedia-red.png" alt="img" class="img-hover">
                            </a>


                            <a href="#" class="quests-sidebar-item" data-url="/quests/wannads">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-super-white.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-super-red.png" alt="img" class="img-hover">
                            </a>
                            <a href="#" class="quests-sidebar-item" data-url="/quests/superRewards">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-peanut-wannads-White.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-peanut-wannads-Red.png" alt="img" class="img-hover">
                            </a>

                            <a href="#" class="quests-sidebar-item" data-url="/quests/offerToro">
                                <img src="https://www.opiumpulses.com/assets/649cc1b6/quests-sidebar-offertoro-white.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/649cc1b6/quests-sidebar-offertoro-red.png" alt="img" class="img-hover">
                            </a>
                            <a href="#" class="quests-sidebar-item" data-url="/quests/kiwi">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-kiwi-white.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-kiwi-red.png" alt="img" class="img-hover">
                            </a>
                            <a href="#" class="quests-sidebar-item" data-url="/quests/offerDaddy">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-offerdaddy-white.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/c1c94673/quests-sidebar-offerdaddy-red.png" alt="img" class="img-hover">
                            </a>
                            <!-- <a href="#" class="quests-sidebar-item" data-url="/quests/offerWall">
                                 <img src="/assets/649cc1b6/quests-sidebar-offerwall-white.png" alt="img" class="img">
                                 <img src="/assets/649cc1b6/quests-sidebar-offerwall-red.png" alt="img" class="img-hover">
                             </a> -->

                            <a href="#" class="quests-sidebar-item" data-url="/quests/sayso">
                                <img src="https://www.opiumpulses.com/assets/e03da7dd/quests-sidebar-sayso-white.png" alt="img" class="img">
                                <img src="https://www.opiumpulses.com/assets/e03da7dd/quests-sidebar-sayso-red.png" alt="img" class="img-hover">
                            </a>


                        </div><!-- .quests-sidebar-items -->

                        <div class="quests-sidebar-links">
                            <a href="/quests/faq" class="quests-sidebar-links-item">
                                QUEST FAQ
                            </a>
                            <a href="/quests/hints" class="quests-sidebar-links-item">
                                Hints and Tips
                            </a>
                        </div>
                    </div><!-- .quests-sidebar -->

                    <div class="quests">
                        <div class="quests-block">
                            <div class="quests-block-title">
                                before You start a quest
                            </div>
                            <div class="quests-block-items">
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img1.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            DISABLE ADBLOCKER
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            MAKE SURE TO DISABLE YOUR ADBLOCKER(S)
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img2.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            CLEAR COOKIES
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            CLEAR YOUR COOKIES IF YOU WANT TO REDO AN INCOMPLETE REQUEST, WE RECOMMEND CCLEANER
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img3.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            take time
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            Take some time to read the quest instructions carefully
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                            </div><!-- .quests-block-items -->
                        </div><!-- .quests-block -->
                        <div class="quests-block">
                            <div class="quests-block-title">
                                While You complete a quest
                            </div>
                            <div class="quests-block-items">
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img4.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            let page load
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            ALWAYS LET PAGES LOAD FULLY BEFORE YOU START DOING A QUEST
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img5.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            USE A REAL EMAIL
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            ALWAYS COMPLETE QUESTS USING A REAL EMAIL AND INFORMATION
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img6.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            confirm mail
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            IF A QUEST ASKS FOR YOUR EMAIL, CHECK YOUR EMAIL FOR A CONFIRMATION LINK
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                            </div><!-- .quests-block-items -->
                        </div><!-- .quests-block -->
                        <div class="quests-block">
                            <div class="quests-block-title">
                                after You complete a quest
                            </div>
                            <div class="quests-block-items">
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img7.png" alt="img">

                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            be patient
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            Points are not always awarded instantly. They may take up to an hour to apppear on Your dashboard
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img8.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            take a screenshot
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            TAKE A SCREENSHOT OF THE FINAL PAGE. THIS IS OPTIONAL, BUT HELPS IF THE QUEST FAILS
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                                <div class="quests-block-item">
                                    <div class="quests-block-item-img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/quests/quests-img9.png" alt="img">
                                    </div>
                                    <div class="quests-block-item-descr">
                                        <div class="quests-block-item-descr-name">
                                            never complete twice
                                        </div>
                                        <div class="quests-block-item-descr-text">
                                            Never complete the same quest twice
                                        </div>
                                    </div>
                                </div><!-- .quests-block-item -->
                            </div><!-- .quests-block-items -->
                        </div><!-- .quests-block -->
                    </div><!-- .quests -->
                </div><!-- .quests-inner-wrapper -->
            </div><!-- .container -->
        </div><!-- .quests-wrapper --></main>
@endsection
