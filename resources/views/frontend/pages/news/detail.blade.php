@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>News</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="{{$news->first_image}}" alt="">
                            <div class="news-details__date-box">
                                <p>{{\Illuminate\Support\Carbon::parse($news->action_date)->format('d M')}}</p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <h3 class="news-details__title">{{$news->translate(locale())->title}}</h3>
                            <p class="news-details__text-one">{{$news->translate(locale())->content}}</p>
                            <p class="news-details__text-one">{{$news->translate(locale())->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Recent News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                @foreach($some_news as $item)
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="{{$item->first_image}}" alt="">
{{--                                        <img src="{{asset('frontend/assets/images/blog/lp-1-1.jpg')}}" alt="">--}}
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="{{route('frontend.news.detail',['news'=>$item])}}">{{\Illuminate\Support\Str::limit($item->translate(locale())->title,30)}}</a>
                                        </h3>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
