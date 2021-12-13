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
        <div class="row d-flex justify-content-center" style="margin-top: 158px">

            <div class="col-12 col-lg-9" style="max-width: 970px;margin-left: 20px;">

                <div class="m-2 p-0 row text-center" style="background-color: #2b2a2a;">

                    <div class="px-4">
                        <div class="article-single-header" style="color: #333;font-family: 'Montserrat', sans-serif;font-size: 14px;line-height: 1.3;box-sizing: border-box;backface-visibility: hidden;display: flex;-webkit-box-align: center;align-items: center;
                                                                                margin-bottom: 10px;
                                                                                margin-top: 12px">
                            <div class="articles-page-item-content-footer-info-date">
                                <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon-calendar.png" alt="icon">
                                <time> Published 01.03.2021</time>
                            </div>

                            <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon-login-red.png" alt="icon">
                            <a href="/user/profile/41357" style=" text-decoration: none;">
                                <span style="color: white;padding-left: 4px"> Author: coolyer</span></a>


                            <div class="product-nav-tabs-social">
                                <div class="product-nav-tabs-social-title">
                                    share
                                </div>
                                <div class="product-nav-tabs-social-items">
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=%2Farticle%2F426%2Funtil-you-fall-review" class="product-nav-tabs-social-item product-nav-tabs-social-item-fb">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon/icon-f.png" alt="fb" class="img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon/icon-f-red.png" alt="fb" class="img-hover">
                                    </a>
                                    <a target="_blank" href="https://twitter.com/home?status=Until+You+Fall+Review+at+%23OpiumPulses+%2Farticle%2F426%2Funtil-you-fall-review" class="product-nav-tabs-social-item product-nav-tabs-social-item-tw">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon/icon-tw.png" alt="tw" class="img">
                                        <img src="https://www.opiumpulses.com/assets/b081efef/v2/img/icon/icon-tw-red.png" alt="tw" class="img-hover">
                                    </a>
                                </div><!-- .product-nav-tabs-social-items -->
                            </div><!-- .product-nav-tabs-social -->
                        </div>
                        <div class="h1 text-left pb-4" style="font-family: 'Montserrat', sans-serif;
                                    line-height: 1.3;
                                    box-sizing: border-box;
                                    backface-visibility: hidden;
                                    font-size: 30px;
                                    font-weight: bold;
                                    color: #dc291e;
                                    text-transform: uppercase;">Until You Fall Review</div>
                    </div>


                @foreach($data['articles'] as $article)
                        <div class="col-12 " style="">
                            <img class="w-100 p-2" src="https://www.opiumpulses.com/uploads/articles/426/Until_You_Fall_Final-Key-Art.png" alt="">
                            <div style="
line-height: 1.3;
color: #f4f3f3;
font-size: 18px;
font-family: Lato, sans-serif;
font-weight: 300;
box-sizing: border-box;
margin: 0 0 10px;
backface-visibility: hidden;
text-align: justify;"><p style="text-transform: lowercase">What is Until you fall? Do you like sword fighting? Do you like having to move to dodge? Do you like killing monsters?</p></div>

                        </div>
                    @endforeach
                </div>

            </div>


            <div class="col-12 col-lg-3 px-4">
                <div class="row" >
                    <div class="col-12 pt-5">
                        <div>
                            <h4 style="font-size: 20px">Categories:</h4>
                        </div>
                        <div class="category-div ps-3 py-5 px-lg-0">
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
                                                    text-decoration: none;
                                                  ">All</a></li>
                                <li class="my-3" style="color: #dc291e;"><a class="hover" href="" style=" font-family: 'Montserrat', sans-serif;
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
                                                    font-weight: bold;">Reviews</a></li>
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

