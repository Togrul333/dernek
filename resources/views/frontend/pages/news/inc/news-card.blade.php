<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
    <div class="news-one__single">
        <div class="news-one__img">
            <div class="news-one__img-box">
                <img src="{{asset('frontend/assets/images/resources/popular-causes-3-img-1.jpg')}}" alt="">
                <a href="{{route('frontend.news.detail',['news'=>$news])}}"></a>
            </div>
            <div class="news-one__date-box">
                <p>{{\Illuminate\Support\Carbon::parse($news->action_date)->format('d M')}}</p>
            </div>
        </div>
        <div class="news-one__content">

            <div class="news-one__title">
                <h3><a href="{{route('frontend.news.detail',['news'=>$news])}}">{{$news->translate(locale())->title}}</a></h3>
            </div>
            <a href="{{route('frontend.news.detail',['news'=>$news])}}" class="thm-btn news-one__btn">More</a>
        </div>
    </div>
</div>
