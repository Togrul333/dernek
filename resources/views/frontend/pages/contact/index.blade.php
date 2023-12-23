@extends('frontend.layouts.master')
@section('header')
    @include('frontend.includes.header_two')
@endsection
@section('content')
    <section class="page-header" style="background-image: url({{asset('frontend/assets/images/backgrounds/page-header-bg.jpg')}});">
        <div class="container">
            <div class="page-header__inner">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{route('frontend.dashboard')}}">Home</a></li>
                    <li><span>/</span></li>
                    <li>Contact</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="block-title text-center">
                <h4>Asked Quesitons</h4>
                <h2>Contact With Us</h2>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form">
                        <form action="" id="contact-form" data-url="{{route('frontend.contactForm')}}"
                              class="contact-form-validated contact-one__form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Your name" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="email" placeholder="Email address" id="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Phone number" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="Subject" id="subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-form__input-box">
                                        <textarea name="message" id="message" placeholder="Write message"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn ">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="contact-page__info-box">
                        <div class="contact-page__info-box-address">
                            <h4 class="contact-page__info-box-tilte">Address</h4>
                            <p class="contact-page__info-box-address-text">{!! settings('location') !!}</p>
                        </div>
                        <div class="contact-page__info-box-phone">
                            <h4 class="contact-page__info-box-tilte">Phone</h4>
                            <p class="contact-page__info-box-phone-number">
                                <a href="tel:{!! settings('phone') !!}">{!! settings('phone') !!}</a> <br>
{{--                                <a href="tel:0123456789">Mobile: 000 8888 999</a>--}}
                            </p>
                        </div>
                        <div class="contact-page__info-box-email">
                            <h4 class="contact-page__info-box-tilte">Email</h4>
                            <p class="contact-page__info-box-email-address">
                                <a href="mailto:{!! settings('email') !!}">{!! settings('email') !!}</a> <br>
{{--                                <a href="mailto:inquiry@asting.com">inquiry@asting.com</a>--}}
                            </p>
                        </div>
                        <div class="contact-page__info-box-follow">
                            <h4 class="contact-page__info-box-tilte">Follow</h4>
                            <div class="contact-page__info-box-follow-social">
                                <a href="{!! settings('twitter') !!}"><i class="fab fa-twitter"></i></a>
                                <a href="{!! settings('facebook') !!}" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                <a href="{!! settings('dribbble') !!}" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="{!! settings('instagram') !!}" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@php
    $locationData = [
        'latitude' => 41.0082,
        'longitude' => 28.9784,
        'decoded_address' => 'Истанбул, Турция',
    ];

@endphp
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d{{ $locationData["longitude"] }}!3d{{ $locationData["latitude"] }}!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2s{{ rawurlencode($locationData["decoded_address"]) }}!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section>

@endsection
@section('scripts')
    <script src="{{asset('main/contact.js')}}"></script>
@endsection
