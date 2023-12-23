<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>);">
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

    <section class="meet-volunteers-one">
        <div class="container">
            <div class="row">
                <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="<?php echo e($donation->first_image); ?>" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3><?php echo e(\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)); ?></h3>
                                </div>
                                <div class="meet-volunteers-one__social-info">
                                    <div class="left">
                                        <p> <?php echo e($donation->price); ?> ₺</p>
                                    </div>
                                    <div class="main-nav__right__btn-one">
                                        <a href=""><i class="fas fa-heart"></i><?php echo app('translator')->get('frontend.titles.donate'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                        <div class="meet-volunteers-one__single">
                            <div class="meet-volunteers-one__img">
                                <img src="<?php echo e(asset('frontend/assets/images/genel.jpg')); ?>" alt="">
                            </div>
                            <div class="meet-volunteers-one__content">
                                <div class="meet-volunteers-one__name">
                                    <h3><?php echo app('translator')->get('frontend.titles.general_donation'); ?></h3>
                                    <input type="number">
                                </div>
                                <div class="meet-volunteers-one__social-info">



                                    <div class="main-nav__right__btn-one ml-2">
                                        <a href=""><i class="fas fa-heart"></i><?php echo app('translator')->get('frontend.titles.donate'); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/donations/index_2.blade.php ENDPATH**/ ?>