@extends('layouts.app')
@section('css')


    <link rel="stylesheet" href="{{ asset('site/bootstrap5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/css/layouts.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('site/js/sweetalert/package/dist/sweetalert2.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('site/css/articles.css') }}">
@stop
@section('content')

    <section class="container-fluid" style="background-color: #212121;">
        <div class="row">
            <div class="col-12 text-center my-3" style="margin-top: 158px !important;">
                <h2 style="color: #dc291e;
                                                font-family: 'Montserrat', sans-serif;
                                                line-height: 1.3;
                                                box-sizing: border-box;
                                                backface-visibility: hidden;

                                                font-size: 30px;
                                                font-weight: bold;
                                      ">Articles</h2>
            </div>
            <div class="col-12 col-lg-9">
                @foreach($data['articles'] as $article)
                    <div class="row text-center m-5 p-2" style="background-color: #2b2a2a;text-align: center!important;padding: 0.5rem!important;margin: 2rem!important;">
                        <div class="col-12 col-xl-6" style="width: 425px;">
                            <div class="bg-img  m-3"
                                 style="background-image: url('https://www.opiumpulses.com/uploads/articles/426/Until_You_Fall_Final-Key-Art.png');
                                        height: 267px">

                            </div>
                        </div>
                        <div class="col-12 col-xl-6">
                            <div class="row h-100 articles-div">
                                <div class="col-12 mb-4 mt-2">
                                    <h1>{{ $article->title }}</h1>
                                </div>
                                <div class="col-12 p-4">
                                    <p style="
    font-family: 'Open Sans', sans-serif;
    font-size: 14px;
    font-weight: normal;
    color: #f4f3f3;
    text-align: justify;">
                                        {{ $article->shortContent(100) }}</p>
                                </div>
                                <div class="col-12 col-md-6 align-self-xl-end text-md-start articles-div ">
                                    <div style="padding-left: 10px;padding-bottom: 10px">
                                        <img src="{{ asset('/assets/v2/img/icon-login-red.png') }}" alt="icon">
                                        <span>Author: {{ $article->user->username }}</span>
                                    </div>
                                    <div class="mb-2 mb-xl-0" style="padding-left: 10px;padding-bottom: 10px">
                                        <img src="{{ asset('/assets/v2/img/icon-calendar.png') }}" alt="icon">
                                        <span>{{ $article->getTimeStampAttribute()->format('Y-m-d') }}</span>
                                        <img src="{{ asset('/assets/v2/img/icon-comments-red.png') }}" alt="icon" style="padding-left: 10px">
                                        <span>0</span>
                                        <img src="{{ asset('/assets/v2/img/icon-like.png') }}" alt="icon" class="img" style="padding-left: 5px">
{{--                                        <img src="{{ asset('/assets/v2/img/icon-like-red.png') }}" alt="icon"--}}
{{--                                             class="img-hover">--}}
                                        <span id="countArticleLikes-420">1</span>
                                    </div>


                                </div>
                                <div class="col-12 col-md-6 align-self-xl-end text-md-end" style="padding-bottom: 20px ">
                                    <a class="btn_style w-75" href="{{ url('/full-article') }}">Full Article</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-12 col-lg-3">
                <div class="row" >
                    <div class="col-12 pt-5">
                        <div>
                            <h4>Categories:</h4>
                        </div>
                        <div class="category-div ps-3">
                            <ul>
                                <li class="mb-3"><a class="" href="" style="
                                                    font-family: 'Montserrat', sans-serif;
                                                    line-height: 1.3;
                                                    list-style: none;
                                                    box-sizing: border-box;
                                                    background-color: transparent;
                                                    backface-visibility: hidden;
                                                    outline: 0;
                                                    font-size: 15px;
                                                    text-transform: uppercase;
                                                    transition: color .5s;
                                                    color: #dc291e;
                                                    text-decoration: none;
                                                    font-weight: bold;">All</a></li>
                                <li class="my-3"><a class="hover" href="">Reviews</a></li>
                                <li class="my-3"><a class="hover" href="">News</a></li>
                                <li class="my-3"><a class="hover" href="">Articles</a></li>
                                <li class="my-3"><a class="hover" href="">Charts</a></li>
                                <li class="my-3"><a class="hover" href="">Announcement</a></li>
                                <li class="my-3"><a class="hover" href="">Guids</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 175px">
                        <div>
                            <h4>MOST POPULAR:</h4>
                        </div>
                        <div class="popular-div">
                            <ul>
                                @foreach($data['articles'] as $key => $article)
                                    <li class="mb-3">
                                        <div>
                                            <img src="{{ asset('/assets/v2/img/icon-calendar.png') }}" alt="icon">
                                            <span>{{ $article->getTimeStampAttribute()->format('Y-m-d') }}</span>
                                            <img src="{{ asset('/assets/v2/img/icon-comments-red.png') }}" alt="icon">
                                            <span>0</span>
                                        </div>
                                        <div>
                                            <p class="hover">{{ $article->title }}</p>
                                        </div>
                                    </li>
                                    @if($key == 6)
                                        @break
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 175px">
                        <div>
                            <h4>Last Comment:</h4>
                        </div>
                        <div class="popular-div">
                            <ul>
                                @foreach($data['comments'] as $comment)
                                        <li class="mb-3">
                                            <div>
                                                <span>{{ $comment->user->username }}</span>
                                            </div>
                                            <div>
                                                <span class="hover">{!! $comment->shortContent(30) !!}</span>
                                            </div>
                                            <div>
                                                <span
                                                    style="color: #dc291e">{{  $comment->getTimeStampAttribute()->monthName . $comment->getTimeStampAttribute()->format(' d, Y')   }}</span>
                                            </div>
                                        </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="col-12" style="margin-top: 175px">
                        <div>
                            <h4>TOPIC TAGS:</h4>
                        </div>
                        <div class="row flex-wrap">
                            @foreach($data['tags'] as $tag)
                                <div class="col-auto mt-2 mb-3">
                                    <a href="" class="tag-a ">{{ $tag->name  }}</a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('js')

@stop
