<div class="page-header md-shadow-z-1-i navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner container">
        <!-- BEGIN LOGO -->
        <div class="page-logo">
            <a href="">
                <img height="50" style="margin:9px 0 9px 52px;" src="{{ asset('/assets/images/admin-logo.png') }}" alt="logo" class="logo-default">
            </a>
            <div class="menu-toggler sidebar-toggler" onclick="$('body').toggleClass('page-sidebar-closed')">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->
        <!-- DOC: Remove "hide" class to enable the page header actions -->
        <div class="page-actions">
            <div class="btn-group">
                <button type="button" class="btn btn-circle green-haze dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-plus"></i>&nbsp;<span class="hidden-sm hidden-xs">New&nbsp;</span>&nbsp;<i class="fa fa-angle-down"></i>
                </button>
                <ul class="dropdown-menu" role="menu">

                    <li>
                        <a href="">
                            <i class="icon-folder-alt"></i> New Product Category
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-basket"></i> New Product
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="fa fa-barcode"></i> New Gift Code </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-tag"></i> New Coupon </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-camera"></i> New Photo
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-picture"></i> New Fanart
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-present"></i> New Freebie
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-earphones-alt"></i> New Podcast </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-social-youtube"></i> New Video </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-game-controller"></i> New Arcade Game
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="">
                            <i class="icon-calendar"></i> New Article
                        </a>
                    </li>
                    <li class="divider">
                    </li>
                    <li>
                        <a href="http://www.opiumpulses.com/adminGiveaway/create">
                            <i class="fa fa-gift"></i> New Giveaway
                        </a>
                    </li>
                </ul>
            </div>
            <div class="btn-group">
                <a href="{{ url('/') }}">
                    <button type="button" class="btn btn-circle blue-hoki">
                        <i class="fa fa-desktop"></i>
                        <span class="hidden-sm hidden-xs">Frontend&nbsp;</span>
                    </button>
                </a>
            </div>
        </div>
        <!-- END PAGE ACTIONS -->
        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <!-- BEGIN USER LOGIN DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="https://www.gravatar.com/avatar/c4abc562eecfe8a331c4c596c79e0016?s=200&amp;d=https%3A%2F%2Fwww.opiumpulses.com%2Fimages%2Fdefault_avatar_355.png">
                            <span class="username username-hide-on-mobile">
						foobar </span>
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="glyphicon glyphicon-off"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
