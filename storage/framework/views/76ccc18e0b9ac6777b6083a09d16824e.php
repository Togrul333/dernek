<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2>News</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                    <li><span>/</span></li>
                    <li>News</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="news-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="news-details__left">
                        <div class="news-details__img">
                            <img src="<?php echo e(asset('frontend/assets/images/blog/news-details-img-1.jpg')); ?>" alt="">
                            <div class="news-details__date-box">
                                <p><?php echo e(\Illuminate\Support\Carbon::parse($news->action_date)->format('d M')); ?></p>
                            </div>
                        </div>
                        <div class="news-details__content">
                            <h3 class="news-details__title"><?php echo e($news->translate(locale())->title); ?></h3>
                            <p class="news-details__text-one"><?php echo e($news->translate(locale())->content); ?></p>
                            <p class="news-details__text-one"><?php echo e($news->translate(locale())->description); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="sidebar">
                        <div class="sidebar__single sidebar__post">
                            <h3 class="sidebar__title">Recent News</h3>
                            <ul class="sidebar__post-list list-unstyled">
                                <?php $__currentLoopData = $some_news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="sidebar__post-image">
                                        <img src="<?php echo e(asset('frontend/assets/images/blog/lp-1-1.jpg')); ?>" alt="">
                                    </div>
                                    <div class="sidebar__post-content">
                                        <h3>
                                            <a href="<?php echo e(route('frontend.news.detail',['news'=>$item])); ?>"><?php echo e(\Illuminate\Support\Str::limit($item->translate(locale())->title,30)); ?></a>
                                        </h3>
                                    </div>
                                </li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/news/detail.blade.php ENDPATH**/ ?>