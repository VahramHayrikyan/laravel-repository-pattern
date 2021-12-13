<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/int-tel-input/css/intlTelInput.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/simple-line-icons/simple-line-icons.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/plugins/uniform/css/uniform.default.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-colorpicker/css/colorpicker.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/tasks.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/plugins/bootstrap-toastr/toastr.min.css') }}">
    <link rel="stylesheet" type="text/css"
          href="{{ asset('/assets/admin/plugins/fancybox/source/jquery.fancybox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/plugins/icheck/skins/minimal/_all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/components-md.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/plugins-md.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/layout.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/themes/grey.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/admin/css/custom.1.css') }}">
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/int-tel-input/js/intlTelInput.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/v2/js/jquery.simplePagination.js') }}"></script>
    <title>Opiumpulses Admin Dashboard</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/assets/images/favicon/favicon180.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/assets/images/favicon/favicon16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/assets/images/favicon/favicon32.png') }}">
    <link rel="shortcut icon" href="{{ asset('/assets/images/favicon/favicon.ico') }}">
    @yield('css')
</head>
<body
    class="page-md page-boxed page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-sidebar-closed-hide-logo">
@include('layouts.admin.header')
<div class="container">
    <div class="page-container">
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu page-sidebar-menu-hover-submenu  page-sidebar-menu-closed"
                    data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                    <li class="start active">
                        <a class="start" href="{{ url('web/admin') }}">
                            <i class="icon-home"></i>
                            <span class="title">Dashboard</span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-users"></i>
                            <span class="title">Users</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="userMenu" href="{{ route('admin.users.index') }}">
                                    <i class="icon-users"></i> Users </a>
                            </li>
                            <li>
                                <a id="userNoteMenu" href="{{ url('web/admin/notes') }}">
                                    <i class="icon-note"></i> User notes </a>
                            </li>
                            <li>
                                <a id="userPointsActivityMenu" href="{{ url('web/admin/points_activity') }}">
                                    <i class="fa fa-money"></i> Point Activity </a>
                            </li>
                            <li>
                                <a id="userCreditsActivityMenu" href="{{ url('web/admin/credits_activity') }}">
                                    <i class="fa fa-money"></i> Credit Activity </a>
                            </li>
                            <li>
                                <a id="userBanMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-ban"></i> User Ban Tools
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="fa fa-users"></i>
                            <span class="title">Publishers</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="publishersListMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-users"></i> Publishers List</a>
                            </li>
                            <li>
                                <a id="publisherGamesMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-gamepad"></i> Publisher Games </a>
                            </li>
                            <li>
                                <a id="publisherPaymentsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-money"></i> Payments </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-basket"></i>
                            <span class="title">eShop</span>
                            <span class="selected"></span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="productsMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-basket"></i>
                                    Products</a>
                            </li>
                            <li>
                                <a id="productCategory" href="{{ url('web/admin/') }}">
                                    <i class="icon-folder-alt"></i>
                                    Product Categories</a>
                            </li>
                            <li>
                                <a id="ordersMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-truck"></i>
                                    Orders</a>
                            </li>
                            <li>
                                <a id="orderProductsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-truck"></i>
                                    Order Products</a>
                            </li>
                            <li>
                                <a id="keysMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-truck"></i>
                                    Supplier Management</a>
                            </li>
                            <li>
                                <a id="giftcodeMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-barcode"></i>
                                    Gift Codes</a>
                            </li>
                            <li>
                                <a id="couponMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-tag"></i>
                                    Coupons</a>
                            </li>
                            <li>
                                <a id="couponMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-exchange"></i>
                                    Manual Review</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;">
                            <i class="icon-settings"></i>
                            <span class="title">Settings</span>
                            <span class="selected"></span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="pricingMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-chemistry"></i> Profit Margins</a>
                            </li>
                            <li>
                                <a id="bannerMenu" href="{{ url('web/admin/') }}">
                                    <i class="glyphicon glyphicon-chevron-right"></i> Homepage banners</a>
                            </li>
                            <li>
                                <a id="directmessageMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-globe"></i> Direct notification</a>
                            </li>
                            <li>
                                <a id="codeswholesaleMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-code"></i> Codeswholesale
                                </a>
                            </li>
                            <li>
                                <a id="sgsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-thumbs-o-up"></i> Steamgameswap
                                </a>
                            </li>
                            <li>
                                <a id="kinguinMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-product-hunt" aria-hidden="true"></i>
                                    Kinguin</a>
                            </li>
                            <li>
                                <a id="dlcsoftMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-diamond" aria-hidden="true"></i>
                                    DLCSoft</a>
                            </li>
                            <li>
                                <a id="nexwayMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i>
                                    Nexway</a>
                            </li>
                            <li>
                                <a id="vatMenu" href="http://www.opiumpulses.com/adminVatRate">
                                    <i class="fa fa-percent"></i> VAT rates
                                </a>
                            </li>
                            <li>
                                <a id="settingsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-gears"></i> All Settings
                                </a>
                            </li>
                            <li>
                                <a id="couponMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-gears"></i>
                                    Manual Review Settings</a>
                            </li>
                            <li>
                                <a id="couponMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-gears"></i>
                                    Manual Orders</a>
                            </li>
                            <li>
                                <a href="{{ url('web/admin/') }}">
                                    <i class="fa fa-file-text "></i> Ads Txt
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="statMenu" href="javascript:;">
                            <i class="icon-bar-chart"></i>
                            <span class="title">Stats</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="salesMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-basket-loaded"></i> Orders </a>
                            </li>
                            <li>
                                <a id="revenueMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-wallet"></i> Revenue </a>
                            </li>
                            <li>
                                <a id="userstatMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-users"></i> Users </a>
                            </li>
                            <li>
                                <a id="questsRevenueMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-money"></i> Quests </a>
                            </li>
                            <li>
                                <a id="socialStatsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-glass"></i> Social </a>
                            </li>
                            <li>
                                <a id="pointsGivenStatsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-star"></i> Points Given </a>
                            </li>
                            <li>
                                <a id="pointsSpentStatsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-star-o"></i> Points Spent </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="questMenu" href="javascript:;">
                            <i class="fa fa-money"></i>
                            <span class="title">Quests</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="questIndexMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-money"></i>
                                    <span class="title">List</span>
                                    <span class="arrow "></span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li>
                                <a id="questPaymentsMenu" href="{{ url('web/admin/') }}">
                                    <i class="fa fa-money"></i>
                                    <span class="title">Payments</span>
                                    <span class="arrow "></span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li>
                        <a id="mediaMenu" href="javascript:;">
                            <i class="glyphicon glyphicon-picture"></i>
                            <span class="title">Media</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                        <ul class="sub-menu">
                            <li>
                                <a id="photoMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-camera"></i>
                                    Photos</a>
                            </li>
                            <li>
                                <a id="fanartMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-picture"></i>
                                    Fanart</a>
                            </li>
                            <li>
                                <a id="freebieMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-present"></i>
                                    Freebies</a>
                            </li>
                            <li>
                                <a id="videoMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-social-youtube"></i>
                                    <span class="title">Videos</span>
                                    <span class="arrow "></span>
                                </a>
                            </li>
                            <li>
                                <a id="podcastMenu" href="{{ url('web/admin/') }}">
                                    <i class="icon-earphones-alt"></i>
                                    <span class="title">Podcasts</span>
                                    <span class="arrow "></span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="arcadeMenu" href="{{ url('web/admin/') }}">
                            <i class="icon-game-controller"></i>
                            <span class="title">Arcade</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a id="articleMenu" href="{{ url('web/admin/') }}">
                            <i class="icon-notebook"></i>
                            <span class="title">Articles</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                    </li>
                    <li>
                        <a id="giveawaysMenu" href="{{ url('web/admin/') }}">
                            <i class="fa fa-gift"></i>
                            <span class="title">Giveaways</span>
                            <span class="arrow "></span>
                            <span class="selected"></span>
                        </a>
                    </li>

                </ul>
                <!-- END SIDEBAR MENU -->
            </div>
        </div>
        <div class="page-content-wrapper">
            @yield('content')
        </div>
        <div class="page-footer">
            <div class="page-footer-inner">
                2015 © OpiumPulses.com - Web design by iWeb Solutions Ltd
            </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
