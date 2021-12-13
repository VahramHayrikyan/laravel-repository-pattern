@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/v2/css/giveaways.css') }}">
@stop
@section('content')
    <main class="main" style="margin-top: 130px;">

        <div class="giveaways-page-wrapper">
            <div class="container">

                <div class="giveaways-page-title">
                    Featured Giveaways
                </div>

                <div class="giveaways-page-promo">
                    <div class="giveaways-page-promo-slider-wrapper">
                        <div class="giveaways-page-promo-slider owl-carousel owl-loaded owl-drag">

                            <div class="owl-stage-outer">
                                <div class="owl-stage"
                                     style="transform: translate3d(-2100px, 0px, 0px); transition: all 1s ease 0s; width: 8400px;">
                                    <div class="owl-item" style="width: 1050px;">
                                        <div class="giveaways-page-promo-slide"
                                             style="background-image: url('{{ asset('/assets/v2/img/giveaways/giveaways-page-promo-slide-bg-img1.jpg') }}');">

                                            <a href=""
                                               class="giveaways-page-promo-slide-img">
                                                <div class="store-item-img-wrapper">
                                                    <div class="store-item-img"
                                                         style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9700/injustice2.jpg')"></div>
                                                </div>
                                            </a><!-- .giveaways-page-promo-slide-img -->

                                            <div class="giveaways-page-promo-slide-icons">
                                                <div data-toggle="tooltip" data-original-title="Steam"
                                                     class="giveaways-page-promo-slide-icon giveaways-page-promo-slide-icon-steam">
                                                    <img src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png" alt="icon">
                                                </div><!-- .giveaways-page-promo-slide-icon -->
                                                <div data-toggle="tooltip"
                                                     data-original-title="Open for everyone. Anyone can join this giveaway."
                                                     class="giveaways-page-promo-slide-icon giveaways-page-promo-slide-icon-for-all">
                                                    <img src="{{ asset('/assets/v2/img/giveaways/jointype/everyone-r.png') }}"
                                                         alt="icon">
                                                </div><!-- .giveaways-page-promo-slide-icon -->
                                            </div>

                                            <div class="giveaways-page-promo-slide-descr" style="overflow: hidden;">
                                                <div class="giveaways-page-promo-slide-descr-title">
                                                    <span> </span>
                                                    Injustice 2
                                                </div>
                                                <div class="giveaways-page-promo-slide-descr-text">
                                                    <div class="cut-overflow editor-content"
                                                         style="min-height: 80px;max-height:123px;overflow:hidden;">
                                                        Power up and build the ultimate version of your favourite DC
                                                        legends in INJUSTICE 2.<br><br>
                                                        <ul>
                                                            <li>EVERY BATTLE DEFINES YOU: With every match you'll earn
                                                                gear to equip, customise and evolve your roster.
                                                            </li>
                                                            <li>A NEW THREAT RISES: Picking up where Injustice left off,
                                                                Batman struggles against Superman's regime, as a new
                                                                threat appears that will put Earth's very existence at
                                                                risk.
                                                            </li>
                                                            <li>THE BEST OF DC: Choose from the biggest DC Universe
                                                                roster ever and battle across iconic locations in
                                                                epic-scale battles.
                                                            </li>
                                                            <li>BUILT BY NETHERREALM: Developers of the best-selling and
                                                                critically acclaimed MORTAL KOMBAT franchise.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div><!-- .giveaways-page-promo-slide-descr-text -->
                                            </div><!-- .giveaways-page-promo-slide-descr -->

                                            <div data-featured-countdown="2021-03-04 22:00:24"
                                                 class="giveaways-page-promo-slide-time-left">
                                                <div class="giveaways-page-promo-slide-time-left-title">time left</div>
                                                <div class="giveaways-page-promo-slide-time-left-inner-block">
                                                    <div class="giveaways-page-promo-slide-time-left-days">
                                                        <span>3</span> days
                                                    </div>
                                                </div>
                                                <div class="giveaways-page-promo-slide-time-left-time">09:16:27</div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-nav">
                                <div class="owl-prev">prev</div>
                                <div class="owl-next">next</div>
                            </div>
                            <div class="owl-dots">
                                <div class="owl-dot active"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                                <div class="owl-dot"><span></span></div>
                            </div>
                        </div><!-- .giveaways-page-promo-slider -->
                    </div><!-- .giveaways-page-promo-slider-wrapper -->

                    <div class="giveaways-page-promo-img">
                        <img src="{{ asset('/assets/v2/img/giveaways/giveaways-page-promo-img.png') }}" alt="img">
                    </div><!-- .giveaways-page-promo-img -->
                </div><!-- .giveaways-page-promo -->
                <!--start of ads-->

                <!--end of ads-->

                <div class="settings-filters-wrapper-outer-wrapper" data-source="gf"
                     data-url="/giveaway/filterGiveaways">
                    <div class="settings-filters-wrapper giveaways-page-settings-filters-wrapper">
                        <div class="settings-filters">
                            <div class="settings-filters-isfilter">
                                <div class="settings-filters-isfilter-icon">
                                    <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}" alt="icon">
                                </div>
                                filter games
                            </div><!-- .settings-filters-isfilter -->
                            <div class="settings-filters-blocks-toggle">
                                open settings filter
                            </div><!-- .settings-filters-blocks-toggle -->
                            <div class="settings-filters-hide-block">
                                <div class="settings-filters-blocks-wrapper">
                                    <div class="settings-filters-blocks">
                                        <div class="settings-filters-block">
                                            <div class="settings-filters-block-current">
                                                <span>All giveaways</span>
                                                <div class="settings-filters-block-icon"></div>
                                            </div><!-- .settings-filters-block-current -->
                                            <div class="settings-filters-block-items-wrapper">
                                                <div class="settings-filters-block-items">
                                                    <a href="#" data-filter-all="1" data-multiple-text=" types selected"
                                                       class="settings-filters-block-item settings-filters-block-item--current">all
                                                        giveaways</a>
                                                    <a href="#" data-filter-jointype="everyone"
                                                       class="settings-filters-block-item ">everyone</a>
                                                    <a href="#" data-filter-jointype="newbies"
                                                       class="settings-filters-block-item ">newbies</a>
                                                    <a href="#" data-filter-jointype="veterans"
                                                       class="settings-filters-block-item ">veterans</a>
                                                    <a href="#" data-filter-jointype="underdogs"
                                                       class="settings-filters-block-item ">underdogs</a>
                                                    <a href="#" data-filter-jointype="customers"
                                                       class="settings-filters-block-item ">customers</a>
                                                </div><!-- .settings-filters-block-items -->
                                            </div><!-- .settings-filters-block-items-wrapper -->
                                        </div><!-- .settings-filters-block -->
                                        <div class="settings-filters-block">
                                            <div class="settings-filters-block-current">
                                                <span>active giveaways</span>
                                                <div class="settings-filters-block-icon"></div>
                                            </div><!-- .settings-filters-block-current -->
                                            <div class="settings-filters-block-items-wrapper">
                                                <div class="settings-filters-block-items">
                                                    <a href="#" data-filter-all="" data-filter-status="active"
                                                       class="settings-filters-block-item ">active giveaways</a>
                                                    <a href="#" data-filter-all="" data-filter-status="finished"
                                                       class="settings-filters-block-item ">finished giveaways</a>
                                                </div><!-- .settings-filters-block-items -->
                                            </div><!-- .settings-filters-block-items-wrapper -->
                                        </div><!-- .settings-filters-block -->
                                    </div><!-- .settings-filters-blocks -->
                                    <a href="/giveaway/filterGiveaways?source=gf&amp;reset=1"
                                       class="settings-filters-reset-filter">
                                        <div class="settings-filters-reset-filter-icon">
                                            <img src="{{ asset('/assets/v2/img/store/settings-filter-icon.png') }}"
                                                 alt="icon">
                                        </div>
                                        <span>reset filters</span>
                                    </a><!-- .settings-filters-reset-filter -->

                                    <div class="settings-filters-btn-wrapper">
                                        <a href="/giveaway/faq" class="settings-filters-btn">
                                            FAQ
                                        </a>
                                    </div>
                                </div><!-- .settings-filters-blocks-wrapper -->
                            </div><!-- .settings-filters-hide-block -->
                        </div><!-- .settings-filters -->
                    </div><!-- .settings-filters-wrapper -->
                </div><!-- .settings-filters-wrapper-outer-wrapper -->

                <div class="giveawaysSpinner"></div>

                <!--MONUMETRIC [BTF|Pos 4] D:160x600 T:160x600 M:160x600 START-->
                <div
                    style="float: right;margin-top: 20px;display: flex;flex-direction: column;justify-content: center;align-items: center;">
                    <div class="mmtwrappos" style="display: block; width: 100%; text-align: center;">
                        <div id="mmt-ccfe1299-acfb-4476-bce7-b3a0859d0a6b"
                             data-google-query-id="CIiA1rWPj-8CFVfsmgodfTwJ7Q"
                             style="display: block; margin: 0px auto; width: 0px; height: 0px; visibility: hidden;">
                            <div id="google_ads_iframe_/20842576/ED601M/ED601M-DDS.D_0__container__"
                                 style="border: 0pt none; width: 160px; height: 600px;"></div>
                        </div>
                    </div>
                    <script type="text/javascript" data-cfasync="false">$MMT = window.$MMT || {};
                        $MMT.cmd = $MMT.cmd || [];
                        $MMT.cmd.push(function () {
                            $MMT.display.slots.push(["ccfe1299-acfb-4476-bce7-b3a0859d0a6b"]);
                        })</script>
                    <!--MONUMETRIC [BTF|Pos 4] D:160x600 T:160x600 M:160x600  ENDS-->
                    <div style="height: 15px"></div>
                    <!--MONUMETRIC [BTF|Pos 5] D:160x600 T:160x600 M:160x600 START-->
                    <div class="mmtwrappos" style="display: block; width: 100%; text-align: center;">
                        <div id="mmt-8af37ab0-42d7-4c18-a01d-c160a032f62f"
                             data-google-query-id="CImA1rWPj-8CFVfsmgodfTwJ7Q"
                             style="display: block; margin: 0px auto; width: 0px; height: 0px; visibility: hidden;">
                            <div id="google_ads_iframe_/20842576/ED601M/ED601M-DDS.E_0__container__"
                                 style="border: 0pt none; width: 160px; height: 600px;"></div>
                        </div>
                    </div>
                    <script type="text/javascript" data-cfasync="false">$MMT = window.$MMT || {};
                        $MMT.cmd = $MMT.cmd || [];
                        $MMT.cmd.push(function () {
                            $MMT.display.slots.push(["8af37ab0-42d7-4c18-a01d-c160a032f62f"]);
                        })</script>
                    <!--MONUMETRIC [BTF|Pos 5] D:160x600 T:160x600 M:160x600  ENDS-->
                </div>
                <!--end of chitika.net-->

                <div id="giveawaylistview" class="list-view">

                    <div class="giveaways-page-items">
                        <script src="/assets/114b515f/jquery.cookie.js"></script>
                        <style>
                            .entered {
                                font-size: 28px;

                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-more:hover, .giveaways-page-item-img-btn-enter:hover {

                                color: #f4f3f3;
                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-wrapper {

                                font-size: 20px;
                                font-weight: 500;
                                color: white;
                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-more, .giveaways-page-item-img-btn-enter {

                                color: white;
                                border: 2px solid #ffffff;
                                font-family: 'Montserrat', sans-serif;
                            }

                        </style>
                        <div class="giveaways-page-item">
                            <div class="giveaways-page-item-header">
                                <div class="giveaways-page-item-header-period">
                                    <div class="giveaways-page-item-header-period-icon"></div>
                                    <span data-countdown="2021-03-14 22:00:36">1 week 6 days </span>
                                </div>
                                <div class="giveaways-page-item-header-points">
                                    10 points
                                </div>
                            </div><!-- .giveaways-page-item-header -->
                            <div class="giveaways-page-item-img-wrapper">
                                <div class="giveaways-page-item-img"
                                     style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9725/pathofgiants.jpg')"></div>
                                <div class="giveaways-page-item-img-btn-wrapper" style="opacity:1">

                                    <span class="entered"> ENTERED </span>


                                    <a href="/giveaways/p04AT/path-of-giants" class="giveaways-page-item-img-btn-more">
                                        view more
                                    </a>
                                </div><!-- .giveaways-page-item-img-btn-wrapper -->
                            </div><!-- .giveaways-page-item-img -->
                            <div class="giveaways-page-item-footer" style=" background-color: #f4f3f3;color: #dc291e;">
                                <img data-toggle="tooltip" data-original-title="Steam"
                                     src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream-red.png"
                                     style="height: 20px;margin-right: 5px;">
                                <img data-toggle="tooltip"
                                     data-original-title="Open for everyone. Anyone can join this giveaway."
                                     src="{{ asset('/assets/v2/img/giveaways/jointype/everyone-r.png') }}"
                                     style="height: 20px;margin-right: 10px;">
                                <div class="giveaways-page-item-footer-name">
                                    <span> </span>
                                    PATH OF GIANTS
                                </div>
                                <div class="giveaways-page-item-footer-comments">
                                    <div class="giveaways-page-item-footer-comments-icon"></div>
                                    0
                                </div>
                            </div><!-- .giveaways-page-item-footer -->
                        </div><!-- .giveaways-page-item -->
                        <script src="/assets/114b515f/jquery.cookie.js"></script>
                        <style>
                            .entered {
                                font-size: 28px;

                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-more:hover, .giveaways-page-item-img-btn-enter:hover {

                                color: #f4f3f3;
                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-wrapper {

                                font-size: 20px;
                                font-weight: 500;
                                color: white;
                                font-family: 'Montserrat', sans-serif;
                            }

                            .giveaways-page-item-img-btn-more, .giveaways-page-item-img-btn-enter {

                                color: white;
                                border: 2px solid #ffffff;
                                font-family: 'Montserrat', sans-serif;
                            }

                        </style>
                    </div>
                    <div class="clearfix"></div>
                    <div class="pagination">
                        <ul class="pagination-items" id="yw0">
                            <li class="first disabled"><a href="/giveaways">&lt;&lt;</a></li>
                            <li class="paginate_button previous disabled"><a href="/giveaways">&lt;</a></li>
                            <li class="paginate_button paginate_button active"><a href="/giveaways">1</a></li>
                            <li class="paginate_button"><a href="/giveaways?Giveaway_page=2">2</a></li>
                            <li class="next"><a href="/giveaways?Giveaway_page=2">&gt;</a></li>
                            <li class="last"><a href="/giveaways?Giveaway_page=2">&gt;&gt;</a></li>
                        </ul>
                    </div>
                    <div class="items-settings-wrapper">
                        <div class="items-settings">
                            <div class="items-settings-per-page">
                                <div data-filter-pagesize="" class="items-settings-per-page-current">
                                    giveaways per page
                                </div>
                                <div class="items-settings-per-page-items-wrapper" style="width: 100%;">
                                    <div class="items-settings-per-page-items">
                                        <div class="items-settings-per-page-item items-settings-per-page-item--active">
                                            giveaways per page
                                        </div>
                                        <div class="items-settings-per-page-item ">
                                            24
                                        </div>
                                        <div class="items-settings-per-page-item ">
                                            60
                                        </div>
                                        <div class="items-settings-per-page-item ">
                                            120
                                        </div>
                                        <div class="items-settings-per-page-item ">
                                            240
                                        </div>
                                    </div><!-- .items-settings-per-page-items -->
                                </div><!-- .items-settings-per-page-items-wrapper -->
                            </div><!-- .items-settings-per-page -->

                            <div class="items-settings-info fix-right"></div>
                        </div><!-- .items-settings -->
                    </div><!-- .items-settings-wrapper -->

                    <div class="keys" style="display:none" title="/giveaways"><span>9725</span><span>9724</span><span>9723</span><span>9722</span><span>9721</span><span>9720</span><span>9719</span><span>9718</span><span>9717</span><span>9715</span><span>9714</span><span>9716</span><span>9713</span><span>9712</span><span>9711</span><span>9710</span><span>9709</span><span>9708</span><span>9707</span><span>9706</span><span>9705</span><span>9704</span><span>9703</span><span>9702</span><span>9699</span><span>9701</span><span>9700</span><span>9698</span><span>9697</span><span>9696</span><span>9695</span><span>9694</span><span>9693</span><span>9692</span><span>9691</span><span>9690</span><span>9689</span><span>9688</span><span>9687</span><span>9686</span>
                    </div>
                </div>        <!-- .giveaways-page-items -->
            </div><!-- .container -->
        </div><!-- .giveaways-page-wrapper -->
        <div></div>
    </main>
@endsection
@section('js')
    <script src="{{ asset('site/countery/countrySelect.min.js') }}"></script>
    <script>
        {{--$('#BillingDetails_country_code').countrySelect({defaultCountry:'{{ $data['billingDetails'] ? $data['billingDetails']->country_code : old('country_code_code') }}'})--}}
    </script>
@stop
