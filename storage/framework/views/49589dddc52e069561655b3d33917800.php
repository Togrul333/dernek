<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2><?php echo app('translator')->get('frontend.titles.become_a_volunteer'); ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>"><?php echo app('translator')->get('frontend.titles.home'); ?></a></li>
                    <li><span>/</span></li>
                    <li><?php echo app('translator')->get('frontend.titles.become_a_volunteer'); ?></li>
                </ul>
            </div>
        </div>
    </section>
    <section class="become-volunteer">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__left">
                        <div class="become-volunteer__img">
                            <img src="<?php echo e(asset('frontend/assets/images/sukuyusu_1-1536x1025.png')); ?>" alt="">
                        </div>
                        <div class="become-volunteer__requirements">
                            <h3><?php echo app('translator')->get('frontend.titles.become_a_volunteer'); ?></h3>
                            <p class="become-volunteer__text"
                            ><?php echo app('translator')->get('frontend.titles.become_a_volunteer_text'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__right">
                        <form class="become-volunteer__form" id="contact-form"
                              data-url="<?php echo e(route('frontend.volunteerForm')); ?>">
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_name_placeholder'); ?>" id="name" name="name">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="email" placeholder="<?php echo app('translator')->get('frontend.titles.form_email_placeholder'); ?>" id="email" name="email">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_phone_placeholder'); ?>" id="phone" name="phone">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_country_placeholder'); ?>" id="country" name="country">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_city_placeholder'); ?>" id="city" name="city">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_role_placeholder'); ?>" id="role" name="role">
                            </div>
                            <div class="become-volunteer__input">
                                <textarea name="message" id="message" placeholder="<?php echo app('translator')->get('frontend.titles.form_message_placeholder'); ?>"></textarea>
                            </div>
                            <button type="submit" class="thm-btn become-volunteer__form-btn"><?php echo app('translator')->get('frontend.titles.send_message'); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('main/volunteer.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/volunteers/index.blade.php ENDPATH**/ ?>