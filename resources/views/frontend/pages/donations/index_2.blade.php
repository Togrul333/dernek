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
                                        <p>Donate {{$donation->price}} ₺</p>
                                    </div>
                                    <div class="main-nav__right__btn-one">
                                        <a href=""><i class="fas fa-heart"></i>Donate</a>
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
                                    <h3>Genel Bağış</h3>
                                    <input type="number">
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p>Genel Bağış</p>
                                    </div>
                                    <div class="main-nav__right__btn-one">
                                        <a href=""><i class="fas fa-heart"></i>Donate</a>
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
