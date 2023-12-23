<footer class="site-footer" style="background-image: url({{asset('frontend/assets/images/backgrounds/site_footer_bg.jpg')}})">
    <div class="container">
        <div class="site-footer__one-top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href=""><img src="{{asset('frontend/assets/images/logo_xazar.png')}}" alt=""></a>
                        </div>
                        <p class="footer-widget__text">{!! settings('footer_text') !!}</p>
                        <div class="site-footer__social">
                            <a href="{!! settings('twitter') !!}"><i class="fab fa-twitter"></i></a>
                            <a href="{!! settings('facebook') !!}" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a href="{!! settings('dribbble') !!}" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                            <a href="{!! settings('instagram') !!}" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="{{route('frontend.donations')}}">Donations</a></li>
{{--                            <li><a href="{{route('frontend.donations')}}">Campaigns</a></li>--}}
{{--                            <li><a href="#">Fundraise</a></li>--}}
{{--                            <li><a href="{{route('frontend.donations')}}">Volunteers</a></li>--}}
{{--                            <li><a href="#">Sponsors</a></li>--}}
                        </ul>
                        <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                            <li><a href="{{route('frontend.news')}}">News</a></li>
                            <li><a href="{{route('frontend.contact')}}">Contact</a></li>
{{--                            <li><a href="#">Help</a></li>--}}
{{--                            <li><a href="#">Faqs</a></li>--}}
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
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
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p>{!! settings('location') !!}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__support">
                        <h3 class="footer-widget__title">Support</h3>
                        <p class="footer-widget__support-text">{!! settings('footer_support_text') !!}</p>
                        <div class="footer-widget__support-btn">
                            <a href="{{route('frontend.donate')}}"><i class="fas fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="site-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-footer-bottom__inner">
                    <div class="site-footer-bottom__left">
                        <p>© Copyright 2023
{{--                            <a href="#">dfgdgfd.com</a>--}}
                        </p>
                    </div>
{{--                    <ul class="site-footer-bottom__menu list-unstyled">--}}
{{--                        <li><a href="#">Privacy Policy</a></li>--}}
{{--                        <li><span>/</span></li>--}}
{{--                        <li><a href="#">Terms of Condition</a></li>--}}
{{--                    </ul>--}}
                </div>
            </div>
        </div>
    </div>
</div>
