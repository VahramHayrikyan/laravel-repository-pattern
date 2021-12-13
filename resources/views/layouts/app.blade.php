<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="kinguin-api-ecommerce-verification" content="NWIzYjBhY2ZiNjc2ZmM0MDM5ZTZlYzIyYWNhYjFiMjA=">
    <meta name="google-site-verification" content="dWwABacKafin0o_uOCtSrkyE0u_suSlUqrNqyF-mQa4">
    <meta name="description" content="Games, Giveaways, Articles, Free-to-play Arcade, Quests, Achievements and Loyalty points - welcome to Opium Pulses!">
{{--    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/listview/styles.css') }}">--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/owlCarousel/dist/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/css/kostas.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/lightslider/dist/css/lightslider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/lightbox2/dist/css/lightbox.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/v2/css/perfect-scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/froala/assets/css/froala_style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/froala/assets/css/frontend.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/admin/plugins/jquery-ui/jquery-ui.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700|Lato:300,300i" rel="stylesheet">
    @yield('css')
    <script type="text/javascript" src="{{ asset('/assets/v2/js/jquery-2.2.3.min.js') }}"></script>
    <title>Opium Pulses | Digital Game Store and Gaming Community</title>
</head>
<body>
@include('layouts.header')
@include('layouts.site.icons.flash_message')
@yield('content')
@include('layouts.footer')
<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/jquery.ba-bbq.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/moment.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/moment-timezone-with-data.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/jquery.countdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/owlCarousel/dist/owl.carousel.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/bgaudioplayer.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/js/libs/jquery.livesearch.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/script.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/spinner.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/perfect-scrollbar.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/lightslider/dist/js/lightslider.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/lightbox2/dist/js/lightbox.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('/assets/v2/js/jquery.yiilistview.js') }}"></script>
<script type="text/javascript">
    /*<![CDATA[*/
    // $(document).ready(function(){
    //     $('.owl-carousel').owlCarousel();
    // });
    function ajaxLike(likeUrl, countLikeUrl, product_id)
    {
        $.ajax({
            url: likeUrl
        }).done(function(){ $("#countProductLikes-" + product_id).load(countLikeUrl);});
        $(".product_like_" + product_id).toggleClass("liked");

        return false;
    }

    function addToWishlist(e) {
        $(e).text('adding...');
        $.ajax({
            method: 'GET',
            url: '/product/ajaxWishlistAdd',
            data: { id: $(e).data('id') }
        }).done(function(){
            eClass =$(e).attr('class');
            id = $(e).data('id');
            elements = $('.' + eClass + '[data-id="' + id + '"]');
            elements.text('remove from wishlist');
            elements.attr('onclick','removeFromWishlist(this)');
        });
        return false;
    }

    function removeFromWishlist(e) {
        $(e).text('removing...');
        $.ajax({
            method: 'GET',
            url: '/product/ajaxWishlistRemove',
            data: { id: $(e).data('id') }
        }).done(function(){
            eClass =$(e).attr('class');
            id = $(e).data('id');
            elements = $('.' + eClass + '[data-id="' + id + '"]');
            elements.text('add to wishlist');
            elements.attr('onclick','addToWishlist(this)');
        });
        return false;
    }
    function bigSliderRotate(){
        var slideButton = $('.promo__big-slider-wrapper  .owl-next');
        window.sliderTimer = setInterval(function () {
            if (typeof(slideButton) != 'undefined') {
                slideButton.click();
            }
        }, 7000)
    }
    $('.promo__big-slide').mouseenter(function(){clearInterval(sliderTimer)});
    $('.promo__big-slide').mouseleave(function(){bigSliderRotate()});
    $(window).ready(function() {bigSliderRotate();});


    function initiate_countdowns()
    {
        $('[data-countdown]').each(function() {
            rawDate = $(this).data('countdown');
            finalDate = moment.tz(rawDate, 'UTC');
            $(this).countdown(finalDate.toDate(), function(event) {
                if (event.elapsed) {
                    $(this).html('FINISHED');
                    return;
                }
                if (event.offset.weeks == 0){
                    var format = '%H:%M:%S';
                }else{
                    var format = '';
                }
                if(event.offset.days > 0) {
                    format = '%-d day%!d ' + format;
                }
                if(event.offset.weeks > 0) {
                    format = '%-w week%!w ' + format;
                }

                if (event.offset.weeks == 0 && event.offset.days ==0){
                    format = format + '<span style="color:orange">' +
                        '<b class="giveaway-home-ending-soon">Ending soon!</b>' +
                        '</span>';
                }

                $(this).html(event.strftime(format));
            })
                .on('finish.countdown', function(event) {
                    $(this).html('This giveaway has expired!');
                });
        });
    }

    initiate_countdowns();


    function arcadeSelect(e, categoryId) {
        current_category = $('#arcadeCategoryId').val();
        if (current_category == categoryId) {
            $(e).removeClass('active');
            $('#arcadeCategoryId').val('');
        } else {
            $('.arcade-filter-item').removeClass('active');
            $(e).addClass('active');
            $('#arcadeCategoryId').val(categoryId);
        }
        $.fn.yiiListView.update('arcadeHome', {
            data: $('#arcadeCategoryId').serialize(),
            url: '',
        });
    }

    var arcadeSpinner = new Spinner({ color: '#EEE', position: 'relative' });



    var troveSpinner = new Spinner({ color: '#EEE', position: 'relative' });


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    function currency_load(currency)
    {
        url = 'https://www.opiumpulses.com/site/changeCurrency';
        $.post( url,
            { cur: currency})
            .done(function( data ) {
                location.reload(true);
            });
    }

    $('.page-header__messages-item-btn-close').click(function(event) {
        messageId = $(this).attr('data-message-id');
        url = 'https://www.opiumpulses.com/message/read';
        that = $(this);
        $.post( url, { message_id: messageId})
            .done(function( data ) {
                that.closest('.owl-item.active').remove();
                old_value_raw = $('.page-header__nav-func-messages-toggle-num').text();
                new_value = parseInt(old_value_raw) - 1;
                $('.page-header__nav-func-messages-toggle-num').text(new_value);
                if (!$('.page-header__messages-item').length) {
                    var messagesWrapper = $('.page-header__messages-wrapper');
                    var messagesToggle = $('.page-header__nav-func-messages-toggle');
                    messagesToggle.removeClass('page-header__nav-func-messages-toggle--opened');
                    messagesWrapper.css({
                        'height': ''
                    });
                    $('.page-header__nav-func-messages-toggle').attr('href','/message');
                }
            });

    });

    $('#uniSearch').liveSearch({url: '/site/search/?q='});

    function repositionLiveSearch() {
        var liveSearch	= jQuery('#jquery-live-search');
        var input = $('#uniSearch');
        var liveSearchPaddingBorderHoriz	= parseInt(liveSearch.css('paddingLeft'), 10) + parseInt(liveSearch.css('paddingRight'), 10) + parseInt(liveSearch.css('borderLeftWidth'), 10) + parseInt(liveSearch.css('borderRightWidth'), 10);
        var tmpOffset	= $('#uniSearch').offset();
        var inputDim	= {
            left:		tmpOffset.left,
            top:		$('.page-header__inner-wrapper').offset().top + 20,
            width:		input.outerWidth(),
            height:		input.outerHeight()
        };

        inputDim.topPos		= inputDim.top + inputDim.height;
        inputDim.totalWidth	= inputDim.width - liveSearchPaddingBorderHoriz;

        liveSearch.css({
            position:	'absolute',
            left:		inputDim.left + 'px',
            top:		inputDim.topPos + 'px',
            width:		inputDim.totalWidth + 'px',
        });
    };

    $(window).scroll(function(){ repositionLiveSearch(); });

    $('#uniSearch').on('keypress', function (e) {
        if(e.which === 13){
            title = $('#uniSearch').val();

            if (title.length) {
                window.location = '/store?title=' + title;
            }
            e.preventDefault();
        }
    });

    $('.page-header__notifications-btn-clear').on('click', function (e) {
        e.preventDefault();
        $.post( '/user/notificationsRead');
        $('.page-header__nav-func-notifications-toggle-num').html('0');
        $('.page-header__notifications-items').html('');
        var notificationsWrapper = $('.page-header__notifications-wrapper');
        var notificationsBtnClose = $('.page-header__notifications-btn-close');
        var body = $('body');
        var header = $('.page-header');
        notificationsWrapper.removeClass('page-header__notifications-wrapper--opened');
        setTimeout(function() {
            body.css({
                'overflow': '',
                'padding-right': ''
            });
            header.css({
                'padding-right': ''
            });
        }, 500);
        $('.page-header__nav-func-notifications-toggle').attr('href','/user/history');
    });

    $('.notification-mark-read').click(function(e) {
        that = $(this);
        e.preventDefault();
        $.ajax({
            type: 'POST',
            url: '/user/notificationRead/' + $(this).data('notification-id'),
            async: false
        }).done(function() {
            that.closest('.page-header__notifications-item').remove();
            old_value_raw = $('.page-header__nav-func-notifications-toggle-num').text();
            new_value = parseInt(old_value_raw) - 1;
            $('.page-header__nav-func-notifications-toggle-num').text(new_value);
            if (!$('.page-header__notifications-item').length) {
                $('.page-header__notifications-btn-clear').trigger('click');
            }
        });
    });


    function headerStoreFilters(source) {
        var platforms = [];
        $('input:checked[data-platform]').each(function(){
            if ($(this).val())
                platforms.push($(this).attr('name').replace('platforms-',''));
        });
        var systems = [];
        $('input:checked[data-system]').each(function(){
            if ($(this).val())
                systems.push($(this).attr('name').replace('systems-',''));
        });
        var genres = [];
        $('input:checked[data-genre]').each(function(){
            if ($(this).val())
                genres.push($(this).attr('name').replace('genres-',''));
        });
        var types = [];
        $('input:checked[data-type]').each(function(){
            if ($(this).val())
                types.push($(this).attr('name').replace('types-',''));
        });
        var parameters = [ 'source=' + source ];
        if (platforms.length) {
            parameters.push('product_category_id=' + platforms.join(','));
        }
        if (systems.length) {
            parameters.push('systems=' + systems.join(','));
        }
        if (genres.length) {
            parameters.push('genres=' + genres.join(','));
        }
        if (types.length) {
            parameters.push('types=' + types.join(','));
        }
        var query = '?' + parameters.join('&');
        document.location = '/product/filterStore' + query;
    }
    $('#search_button').click(function(){
        var ev = document.createEvent('Events');
        ev.initEvent('keypress', true, true);
        ev.keyCode = 13;
        ev.which = 13;
        ev.charCode = 13;
        ev.key = 'Enter';
        ev.code = 'Enter';
        document.querySelector('#uniSearch').dispatchEvent(ev);
    });


    function setCookie(name, value){
        document.cookie = name+"="+value+"; path=/"
    }

    var playerinstance=bgaudioplayer({
        audioid: 'podcasts-player', // id of audio element
        audiointerface: 'mybgplayerui', // id of corresponding UI div
        autoplay: false, // auto play music?
        loop: false,
        persistTimeLine: true, // Persist player's current timeline/ volume when moving from page to page?
        volume: 1, // Default volume (0.0 to 1.0)
        volumelevels: 15, // # of volume bars to show in UI
    });

    function changePodcast(podcast_url, podcast_title, podcast_id) {
        var audio = document.getElementById("podcasts-player");
        audio.pause();
        $('#podcast-url').attr("src", podcast_url);
        $('.page-header__podcast-name').text(podcast_title);
        /****************/
        setCookie('persist_' + 'podcasts-player', '0|' + (audio.paused? 1 : 0) + '|' + audio.volume);
        audio.load();//suspends and restores all audio element
        audio.play();
        $('.page-header__podcast-player-btn-play.play').attr('class', 'page-header__podcast-player-btn-pause pause');
        /****************/
        setCookie('podcast_id', podcast_id);
        setCookie('podcast_title', podcast_title);
        setCookie('podcast_url', podcast_url);
        $(window).on('unload', function(){ //persist audio timeline, play state, and volume
            setCookie('persist_' + 'podcasts-player', audio.currentTime + '|' + (audio.paused? 1 : 0) + '|' + audio.volume);
        })
    }

    var previousTimeUpdate = 0;

    $('#podcasts-player').on('timeupdate', function() {
        if (this.currentTime - previousTimeUpdate > 1 || this.currentTime - previousTimeUpdate < -1) {
            $('#podcast-slider').slider( "value", this.currentTime );
            $('#podcast-slider').slider( 'option', 'max', this.duration );
            previousTimeUpdate = this.currentTime;
        }

    });

    $('#podcast-slider').on( "slide", function( event, ui ) {
        var audio = document.getElementById("podcasts-player");
        audio.currentTime = ui.value;
    } );


    function toggleAll(e, identifier) {
        $('input:checkbox['+identifier+']').removeAttr('checked');
        var inputId = $(e).data('for');
        var input = $('#'+inputId);
        if (!input.is(':checked')) {
            input.click();
        }
    }

    function filterChanged(e, identifier, allIdentifier) {
        if ($('input:checked['+identifier+']').length) {
            $('#'+allIdentifier).removeAttr("checked");
        } else {
            $('#'+allIdentifier).click();
        }
    }
    var ps = new PerfectScrollbar('.store-filters-lists');

    jQuery(function($) {
        jQuery('#treasureHome').yiiListView({'ajaxUpdate':['treasureHome'],'ajaxVar':'ajax','pagerClass':'pager','loadingClass':'','sorterClass':'sorter','enableHistory':false,'beforeAjaxUpdate':function(id) {
                troveSpinner.spin();
                $(".troveSpinner").html(troveSpinner.el);
            },'afterAjaxUpdate':function(){
                $("[data-toggle=tooltip]").tooltip();
                troveSpinner.stop();
                $(".troveSpinner").html(troveSpinner.el);
            }});
        jQuery('#podcast-slider').slider({'min':0,'max':10000000,'step':1.0E-7,'range':'min','value':0});
    });
    /*]]>*/
</script>
@yield('js')

</body>
</html>