</div>
@if( \Session::has('success'))
    <div id="toast-container" class="toast-top-right" aria-live="polite" role="alert">
        <div class="toast toast-success" style="">
            <button class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ \Session::get('success')}}</div>
        </div>
    </div>
@endif
@if( \Session::has('error'))
    <div id="toast-container" class="toast-top-right" aria-live="polite" role="alert">
        <div class="toast toast-error" style="">
            <button class="toast-close-button" role="button">×</button>
            <div class="toast-message">{{ \Session::get('error')}}</div>
        </div>
    </div>
@endif

@include('layouts.admin.footer')
<script src="{{ asset('/assets/admin/plugins/jquery-migrate.min.js') }}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('/assets/admin/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery.cokie.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/uniform/jquery.uniform.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('/assets/admin/plugins/flot/jquery.flot.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/flot/jquery.flot.categories.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/clockface/js/clockface.js') }}"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-daterangepicker/moment.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"
        type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="{{ asset('/assets/admin/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery.sparkline.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/bootstrap-toastr/toastr.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/components-editors.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/fancybox/source/jquery.fancybox.pack.js') }}"
        type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/icheck/icheck.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/fuelux/js/spinner.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/plugins/jquery.pulsate.min.js') }}" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.1.2/jquery.twbsPagination.js
" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twbs-pagination/1.1.2/jquery.twbsPagination.min.js
" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('/assets/admin/scripts/metronic.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/layout.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/demo.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/index.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/tasks.js') }}" type="text/javascript"></script>
<script src="{{ asset('/assets/admin/scripts/components-pickers.js') }}"></script>
@yield('js')
</body>
</html>
