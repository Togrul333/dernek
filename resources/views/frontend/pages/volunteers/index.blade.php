@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>@lang('frontend.titles.become_a_volunteer')</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">@lang('frontend.titles.home')</a></li>
                    <li><span>/</span></li>
                    <li>@lang('frontend.titles.become_a_volunteer')</li>
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
                            <h3>@lang('frontend.titles.become_a_volunteer')</h3>
                            <p class="become-volunteer__text"
                            >@lang('frontend.titles.become_a_volunteer_text')</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__right">
                        <form class="become-volunteer__form" id="contact-form"
                              data-url="{{route('frontend.volunteerForm')}}">
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="@lang('frontend.titles.form_name_placeholder')" id="name" name="name">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="email" placeholder="@lang('frontend.titles.form_email_placeholder')" id="email" name="email">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="@lang('frontend.titles.form_phone_placeholder')" id="phone" name="phone">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="@lang('frontend.titles.form_country_placeholder')" id="country" name="country">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="@lang('frontend.titles.form_city_placeholder')" id="city" name="city">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="@lang('frontend.titles.form_role_placeholder')" id="role" name="role">
                            </div>
                            <div class="become-volunteer__input">
                                <textarea name="message" id="message" placeholder="@lang('frontend.titles.form_message_placeholder')"></textarea>
                            </div>
                            <button type="submit" class="thm-btn become-volunteer__form-btn">@lang('frontend.titles.send_message')</button>
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
