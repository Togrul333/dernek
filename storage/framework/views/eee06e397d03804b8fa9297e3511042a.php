<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2><?php echo app('translator')->get('frontend.titles.donations'); ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>"><?php echo app('translator')->get('frontend.titles.home'); ?></a></li>
                    <li><span>/</span></li>
                    <li><?php echo app('translator')->get('frontend.titles.donations'); ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="popular-causes-three campaign-page">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo $__env->make('frontend.pages.donations.inc.donation-card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="text-center more-post__btn">
                <a href="#" class="thm-btn"><?php echo app('translator')->get('frontend.titles.learn_more'); ?></a>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/donations/index.blade.php ENDPATH**/ ?>