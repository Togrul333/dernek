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


    <section class="news-page">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $news_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $news): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('frontend.pages.news.inc.news-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center more-post__btn">
                <a href="#" class="thm-btn">Load More</a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek\resources\views/frontend/pages/news/index.blade.php ENDPATH**/ ?>