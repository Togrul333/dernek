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

    <section class="campaign-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="campaign-details__left-bar">
                        <div class="campaign-details__img">
                            <div class="campaign-details__img-box">
                                <img src="{{$donation->first_image}}" alt="">
                                <div class="campaign-details__category">
                                </div>
                            </div>
{{--                            <div class="campaign-details__progress">--}}
{{--                                <div class="bar">--}}
{{--                                    <div class="bar-inner count-bar" data-percent="36%"><div class="count-text">{{$donation->percent}}%</div></div>--}}
{{--                                </div>--}}
{{--                                <div class="campaign-details__goals">--}}
{{--                                    <p><span>{{$donation->raised}}</span> Raised</p>--}}
{{--                                    <p><span>${{$donation->goal}}</span> Goal</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                        <div class="campaign-details__text-box">
                            <h3>{{$donation->translate(locale())->title}}</h3>
                            <p class="campaign-details__text"> {{$donation->translate(locale())->content}} </p>
                            <p class="campaign-details__text"> {{$donation->translate(locale())->description}} </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="campaign-details__right-bar">
                        <div class="campaign-details__donations">
                            <h3 class="campaign-details__donations-title">@lang('frontend.titles.donations')</h3>
                            <ul class="list-unstyled campaign-details__donations-list">
                                @foreach($some_donations as $some_donation)
                                <li>
                                    <div class="sidebar__post-image">
                                           <img src="{{$some_donation->first_image}}" alt="">
                                    </div>
                                    <div class="campaign-details__donations-content">
                                        <p>{{\Illuminate\Support\Str::limit($some_donation->translate(locale())->title,20)}}</p>
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
