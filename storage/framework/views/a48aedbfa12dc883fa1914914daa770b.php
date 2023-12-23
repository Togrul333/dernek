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

    <section class="campaign-details">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="campaign-details__left-bar">
                        <div class="campaign-details__img">
                            <div class="campaign-details__img-box">
                                <img src="<?php echo e($donation->first_image); ?>" alt="">
                                <div class="campaign-details__category">
                                </div>
                            </div>









                        </div>
                        <div class="campaign-details__text-box">
                            <h3><?php echo e($donation->translate(locale())->title); ?></h3>
                            <p class="campaign-details__text"> <?php echo e($donation->translate(locale())->content); ?> </p>
                            <p class="campaign-details__text"> <?php echo e($donation->translate(locale())->description); ?> </p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="campaign-details__right-bar">
                        <div class="campaign-details__donations">
                            <h3 class="campaign-details__donations-title"><?php echo app('translator')->get('frontend.titles.donations'); ?></h3>
                            <ul class="list-unstyled campaign-details__donations-list">
                                <?php $__currentLoopData = $some_donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $some_donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="sidebar__post-image">
                                           <img src="<?php echo e($some_donation->first_image); ?>" alt="">
                                    </div>
                                    <div class="campaign-details__donations-content">
                                        <p><?php echo e(\Illuminate\Support\Str::limit($some_donation->translate(locale())->title,20)); ?></p>
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/donations/detail.blade.php ENDPATH**/ ?>