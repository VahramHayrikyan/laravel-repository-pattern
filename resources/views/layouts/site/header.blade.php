<link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/css/style.css') }}">
<header class="site-header sticky-top py-1">
    <nav class="container-fluid">
        <div class="row nogutter">
            <div class="col-2 d-none d-lg-block">
                <div class="row align-items-end  pb-lg-4 h-100">
                    <div class="col-12 text-center">
                        <div class="friends-online-wrapper ">
                            <span style="font-size: 12px">0 <span class="default-color hover" style="font-weight: normal;">online</span></span>
                            <svg class="hover" x="0px" y="0px" fill="#fff" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                                 enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                                <use xlink:href="#multiplayer"></use>
                            </svg>
                            <div class="friends">
                                <ul class="">
                                    <li><a class="hover">No friends online</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="hover d-flex pt-2  justify-content-center align-items-center"
                             style="border-top: 1px solid #292929;">
                            <span class="site-header__podcast_player d-none d-lg-block">PODCAST PLAYER</span>
                            <svg version="1.1" fill="#fff" xmlns="https://www.w3.org/2000/svg"
                                 xmlns:xlink="https://www.w3.org/1999/xlink"
                                 x="0px" y="0px" width="34px" height="34px" viewBox="0 0 83.767 83.767"
                                 enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                            <use xlink:href="#volume"/>
                        </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 col-sm-2 p-0 py-lg-3">
                <a href="{{ url('/') }}">
                    <div class="d-none d-xl-block img_contain "
                         style="background-image: url({{ asset('/assets/v2/img/logo-big.png') }});height: 100px;">
                    </div>
                    <div class="d-block d-xl-none img_contain "
                         style="background-image: url({{ asset('/assets/v2/img/logo-fixed.png') }});height: 70px;">
                    </div>
                </a>

            </div>
            <div class="col-8 offset-1 offset-sm-2 offset-lg-0">
                <div class="row align-items-center align-items-lg-start py-3  "
                     style="border-bottom: 1px solid #292929;">
                    <div class="col-12 d-lg-none text-end">
                        <div class="row">
                            <div class="col-2">
                                <svg version="1.1" fill="#fff" xmlns="https://www.w3.org/2000/svg"
                                     xmlns:xlink="https://www.w3.org/1999/xlink"
                                     x="0px" y="0px" width="34px" height="34px" viewBox="0 0 83.767 83.767"
                                     enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                                    <use xlink:href="#volume"/>
                                </svg>
                            </div>
                            <div class="col-2">
                                <svg fill="#fff" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 83.767 83.767">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </div>
                            <div class="col-2">
                                <svg fill="#fff" x="0px" y="0px" width="34px" height="34px" viewBox="0 0 83.767 83.767">
                                    <use xlink:href="#singleplayer"></use>
                                </svg>
                            </div>
                            <div class="col-2">
                                <a href="{{ url('/cart') }}">
                                    <svg fill="#fff" x="0px" y="0px" width="34px" height="34px"
                                         viewBox="0 0 83.767 83.767">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                            </div>
                            <div class="col-4 align-self-center">
                                <div class="menu-icon" data-behaviour="toggle-menu-icon">
                                    <span class="menu-icon__bar"></span>
                                </div>
                                <div class="menu-nav " data-element="toggle-nav">
                                    <nav class="menu-nav text-center">
                                        <ul class="main-nav__items">
                                            <li><a href="{{ url('/store') }}">Store</a></li>
                                            <li><a href="{{ url('/trove') }}">TROVE</a></li>
                                            <li><a href="{{url('/quests')}}">Quests</a></li>
                                            <li><a href="{{ url('/giveaways') }}">Giveaways</a></li>
                                            <li><a href="{{ url('/arcades') }}">Arcade</a></li>
                                            <li><a href="{{ url('/articles') }}">Articles</a></li>
                                            <li><a href="{{ url('/media') }}">Media</a></li>
                                        </ul>
                                    </nav>
                                    <div class="text-center menu-social mt-1">
                                        <a target="_blank"
                                           href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                                           class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-fb">
                                            <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb"
                                                 class="img">
                                            {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                                        </a>
                                        <a target="_blank"
                                           href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                                           class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-tw">
                                            <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw"
                                                 class="img">
                                            {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                                        </a>
                                        <a target="_blank" href="https://www.instagram.com/opiumpulses/"
                                           class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-in">
                                            <img src="{{ asset('/assets/v2/img/icon/icon-insta.png') }}" alt="in"
                                                 class="img">
                                            {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-insta-red.png') }}" alt="in" class="img-hover">--}}
                                        </a>
                                        <a target="_blank"
                                           href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.opiumpulses.com&amp;media=https%3A%2F%2Fwww.opiumpulses.com%2Fimages%2Fopius-keys.png&amp;description=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses"
                                           class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-p">
                                            <img src="{{ asset('/assets/v2/img/icon/icon-pinter.png') }}" alt="p"
                                                 class="img">
                                            {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-pinter-red.png') }}" alt="p" class="img-hover">--}}
                                        </a>
                                        <a target="_blank"
                                           href="https://www.stumbleupon.com/submit?url=https://www.opiumpulses.com"
                                           class="page-header__nav-menu-social-item  page-header__nav-menu-social-item-st">
                                            <img src="{{ asset('/assets/v2/img/icon/icon-stumble.png') }}" alt="st"
                                                 class="img">
                                            {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-stumble-red.png') }}" alt="st" class="img-hover">--}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 d-none d-lg-block">
                        <form action="" method="POST" class="d-flex position-relative">
                            @csrf
                            <input type="search" name="search" placeholder="Search...">
                            <div class="search-form_button position-absolute hover">
                                <svg fill="#fff">
                                    <use xlink:href="#search"></use>
                                </svg>
                            </div>
                        </form>
                    </div>

                    <div class="col-7 d-none d-lg-flex auth-div justify-content-evenly align-items-center">
                        @auth()
                            <ul class="d-flex justify-content-end">
                                <li class="d-flex align-items-center p-2 dropdown">

                                    <a class="dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg fill="#fff" x="0px" y="0px" width="34px" height="34px">
                                            <use xlink:href="#singleplayer"></use>
                                        </svg>
                                        Foobar
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        @if(auth()->check() && auth()->user()->role == 'admin')
                                            <li><a class="dropdown-item" href="{{ url('web/admin/') }}">Admin
                                                    Dashboard</a></li>
                                        @endif
                                        <li><a class="dropdown-item" href="{{ route('store.account') }}">Account</a></li>
                                        <li><a class="dropdown-item" href="#">Public Profile</a></li>
                                        <li><a class="dropdown-item" href="#">Achievements</a></li>
                                        <li><a class="dropdown-item" href="#">Orders</a></li>
                                        <li><a class="dropdown-item" href="#">Won Giveaways</a></li>
                                        <li><a class="dropdown-item" href="#">Wishlist</a></li>
                                        <li><a class="dropdown-item" href="#">Friends list</a></li>
                                        <li><a class="dropdown-item" href="#" onclick="$(this).next('form').submit()">Log
                                                Out</a>
                                            <form action="{{ url('logout') }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mx-3 d-flex align-items-center">
                                    <a class="dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button"
                                       data-bs-toggle="dropdown" aria-expanded="false">
                                        <svg fill="#fff" x="0px" y="0px" width="34px" height="34px">
                                            <use xlink:href="#pig-coin"></use>
                                        </svg>
                                        Points & credits
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-dark"
                                        aria-labelledby="navbarDarkDropdownMenuLink">
                                        <li><a class="dropdown-item" href="#">Points: {{ auth()->user()->points }}</a></li>
                                        <li><a class="dropdown-item" href="#">Credit: ${{ auth()->user()->credit }}</a></li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="" class="hover">
{{--                                        <div class="page-header__nav-func-messages-toggle-num">0</div>--}}
                                        <svg fill="#fff" x="0px" y="0px" width="30px" height="30px" viewBox="0 0 83.767 83.767" enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                                            <use xlink:href="#message"></use>
                                        </svg>
                                    </a>
                                </li>
                                <li class="me-3">
                                    <a href="" class="hover">
                                        {{--                                        <div class="page-header__nav-func-notifications-toggle-num">328</div>--}}
                                        <svg fill="#fff" width="30px" height="30px" viewBox="0 0 83.767 83.767"
                                             enable-background="new 0 0 83.767 83.767" xml:space="preserve">
                                            <use xlink:href="#notify"></use>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        @else
                            <ul class="d-flex justify-content-end">
                                <li class="d-flex align-items-center">
                                    <svg fill="#fff" x="0px" y="0px" width="34px" height="34px">
                                        <use xlink:href="#multiplayer"></use>
                                    </svg>
                                    <a href="{{ url('/login') }}" class="d-none d-lg-block">Login</a>
                                </li>
                                <li class="mx-3 d-flex align-items-center">
                                    <svg fill="#fff" x="0px" y="0px" width="34px" height="34px">
                                        <use xlink:href="#add-user"></use>
                                    </svg>
                                    <a href="{{ url('/register') }}" class="d-none d-lg-block">New User</a>
                                </li>
                            </ul>
                        @endauth
                        <div class="d-flex align-items-center  page-header__nav-func-currency ">
                            <ul class="dropdown">
                                <li>
                                    <span class="default-color hover fs-4">$ </span>
                                    <span style="font-size: 10px;vertical-align: text-top;cursor: pointer">></span>
                                    <ul class="dropdown-menu text-center " data-toggle="dropdown">
                                        <li class="default-color hover fs-4">$</li>
                                        <li class="hover fs-4">€</li>
                                        <li class="hover fs-4">£</li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="mx-2">
                                <a href="{{ url('/cart') }}">
                                    <svg x="0px" y="0px" width="34px" height="34px" fill="#fff">
                                        <use xlink:href="#cart"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row d-none d-lg-flex py-3">
                    <div class="col-8">
                        <ul class="d-flex justify-content-between">
                            <li><a class="hover" href="{{ url('/store') }}">Store</a></li>
                            <li><a class="hover" href="{{ url('/trove') }}">TROVE</a></li>
                            <li><a class="hover" href="">Quests</a></li>
                            <li><a class="hover" href="{{ url('/giveaways') }}">Giveaways</a></li>
                            <li><a class="hover" href="{{ url('/arcades') }}">Arcade</a></li>
                            <li><a class="hover" href="{{ url('/articles') }}">Articles</a></li>
                            <li><a class="hover" href="{{ url('/media') }}">Media</a></li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <div class="text-end menu-social mt-1">
                            <div>
                                <img src="{{ asset('/assets/v2/img/icon/socials-toggle.png') }}" alt="toggle">
                                <a  target="_blank"
                                   href="https://www.facebook.com/sharer/sharer.php?u=http%3A//www.opiumpulses.com"
                                   class="hover">
                                    <img src="{{ asset('/assets/v2/img/icon/icon-f.png') }}" alt="fb" class="img">
                                    {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-f-red.png') }}" alt="fb" class="img-hover">--}}
                                </a>
                                <a  target="_blank"
                                   href="https://twitter.com/home?status=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses+https%3A%2F%2Fwww.opiumpulses.com"
                                   class="hover">
                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw.png') }}" alt="tw" class="img">
                                    {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-tw-red.png') }}" alt="tw" class="img-hover">--}}
                                </a>
                                <a  target="_blank" href="https://www.instagram.com/opiumpulses/"
                                   class="hover">
                                    <img src="{{ asset('/assets/v2/img/icon/icon-insta.png') }}" alt="in" class="img">
                                    {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-insta-red.png') }}" alt="in" class="img-hover">--}}
                                </a>
                                <a  target="_blank"
                                   href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.opiumpulses.com&amp;media=https%3A%2F%2Fwww.opiumpulses.com%2Fimages%2Fopius-keys.png&amp;description=Great+new+gaming+community+website+with+deals%2C+news+and+giveaways.+Check+it+out%21+%23OpiumPulses"
                                   class="hover">
                                    <img src="{{ asset('/assets/v2/img/icon/icon-pinter.png') }}" alt="p" class="img">
                                    {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-pinter-red.png') }}" alt="p" class="img-hover">--}}
                                </a>
                                <a  target="_blank"
                                   href="https://www.stumbleupon.com/submit?url=https://www.opiumpulses.com"
                                   class="hover">
                                    <img src="{{ asset('/assets/v2/img/icon/icon-stumble.png') }}" alt="st" class="img">
                                    {{--                                    <img src="{{ asset('/assets/v2/img/icon/icon-stumble-red.png') }}" alt="st" class="img-hover">--}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
