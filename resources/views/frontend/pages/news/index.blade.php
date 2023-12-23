@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>@lang('frontend.titles.news')</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">@lang('frontend.titles.home')</a></li>
                    <li><span>/</span></li>
                    <li>@lang('frontend.titles.news')</li>
                </ul>
            </div>
        </div>
    </section>


    <section class="news-page">
        <div class="container">
            <div class="row">
                @foreach($news_all as $news)
                    @include('frontend.pages.news.inc.news-card')
                @endforeach
            </div>
            <div class="text-center more-post__btn">
                <a href="#" class="thm-btn">@lang('frontend.titles.learn_more')</a>
            </div>
        </div>
    </section>
@endsection
