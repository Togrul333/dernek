<section class="gallery-tow gallery-three gallery-home-two">
    <div class="gallery-tow__container gallery-three__contianer">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 6, "slidesPerView": 1, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "375": {
                        "slidesPerView": 1
                    },
                    "575": {
                        "slidesPerView": 2
                    },
                    "767": {
                        "slidesPerView": 3
                    },
                    "991": {
                        "slidesPerView": 4
                    }
                }}'>
            <div class="swiper-wrapper">
                @foreach($sliders->where('show_on_home',0) as $slider)
                <div class="swiper-slide">
                    <div class="gallery-tow__single">
                        <div class="gallery-tow__img">
                            <img src="{{$slider->first_image}}" alt="">
                            <div class="gallery-two__hover">
                                <h2>{{translation($slider)->name}}</h2>
                                <h2>{{translation($slider)->text}}</h2>
{{--                                <ul class="list-unstyled">--}}
{{--                                    <li><a href="event-details.html">Charity</a></li>--}}
{{--                                    <li><span>/</span></li>--}}
{{--                                    <li><a href="event-details.html">Donation</a></li>--}}
{{--                                </ul>--}}
                                <a href="{{$slider->first_image}}" class="img-popup"><i
                                        class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
