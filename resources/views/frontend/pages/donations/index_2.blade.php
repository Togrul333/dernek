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

    <section class="meet-volunteers-one">
        <div class="container">
            <div class="row">
                @foreach($donations as $donation)
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="{{$donation->first_image}}" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>{{\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)}}</h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p> {{$donation->price}} ₺</p>
                                    </div>
                                    <div class="main-nav__right__btn-one">
                                        <a href=""><i class="fas fa-heart"></i>@lang('frontend.titles.donate')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="{{asset('frontend/assets/images/genel.jpg')}}" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3>@lang('frontend.titles.general_donation')</h3>
                                    <input type="number">
                                </div>
                                <div class="meet-volunteers-one__social-info">
{{--                                    <div class="left">--}}
{{--                                        <p></p>--}}
{{--                                    </div>--}}
                                    <div class="main-nav__right__btn-one ml-2">
                                        <a href=""><i class="fas fa-heart"></i>@lang('frontend.titles.donate')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

@endsection
@section('scripts')
@endsection
