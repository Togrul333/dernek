<section class="popular-causes-two">
    <div class="container">
        <div class="block-title text-center">
            <h4></h4>
            <h2>@lang('frontend.titles.our_popular_causes')</h2>
        </div>
        <div class="row">
            @foreach($donations as $donation)
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="{{$donation->first_image}}" alt="">
                            <div class="popular-causes__category">
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title" style="">
                                <h3><a href="{{route('frontend.donations.detail',['donation'=>$donation])}}"
                                    >{{\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)}}</a></h3>
                                <p>{{\Illuminate\Support\Str::limit($donation->translate(locale())->content,100)}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
