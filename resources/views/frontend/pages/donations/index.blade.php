@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>@lang('frontend.titles.donations')</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">@lang('frontend.titles.home')</a></li>
                    <li><span>/</span></li>
                    <li>@lang('frontend.titles.donations')</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="popular-causes-three campaign-page">
        <div class="container">
            <div class="row">
                @foreach($donations as $donation)
                    @include('frontend.pages.donations.inc.donation-card')
                @endforeach
            </div>
            <div class="text-center more-post__btn">
                <a href="#" class="thm-btn">@lang('frontend.titles.learn_more')</a>
            </div>
        </div>
    </section>
@endsection
