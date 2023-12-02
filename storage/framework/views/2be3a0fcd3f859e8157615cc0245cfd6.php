<section class="gallery-tow gallery-three gallery-home-two">
    <div class="gallery-tow__container gallery-three__contianer">
        <div class="thm-swiper__slider swiper-container" data-swiper-options='{"loop": true, "spaceBetween": 6, "slidesPerView": 1, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 0,
                        "slidesPerView": 1
                    },
                    "375": {
                        "slidesPerView": 1
                    },
                    "575": {
                        "slidesPerView": 2
                    },
                    "767": {
                        "slidesPerView": 3
                    },
                    "991": {
                        "slidesPerView": 4
                    }
                }}'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $sliders->where('show_on_home',0); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="gallery-tow__single">
                        <div class="gallery-tow__img">
                            <img src="<?php echo e($slider->first_image); ?>" alt="">
                            <div class="gallery-two__hover">
                                <h2><?php echo e(translation($slider)->name); ?></h2>
                                <h2><?php echo e(translation($slider)->text); ?></h2>





                                <a href="<?php echo e($slider->first_image); ?>" class="img-popup"><i
                                        class="fa fa-plus"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/gallery.blade.php ENDPATH**/ ?>