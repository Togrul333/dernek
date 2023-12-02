<div class="site-header__header-one-wrap clearfix">
    <div class="container">

        <div class="site-header__logo-box float-left">
            <div class="site-header__logo">
                <a href=""><img src="{{asset('frontend/assets/images/resources/logo.png')}}" alt=""></a>
            </div>
        </div>

        <header class="main-nav__header-one">
            <div class="main-nav__header-one__top clearfix">
                <div class="main-nav__header-one__top-left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:{!! settings('phone') !!}">{!! settings('phone') !!}</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:{!! settings('email') !!}">{!! settings('email') !!}</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-nav__header-one__top-right">
                    <div class="main-nav__header-one__top-social">
                        <a href="{!! settings('facebook') !!}"><i class="fab fa-facebook-square"></i></a>
                        <a href="{!! settings('twitter') !!}"><i class="fab fa-twitter"></i></a>
                        <a href="{!! settings('instagram') !!}"><i class="fab fa-instagram"></i></a>
                        <a href="{!! settings('dribbble') !!}"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <div class="main-nav__left main-nav__left-one float-left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="main-nav__main-navigation clearfix">
                            <ul class=" main-nav__navigation-box float-left">
                                <li class="dropdown {{ url()->current() == route('frontend.dashboard') ? 'current' : '' }}">
                                    <a href="{{route('frontend.dashboard')}}">Home</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="index.html">Home 01</a></li>--}}
{{--                                        <li><a href="index2.html">Home 02</a></li>--}}
{{--                                        <li><a href="index3.html">Home 03</a></li>--}}
{{--                                        <li class="dropdown"><a href="#">Header Versions</a>--}}
{{--                                            <ul>--}}
{{--                                                <li><a href="index.html">Header 01</a></li>--}}
{{--                                                <li><a href="index2.html">Header 02</a></li>--}}
{{--                                                <li><a href="index3.html">Header 03</a></li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
                                </li>

{{--                                <li class="dropdown">--}}
{{--                                    <a href="#">Pages</a>--}}
{{--                                    <ul>--}}
{{--                                        <li><a href="about.html">About</a></li>--}}
{{--                                        <li><a href="volunteer.html">Volunteers</a></li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}


                                <li class="dropdown {{ url()->current() == route('frontend.donations') ? 'current' : '' }}">
                                    <a href="{{route('frontend.donations')}}">Donations</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="campaigns.html">Campaigns</a></li>--}}
{{--                                        <li><a href="campaign-details.html">Campaigns Details</a></li>--}}
{{--                                    </ul>--}}
                                </li>

                                <li class="dropdown {{ url()->current() == route('frontend.news') ? 'current' : '' }}">
                                    <a href="{{route('frontend.news')}}">News</a>
{{--                                    <ul>--}}
{{--                                        <li><a href="news.html">News</a></li>--}}
{{--                                        <li><a href="news-details.html">News Detail</a></li>--}}
{{--                                    </ul>--}}
                                </li>
                                <li class="{{ url()->current() == route('frontend.contact') ? 'current' : '' }}">
                                    <a href="{{route('frontend.contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-nav__right main-nav__right-one float-right">
                        <div class="main-nav__right__btn-one">
                            <a href="campaigns.html"><i class="fas fa-heart"></i>Donate</a>
                        </div>
{{--                        <div class="main-nav__right__icon-cart-box">--}}
{{--                            <a href="#">--}}
{{--                                <span class="icon-shopping-cart"></span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
                        <div class="main-nav__right__icon-search-box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>
