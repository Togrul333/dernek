<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2>Donations</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                    <li><span>/</span></li>
                    <li>Donations</li>
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
                                <img src="<?php echo e(asset('frontend/assets/images/resources/campaign-details-img-1.jpg')); ?>" alt="">
                                <div class="campaign-details__category">
                                    <p>Food</p>
                                </div>
                            </div>
                            <div class="campaign-details__progress">
                                <div class="bar">
                                    <div class="bar-inner count-bar" data-percent="36%"><div class="count-text">36%</div></div>
                                </div>
                                <div class="campaign-details__goals">
                                    <p><span>$25,270</span> Raised</p>
                                    <p><span>$30,000</span> Goal</p>
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
                            <h3 class="campaign-details__donations-title">Donations</h3>
                            <ul class="list-unstyled campaign-details__donations-list">
                                <?php $__currentLoopData = $some_donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $some_donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="campaign-details__donations-img">
                                        <img src="<?php echo e(asset('frontend/assets/images/resources/recent-donation-img-1.jpg')); ?>" alt="">
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

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek\resources\views/frontend/pages/donations/detail.blade.php ENDPATH**/ ?>