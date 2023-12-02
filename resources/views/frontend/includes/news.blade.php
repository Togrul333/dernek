<section class="news-two" style="background-image: url({{asset('frontend/assets/images/backgrounds/news-two-bg.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="news-two__left">
                    <div class="block-title text-left">
                        <h4>From the Blog</h4>
                        <h2>Latest News <br> & Articles</h2>
                    </div>
                    <p class="news-two__text">We Work for Humanity</p>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="news-two__right">
                    <div class="news-two__carousel owl-theme owl-carousel">
                        @foreach($news as $new_item)
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <div class="news-one__img-box">
                                    <img src="{{$new_item->first_image}}" alt="">
                                    <a href="{{route('frontend.news.detail',['news'=>$new_item])}}"></a>
                                </div>
                                <div class="news-one__date-box">
                                    <p>{{\Illuminate\Support\Carbon::parse($new_item->action_date)->format('d M')}}</p>
                                </div>
                            </div>
                            <div class="news-one__content">
{{--                                <ul class="list-unstyled news-one__meta">--}}
{{--                                    <li><a href="#"><i class="far fa-user-circle"></i> Admin</a></li>--}}
{{--                                    <li><span>/</span></li>--}}
{{--                                    <li><a href="#"><i class="far fa-comments"></i> 2 Comments</a>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
                                <div class="news-one__title">
                                    <h3><a href="{{route('frontend.news.detail',['news'=>$new_item])}}">{!! translation($new_item)->title !!}</a>
                                    </h3>
                                </div>
                                <a href="{{route('frontend.news.detail',['news'=>$new_item])}}" class="thm-btn news-one__btn">More</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
