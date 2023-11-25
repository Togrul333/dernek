@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>Donations</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Donations</li>
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
                <a href="#" class="thm-btn">Load More</a>
            </div>
        </div>
    </section>
@endsection
