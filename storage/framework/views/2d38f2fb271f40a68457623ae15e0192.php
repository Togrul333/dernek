<section class="news-two" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/news-two-bg.jpg')); ?>)">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <div class="news-two__left">
                    <div class="block-title text-left">
                        <h4><?php echo app('translator')->get('frontend.titles.from_the_blog'); ?></h4>
                        <h2><?php echo app('translator')->get('frontend.titles.latest_news'); ?></h2>
                    </div>
                    <p class="news-two__text"><?php echo app('translator')->get('frontend.titles.we_work_for_humanity'); ?></p>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="news-two__right">
                    <div class="news-two__carousel owl-theme owl-carousel">
                        <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="news-one__single">
                            <div class="news-one__img">
                                <div class="news-one__img-box">
                                    <img src="<?php echo e($new_item->first_image); ?>" alt="">
                                    <a href="<?php echo e(route('frontend.news.detail',['news'=>$new_item])); ?>"></a>
                                </div>
                                <div class="news-one__date-box">
                                    <p><?php echo e(\Illuminate\Support\Carbon::parse($new_item->action_date)->format('d M')); ?></p>
                                </div>
                            </div>
                            <div class="news-one__content">
                                <div class="news-one__title">
                                    <h3><a href="<?php echo e(route('frontend.news.detail',['news'=>$new_item])); ?>"><?php echo translation($new_item)->title; ?></a>
                                    </h3>
                                </div>
                                <a href="<?php echo e(route('frontend.news.detail',['news'=>$new_item])); ?>" class="thm-btn news-one__btn"><?php echo app('translator')->get('frontend.titles.more'); ?></a>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/news.blade.php ENDPATH**/ ?>