<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
    <div class="popular-causes__sinlge">
        <div class="popular-causes__img">
            <img src="{{$donation->first_image}}" alt="">
            <div class="popular-causes__category">
{{--                <p>Food</p>--}}
            </div>
        </div>
        <div class="popular-causes__content">
            <div class="popular-causes__title">
                <h3>
                    <a href="{{route('frontend.donations.detail',['donation'=>$donation])}}"
                    >{{\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)}}</a>
                </h3>
                <p>{{\Illuminate\Support\Str::limit($donation->translate(locale())->content,20)}}</p>
            </div>
{{--            <div class="popular-causes__progress">--}}
{{--                <div class="bar">--}}
{{--                    <div class="bar-inner count-bar" data-percent="36%">--}}
{{--                        <div class="count-text">{{$donation->percent}}%</div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="popular-causes__goals">--}}
{{--                    <p><span>${{$donation->raised}}</span> Raised</p>--}}
{{--                    <p><span>${{$donation->goal}}</span> Goal</p>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
</div>
