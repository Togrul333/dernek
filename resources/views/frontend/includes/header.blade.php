<div class="site-header__header-two-wrap clearfix">
    <div class="site-header__header-two-wrap__top clearfix">
        <div class="site-header__header-tow-wrap__container clearfix">
            <div class="site-header__header-tow-wrap__top-inner clearfix">
                <div class="site-header__header-tow-wrap__top-inner__left float-left">
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
                <div class="site-header__header-tow-wrap__top-inner__right float-right">
                    <div class="site-header__header-tow-wrap__top-inner__social">
                        <a href="{!! settings('facebook') !!}"><i class="fab fa-facebook-square"></i></a>
                        <a href="{!! settings('twitter') !!}"><i class="fab fa-twitter"></i></a>
                        <a href="{!! settings('instagram') !!}"><i class="fab fa-instagram"></i></a>
                        <a href="{!! settings('dribbble') !!}"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="main-nav__header-two">
        <div class="main-nav__header-two__container">
            <nav class="header-navigation stricky">
                <div class="main-nav__header-two__content-box">
                    <div class="main-nav__left main-nav__left-two">
                        <div class="logo-two">
                            {{--                            <a href=""><img src="{{asset('frontend/images/assets/header-logo-1690895751.svg')}}" alt="" style="width: 220px;"></a>--}}
                            {{--                            <a href=""><img src="{{asset('frontend/assets/images/resources/new_logo.jpeg')}}" alt=""></a>--}}

{{--                            <a href=""><img src="{{asset('frontend/assets/images/resources/logo-2.png')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/new_logo.jpeg')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/new_logo.png')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/QSÜQÜQ.png')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/esas_logo.png')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/salam_alekumqüqüqüqü.png')}}" alt=""></a>--}}
{{--                            <a href=""><img src="{{asset('frontend/assets/images/logo_posledniy.png')}}" alt=""></a>--}}
                            <a href=""><img src="{{asset('frontend/assets/images/logo_xazar.png')}}" alt=""></a>

                        </div>
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation main-nav__main-navigation__two">
                        <ul class=" main-nav__navigation-box ">
                            <li class="dropdown {{ url()->current() == route('frontend.dashboard') ? 'current' : '' }}">
                                <a href="{{route('frontend.dashboard')}}">Home</a>
                                {{--                                <ul>--}}
                                {{--                                    <li><a href="index.html">Home 01</a></li>--}}
                                {{--                                    <li><a href="index2.html">Home 02</a></li>--}}
                                {{--                                    <li><a href="index3.html">Home 03</a></li>--}}
                                {{--                                </ul>--}}
                            </li>


                            {{--                            <li class="dropdown ">--}}
                            {{--                                <a href="#">Pages</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="about.html">About</a></li>--}}
                            {{--                                    <li><a href="volunteer.html">Volunteers</a></li>--}}
                            {{--                                </ul>--}}
                            {{--                            </li>--}}


                            <li class="dropdown {{ url()->current() == route('frontend.donations') ? 'current' : '' }}">
                                <a href="{{route('frontend.donations')}}">Donations</a>
                                {{--                                <ul>--}}
                                {{--                                    <li><a href="campaigns.html">Campaigns</a></li>--}}
                                {{--                                    <li><a href="campaign-details.html">Campaigns Details</a></li>--}}
                                {{--                                </ul>--}}
                            </li>
                            {{--                            <li class="dropdown">--}}
                            {{--                                <a href="#">Events</a>--}}
                            {{--                                <ul>--}}
                            {{--                                    <li><a href="event.html">Events</a></li>--}}
                            {{--                                    <li><a href="event-details.html">Events Details</a></li>--}}
                            {{--                                </ul><!-- /.sub-menu -->--}}
                            {{--                            </li>--}}
                            <li class="dropdown {{ url()->current() == route('frontend.news') ? 'current' : '' }}">
                                <a href="{{route('frontend.news')}}">News</a>
                                {{--                                <ul>--}}
                                {{--                                    <li><a href="news.html">News</a></li>--}}
                                {{--                                </ul>--}}
                            </li>
                            <li class=" {{ url()->current() == route('frontend.contact') ? 'current' : '' }}">
                                <a href="{{route('frontend.contact')}}">Contact</a>
                            </li>
                            <li class=" {{ url()->current() == route('frontend.volunteer') ? 'current' : '' }}">
                                <a href="{{route('frontend.volunteer')}}">Gönüllü ol</a>
                            </li>
                            <li class="dropdown ">
                                <a href="">language</a>
                                <ul>
                                    @foreach($langs as $lang)
                                        <li>
                                            <a href="{{ route('frontend.lang.switch', $lang->code) }}">{{$lang->name}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="main-nav__right-two">

                        <div class="main-nav__right__icon-search-box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>

                        <div class="main-nav__right__btn-one">
                            <a href="{{route('frontend.donate')}}"><i class="fas fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
