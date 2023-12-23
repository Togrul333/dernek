<div class="site-header__header-one-wrap clearfix">
    <div class="container">

        <div class="site-header__logo-box float-left">
            <div class="site-header__logo">
                <a href="{{route('frontend.dashboard')}}"><img src="{{asset('frontend/assets/images/logo_xazar.png')}}" alt=""></a>
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
                                    <a href="{{route('frontend.dashboard')}}">@lang('frontend.titles.home')</a>
                                </li>
                                <li class="dropdown {{ url()->current() == route('frontend.donations') ? 'current' : '' }}">
                                    <a href="{{route('frontend.donations')}}">@lang('frontend.titles.donations')</a>
                                </li>

                                <li class="dropdown {{ url()->current() == route('frontend.news') ? 'current' : '' }}">
                                    <a href="{{route('frontend.news')}}">@lang('frontend.titles.news')</a>
                                </li>
                                <li class="{{ url()->current() == route('frontend.contact') ? 'current' : '' }}">
                                    <a href="{{route('frontend.contact')}}">@lang('frontend.titles.contact')</a>
                                </li>
{{--                                <li class="{{ url()->current() == route('frontend.volunteer') ? 'current' : '' }}">--}}
{{--                                    <a href="{{route('frontend.volunteer')}}">@lang('frontend.titles.volunteer')</a>--}}
{{--                                </li>--}}
                                <li class="dropdown ">
                                    <a href="">@lang('frontend.titles.language')</a>
                                    <ul>
                                        @foreach($langs as $lang)
                                            <li><a href="{{ route('frontend.lang.switch', $lang->code) }}">{{$lang->name}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-nav__right main-nav__right-one float-right">
                        <div class="main-nav__right__btn-one">
                            <a href="{{route('frontend.donate')}}"><i class="fas fa-heart"></i>@lang('frontend.titles.donate')</a>
                        </div>
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
