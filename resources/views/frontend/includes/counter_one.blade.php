<section class="counter-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url({{asset('frontend/assets/images/backgrounds/counter_one_bg.jpg')}})">
    <div class="container">
        <ul class="counter-one__box list-unstyled">
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                <div class="counter-one__icon">
                    <i class="icon-campaign"></i>
                </div>
                <h3 class="counter">{!! settings('successful_campaigns_number') !!}</h3>
                <p class="counter-one__text">{!! settings('successful_campaigns') !!}</p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                <div class="counter-one__icon">
                    <i class="icon-budget"></i>
                </div>
                <h3 class="counter">{!! settings('raised_funds_number') !!}</h3>
                <p class="counter-one__text">{!! settings('raised_funds') !!}</p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                <div class="counter-one__icon">
                    <i class="icon-social-campaign"></i>
                </div>
                <h3 class="counter">{!! settings('satisfied_donors_number') !!}</h3>
                <p class="counter-one__text">{!! settings('satisfied_donors') !!}</p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                <div class="counter-one__icon">
                    <i class="icon-help"></i>
                </div>
                <h3 class="counter">{!! settings('best_volunteers_number') !!}</h3>
                <p class="counter-one__text">{!! settings('best_volunteers') !!}</p>
            </li>
        </ul>
    </div>
</section>
