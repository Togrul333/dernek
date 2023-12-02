<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
    <div class="news-one__single">
        <div class="news-one__img">
            <div class="news-one__img-box">
                <img src="<?php echo e($news->first_image); ?>" alt="">
                <a href="<?php echo e(route('frontend.news.detail',['news'=>$news])); ?>"></a>
            </div>
            <div class="news-one__date-box">
                <p><?php echo e(\Illuminate\Support\Carbon::parse($news->action_date)->format('d M')); ?></p>
            </div>
        </div>
        <div class="news-one__content">

            <div class="news-one__title">
                <h3><a href="<?php echo e(route('frontend.news.detail',['news'=>$news])); ?>"><?php echo e($news->translate(locale())->title); ?></a></h3>
            </div>
            <a href="<?php echo e(route('frontend.news.detail',['news'=>$news])); ?>" class="thm-btn news-one__btn">More</a>
        </div>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/news/inc/news-card.blade.php ENDPATH**/ ?>