@extends('layouts.site.app')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/arcade.css?v=1') }}">
@stop
@section('content')
    <section class="container-fluid" style="background-color: #212121;">
        <div class="row">
            <div class="col-12 text-center my-4">
                <h4 class="" style="color: #dc291e">
                    <svg fill="#fff" width="38" height="38">
                        @if($data['game']->arcade_category_id == 1)
                            <use xlink:href="#singleplayer"></use>
                        @else
                            <use xlink:href="#multiplayer"></use>
                        @endif
                    </svg>
                    {{ $data['game']->title }}
                </h4>
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ asset($data['game']->image) }}" alt="">
                        <span>Played</span> <br>
                        <span style="color: #dc291e">{{ $data['game']->views }} times</span>
                    </div>
                    <div class="col-8">
                        {!! $data['game']->code !!}
                    </div>
                    <div class="col-2"></div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@stop
