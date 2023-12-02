<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

        <div class="swiper-wrapper">
            @foreach($sliders->where('show_on_home',1) as $slider)
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url({{$slider->first_image}});"></div>
                    <div class="container">
                        <div class="swiper-slide__inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p>{{translation($slider)->name}}</p>
                                    <h2>{!! translation($slider)->text !!}</h2>
                                    <a href="{{route('frontend.news')}}" class="thm-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination" id="main-slider-pagination"></div>
    </div>
</section>
