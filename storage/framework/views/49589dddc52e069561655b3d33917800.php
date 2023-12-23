<?php $__env->startSection('header'); ?>
    <?php echo $__env->make('frontend.includes.header_two', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="page-header" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/page-header-bg.jpg')); ?>);">
        <div class="container">
            <div class="page-header__inner">
                <h2>Become a Volunteer</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a></li>
                    <li><span>/</span></li>
                    <li>Become a Volunteer</li>
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
                            <h3>GÖNÜLLÜ OL</h3>
                            <p class="become-volunteer__text"
                            >Gönüllü ol, sevgiyi ve umudu yayabiliriz. Yeteneklerinle Afrika'ya dokun</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="become-volunteer__right">
                        <form class="become-volunteer__form" id="contact-form"
                              data-url="<?php echo e(route('frontend.volunteerForm')); ?>">
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Ad Soyad:" id="name" name="name">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="email" placeholder="Email Adresi:" id="email" name="email">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Telefon:" id="phone" name="phone">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Ülke:" id="country" name="country">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Şehir:" id="city" name="city">
                            </div>
                            <div class="become-volunteer__input">
                                <input type="text" placeholder="Meslek:" id="role" name="role">
                            </div>
                            <div class="become-volunteer__input">
                                <textarea name="message" id="message" placeholder="Öneri ve Görüş:"></textarea>
                            </div>
                            <button type="submit" class="thm-btn become-volunteer__form-btn">Send Message</button>
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