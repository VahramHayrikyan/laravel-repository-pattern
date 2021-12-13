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
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Opium Pulses | Digital Game Store and Gaming Community</title>
    <link rel="stylesheet" href="{{ asset('site/bootstrap5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/js/sweetalert/package/dist/sweetalert2.min.css') }}">

    @yield('css')
</head>
<body>
@include('layouts.site.icons.svg_icons')
@include('layouts.site.header')
@include('layouts.site.icons.flash_message')
@yield('content')
@include('layouts.site.footer')
<script src="{{ asset('site/js/jquery/jquery-3.5.1v.min.js') }}"></script>
<script src="{{ asset('site/bootstrap5/js/bootstrap.bundle.min.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script src="{{ asset('site/js/sweetalert/package/dist/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('site/js/script.js') }}"></script>
@yield('js')
</body>
</html>
