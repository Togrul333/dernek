<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/en-guzel-turk-bayrakli-manzarali-camiler.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2><?php echo app('translator')->get('frontend.titles.contact'); ?></h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>"><?php echo app('translator')->get('frontend.titles.home'); ?></a></li>
                    <li><span>/</span></li>
                    <li><?php echo app('translator')->get('frontend.titles.contact'); ?></li>
                </ul>
            </div>
        </div>
    </section>

    <section class="contact-page">
        <div class="container">
            <div class="block-title text-center">
                <h4><?php echo app('translator')->get('frontend.titles.asked_quesitons'); ?></h4>
                <h2><?php echo app('translator')->get('frontend.titles.contact_with_us'); ?></h2>
            </div>
            <div class="row">
                <div class="col-xl-8">
                    <div class="contact-form">
                        <form action="" id="contact-form" data-url="<?php echo e(route('frontend.contactForm')); ?>"
                              class="contact-form-validated contact-one__form">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_name_placeholder'); ?>" id="name" name="name">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="email" placeholder="<?php echo app('translator')->get('frontend.titles.form_email_placeholder'); ?>" id="email" name="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_phone_placeholder'); ?>" id="phone" name="phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="contact-form__input-box">
                                        <input type="text" placeholder="<?php echo app('translator')->get('frontend.titles.form_subject_placeholder'); ?>" id="subject" name="subject">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="contact-form__input-box">
                                        <textarea name="message" id="message" placeholder="<?php echo app('translator')->get('frontend.titles.form_message_placeholder'); ?>"></textarea>
                                    </div>
                                    <button type="submit" class="thm-btn "><?php echo app('translator')->get('frontend.titles.send_message'); ?></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <div class="col-xl-4 d-flex align-items-stretch">
                    <div class="contact-page__info-box">
                        <div class="contact-page__info-box-address">
                            <h4 class="contact-page__info-box-tilte"><?php echo app('translator')->get('frontend.titles.address'); ?></h4>
                            <p class="contact-page__info-box-address-text"><?php echo settings('location'); ?></p>
                        </div>
                        <div class="contact-page__info-box-phone">
                            <h4 class="contact-page__info-box-tilte"><?php echo app('translator')->get('frontend.titles.phone'); ?></h4>
                            <p class="contact-page__info-box-phone-number">
                                <a href="tel:<?php echo settings('phone'); ?>"><?php echo settings('phone'); ?></a> <br>
                            </p>
                        </div>
                        <div class="contact-page__info-box-email">
                            <h4 class="contact-page__info-box-tilte"><?php echo app('translator')->get('frontend.titles.email'); ?></h4>
                            <p class="contact-page__info-box-email-address">
                                <a href="mailto:<?php echo settings('email'); ?>"><?php echo settings('email'); ?></a> <br>
                            </p>
                        </div>
                        <div class="contact-page__info-box-follow">
                            <h4 class="contact-page__info-box-tilte"><?php echo app('translator')->get('frontend.titles.follow'); ?></h4>
                            <div class="contact-page__info-box-follow-social">
                                <a href="<?php echo settings('twitter'); ?>"><i class="fab fa-twitter"></i></a>
                                <a href="<?php echo settings('facebook'); ?>" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                                <a href="<?php echo settings('dribbble'); ?>" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                                <a href="<?php echo settings('instagram'); ?>" class="clr-ins"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
    $locationData = [
        'latitude' => 41.0082,
        'longitude' => 28.9784,
        'decoded_address' => 'Истанбул, Турция',
    ];

?>
    <section class="contact-page-google-map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d<?php echo e($locationData["longitude"]); ?>!3d<?php echo e($locationData["latitude"]); ?>!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2s<?php echo e(rawurlencode($locationData["decoded_address"])); ?>!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
            class="contact-page-google-map__one" allowfullscreen></iframe>
    </section>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(asset('main/contact.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/contact/index.blade.php ENDPATH**/ ?>