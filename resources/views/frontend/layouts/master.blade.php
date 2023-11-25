<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('frontend.layouts.meta')
    @include('frontend.layouts.head')
    @yield('head')
    <title>@yield('title',config('app.name'))</title>
</head>
<body id="body">
<div class="preloader">
    <img src="{{asset('frontend/assets/images/loader.png')}}" class="preloader__image" alt="">
</div>
<div class="page-wrapper">
    @yield('header')
    @yield('content')

    @include('frontend.layouts.footer')

    @include('frontend.layouts.scripts')
    @yield('scripts')
    @stack('scripts')
</div>

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>

<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay side-menu__toggler mobile-nav__toggler"></div>
    <div class="mobile-nav__content">
            <span class="mobile-nav__close side-menu__toggler mobile-nav__toggler">
                <i class="fa fa-times"></i>
            </span>
        <div class="logo-box">
            <a href="index.html" aria-label="logo image">
                <img src="{{asset('frontend/assets/images/resources/logo-2.png')}}" alt=""/>
            </a>
        </div>
        <div class="mobile-nav__container clearfix"></div>
        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fas fa-envelope"></i>
                <a href="mailto:needhelp@asting.com">needhelp@asting.com</a>
            </li>
            <li>
                <i class="fas fa-phone-square-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul>
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>

<div class="search-popup">
    <div class="search-popup__overlay custom-cursor__overlay">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <div class="search-popup__inner">
        <form action="#" class="search-popup__form">
            <input type="text" name="search" placeholder="Type here to Search....">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
</div>

</body>
</html>
