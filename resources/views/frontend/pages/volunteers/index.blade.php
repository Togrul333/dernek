@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>Become a Volunteer</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Become a Volunteer</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__left">
                        <div class="become-volunteer__img">
                            <img src="{{asset('frontend/assets/images/sukuyusu_1-1536x1025.png')}}" alt="">
                        </div>
                        <div class="become-volunteer__requirements">
                            <h3>GÖNÜLLÜ OL</h3>
                            <p class="become-volunteer__text"
                            >Gönüllü ol, sevgiyi ve umudu yayabiliriz. Yeteneklerinle Afrika'ya dokun</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__right">
                        <form class="become-volunteer__form" id="contact-form"
                              data-url="{{route('frontend.volunteerForm')}}">
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Ad Soyad:" id="name" name="name">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="email" placeholder="Email Adresi:" id="email" name="email">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Telefon:" id="phone" name="phone">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Ülke:" id="country" name="country">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Şehir:" id="city" name="city">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Meslek:" id="role" name="role">
                            </div>
                            <div class="become-volunteer__input">
                                <textarea name="message" id="message" placeholder="Öneri ve Görüş:"></textarea>
                            </div>
                            <button type="submit" class="thm-btn become-volunteer__form-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="{{asset('main/volunteer.js')}}"></script>
@endsection
