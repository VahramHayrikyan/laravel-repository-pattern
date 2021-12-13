@extends('layouts.app')
@section('content')
    <main class="main" style="margin-top: 130px;">
        <div class="promo" style="min-height: 186px;">
            <div class="promo__small-slider-wrapper owl-carousel owl-theme">
                @for($i = 0;$i < 10;$i++)
                   <div class="owl-stage-outer">
                    <div class="owl-stage">
                         <div class="owl-item " style="width: 337.75px;">
                           <div class="promo__small-slide">
                               <a href="https://www.opiumpulses.com/product/5756/animal-crossing-new-horizons-eu-only"
                                  class="promo__small-slide-img"
                                  style="background-image: url('https://www.opiumpulses.com/uploads/product/5756/AC-0_optimized.jpg')"></a>

                               <div class="promo__small-slide-hover-wrapper" >
                                   <div class="promo__small-slide-hover"
                                        style="background-image: url('https://www.opiumpulses.com/uploads/product/5756/extra/ac1_optimized.jpg');">
                                       <div class="prom__small-slide-hover-content">
                                           <div class="promo__small-slide-hover-info">
                                               <div class="promo__small-slide-hover-info-price">
                                                   <div class="promo__small-slide-hover-info-price-new">
                                                       Price: <span>$65.05</span>
                                                   </div>
                                                   <div class="promo__small-slide-hover-info-price-old">
                                                       RRP: $59.99
                                                   </div>
                                               </div><!-- .promo__small-slide-hover-info-price -->
                                               <div class="promo__small-slide-hover-info-points">

                                               </div>
                                               <a href="https://www.opiumpulses.com//cart/addProduct/5756"
                                                  class="promo__small-slide-hover-info-btn-add-to-cart">
                      <span class="promo__small-slide-hover-info-add-to-cart-text">
                        add to cart
                      </span>
                                                   <span class="promo__small-slide-hover-info-add-to-cart-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="35px" height="35px" viewBox="0 0 83.767 83.767"
                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                          <path fill="#ffffff"
                                d="M62.882,27.865H23.509c-0.076,0-0.144,0.027-0.216,0.044l-1.603-5.318c-0.019-0.059-0.057-0.103-0.083-0.154 c-0.046-0.547-0.49-0.979-1.048-0.979c-0.002,0-0.002,0-0.004,0l-5.211,0.022c-0.586,0.002-1.062,0.482-1.058,1.068 c0.002,0.586,0.479,1.06,1.064,1.06c0,0,0.002,0,0.004,0l4.412-0.019l9.696,32.178c-1.345,0.908-2.23,2.446-2.23,4.192 c0,2.791,2.264,5.055,5.056,5.055c2.791,0,5.055-2.264,5.055-5.055c0-0.302-0.039-0.595-0.089-0.881h14.082 c-0.05,0.286-0.09,0.579-0.09,0.881c0,2.791,2.264,5.055,5.055,5.055s5.055-2.264,5.055-5.055s-2.264-5.055-5.055-5.055 c-1.658,0-3.117,0.811-4.04,2.045H36.327c-0.92-1.234-2.379-2.045-4.038-2.045c-0.287,0-0.565,0.039-0.838,0.085l-1.12-3.716 l26.809-0.021c0.47,0,0.854-0.31,0.995-0.731c0.038-0.069,0.077-0.134,0.098-0.21l5.675-20.928c0.037-0.133,0.041-0.267,0.026-0.395 c0-0.021,0.013-0.04,0.013-0.061C63.946,28.342,63.471,27.865,62.882,27.865z M57.932,59.96c0,0.9-0.729,1.63-1.63,1.63 c-0.899,0-1.629-0.729-1.629-1.63s0.729-1.63,1.629-1.63C57.202,58.33,57.932,59.06,57.932,59.96z M33.862,59.973 c0,0.899-0.729,1.629-1.629,1.629c-0.9,0-1.63-0.729-1.63-1.629c0-0.9,0.729-1.63,1.63-1.63 C33.133,58.343,33.862,59.072,33.862,59.973z M29.72,35.974c0-1.322,1.071-2.395,2.393-2.395c1.322,0,2.395,1.072,2.395,2.395 c0,1.323-1.072,2.394-2.395,2.394C30.791,38.367,29.72,37.297,29.72,35.974z M35.903,45.284c-1.321,0-2.395-1.07-2.395-2.395 c0-1.321,1.073-2.394,2.395-2.394c1.322,0,2.395,1.072,2.395,2.394C38.298,44.214,37.226,45.284,35.903,45.284z M37.412,35.974 c0-1.322,1.073-2.395,2.395-2.395s2.394,1.072,2.394,2.395c0,1.323-1.072,2.394-2.394,2.394S37.412,37.297,37.412,35.974z M43.717,45.284c-1.321,0-2.394-1.07-2.394-2.395c0-1.321,1.072-2.394,2.394-2.394c1.322,0,2.395,1.072,2.395,2.394 C46.111,44.214,45.039,45.284,43.717,45.284z M45.104,35.974c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.395,1.072,2.395,2.395 c0,1.323-1.073,2.394-2.395,2.394C46.176,38.367,45.104,37.297,45.104,35.974z M51.532,45.284c-1.322,0-2.395-1.07-2.395-2.395 c0-1.321,1.072-2.394,2.395-2.394c1.321,0,2.395,1.072,2.395,2.394C53.927,44.214,52.854,45.284,51.532,45.284z M55.19,38.367 c-1.322,0-2.395-1.07-2.395-2.394c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.394,1.072,2.394,2.395 C57.584,37.297,56.512,38.367,55.19,38.367z"></path>
                        </svg>
                      </span>
                                               </a>
                                               <a href="https://www.opiumpulses.com//product/5756/animal-crossing-new-horizons-eu-only"
                                                  class="promo__small-slide-hover-info-btn-more">
                                                   more info
                                               </a>
                                           </div>
                                           <div class="promo__small-slide-hover-post-info">
                                               <div class="promo__small-slide-hover-release">
                                                   Release Date: 20 Mar, 2020
                                               </div>
                                               <div class="promo__small-slide-hover-watch">
                                                   <img src="{{ asset('/assets/v2/img/icon-watch.png') }}"
                                                        alt="icon">
                                                   2105
                                               </div>
                                               <div class="promo__small-slide-hover-like">
                                                   <img
                                                       src="{{ asset('assets/v2/img/icon-like.png') }}"
                                                       alt="icon">
                                                   0
                                               </div>
                                           </div><!-- .promo__small-slide-hover-post-info -->
                                       </div><!-- .promo__small-slide-hover-content -->
                                       <div class="promo__small-slide-hover-footer">
                                           <div class="promo__small-slide-hover-footer-name">
                                               <img
                                                   style="height: 30px;width: auto;display: inline-block;margin-right: 10px;"
                                                   src="https://www.opiumpulses.com/uploads/category/18/Nintendo-white.png"
                                                   alt="img">
                                               Animal Crossing: New Horizons (EU ONLY)
                                           </div>
                                           <span onclick="addToWishlist(this)" data-id="5756"
                                                 class="promo__small-slide-hover-footer-add">
                                    add to wishlist                                </span>
                                       </div><!-- .promo__small-slide-hover-footer -->
                                   </div><!-- .promo__small-slide-hover -->
                               </div><!-- .promo__small-slide-hover-wrapper -->
                           </div>
                       </div>
                    </div>
                   </div>
                @endfor
            </div>
            <div class="promo-inner-wrapper">
                <div class="promo__top-games">
                    <div class="promo__top-games-title">
                        STAFF PICKS
                    </div>
                    <div class="promo__top-games-items">
                        <a href="https://www.opiumpulses.com//product/5733/doom-eternal-eu-only"
                           class="promo__top-games-item" data-target=".promo__top-games-block-5733">
                            <div class="promo__top-games-item-img"
                                 style="background-image: url('https://www.opiumpulses.com/uploads/product/5733/doom-eternal-artwork_optimized.jpg');"></div>
                            <div class="promo__top-games-item-descr">
                                DOOM Eternal (EU ONLY)
                            </div>
                        </a>
                        <a href="https://www.opiumpulses.com//product/5702/red-dead-redemption-2-ultimate-edition"
                           class="promo__top-games-item" data-target=".promo__top-games-block-5702">
                            <div class="promo__top-games-item-img"
                                 style="background-image: url('https://www.opiumpulses.com/uploads/product/5702/red-dead-redemption-2-collectors-box.jpg.optimal_optimized.jpg');"></div>
                            <div class="promo__top-games-item-descr">
                                Red Dead Redemption 2: Ultimate Edition
                            </div>
                        </a>
                        <a href="https://www.opiumpulses.com//product/5735/rage-2" class="promo__top-games-item"
                           data-target=".promo__top-games-block-5735">
                            <div class="promo__top-games-item-img"
                                 style="background-image: url('https://www.opiumpulses.com/uploads/product/5735/rage-2-pc-big-fd08_optimized.jpg');"></div>
                            <div class="promo__top-games-item-descr">
                                RAGE 2 (EMEA ONLY)
                            </div>
                        </a>
                    </div><!-- .promo__top-games-items -->
                </div><!-- .promo__top-games -->
                <div class="promo__container">
                    <div class="promo__big-slider-wrapper">
                        <div class="promo__big-slider owl-carousel owl-loaded owl-drag" style="opacity: 1;">
                            @for($i = 0;$i < 4;$i++)
                            <div class="owl-item" >
                                <div class="promo__big-slide"
                                     style="background-image: url(https://www.opiumpulses.com/uploads/banner/promo-big-slide2-bg.jpg); min-height: 336px;">
                                    <!--background_image-->
                                    <div class="promo__big-slide-img">
                                        <img
                                            src="https://www.opiumpulses.com/uploads/banner/promo-big-slide2-img.png"
                                            alt="img"> <!--title_image-->
                                    </div>
                                    <div class="promo__big-slide-content">
                                        <div class="promo__big-slide-title">
                                            <div class="promo__big-slide-title-img" style="  ">
                                                <img
                                                    src="https://www.opiumpulses.com/uploads/banner/promo-big-slide1-logo.png"
                                                    alt="logo"><!--title_image-->
                                            </div>
                                            <div class="promo__big-slide-title-text"> <!--title_text-->
                                                store
                                            </div>
                                        </div><!-- .promo__big-slide-title -->
                                        <div class="promo__big-slide-descr"> <!--description-->
                                            ESSENTIAL SOFTWARE
                                        </div>
                                        <div class="promo__big-slide-phrase"> <!--phrase_text-->
                                            at the best prices!
                                        </div>
                                        <div class="promo__big-slide-btn-wrapper">
                                            <a href="https://www.opiumpulses.com/https://opiumpulses.com/store/type/software"
                                               target="_self" class="promo__big-slide-btn"> <!--button_link-->
                                                view software <!--button_text-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" >
                                <div class="promo__big-slide"
                                     style="background-image: url(https://www.opiumpulses.com/uploads/banner/promo-big-slide3-bg.jpg); min-height: 336px;">
                                    <!--background_image-->
                                    <div class="promo__big-slide-img">
                                        <img
                                            src="https://www.opiumpulses.com/uploads/banner/promo-big-slide3-img.png"
                                            alt="img"> <!--title_image-->
                                    </div>
                                    <div class="promo__big-slide-content">
                                        <div class="promo__big-slide-title">
                                            <div class="promo__big-slide-title-img" style="  ">
                                                <img
                                                    src="https://www.opiumpulses.com/uploads/banner/promo-big-slide1-logo.png"
                                                    alt="logo"><!--title_image-->
                                            </div>
                                            <div class="promo__big-slide-title-text"> <!--title_text-->
                                                store
                                            </div>
                                        </div><!-- .promo__big-slide-title -->
                                        <div class="promo__big-slide-descr"> <!--description-->
                                            GAME &amp; SOFTWARE KEYS
                                        </div>
                                        <div class="promo__big-slide-phrase"> <!--phrase_text-->
                                            FOR EVERY PLATFORM
                                        </div>
                                        <div class="promo__big-slide-btn-wrapper">
                                            <a href="https://www.opiumpulses.com/https://opiumpulses.com/store"
                                               target="_self" class="promo__big-slide-btn"> <!--button_link-->
                                                view keys <!--button_text-->
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                    </div>


                    <div class="promo__top-games-block promo__top-games-block-5733"
                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5733/thumb-1920-1066634_optimized.jpg');">
                        <div class="promo__top-games-block-inner-wrapper">
                            <div class="promo__top-games-block-sale">
                                <div class="promo__top-games-block-sale-price">
                                    <div class="promo__top-games-block-sale-price-new">
                                        Price: <span>$17.22</span>
                                    </div>
                                    <div class="promo__top-games-block-sale-price-old">
                                        RRP: $59.99
                                    </div>
                                </div><!-- .promo__top-games-block-sale-price -->
                                <div class="promo__top-games-block-sale-discount">
                                    -72%
                                </div><!-- .promo__top-games-block-sale-discount -->
                                <br>
                                <a href="https://www.opiumpulses.com//cart/addProduct/5733"
                                   class="promo__top-games-block-sale-btn-add-to-cart">
                  <span class="promo__top-games-block-sale-btn-add-to-cart-text">
                    add to cart
                  </span>
                                    <span class="promo__top-games-block-sale-btn-add-to-cart-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="35px" height="35px" viewBox="0 0 83.767 83.767"
                         enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path fill="#ffffff"
                            d="M62.882,27.865H23.509c-0.076,0-0.144,0.027-0.216,0.044l-1.603-5.318c-0.019-0.059-0.057-0.103-0.083-0.154 c-0.046-0.547-0.49-0.979-1.048-0.979c-0.002,0-0.002,0-0.004,0l-5.211,0.022c-0.586,0.002-1.062,0.482-1.058,1.068 c0.002,0.586,0.479,1.06,1.064,1.06c0,0,0.002,0,0.004,0l4.412-0.019l9.696,32.178c-1.345,0.908-2.23,2.446-2.23,4.192 c0,2.791,2.264,5.055,5.056,5.055c2.791,0,5.055-2.264,5.055-5.055c0-0.302-0.039-0.595-0.089-0.881h14.082 c-0.05,0.286-0.09,0.579-0.09,0.881c0,2.791,2.264,5.055,5.055,5.055s5.055-2.264,5.055-5.055s-2.264-5.055-5.055-5.055 c-1.658,0-3.117,0.811-4.04,2.045H36.327c-0.92-1.234-2.379-2.045-4.038-2.045c-0.287,0-0.565,0.039-0.838,0.085l-1.12-3.716 l26.809-0.021c0.47,0,0.854-0.31,0.995-0.731c0.038-0.069,0.077-0.134,0.098-0.21l5.675-20.928c0.037-0.133,0.041-0.267,0.026-0.395 c0-0.021,0.013-0.04,0.013-0.061C63.946,28.342,63.471,27.865,62.882,27.865z M57.932,59.96c0,0.9-0.729,1.63-1.63,1.63 c-0.899,0-1.629-0.729-1.629-1.63s0.729-1.63,1.629-1.63C57.202,58.33,57.932,59.06,57.932,59.96z M33.862,59.973 c0,0.899-0.729,1.629-1.629,1.629c-0.9,0-1.63-0.729-1.63-1.629c0-0.9,0.729-1.63,1.63-1.63 C33.133,58.343,33.862,59.072,33.862,59.973z M29.72,35.974c0-1.322,1.071-2.395,2.393-2.395c1.322,0,2.395,1.072,2.395,2.395 c0,1.323-1.072,2.394-2.395,2.394C30.791,38.367,29.72,37.297,29.72,35.974z M35.903,45.284c-1.321,0-2.395-1.07-2.395-2.395 c0-1.321,1.073-2.394,2.395-2.394c1.322,0,2.395,1.072,2.395,2.394C38.298,44.214,37.226,45.284,35.903,45.284z M37.412,35.974 c0-1.322,1.073-2.395,2.395-2.395s2.394,1.072,2.394,2.395c0,1.323-1.072,2.394-2.394,2.394S37.412,37.297,37.412,35.974z M43.717,45.284c-1.321,0-2.394-1.07-2.394-2.395c0-1.321,1.072-2.394,2.394-2.394c1.322,0,2.395,1.072,2.395,2.394 C46.111,44.214,45.039,45.284,43.717,45.284z M45.104,35.974c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.395,1.072,2.395,2.395 c0,1.323-1.073,2.394-2.395,2.394C46.176,38.367,45.104,37.297,45.104,35.974z M51.532,45.284c-1.322,0-2.395-1.07-2.395-2.395 c0-1.321,1.072-2.394,2.395-2.394c1.321,0,2.395,1.072,2.395,2.394C53.927,44.214,52.854,45.284,51.532,45.284z M55.19,38.367 c-1.322,0-2.395-1.07-2.395-2.394c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.394,1.072,2.394,2.395 C57.584,37.297,56.512,38.367,55.19,38.367z"></path>
                    </svg>
                  </span>
                                </a>
                                <span onclick="addToWishlist(this)" data-id="5733"
                                      class="promo__top-games-block-sale-btn-add-to-wishlist">
                                add to wishlist                            </span>
                            </div><!-- .promo__top-games-block-sale -->

                            <div class="promo__top-games-block-descr">
                                <div class="promo__top-games-block-descr-header">
                                    <div class="promo__top-games-block-descr-header-date">
                                        Release Date: 19 Mar, 2020
                                    </div>
                                    <div class="promo__top-games-block-descr-header-watch">
                                        <img src="{{ asset('/assets/v2/img/icon-watch.png') }}" alt="icon">
                                        1812
                                    </div>
                                    <div onclick="return ajaxLike(
                        '/product/ajaxLike/5733',
                        '/product/ajaxCountLikes/5733',
                        5733);" class="promo__top-games-block-descr-header-like product_like_5733 ">
                                        <div class="promo__top-games-block-descr-header-like-icon"></div>
                                        <span id="countProductLikes-5733">2</span>
                                    </div>
                                </div>
                                <div class="promo__top-games-block-descr-title">
                                    <img style="height: 25px;width: auto;display: inline-block;margin-right: 10px;"
                                         src="https://www.opiumpulses.com/uploads/category/23/filter-icon-bethesda.png"
                                         alt="img">
                                    DOOM Eternal (EU ONLY)
                                </div>
                                <div class="promo__top-games-block-descr-text">
                                    <p>Hell’s armies have invaded Earth. Become the Slayer in an epic single-player
                                        campaign to conquer demons across dimensions and stop the final destruction of
                                        humanity.The Only Thing they Fear... Is You.Experience the ultimate combination
                                        of speed and power in DOOM Eternal - the next leap in push-forward, first-person
                                        combat.Slayer Threat Level At MaximumArmed with a shoulder-mounted flamethrower,
                                        retractable wrist-mounted blade, upgraded guns and mods, and abilities, you're
                                        faster, stronger, and more versatile than ever.Unholy TrinityTake what you need
                                        from your enemies:.</p>
                                </div>
                                <div class="promo__top-games-block-descr-footer">
                                    <a href="https://www.opiumpulses.com//product/5733/doom-eternal-eu-only"
                                       class="promo__top-games-block-descr-footer-btn">
                                        go to game page
                                    </a>
                                    <div class="promo__top-games-block-descr-footer-social">
                                        <div class="promo__top-games-block-descr-footer-social-title">
                                            tell friends
                                        </div>
                                        <div class="promo__top-games-block-descr-footer-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5733%2Fdoom-eternal-eu-only"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-fb">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb"
                                                     class="img-hover">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=DOOM+Eternal+%28EU+ONLY%29+save+72%25+at+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5733%2Fdoom-eternal-eu-only"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-tw">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw"
                                                     class="img-hover">
                                            </a>
                                        </div>
                                    </div>
                                </div><!-- .promo__top-games-block-descr-footer -->
                            </div><!-- .promo__top-games-block-descr -->
                        </div><!-- .promo__top-games-block-inner-wrapper -->
                    </div><!-- .promo__top-games-block -->

                    <div class="promo__top-games-block promo__top-games-block-5702"
                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5702/esfandiar-h-a-by-esfandiar-h-a-esfandiar-by-esfandiar-zakat_optimized.jpg');">
                        <div class="promo__top-games-block-inner-wrapper">
                            <div class="promo__top-games-block-sale">
                                <div class="promo__top-games-block-sale-price">
                                    <div class="promo__top-games-block-sale-price-new">
                                        Price: <span>$49.63</span>
                                    </div>
                                    <div class="promo__top-games-block-sale-price-old">
                                        RRP: $84.99
                                    </div>
                                </div><!-- .promo__top-games-block-sale-price -->
                                <div class="promo__top-games-block-sale-discount">
                                    -42%
                                </div><!-- .promo__top-games-block-sale-discount -->
                                <br>
                                <a href="https://www.opiumpulses.com//cart/addProduct/5702"
                                   class="promo__top-games-block-sale-btn-add-to-cart">
                  <span class="promo__top-games-block-sale-btn-add-to-cart-text">
                    add to cart
                  </span>
                                    <span class="promo__top-games-block-sale-btn-add-to-cart-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="35px" height="35px" viewBox="0 0 83.767 83.767"
                         enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path fill="#ffffff"
                            d="M62.882,27.865H23.509c-0.076,0-0.144,0.027-0.216,0.044l-1.603-5.318c-0.019-0.059-0.057-0.103-0.083-0.154 c-0.046-0.547-0.49-0.979-1.048-0.979c-0.002,0-0.002,0-0.004,0l-5.211,0.022c-0.586,0.002-1.062,0.482-1.058,1.068 c0.002,0.586,0.479,1.06,1.064,1.06c0,0,0.002,0,0.004,0l4.412-0.019l9.696,32.178c-1.345,0.908-2.23,2.446-2.23,4.192 c0,2.791,2.264,5.055,5.056,5.055c2.791,0,5.055-2.264,5.055-5.055c0-0.302-0.039-0.595-0.089-0.881h14.082 c-0.05,0.286-0.09,0.579-0.09,0.881c0,2.791,2.264,5.055,5.055,5.055s5.055-2.264,5.055-5.055s-2.264-5.055-5.055-5.055 c-1.658,0-3.117,0.811-4.04,2.045H36.327c-0.92-1.234-2.379-2.045-4.038-2.045c-0.287,0-0.565,0.039-0.838,0.085l-1.12-3.716 l26.809-0.021c0.47,0,0.854-0.31,0.995-0.731c0.038-0.069,0.077-0.134,0.098-0.21l5.675-20.928c0.037-0.133,0.041-0.267,0.026-0.395 c0-0.021,0.013-0.04,0.013-0.061C63.946,28.342,63.471,27.865,62.882,27.865z M57.932,59.96c0,0.9-0.729,1.63-1.63,1.63 c-0.899,0-1.629-0.729-1.629-1.63s0.729-1.63,1.629-1.63C57.202,58.33,57.932,59.06,57.932,59.96z M33.862,59.973 c0,0.899-0.729,1.629-1.629,1.629c-0.9,0-1.63-0.729-1.63-1.629c0-0.9,0.729-1.63,1.63-1.63 C33.133,58.343,33.862,59.072,33.862,59.973z M29.72,35.974c0-1.322,1.071-2.395,2.393-2.395c1.322,0,2.395,1.072,2.395,2.395 c0,1.323-1.072,2.394-2.395,2.394C30.791,38.367,29.72,37.297,29.72,35.974z M35.903,45.284c-1.321,0-2.395-1.07-2.395-2.395 c0-1.321,1.073-2.394,2.395-2.394c1.322,0,2.395,1.072,2.395,2.394C38.298,44.214,37.226,45.284,35.903,45.284z M37.412,35.974 c0-1.322,1.073-2.395,2.395-2.395s2.394,1.072,2.394,2.395c0,1.323-1.072,2.394-2.394,2.394S37.412,37.297,37.412,35.974z M43.717,45.284c-1.321,0-2.394-1.07-2.394-2.395c0-1.321,1.072-2.394,2.394-2.394c1.322,0,2.395,1.072,2.395,2.394 C46.111,44.214,45.039,45.284,43.717,45.284z M45.104,35.974c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.395,1.072,2.395,2.395 c0,1.323-1.073,2.394-2.395,2.394C46.176,38.367,45.104,37.297,45.104,35.974z M51.532,45.284c-1.322,0-2.395-1.07-2.395-2.395 c0-1.321,1.072-2.394,2.395-2.394c1.321,0,2.395,1.072,2.395,2.394C53.927,44.214,52.854,45.284,51.532,45.284z M55.19,38.367 c-1.322,0-2.395-1.07-2.395-2.394c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.394,1.072,2.394,2.395 C57.584,37.297,56.512,38.367,55.19,38.367z"></path>
                    </svg>
                  </span>
                                </a>
                                <span onclick="addToWishlist(this)" data-id="5702"
                                      class="promo__top-games-block-sale-btn-add-to-wishlist">
                                add to wishlist                            </span>
                            </div><!-- .promo__top-games-block-sale -->

                            <div class="promo__top-games-block-descr">
                                <div class="promo__top-games-block-descr-header">
                                    <div class="promo__top-games-block-descr-header-date">
                                        Release Date: 5 Nov, 2019
                                    </div>
                                    <div class="promo__top-games-block-descr-header-watch">
                                        <img src="{{ asset('/assets/v2/img/icon-watch.png') }}" alt="icon">
                                        2394
                                    </div>
                                    <div onclick="return ajaxLike(
                        '/product/ajaxLike/5702',
                        '/product/ajaxCountLikes/5702',
                        5702);" class="promo__top-games-block-descr-header-like product_like_5702 ">
                                        <div class="promo__top-games-block-descr-header-like-icon"></div>
                                        <span id="countProductLikes-5702">1</span>
                                    </div>
                                </div>
                                <div class="promo__top-games-block-descr-title">
                                    <img style="height: 25px;width: auto;display: inline-block;margin-right: 10px;"
                                         src="https://www.opiumpulses.com/uploads/category/22/filter-icon-rockstar.png"
                                         alt="img">
                                    Red Dead Redemption 2: Ultimate Edition
                                </div>
                                <div class="promo__top-games-block-descr-text">
                                    <p>Developed by the creators of Grand Theft Auto V and Red Dead Redemption, Red Dead
                                        Redemption 2 is an epic tale of life in America’s unforgiving heartland. The
                                        game’s vast and atmospheric world will also provide the foundation for a brand
                                        new online multiplayer experience.ENHANCEMENTS AND NEW STORY MODE CONTENTThe
                                        first game in the Red Dead Redemption series to be featured on the PC platform,
                                        Red Dead Redemption 2 for PC features a range of graphical and technical
                                        enhancements for increased.</p>
                                </div>
                                <div class="promo__top-games-block-descr-footer">
                                    <a href="https://www.opiumpulses.com//product/5702/red-dead-redemption-2-ultimate-edition"
                                       class="promo__top-games-block-descr-footer-btn">
                                        go to game page
                                    </a>
                                    <div class="promo__top-games-block-descr-footer-social">
                                        <div class="promo__top-games-block-descr-footer-social-title">
                                            tell friends
                                        </div>
                                        <div class="promo__top-games-block-descr-footer-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5702%2Fred-dead-redemption-2-ultimate-edition"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-fb">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb"
                                                     class="img-hover">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=Red+Dead+Redemption+2%3A+Ultimate+Edition+save+42%25+at+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5702%2Fred-dead-redemption-2-ultimate-edition"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-tw">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw"
                                                     class="img-hover">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="promo__top-games-block promo__top-games-block-5735"
                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5735/rage-2-uhdpaper.com-4K-8_optimized.jpg');">
                        <div class="promo__top-games-block-inner-wrapper">
                            <div class="promo__top-games-block-sale">
                                <div class="promo__top-games-block-sale-price">
                                    <div class="promo__top-games-block-sale-price-new">
                                        Price: <span>$6.71</span>
                                    </div>
                                    <div class="promo__top-games-block-sale-price-old">
                                        RRP: $59.99
                                    </div>
                                </div>
                                <div class="promo__top-games-block-sale-discount">
                                    -89%
                                </div>
                                <br>
                                <a href="https://www.opiumpulses.com//cart/addProduct/5735"
                                   class="promo__top-games-block-sale-btn-add-to-cart">
                  <span class="promo__top-games-block-sale-btn-add-to-cart-text">
                    add to cart
                  </span>
                                    <span class="promo__top-games-block-sale-btn-add-to-cart-icon">
                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                         x="0px" y="0px" width="35px" height="35px" viewBox="0 0 83.767 83.767"
                         enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path fill="#ffffff"
                            d="M62.882,27.865H23.509c-0.076,0-0.144,0.027-0.216,0.044l-1.603-5.318c-0.019-0.059-0.057-0.103-0.083-0.154 c-0.046-0.547-0.49-0.979-1.048-0.979c-0.002,0-0.002,0-0.004,0l-5.211,0.022c-0.586,0.002-1.062,0.482-1.058,1.068 c0.002,0.586,0.479,1.06,1.064,1.06c0,0,0.002,0,0.004,0l4.412-0.019l9.696,32.178c-1.345,0.908-2.23,2.446-2.23,4.192 c0,2.791,2.264,5.055,5.056,5.055c2.791,0,5.055-2.264,5.055-5.055c0-0.302-0.039-0.595-0.089-0.881h14.082 c-0.05,0.286-0.09,0.579-0.09,0.881c0,2.791,2.264,5.055,5.055,5.055s5.055-2.264,5.055-5.055s-2.264-5.055-5.055-5.055 c-1.658,0-3.117,0.811-4.04,2.045H36.327c-0.92-1.234-2.379-2.045-4.038-2.045c-0.287,0-0.565,0.039-0.838,0.085l-1.12-3.716 l26.809-0.021c0.47,0,0.854-0.31,0.995-0.731c0.038-0.069,0.077-0.134,0.098-0.21l5.675-20.928c0.037-0.133,0.041-0.267,0.026-0.395 c0-0.021,0.013-0.04,0.013-0.061C63.946,28.342,63.471,27.865,62.882,27.865z M57.932,59.96c0,0.9-0.729,1.63-1.63,1.63 c-0.899,0-1.629-0.729-1.629-1.63s0.729-1.63,1.629-1.63C57.202,58.33,57.932,59.06,57.932,59.96z M33.862,59.973 c0,0.899-0.729,1.629-1.629,1.629c-0.9,0-1.63-0.729-1.63-1.629c0-0.9,0.729-1.63,1.63-1.63 C33.133,58.343,33.862,59.072,33.862,59.973z M29.72,35.974c0-1.322,1.071-2.395,2.393-2.395c1.322,0,2.395,1.072,2.395,2.395 c0,1.323-1.072,2.394-2.395,2.394C30.791,38.367,29.72,37.297,29.72,35.974z M35.903,45.284c-1.321,0-2.395-1.07-2.395-2.395 c0-1.321,1.073-2.394,2.395-2.394c1.322,0,2.395,1.072,2.395,2.394C38.298,44.214,37.226,45.284,35.903,45.284z M37.412,35.974 c0-1.322,1.073-2.395,2.395-2.395s2.394,1.072,2.394,2.395c0,1.323-1.072,2.394-2.394,2.394S37.412,37.297,37.412,35.974z M43.717,45.284c-1.321,0-2.394-1.07-2.394-2.395c0-1.321,1.072-2.394,2.394-2.394c1.322,0,2.395,1.072,2.395,2.394 C46.111,44.214,45.039,45.284,43.717,45.284z M45.104,35.974c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.395,1.072,2.395,2.395 c0,1.323-1.073,2.394-2.395,2.394C46.176,38.367,45.104,37.297,45.104,35.974z M51.532,45.284c-1.322,0-2.395-1.07-2.395-2.395 c0-1.321,1.072-2.394,2.395-2.394c1.321,0,2.395,1.072,2.395,2.394C53.927,44.214,52.854,45.284,51.532,45.284z M55.19,38.367 c-1.322,0-2.395-1.07-2.395-2.394c0-1.322,1.072-2.395,2.395-2.395c1.321,0,2.394,1.072,2.394,2.395 C57.584,37.297,56.512,38.367,55.19,38.367z"></path>
                    </svg>
                  </span>
                                </a>
                                <span onclick="addToWishlist(this)" data-id="5735"
                                      class="promo__top-games-block-sale-btn-add-to-wishlist">
                                add to wishlist                            </span>
                            </div>

                            <div class="promo__top-games-block-descr">
                                <div class="promo__top-games-block-descr-header">
                                    <div class="promo__top-games-block-descr-header-date">
                                        Release Date: 13 May, 2019
                                    </div>
                                    <div class="promo__top-games-block-descr-header-watch">
                                        <img src="{{ asset('/assets/v2/img/icon-watch.png') }}" alt="icon">
                                        1688
                                    </div>
                                    <div onclick="return ajaxLike(
                        '/product/ajaxLike/5735',
                        '/product/ajaxCountLikes/5735',
                        5735);" class="promo__top-games-block-descr-header-like product_like_5735 ">
                                        <div class="promo__top-games-block-descr-header-like-icon"></div>
                                        <span id="countProductLikes-5735">1</span>
                                    </div>
                                </div>
                                <div class="promo__top-games-block-descr-title">
                                    <img style="height: 25px;width: auto;display: inline-block;margin-right: 10px;"
                                         src="https://www.opiumpulses.com/uploads/category/23/filter-icon-bethesda.png"
                                         alt="img">
                                    RAGE 2 (EMEA ONLY)
                                </div>
                                <div class="promo__top-games-block-descr-text">
                                    <p>Dive headfirst into a dystopian world devoid of society, law, and order. RAGE 2
                                        brings together two studio powerhouses–Avalanche Studios, masters of open world
                                        insanity, and id Software, creators of the first-person shooter –to deliver a
                                        carnival of carnage where you can go anywhere, shoot anything, and explode
                                        everything.An asteroid has annihilated 80% of the earth’s population, and
                                        humanity’s numbers are dwindling. Ruthless and bloodthirsty gangs roam the open
                                        roads and the tyrannical Authority seek to rule with an iron fist..</p>
                                </div>
                                <div class="promo__top-games-block-descr-footer">
                                    <a href="https://www.opiumpulses.com//product/5735/rage-2"
                                       class="promo__top-games-block-descr-footer-btn">
                                        go to game page
                                    </a>
                                    <div class="promo__top-games-block-descr-footer-social">
                                        <div class="promo__top-games-block-descr-footer-social-title">
                                            tell friends
                                        </div>
                                        <div class="promo__top-games-block-descr-footer-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5735%2Frage-2"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-fb">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb"
                                                     class="img-hover">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=RAGE+2+%28EMEA+ONLY%29+save+89%25+at+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com%2Fproduct%2F5735%2Frage-2"
                                               class="promo__top-games-block-descr-footer-social-item promo__top-games-block-descr-footer-social-item-tw">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw"
                                                     class="img">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw"
                                                     class="img-hover">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="articles-wrapper">
            <div class="articles">
                <div class="container">
                    <div class="articles-title">
                        LATEST ARTICLES
                    </div>
                    <div class="articles-items">
                        <div class="articles-item">
                            <div class="articles-item-img-wrap">
                                <div class="articles-item-img-wrapper">
                                    <div class="articles-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/articles/418/green-hell.jpg');"></div>
                                    <div class="articles-item-img-hover">
                                        <div class="articles-item-img-hover-author">
                      <span class="articles-item-img-hover-author-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                          <path fill="#ca291f" d="M62.436,68.962c0,0.263-0.027,0.518-0.037,0.777H23.524c-0.011-0.26-0.039-0.515-0.039-0.777
                          c0-7.809,4.604-14.523,11.234-17.629c0.002-0.002,0.004-0.002,0.006-0.004c0.576-0.27,1.168-0.51,1.773-0.725
                          c0.061-0.021,0.119-0.045,0.18-0.064c0.299-0.104,0.598-0.199,0.9-0.285c0.389-0.113,0.781-0.215,1.178-0.303
                          c0.205-0.045,0.41-0.086,0.615-0.123c0.191-0.037,0.384-0.072,0.579-0.104h0.002c0.303-0.047,0.605-0.092,0.912-0.125
                          c0.102-0.012,0.205-0.018,0.307-0.027c0.043-0.002,0.086-0.006,0.129-0.01c0.082-0.008,0.166-0.016,0.248-0.021
                          c0.467-0.033,0.938-0.059,1.412-0.059c0.449,0,0.893,0.021,1.334,0.051c0.059,0.006,0.115,0.012,0.174,0.016
                          c0.104,0.008,0.207,0.016,0.311,0.025c0.086,0.008,0.17,0.014,0.254,0.021c0.234,0.025,0.465,0.061,0.695,0.094
                          c0.002,0,0.004,0,0.006,0c0.279,0.041,0.555,0.088,0.828,0.141c0.182,0.033,0.361,0.066,0.539,0.104
                          c0.416,0.092,0.824,0.199,1.229,0.316c0.266,0.076,0.529,0.156,0.791,0.244c0.328,0.109,0.654,0.229,0.975,0.355
                          c0.309,0.124,0.613,0.252,0.916,0.391c0.002,0,0.006,0.002,0.008,0.004C57.75,54.312,62.436,61.083,62.436,68.962z M38.405,45.044
                          c0.186,0.078,0.379,0.141,0.568,0.209c0.17,0.061,0.334,0.131,0.506,0.184c1.104,0.346,2.278,0.531,3.497,0.533c0,0,0.001,0,0.002,0
                          c0.002,0,0.006,0,0.008,0h0.002c0.404,0,0.801-0.021,1.195-0.061c0.174-0.018,0.344-0.053,0.518-0.078
                          c0.215-0.031,0.434-0.055,0.645-0.098c0.168-0.035,0.326-0.084,0.49-0.125c0.211-0.053,0.426-0.1,0.633-0.164
                          c0.141-0.043,0.273-0.1,0.41-0.148c0.225-0.078,0.453-0.152,0.67-0.244c0.104-0.043,0.199-0.098,0.299-0.143
                          c0.248-0.111,0.498-0.225,0.734-0.354c0.057-0.029,0.109-0.066,0.164-0.098c0.277-0.156,0.553-0.318,0.816-0.496
                          c0.008-0.004,0.014-0.01,0.02-0.014c0.205-0.141,0.391-0.301,0.588-0.453c0.068-0.053,0.141-0.1,0.209-0.154
                          c0.016-0.014,0.033-0.025,0.049-0.037c0.016-0.014,0.027-0.027,0.043-0.041c2.605-2.154,4.273-5.398,4.279-9.041v-0.016
                          c0-6.496-5.266-11.764-11.764-11.764c-6.247,0-11.343,4.873-11.727,11.023c-0.016,0.246-0.037,0.49-0.037,0.74
                          C31.223,39.077,34.185,43.259,38.405,45.044z"></path>
                        </svg>
                      </span>
                                            Author: SidTheSloth08
                                        </div>
                                        <div class="articles-item-img-hover-date">
                      <span class="articles-item-img-hover-date-icon">
                        <img src="{{ asset('assets/v2/img/icon-calendar.png') }}" alt="icon">
                      </span>
                                            02.01.2021
                                        </div>
                                        <div class="articles-item-img-hover-comments">
                      <span class="articles-item-img-hover-comments-icon">
                        <img src="{{ asset('assets/v2/img/icon-comments-red.png') }}" alt="icon">
                      </span>
                                            0
                                        </div>
                                        <a href="https://www.opiumpulses.com/article/418/green-hell-review"
                                           class="articles-item-img-hover-btn">
                                            read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="articles-item-name">
                                Green Hell Review
                            </div>
                            <div class="articles-item-descr">
                                AboutIf there is a game that truly lives up to its title, this would be it. Green Hell
                                was developed by Creepy Jar and released on August 29, 2018. It is currently available
                                on all major platforms. It is a story-driven survival game as well as the biggest
                                challenge I’ve had
                            </div>
                        </div>
                        <div class="articles-item">
                            <div class="articles-item-img-wrap">
                                <div class="articles-item-img-wrapper">
                                    <div class="articles-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/articles/417/quest1-2.png');"></div>
                                    <div class="articles-item-img-hover">
                                        <div class="articles-item-img-hover-author">
                      <span class="articles-item-img-hover-author-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                          <path fill="#ca291f" d="M62.436,68.962c0,0.263-0.027,0.518-0.037,0.777H23.524c-0.011-0.26-0.039-0.515-0.039-0.777
                          c0-7.809,4.604-14.523,11.234-17.629c0.002-0.002,0.004-0.002,0.006-0.004c0.576-0.27,1.168-0.51,1.773-0.725
                          c0.061-0.021,0.119-0.045,0.18-0.064c0.299-0.104,0.598-0.199,0.9-0.285c0.389-0.113,0.781-0.215,1.178-0.303
                          c0.205-0.045,0.41-0.086,0.615-0.123c0.191-0.037,0.384-0.072,0.579-0.104h0.002c0.303-0.047,0.605-0.092,0.912-0.125
                          c0.102-0.012,0.205-0.018,0.307-0.027c0.043-0.002,0.086-0.006,0.129-0.01c0.082-0.008,0.166-0.016,0.248-0.021
                          c0.467-0.033,0.938-0.059,1.412-0.059c0.449,0,0.893,0.021,1.334,0.051c0.059,0.006,0.115,0.012,0.174,0.016
                          c0.104,0.008,0.207,0.016,0.311,0.025c0.086,0.008,0.17,0.014,0.254,0.021c0.234,0.025,0.465,0.061,0.695,0.094
                          c0.002,0,0.004,0,0.006,0c0.279,0.041,0.555,0.088,0.828,0.141c0.182,0.033,0.361,0.066,0.539,0.104
                          c0.416,0.092,0.824,0.199,1.229,0.316c0.266,0.076,0.529,0.156,0.791,0.244c0.328,0.109,0.654,0.229,0.975,0.355
                          c0.309,0.124,0.613,0.252,0.916,0.391c0.002,0,0.006,0.002,0.008,0.004C57.75,54.312,62.436,61.083,62.436,68.962z M38.405,45.044
                          c0.186,0.078,0.379,0.141,0.568,0.209c0.17,0.061,0.334,0.131,0.506,0.184c1.104,0.346,2.278,0.531,3.497,0.533c0,0,0.001,0,0.002,0
                          c0.002,0,0.006,0,0.008,0h0.002c0.404,0,0.801-0.021,1.195-0.061c0.174-0.018,0.344-0.053,0.518-0.078
                          c0.215-0.031,0.434-0.055,0.645-0.098c0.168-0.035,0.326-0.084,0.49-0.125c0.211-0.053,0.426-0.1,0.633-0.164
                          c0.141-0.043,0.273-0.1,0.41-0.148c0.225-0.078,0.453-0.152,0.67-0.244c0.104-0.043,0.199-0.098,0.299-0.143
                          c0.248-0.111,0.498-0.225,0.734-0.354c0.057-0.029,0.109-0.066,0.164-0.098c0.277-0.156,0.553-0.318,0.816-0.496
                          c0.008-0.004,0.014-0.01,0.02-0.014c0.205-0.141,0.391-0.301,0.588-0.453c0.068-0.053,0.141-0.1,0.209-0.154
                          c0.016-0.014,0.033-0.025,0.049-0.037c0.016-0.014,0.027-0.027,0.043-0.041c2.605-2.154,4.273-5.398,4.279-9.041v-0.016
                          c0-6.496-5.266-11.764-11.764-11.764c-6.247,0-11.343,4.873-11.727,11.023c-0.016,0.246-0.037,0.49-0.037,0.74
                          C31.223,39.077,34.185,43.259,38.405,45.044z"></path>
                        </svg>
                      </span>
                                            Author: SlipSlot
                                        </div>
                                        <div class="articles-item-img-hover-date">
                      <span class="articles-item-img-hover-date-icon">
                        <img src="{{ asset('assets/v2/img/icon-calendar.png') }}" alt="icon">
                      </span>
                                            28.12.2020
                                        </div>
                                        <div class="articles-item-img-hover-comments">
                      <span class="articles-item-img-hover-comments-icon">
                        <img src="{{ asset('assets/v2/img/icon-comments-red.png') }}" alt="icon">
                      </span>
                                            0
                                        </div>
                                        <a href="https://www.opiumpulses.com/article/417/10-more-oculus-quest-game-reviews-p3"
                                           class="articles-item-img-hover-btn">
                                            read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="articles-item-name">
                                10 More Oculus Quest Game Reviews - Part 3
                            </div>
                            <div class="articles-item-descr">
                                If you're a regular reader here at Opium Pulses, you might remember a series of game
                                reviews we did in the months following the release of the Oculus Quest.As the Oculus
                                Quest 2 recently released around the world, we're starting a new series of reviews
                                featuring old and new titles that
                            </div>
                        </div><!-- .articles-item -->
                        <div class="articles-item">
                            <div class="articles-item-img-wrap">
                                <div class="articles-item-img-wrapper">
                                    <div class="articles-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/articles/415/H2x1_NSwitchDS_ChickenPolicePaintItRed_image1600w.jpg');"></div>
                                    <div class="articles-item-img-hover">
                                        <div class="articles-item-img-hover-author">
                      <span class="articles-item-img-hover-author-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                          <path fill="#ca291f" d="M62.436,68.962c0,0.263-0.027,0.518-0.037,0.777H23.524c-0.011-0.26-0.039-0.515-0.039-0.777
                          c0-7.809,4.604-14.523,11.234-17.629c0.002-0.002,0.004-0.002,0.006-0.004c0.576-0.27,1.168-0.51,1.773-0.725
                          c0.061-0.021,0.119-0.045,0.18-0.064c0.299-0.104,0.598-0.199,0.9-0.285c0.389-0.113,0.781-0.215,1.178-0.303
                          c0.205-0.045,0.41-0.086,0.615-0.123c0.191-0.037,0.384-0.072,0.579-0.104h0.002c0.303-0.047,0.605-0.092,0.912-0.125
                          c0.102-0.012,0.205-0.018,0.307-0.027c0.043-0.002,0.086-0.006,0.129-0.01c0.082-0.008,0.166-0.016,0.248-0.021
                          c0.467-0.033,0.938-0.059,1.412-0.059c0.449,0,0.893,0.021,1.334,0.051c0.059,0.006,0.115,0.012,0.174,0.016
                          c0.104,0.008,0.207,0.016,0.311,0.025c0.086,0.008,0.17,0.014,0.254,0.021c0.234,0.025,0.465,0.061,0.695,0.094
                          c0.002,0,0.004,0,0.006,0c0.279,0.041,0.555,0.088,0.828,0.141c0.182,0.033,0.361,0.066,0.539,0.104
                          c0.416,0.092,0.824,0.199,1.229,0.316c0.266,0.076,0.529,0.156,0.791,0.244c0.328,0.109,0.654,0.229,0.975,0.355
                          c0.309,0.124,0.613,0.252,0.916,0.391c0.002,0,0.006,0.002,0.008,0.004C57.75,54.312,62.436,61.083,62.436,68.962z M38.405,45.044
                          c0.186,0.078,0.379,0.141,0.568,0.209c0.17,0.061,0.334,0.131,0.506,0.184c1.104,0.346,2.278,0.531,3.497,0.533c0,0,0.001,0,0.002,0
                          c0.002,0,0.006,0,0.008,0h0.002c0.404,0,0.801-0.021,1.195-0.061c0.174-0.018,0.344-0.053,0.518-0.078
                          c0.215-0.031,0.434-0.055,0.645-0.098c0.168-0.035,0.326-0.084,0.49-0.125c0.211-0.053,0.426-0.1,0.633-0.164
                          c0.141-0.043,0.273-0.1,0.41-0.148c0.225-0.078,0.453-0.152,0.67-0.244c0.104-0.043,0.199-0.098,0.299-0.143
                          c0.248-0.111,0.498-0.225,0.734-0.354c0.057-0.029,0.109-0.066,0.164-0.098c0.277-0.156,0.553-0.318,0.816-0.496
                          c0.008-0.004,0.014-0.01,0.02-0.014c0.205-0.141,0.391-0.301,0.588-0.453c0.068-0.053,0.141-0.1,0.209-0.154
                          c0.016-0.014,0.033-0.025,0.049-0.037c0.016-0.014,0.027-0.027,0.043-0.041c2.605-2.154,4.273-5.398,4.279-9.041v-0.016
                          c0-6.496-5.266-11.764-11.764-11.764c-6.247,0-11.343,4.873-11.727,11.023c-0.016,0.246-0.037,0.49-0.037,0.74
                          C31.223,39.077,34.185,43.259,38.405,45.044z"></path>
                        </svg>
                      </span>
                                            Author: peza12
                                        </div>
                                        <div class="articles-item-img-hover-date">
                      <span class="articles-item-img-hover-date-icon">
                        <img src="{{ asset('assets/v2/img/icon-calendar.png') }}" alt="icon">
                      </span>
                                            18.12.2020
                                        </div>
                                        <div class="articles-item-img-hover-comments">
                      <span class="articles-item-img-hover-comments-icon">
                        <img src="{{ asset('assets/v2/img/icon-comments-red.png') }}" alt="icon">
                      </span>
                                            1
                                        </div>
                                        <a href="https://www.opiumpulses.com/article/415/chicken-police-paint-it-red-review"
                                           class="articles-item-img-hover-btn">
                                            read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="articles-item-name">
                                Chicken Police - Paint it RED! Review
                            </div>
                            <div class="articles-item-descr">
                                You’d be hard-pressed to find another game released this year that is quite as visually
                                uncomfortable as Chicken Police – Paint if Red! is. Actually, that isn’t fair, it is
                                actually dripping in style, with a strong 30s noire feel to it, complete with film grain
                                giving everything a gritty tone.
                            </div>
                        </div>
                        <div class="articles-item">
                            <div class="articles-item-img-wrap">
                                <div class="articles-item-img-wrapper">
                                    <div class="articles-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/articles/411/quest.jpg');"></div>
                                    <div class="articles-item-img-hover">
                                        <div class="articles-item-img-hover-author">
                      <span class="articles-item-img-hover-author-icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                          <path fill="#ca291f" d="M62.436,68.962c0,0.263-0.027,0.518-0.037,0.777H23.524c-0.011-0.26-0.039-0.515-0.039-0.777
                          c0-7.809,4.604-14.523,11.234-17.629c0.002-0.002,0.004-0.002,0.006-0.004c0.576-0.27,1.168-0.51,1.773-0.725
                          c0.061-0.021,0.119-0.045,0.18-0.064c0.299-0.104,0.598-0.199,0.9-0.285c0.389-0.113,0.781-0.215,1.178-0.303
                          c0.205-0.045,0.41-0.086,0.615-0.123c0.191-0.037,0.384-0.072,0.579-0.104h0.002c0.303-0.047,0.605-0.092,0.912-0.125
                          c0.102-0.012,0.205-0.018,0.307-0.027c0.043-0.002,0.086-0.006,0.129-0.01c0.082-0.008,0.166-0.016,0.248-0.021
                          c0.467-0.033,0.938-0.059,1.412-0.059c0.449,0,0.893,0.021,1.334,0.051c0.059,0.006,0.115,0.012,0.174,0.016
                          c0.104,0.008,0.207,0.016,0.311,0.025c0.086,0.008,0.17,0.014,0.254,0.021c0.234,0.025,0.465,0.061,0.695,0.094
                          c0.002,0,0.004,0,0.006,0c0.279,0.041,0.555,0.088,0.828,0.141c0.182,0.033,0.361,0.066,0.539,0.104
                          c0.416,0.092,0.824,0.199,1.229,0.316c0.266,0.076,0.529,0.156,0.791,0.244c0.328,0.109,0.654,0.229,0.975,0.355
                          c0.309,0.124,0.613,0.252,0.916,0.391c0.002,0,0.006,0.002,0.008,0.004C57.75,54.312,62.436,61.083,62.436,68.962z M38.405,45.044
                          c0.186,0.078,0.379,0.141,0.568,0.209c0.17,0.061,0.334,0.131,0.506,0.184c1.104,0.346,2.278,0.531,3.497,0.533c0,0,0.001,0,0.002,0
                          c0.002,0,0.006,0,0.008,0h0.002c0.404,0,0.801-0.021,1.195-0.061c0.174-0.018,0.344-0.053,0.518-0.078
                          c0.215-0.031,0.434-0.055,0.645-0.098c0.168-0.035,0.326-0.084,0.49-0.125c0.211-0.053,0.426-0.1,0.633-0.164
                          c0.141-0.043,0.273-0.1,0.41-0.148c0.225-0.078,0.453-0.152,0.67-0.244c0.104-0.043,0.199-0.098,0.299-0.143
                          c0.248-0.111,0.498-0.225,0.734-0.354c0.057-0.029,0.109-0.066,0.164-0.098c0.277-0.156,0.553-0.318,0.816-0.496
                          c0.008-0.004,0.014-0.01,0.02-0.014c0.205-0.141,0.391-0.301,0.588-0.453c0.068-0.053,0.141-0.1,0.209-0.154
                          c0.016-0.014,0.033-0.025,0.049-0.037c0.016-0.014,0.027-0.027,0.043-0.041c2.605-2.154,4.273-5.398,4.279-9.041v-0.016
                          c0-6.496-5.266-11.764-11.764-11.764c-6.247,0-11.343,4.873-11.727,11.023c-0.016,0.246-0.037,0.49-0.037,0.74
                          C31.223,39.077,34.185,43.259,38.405,45.044z"></path>
                        </svg>
                      </span>
                                            Author: SlipSlot
                                        </div>
                                        <div class="articles-item-img-hover-date">
                      <span class="articles-item-img-hover-date-icon">
                        <img src="{{ asset('assets/v2/img/icon-calendar.png') }}" alt="icon">
                      </span>
                                            17.12.2020
                                        </div>
                                        <div class="articles-item-img-hover-comments">
                      <span class="articles-item-img-hover-comments-icon">
                        <img src="{{ asset('assets/v2/img/icon-comments-red.png') }}" alt="icon">
                      </span>
                                            0
                                        </div>
                                        <a href="https://www.opiumpulses.com//article/411/10-more-oculus-quest-game-reviews-p2"
                                           class="articles-item-img-hover-btn">
                                            read more
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="articles-item-name">
                                10 More Oculus Quest Game Reviews - Part 2
                            </div>
                            <div class="articles-item-descr">
                                If you're a regular reader here at Opium Pulses, you might remember a series of game
                                reviews we did in the months following the release of the Oculus Quest.As the Oculus
                                Quest 2 recently released around the world, we're starting a new series of reviews
                                featuring old and new titles that
                            </div>
                        </div>
                    </div>

                    <div class="articles-btn-wrapper">
                        <a href="https://www.opiumpulses.com/article" class="articles-btn">
                            view all
                        </a>
                    </div>
                </div>
            </div>
            <div class="articles-points corner-box">
                <div class="corner"></div>
                <div class="container">
                    <div class="articles-points-inner-wrapper">
                        <div class="articles-points-content">
                            <div class="articles-points-content-title">
                                Complete quests - earn points
                            </div>
                            <div class="articles-points-content-block">
                                <div class="articles-points-content-phrase">
                                    Exchange points for games!
                                </div>
                                <a href="https://www.opiumpulses.com/quests" class="articles-points-content-btn">
                                    start collecting points
                                </a>
                            </div>
                        </div>
                        <div class="articles-points-img">
                            <img src="{{ asset('assets/v2/img/articles-points-img.png') }}" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="giveaways-wrapper">
            <div class="giveaways">
                <div class="container">
                    <div class="giveaways-title">
            <span class="giveaways-title-icon">
              <img src="{{ asset('assets/v2/img/icon-fire.png') }}" alt="icon">
            </span>
                        Latest Giveaways
                    </div><!-- .giveaways-title -->
                    <div class="giveaways-slider-wrapper">
                        <div class="giveaways-slider owl-carousel owl-loaded owl-drag">
                            <div class="owl-item" style="width: 403.333px;">
                                <div class="giveaways-slide">
                                    <div class="giveaways-slide-header">
                                        <div class="giveaways-slide-header-period">
                                            <div class="giveaways-slide-header-period-icon"></div>
                                            <span data-countdown="2021-01-24 22:00:40">1 week 5 days </span>

                                        </div>
                                        <div class="giveaways-slide-header-points">
                                            FREE
                                        </div>
                                    </div><!-- .giveaways-slide-header -->
                                    <div class="giveaways-slide-img-wrapper">
                                        <div class="giveaways-slide-img"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9560/gunsboy.jpg');"></div>
                                        <div class="giveaways-slide-img-btn-wrapper">
                                            <a href="https://www.opiumpulses.com/giveaways/enter/filLi"
                                               class="giveaways-slide-img-btn-enter">
                                                enter
                                            </a>
                                            <a href="https://www.opiumpulses.com/giveaways/filLi/guns-boy"
                                               class="giveaways-slide-img-btn-more">
                                                view more
                                            </a>
                                        </div><!-- .giveaways-slide-img-btn-wrapper -->
                                    </div><!-- .giveaways-slide-img -->
                                    <div class="giveaways-slide-footer">
                                        <img data-toggle="tooltip" data-original-title="Steam"
                                             data-placement="top" data-container="body"
                                             style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                             src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                             alt="img">
                                        <img
                                            src="{{ asset('assets/v2/img/giveaways/jointype/everyone.png') }}"
                                            data-toggle="tooltip" data-container="body"
                                            data-original-title="Open for everyone. Anyone can join this giveaway."
                                            data-placement="top"
                                            style="width: 25px;height: 25px;margin-right: 10px;">
                                        <div class="giveaways-slide-footer-name">
                                            Guns Boy
                                        </div>
                                        <div class="giveaways-slide-footer-comments">
                                            <div class="giveaways-slide-footer-comments-icon"></div>
                                            0
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 403.333px;">
                                <div class="giveaways-slide">
                                    <div class="giveaways-slide-header">
                                        <div class="giveaways-slide-header-period">
                                            <div class="giveaways-slide-header-period-icon"></div>
                                            <span data-countdown="2021-01-24 22:00:10">1 week 5 days </span>

                                        </div>
                                        <div class="giveaways-slide-header-points">
                                            10 points
                                        </div>
                                    </div>
                                    <div class="giveaways-slide-img-wrapper">
                                        <div class="giveaways-slide-img"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9567/TRI.jpg');"></div>
                                        <div class="giveaways-slide-img-btn-wrapper">
                                            <a href="https://www.opiumpulses.com//giveaways/enter/Da0nd"
                                               class="giveaways-slide-img-btn-enter">
                                                enter
                                            </a>
                                            <a href="https://www.opiumpulses.com//giveaways/Da0nd/tri-of-friendship-and-madness"
                                               class="giveaways-slide-img-btn-more">
                                                view more
                                            </a>
                                        </div>
                                    </div>
                                    <div class="giveaways-slide-footer">
                                        <img data-toggle="tooltip" data-original-title="Steam"
                                             data-placement="top" data-container="body"
                                             style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                             src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                             alt="img">
                                        <img
                                            src="{{ asset('assets/v2/img/giveaways/jointype/everyone.png') }}"
                                            data-toggle="tooltip" data-container="body"
                                            data-original-title="Open for everyone. Anyone can join this giveaway."
                                            data-placement="top"
                                            style="width: 25px;height: 25px;margin-right: 10px;">
                                        <div class="giveaways-slide-footer-name">
                                            TRI: Of Friendship and Madness
                                        </div>
                                        <div class="giveaways-slide-footer-comments">
                                            <div class="giveaways-slide-footer-comments-icon"></div>
                                            0
                                        </div>
                                    </div><!-- .giveaways-slide-footer -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 403.333px;">
                                <div class="giveaways-slide">
                                    <div class="giveaways-slide-header">
                                        <div class="giveaways-slide-header-period">
                                            <div class="giveaways-slide-header-period-icon"></div>
                                            <span data-countdown="2021-01-23 22:00:53">1 week 4 days </span>

                                        </div>
                                        <div class="giveaways-slide-header-points">
                                            FREE
                                        </div>
                                    </div><!-- .giveaways-slide-header -->
                                    <div class="giveaways-slide-img-wrapper">
                                        <div class="giveaways-slide-img"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9559/russianreality.jpg');"></div>
                                        <div class="giveaways-slide-img-btn-wrapper">
                                            <a href="https://www.opiumpulses.com//giveaways/enter/sW4VJ"
                                               class="giveaways-slide-img-btn-enter">
                                                enter
                                            </a>
                                            <a href="https://www.opiumpulses.com//giveaways/sW4VJ/russian-reality"
                                               class="giveaways-slide-img-btn-more">
                                                view more
                                            </a>
                                        </div><!-- .giveaways-slide-img-btn-wrapper -->
                                    </div><!-- .giveaways-slide-img -->
                                    <div class="giveaways-slide-footer">
                                        <img data-toggle="tooltip" data-original-title="Steam"
                                             data-placement="top" data-container="body"
                                             style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                             src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                             alt="img">
                                        <img
                                            src="{{ asset('assets/v2/img/giveaways/jointype/everyone.png') }}"
                                            data-toggle="tooltip" data-container="body"
                                            data-original-title="Open for everyone. Anyone can join this giveaway."
                                            data-placement="top"
                                            style="width: 25px;height: 25px;margin-right: 10px;">                            <!--
                            <div class="giveaways-slide-footer-users-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29px" height="29px" viewBox="0 0 83.767 83.767" enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path d="M48.912,38.466c0-0.034-0.005-0.07-0.005-0.104c0-0.174,0.016-0.341,0.025-0.51
                      c0.041-0.647,0.167-1.267,0.35-1.863c1.01-3.298,4.068-5.702,7.7-5.702c3.486,0,6.448,2.212,7.575,5.305
                      c0.319,0.864,0.5,1.794,0.5,2.771c0,0.002-0.002,0.004-0.002,0.009c0,1.113-0.235,2.169-0.645,3.134
                      c-0.61,1.442-1.62,2.674-2.9,3.543c-0.007,0.002-0.01,0.007-0.014,0.009c-0.181,0.123-0.37,0.235-0.561,0.343
                      c-0.038,0.021-0.073,0.046-0.114,0.066c-0.162,0.087-0.333,0.165-0.5,0.24c-0.071,0.032-0.138,0.07-0.208,0.101
                      c-0.148,0.062-0.307,0.114-0.46,0.167c-0.094,0.034-0.185,0.073-0.281,0.104c-0.144,0.041-0.287,0.073-0.434,0.11
                      c-0.114,0.027-0.222,0.06-0.336,0.084c-0.148,0.03-0.298,0.046-0.443,0.069c-0.119,0.016-0.236,0.041-0.354,0.052
                      c-0.272,0.027-0.544,0.041-0.821,0.041c-0.838,0-1.647-0.125-2.408-0.363c-0.119-0.038-0.231-0.084-0.346-0.128
                      c-0.133-0.046-0.265-0.089-0.391-0.142C50.972,44.587,48.953,41.765,48.912,38.466z M33.495,48.686
                      c-10.704,0-19.383,8.679-19.383,19.385c0,0.261,0.027,0.515,0.036,0.774h38.692c0.012-0.26,0.037-0.514,0.037-0.774
                      C52.878,57.364,44.201,48.686,33.495,48.686z M56.982,48.848c-2.933,0-5.634,0.955-7.838,2.556c3.207,3.015,5.539,6.93,6.595,11.349
                      h14.585c0.009-0.181,0.027-0.354,0.027-0.535C70.352,54.832,64.365,48.848,56.982,48.848z M28.963,44.265
                      c0.185,0.076,0.374,0.138,0.566,0.211c0.167,0.059,0.331,0.128,0.5,0.183c1.104,0.343,2.277,0.528,3.495,0.53
                      c0.4,0,0.796-0.023,1.188-0.064c0.174-0.016,0.343-0.05,0.515-0.075c0.213-0.032,0.432-0.055,0.643-0.101
                      c0.164-0.032,0.324-0.082,0.486-0.123c0.21-0.051,0.423-0.097,0.631-0.16c0.14-0.046,0.272-0.103,0.407-0.148
                      c0.224-0.08,0.45-0.153,0.667-0.245c0.103-0.043,0.199-0.096,0.297-0.142c0.247-0.109,0.494-0.224,0.731-0.35
                      c0.058-0.029,0.11-0.068,0.163-0.099c0.276-0.157,0.551-0.317,0.813-0.493c0.007-0.005,0.012-0.012,0.021-0.016
                      c3.1-2.104,5.138-5.653,5.143-9.681c0-0.004,0-0.009,0-0.014c0-6.466-5.241-11.707-11.71-11.707c-6.217,0-11.288,4.848-11.67,10.969
                      c-0.017,0.245-0.037,0.489-0.037,0.738C21.813,38.327,24.759,42.486,28.963,44.265z"/>
                    </svg>
                            </div>
                            -->
                                        <div class="giveaways-slide-footer-name">
                                            Russian Reality
                                        </div>
                                        <div class="giveaways-slide-footer-comments">
                                            <div class="giveaways-slide-footer-comments-icon"></div>
                                            0
                                        </div>
                                    </div><!-- .giveaways-slide-footer -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 403.333px;">
                                <div class="giveaways-slide">
                                    <div class="giveaways-slide-header">
                                        <div class="giveaways-slide-header-period">
                                            <div class="giveaways-slide-header-period-icon"></div>
                                            <span data-countdown="2021-01-23 22:00:40">1 week 4 days </span>

                                        </div>
                                        <div class="giveaways-slide-header-points">
                                            10 points
                                        </div>
                                    </div><!-- .giveaways-slide-header -->
                                    <div class="giveaways-slide-img-wrapper">
                                        <div class="giveaways-slide-img"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9573/postalredux.jpg');"></div>
                                        <div class="giveaways-slide-img-btn-wrapper">
                                            <a href="https://www.opiumpulses.com//giveaways/enter/YJ1SU"
                                               class="giveaways-slide-img-btn-enter">
                                                enter
                                            </a>
                                            <a href="https://www.opiumpulses.com//giveaways/YJ1SU/postal-redux"
                                               class="giveaways-slide-img-btn-more">
                                                view more
                                            </a>
                                        </div><!-- .giveaways-slide-img-btn-wrapper -->
                                    </div><!-- .giveaways-slide-img -->
                                    <div class="giveaways-slide-footer">
                                        <img data-toggle="tooltip" data-original-title="Steam"
                                             data-placement="top" data-container="body"
                                             style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                             src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                             alt="img">
                                        <img
                                            src="{{ asset('assets/v2/img/giveaways/jointype/everyone.png') }}"
                                            data-toggle="tooltip" data-container="body"
                                            data-original-title="Open for everyone. Anyone can join this giveaway."
                                            data-placement="top"
                                            style="width: 25px;height: 25px;margin-right: 10px;">                            <!--
                            <div class="giveaways-slide-footer-users-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29px" height="29px" viewBox="0 0 83.767 83.767" enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path d="M48.912,38.466c0-0.034-0.005-0.07-0.005-0.104c0-0.174,0.016-0.341,0.025-0.51
                      c0.041-0.647,0.167-1.267,0.35-1.863c1.01-3.298,4.068-5.702,7.7-5.702c3.486,0,6.448,2.212,7.575,5.305
                      c0.319,0.864,0.5,1.794,0.5,2.771c0,0.002-0.002,0.004-0.002,0.009c0,1.113-0.235,2.169-0.645,3.134
                      c-0.61,1.442-1.62,2.674-2.9,3.543c-0.007,0.002-0.01,0.007-0.014,0.009c-0.181,0.123-0.37,0.235-0.561,0.343
                      c-0.038,0.021-0.073,0.046-0.114,0.066c-0.162,0.087-0.333,0.165-0.5,0.24c-0.071,0.032-0.138,0.07-0.208,0.101
                      c-0.148,0.062-0.307,0.114-0.46,0.167c-0.094,0.034-0.185,0.073-0.281,0.104c-0.144,0.041-0.287,0.073-0.434,0.11
                      c-0.114,0.027-0.222,0.06-0.336,0.084c-0.148,0.03-0.298,0.046-0.443,0.069c-0.119,0.016-0.236,0.041-0.354,0.052
                      c-0.272,0.027-0.544,0.041-0.821,0.041c-0.838,0-1.647-0.125-2.408-0.363c-0.119-0.038-0.231-0.084-0.346-0.128
                      c-0.133-0.046-0.265-0.089-0.391-0.142C50.972,44.587,48.953,41.765,48.912,38.466z M33.495,48.686
                      c-10.704,0-19.383,8.679-19.383,19.385c0,0.261,0.027,0.515,0.036,0.774h38.692c0.012-0.26,0.037-0.514,0.037-0.774
                      C52.878,57.364,44.201,48.686,33.495,48.686z M56.982,48.848c-2.933,0-5.634,0.955-7.838,2.556c3.207,3.015,5.539,6.93,6.595,11.349
                      h14.585c0.009-0.181,0.027-0.354,0.027-0.535C70.352,54.832,64.365,48.848,56.982,48.848z M28.963,44.265
                      c0.185,0.076,0.374,0.138,0.566,0.211c0.167,0.059,0.331,0.128,0.5,0.183c1.104,0.343,2.277,0.528,3.495,0.53
                      c0.4,0,0.796-0.023,1.188-0.064c0.174-0.016,0.343-0.05,0.515-0.075c0.213-0.032,0.432-0.055,0.643-0.101
                      c0.164-0.032,0.324-0.082,0.486-0.123c0.21-0.051,0.423-0.097,0.631-0.16c0.14-0.046,0.272-0.103,0.407-0.148
                      c0.224-0.08,0.45-0.153,0.667-0.245c0.103-0.043,0.199-0.096,0.297-0.142c0.247-0.109,0.494-0.224,0.731-0.35
                      c0.058-0.029,0.11-0.068,0.163-0.099c0.276-0.157,0.551-0.317,0.813-0.493c0.007-0.005,0.012-0.012,0.021-0.016
                      c3.1-2.104,5.138-5.653,5.143-9.681c0-0.004,0-0.009,0-0.014c0-6.466-5.241-11.707-11.71-11.707c-6.217,0-11.288,4.848-11.67,10.969
                      c-0.017,0.245-0.037,0.489-0.037,0.738C21.813,38.327,24.759,42.486,28.963,44.265z"/>
                    </svg>
                            </div>
                            -->
                                        <div class="giveaways-slide-footer-name">
                                            POSTAL Redux
                                        </div>
                                        <div class="giveaways-slide-footer-comments">
                                            <div class="giveaways-slide-footer-comments-icon"></div>
                                            0
                                        </div>
                                    </div><!-- .giveaways-slide-footer -->
                                </div>
                            </div>
                            <div class="owl-item" style="width: 403.333px;">
                                <div class="giveaways-slide">
                                    <div class="giveaways-slide-header">
                                        <div class="giveaways-slide-header-period">
                                            <div class="giveaways-slide-header-period-icon"></div>
                                            <span data-countdown="2021-01-23 22:00:15">1 week 4 days </span>

                                        </div>
                                        <div class="giveaways-slide-header-points">
                                            10 points
                                        </div>
                                    </div><!-- .giveaways-slide-header -->
                                    <div class="giveaways-slide-img-wrapper">
                                        <div class="giveaways-slide-img"
                                             style="background-image: url('https://www.opiumpulses.com/uploads/giveaway/9566/thekeep.jpg');"></div>
                                        <div class="giveaways-slide-img-btn-wrapper">
                                            <a href="https://www.opiumpulses.com//giveaways/enter/IsQgX"
                                               class="giveaways-slide-img-btn-enter">
                                                enter
                                            </a>
                                            <a href="https://www.opiumpulses.com//giveaways/IsQgX/the-keep"
                                               class="giveaways-slide-img-btn-more">
                                                view more
                                            </a>
                                        </div><!-- .giveaways-slide-img-btn-wrapper -->
                                    </div><!-- .giveaways-slide-img -->
                                    <div class="giveaways-slide-footer">
                                        <img data-toggle="tooltip" data-original-title="Steam"
                                             data-placement="top" data-container="body"
                                             style="height: 25px;width: auto;display: inline-block;margin-right: 10px"
                                             src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png"
                                             alt="img">
                                        <img
                                            src="{{ asset('assets/v2/img/giveaways/jointype/everyone.png') }}"
                                            data-toggle="tooltip" data-container="body"
                                            data-original-title="Open for everyone. Anyone can join this giveaway."
                                            data-placement="top"
                                            style="width: 25px;height: 25px;margin-right: 10px;">                            <!--
                            <div class="giveaways-slide-footer-users-icon">
                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="29px" height="29px" viewBox="0 0 83.767 83.767" enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                      <path d="M48.912,38.466c0-0.034-0.005-0.07-0.005-0.104c0-0.174,0.016-0.341,0.025-0.51
                      c0.041-0.647,0.167-1.267,0.35-1.863c1.01-3.298,4.068-5.702,7.7-5.702c3.486,0,6.448,2.212,7.575,5.305
                      c0.319,0.864,0.5,1.794,0.5,2.771c0,0.002-0.002,0.004-0.002,0.009c0,1.113-0.235,2.169-0.645,3.134
                      c-0.61,1.442-1.62,2.674-2.9,3.543c-0.007,0.002-0.01,0.007-0.014,0.009c-0.181,0.123-0.37,0.235-0.561,0.343
                      c-0.038,0.021-0.073,0.046-0.114,0.066c-0.162,0.087-0.333,0.165-0.5,0.24c-0.071,0.032-0.138,0.07-0.208,0.101
                      c-0.148,0.062-0.307,0.114-0.46,0.167c-0.094,0.034-0.185,0.073-0.281,0.104c-0.144,0.041-0.287,0.073-0.434,0.11
                      c-0.114,0.027-0.222,0.06-0.336,0.084c-0.148,0.03-0.298,0.046-0.443,0.069c-0.119,0.016-0.236,0.041-0.354,0.052
                      c-0.272,0.027-0.544,0.041-0.821,0.041c-0.838,0-1.647-0.125-2.408-0.363c-0.119-0.038-0.231-0.084-0.346-0.128
                      c-0.133-0.046-0.265-0.089-0.391-0.142C50.972,44.587,48.953,41.765,48.912,38.466z M33.495,48.686
                      c-10.704,0-19.383,8.679-19.383,19.385c0,0.261,0.027,0.515,0.036,0.774h38.692c0.012-0.26,0.037-0.514,0.037-0.774
                      C52.878,57.364,44.201,48.686,33.495,48.686z M56.982,48.848c-2.933,0-5.634,0.955-7.838,2.556c3.207,3.015,5.539,6.93,6.595,11.349
                      h14.585c0.009-0.181,0.027-0.354,0.027-0.535C70.352,54.832,64.365,48.848,56.982,48.848z M28.963,44.265
                      c0.185,0.076,0.374,0.138,0.566,0.211c0.167,0.059,0.331,0.128,0.5,0.183c1.104,0.343,2.277,0.528,3.495,0.53
                      c0.4,0,0.796-0.023,1.188-0.064c0.174-0.016,0.343-0.05,0.515-0.075c0.213-0.032,0.432-0.055,0.643-0.101
                      c0.164-0.032,0.324-0.082,0.486-0.123c0.21-0.051,0.423-0.097,0.631-0.16c0.14-0.046,0.272-0.103,0.407-0.148
                      c0.224-0.08,0.45-0.153,0.667-0.245c0.103-0.043,0.199-0.096,0.297-0.142c0.247-0.109,0.494-0.224,0.731-0.35
                      c0.058-0.029,0.11-0.068,0.163-0.099c0.276-0.157,0.551-0.317,0.813-0.493c0.007-0.005,0.012-0.012,0.021-0.016
                      c3.1-2.104,5.138-5.653,5.143-9.681c0-0.004,0-0.009,0-0.014c0-6.466-5.241-11.707-11.71-11.707c-6.217,0-11.288,4.848-11.67,10.969
                      c-0.017,0.245-0.037,0.489-0.037,0.738C21.813,38.327,24.759,42.486,28.963,44.265z"/>
                    </svg>
                            </div>
                            -->
                                        <div class="giveaways-slide-footer-name">
                                            The Keep
                                        </div>
                                        <div class="giveaways-slide-footer-comments">
                                            <div class="giveaways-slide-footer-comments-icon"></div>
                                            0
                                        </div>
                                    </div><!-- .giveaways-slide-footer -->
                                </div>
                            </div>
                        </div><!-- .giveaways-slider -->
                    </div><!-- .giveaways-slider-wrapper -->
                    <div class="giveaways-btn-wrapper">
                        <a href="https://www.opiumpulses.com//giveaways" class="giveaways-btn">
                            View all
                        </a>
                    </div>
                </div><!-- .container -->
            </div><!-- .giveaways -->
            <a href="https://www.opiumpulses.com/https://discord.gg/opiumpulses" target="_blank"
               class="giveaways-join corner-box">
                <div class="corner"></div>
                <div class="container">
                    <div class="giveaways-join-title">
                        Come &amp; join us on dicord.gg
                    </div>
                    <div class="giveaways-join-content">
                        <div class="giveaways-join-img1">
                            <img src="{{ asset('assets/v2/img/giveaways-join-img1.png') }}" alt="img">
                        </div>
                        <div class="giveaways-join-img2">
                            <img src="{{ asset('assets/v2/img/giveaways-join-img2.png') }}" alt="img">
                        </div>
                        <div class="giveaways-join-img3">
                            <img src="{{ asset('assets/v2/img/giveaways-join-img3.png') }}" alt="img">
                        </div>
                    </div>
                </div><!-- .container -->
            </a><!-- .giveaways-join -->
        </div><!-- .giveaways-wrapper -->


        <div class="trove-wrapper">
            <div class="trove">
                <div class="container">
                    <div class="trove-title">
                        TREASURE TROVE
                    </div><!-- .trove-title -->
                    <div class="trove-descr">
                        Featured Games
                    </div><!-- .trove-descr -->
                    <div id="treasureHome" class="list-view">
                        <div class="troveSpinner"></div>
                        <div class="trove-items">

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        5670 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5493/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5493/disneys-aladdin"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5493/disneys-aladdin?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        Disney's Aladdin
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        3479 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5948/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5948/aarklash-legacy"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5948/aarklash-legacy?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        Aarklash: Legacy
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        4890 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5831/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5831/pirates-pirates"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5831/pirates-pirates?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        Pirates? Pirates!
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        5220 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5928/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5928/7-wonders-of-the-ancient-world"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5928/7-wonders-of-the-ancient-world?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        7 Wonders of the Ancient World
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        5160 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5802/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5802/days-of-war-definitive-edition"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5802/days-of-war-definitive-edition?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        Days of War: Definitive Edition
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        4800 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5780/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5780/molek-syntez"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5780/molek-syntez?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        MOLEK-SYNTEZ
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        4890 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5770/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5770/the-coma-2-vicious-sisters"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5770/the-coma-2-vicious-sisters?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        The Coma 2: Vicious Sisters
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->

                            <div class="trove-item">
                                <div class="trove-item-header">
                                    <img data-toggle="tooltip" data-original-title="Steam" data-placement="top"
                                         data-container="body" style="height: 20px;width: auto;"
                                         src="https://www.opiumpulses.com/uploads/category/1/filter-icon-stream.png">
                                    <div class="trove-item-header-points">
                                        3660 points
                                    </div>
                                </div><!-- .trove-item-header -->
                                <div class="trove-item-img-wrapper">
                                    <div class="trove-item-img"
                                         style="background-image: url('https://www.opiumpulses.com/uploads/product/5754/main_image_optimized.jpg');"></div>
                                    <div class="trove-item-img-btn-wrapper">
                                        <a href="https://www.opiumpulses.com//treasure/5754/ethereal"
                                           class="trove-item-img-btn-view">
                                            VIEW GAME
                                        </a>
                                        <a href="https://www.opiumpulses.com//treasure/5754/ethereal?addToCart=1"
                                           class="trove-item-img-btn-buy">
                                            buy
                                            <span class="trove-item-img-btn-buy-icon"></span>
                                        </a>
                                    </div><!-- .trove-item-img-btn-wrapper -->
                                </div><!-- .trove-item-img -->
                                <div class="trove-item-footer">
                                    <div class="trove-item-footer-name">
                                        ETHEREAL
                                    </div>
                                    <div data-toggle="tooltip" data-original-title="Reviews" data-placement="top"
                                         data-container="body" class="trove-item-footer-comments">
                                        <div class="trove-item-footer-comments-icon"></div>
                                        0
                                    </div>
                                </div><!-- .trove-item-footer -->
                            </div><!-- .trove-item -->
                        </div>
                        <div class="keys" style="display:none" title="/">
                            <span>5493</span><span>5948</span><span>5831</span><span>5928</span><span>5802</span><span>5780</span><span>5770</span><span>5754</span>
                        </div>
                    </div>
                </div><!-- .container -->
            </div><!-- .trove -->
            <div class="trove-join-wrapper corner-box">
                <div class="corner"></div>
                <div class="container">
                    <div class="trove-join">
                        <div class="trove-join-img">
                            <img src="assets/v2/img/trove-join-img.png" alt="img">
                        </div><!-- .trove-join-img -->
                        <div class="trove-join-content">
                            <div class="trove-join-content-title">
                                Dive into our other treasures!
                            </div>
                            <div class="trove-join-content-btn-wrapper">
                                <a href="https://www.opiumpulses.com//treasure" class="trove-join-content-btn">
                                    DIVE INTO THE TROVE
                                </a>
                            </div>
                        </div><!-- .trove-join-content -->
                    </div><!-- .trove-join -->
                </div><!-- .container -->
            </div><!-- .trove-join -->
        </div><!-- .trove-wrapper -->


        <div class="news-wrapper">
            <div class="container">
                <div class="news">
                    <div class="group-news">
                        <div class="news-bg"></div>
                        <div class="group-news-title">
                            Group news
                        </div>
                        <div class="group-news-items">
                            <div class="group-news-item hover" style="margin-bottom: 20px">
                                <div class="group-news-item-header">
                                    <div class="group-news-item-header-logo"></div>
                                    <div class="group-news-item-header-name">
                                        x30 Z SHOW GIVEAWAY
                                    </div>
                                    <div class="group-news-item-header-social">
                                        <div class="group-news-item-header-social-descr">
                                            SHARE
                                        </div>
                                        <div class="group-news-item-header-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesGiveaways%2Fannouncements%2Fdetail%2F2934623681400416672"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="icon-fb">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=x30+Z+SHOW+GIVEAWAY+https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesGiveaways%2Fannouncements%2Fdetail%2F2934623681400416672"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="icon-tw">
                                            </a>
                                        </div>
                                    </div><!-- .group-news-item-header-social -->
                                </div><!-- .group-news-item-header -->
                                <div class="group-news-item-content">
                                    <div class="group-news-item-content-date">
                                        23.12<br>
                                        2020
                                    </div>
                                    <div class="group-news-item-content-descr">
                                        <div class="group-news-item-content-descr-title">
                                            @<span>SlipSlot</span>
                                        </div>
                                        <div class="group-news-item-content-descr-text">
                                            Hey all,<br><br>We're giving away <b>THIRTY</b> copies of <b>Z Show</b> for
                                            the Oculus Go in our Discord server.<br><br>
                                            <div class="bb_h1">All you have to do is:</div>
                                            <ul class="bb_ul">
                                                <li>Join our Discord server: <a class="bb_link"
                                                                                href="https://www.opiumpulses.com/https://steamcommunity.com/linkfilter/?url=https://discord.gg/opiumpulses"
                                                                                target="_blank" rel="noreferrer">https://discord.gg/opiumpulses</a><br>
                                                </li>
                                                <li>Agree to our rules<br></li>
                                                <li>Click the <i>#z-show-giveaway</i> channel<br></li>
                                                <li>Tell us your most favourite <b>VR</b> game ever and why</li>
                                            </ul>
                                            <br>We'll pick <i>30</i> of our favourite entries sometime tomorrow evening
                                            and DM the winners their keys..<br><br>
                                            <div class="bb_code">If you do not have, or do not plan to get an Oculus Go,
                                                please ignore this giveaway.
                                            </div>
                                            <br>Good luck everyone!
                                        </div>
                                    </div>
                                    <div class="group-news-item-content-more">
                                        <div class="group-news-item-content-more-title">
                                            Opium Pulses <span>Giveaways</span>
                                        </div>
                                        <a href="https://www.opiumpulses.com/https://steamcommunity.com/groups/OpiumPulsesGiveaways/announcements/detail/2934623681400416672"
                                           target="_blank" class="group-news-item-content-more-btn">
                                            read more
                                        </a>
                                    </div>
                                </div><!-- .group-news-item-content -->
                            </div><!-- .group-news-item -->
                            <div class="group-news-item hover" style="margin-bottom: 20px">
                                <div class="group-news-item-header">
                                    <div class="group-news-item-header-logo"></div>
                                    <div class="group-news-item-header-name">
                                        Giving Away Back 4 Blood keys!
                                    </div>
                                    <div class="group-news-item-header-social">
                                        <div class="group-news-item-header-social-descr">
                                            SHARE
                                        </div>
                                        <div class="group-news-item-header-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesNews%2Fannouncements%2Fdetail%2F5126750336591446968"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="icon-fb">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=%23OpiumPulses!%20anouncement%20https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesNews%2Fannouncements%2Fdetail%2F5126750336591446968"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="icon-tw">
                                            </a>
                                        </div>
                                    </div><!-- .group-news-item-header-social -->
                                </div><!-- .group-news-item-header -->
                                <div class="group-news-item-content">
                                    <div class="group-news-item-content-date">
                                        18.12<br>
                                        2020
                                    </div>
                                    <div class="group-news-item-content-descr">
                                        <div class="group-news-item-content-descr-title">
                                            @<span>SlipSlot</span>
                                        </div>
                                        <div class="group-news-item-content-descr-text">
                                            Hey all,<br><br>We're giving away <b>Back 4 Blood</b> (the spiritual
                                            successor to Left 4 Dead) Alpha keys for Steam in our Discord
                                            server.<br><br>
                                            <div class="bb_h1">All you have to do is:</div>
                                            <ul class="bb_ul">
                                                <li>Join our Discord server: <a class="bb_link"
                                                                                href="https://www.opiumpulses.com/https://steamcommunity.com/linkfilter/?url=https://discord.gg/opiumpulses"
                                                                                target="_blank" rel="noreferrer">https://discord.gg/opiumpulses</a><br>
                                                </li>
                                                <li>Agree to our rules<br></li>
                                                <li>Click the <i>#b4b-giveaway</i> channel<br></li>
                                                <li>Tell us your most favourite game ever and why</li>
                                            </ul>
                                            <br>We'll pick our <i>two </i>favourite entries at around 12:00 GMT
                                            today.<br><br>Good luck everyone!
                                        </div>
                                    </div>
                                    <div class="group-news-item-content-more">
                                        <div class="group-news-item-content-more-title">
                                            Opium Pulses <span>News</span>
                                        </div>
                                        <a href="https://www.opiumpulses.com/https://steamcommunity.com/groups/OpiumPulsesNews/announcements/detail/5126750336591446968"
                                           target="_blank" class="group-news-item-content-more-btn">
                                            read more
                                        </a>
                                    </div>
                                </div><!-- .group-news-item-content -->
                            </div><!-- .group-news-item -->
                            <div class="group-news-item hover">
                                <div class="group-news-item-header">
                                    <div class="group-news-item-header-logo"></div>
                                    <div class="group-news-item-header-name">
                                        Giving Away Back 4 Blood keys!
                                    </div>
                                    <div class="group-news-item-header-social">
                                        <div class="group-news-item-header-social-descr">
                                            SHARE
                                        </div>
                                        <div class="group-news-item-header-social-items">
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesSavings%2Fannouncements%2Fdetail%2F5364315219797742262"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="icon-fb">
                                            </a>
                                            <a target="_blank"
                                               href="https://www.opiumpulses.com/https://twitter.com/home?status=%23OpiumPulses!%20anouncement%20https%3A%2F%2Fsteamcommunity.com%2Fgroups%2FOpiumPulsesSavings%2Fannouncements%2Fdetail%2F5364315219797742262"
                                               class="group-news-item-header-social-item">
                                                <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="icon-tw">
                                            </a>
                                        </div>
                                    </div><!-- .group-news-item-header-social -->
                                </div><!-- .group-news-item-header -->
                                <div class="group-news-item-content">
                                    <div class="group-news-item-content-date">
                                        18.12<br>
                                        2020
                                    </div>
                                    <div class="group-news-item-content-descr">
                                        <div class="group-news-item-content-descr-title">
                                            @<span>SlipSlot</span>

                                        </div>
                                        <div class="group-news-item-content-descr-text">
                                            Hey all,<br><br>We're giving away <b>Back 4 Blood</b> (the spiritual
                                            successor to Left 4 Dead) Alpha keys for Steam in our Discord
                                            server.<br><br>
                                            <div class="bb_h1">All you have to do is:</div>
                                            <ul class="bb_ul">
                                                <li>Join our Discord server: <a class="bb_link"
                                                                                href="https://www.opiumpulses.com/https://steamcommunity.com/linkfilter/?url=https://discord.gg/opiumpulses"
                                                                                target="_blank" rel="noreferrer">https://discord.gg/opiumpulses</a><br>
                                                </li>
                                                <li>Agree to our rules<br></li>
                                                <li>Click the <i>#b4b-giveaway</i> channel<br></li>
                                                <li>Tell us your most favourite game ever and why</li>
                                            </ul>
                                            <br>We'll pick our <i>two </i>favourite entries at around 12:00 GMT
                                            today.<br><br>Good luck everyone!
                                        </div>
                                    </div>
                                    <div class="group-news-item-content-more">
                                        <div class="group-news-item-content-more-title">
                                            Opium Pulses <span>Savings</span>
                                        </div>
                                        <a href="https://www.opiumpulses.com/https://steamcommunity.com/groups/OpiumPulsesSavings/announcements/detail/5364315219797742262"
                                           target="_blank" class="group-news-item-content-more-btn">
                                            read more
                                        </a>
                                    </div>
                                </div><!-- .group-news-item-content -->
                            </div><!-- .group-news-item -->
                        </div><!-- .group-news-items -->
                    </div><!-- .group-news -->
                    <div class="videos-wrapper">
                        <div class="videos-title">
                            recent videos
                        </div>
                        <div class="videos-items">
                            <div class="videos-item">
                                <div class="videos-item-video">
                                    <iframe src="https://www.youtube.com/embed/Ecb3_lUBpOc" frameborder="0"
                                            allowfullscreen=""></iframe>
                                </div>
                                <div class="videos-item-name">
                                    We level up exclusively on other players! │ OSRS
                                </div>
                            </div><!-- .videos-item -->
                            <div class="videos-item">
                                <div class="videos-item-video">
                                    <iframe src="https://www.youtube.com/embed/SoAA4w_hq7s" frameborder="0"
                                            allowfullscreen=""></iframe>
                                </div>
                                <div class="videos-item-name">
                                    Console Alternatives - The PVP Station Light 3000!
                                </div>
                            </div><!-- .videos-item -->
                            <div class="videos-item">
                                <div class="videos-item-video">
                                    <iframe src="https://www.youtube.com/embed/xIjNf6vR_IQ" frameborder="0"
                                            allowfullscreen=""></iframe>
                                </div>
                                <div class="videos-item-name">
                                    Let's Play Postal 2 in Co-op! - Day 4
                                </div>
                            </div><!-- .videos-item -->
                        </div><!-- .videos-items -->
                        <div class="videos-btn-wrapper">
                            <a href="https://www.opiumpulses.com//site/videos" class="videos-btn">
                                view all
                            </a>
                        </div>
                    </div><!-- .videos -->
                </div><!-- .news -->
            </div><!-- .container -->
        </div><!-- .news-wrapper -->


    </main>
@endsection
