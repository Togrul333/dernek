<section class="main-slider main-slider-two">
    <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "pagination": {
        "el": "#main-slider-pagination",
        "type": "bullets",
        "clickable": true
      },
    "navigation": {
        "nextEl": ".main-slider-button-next",
        "prevEl": ".main-slider-button-prev",
        "clickable": true
    },
    "autoplay": {
        "delay": 5000
    }}'>

        <div class="swiper-wrapper">
            <?php $__currentLoopData = $sliders->where('show_on_home',1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="swiper-slide">
                    <div class="image-layer"
                         style="background-image: url(<?php echo e($slider->first_image); ?>);"></div>
                    <div class="container">
                        <div class="swiper-slide__inner">
                            <div class="row">
                                <div class="col-xl-12">
                                    <p><?php echo e(translation($slider)->name); ?></p>
                                    <h2><?php echo translation($slider)->text; ?></h2>
                                    <a href="<?php echo e(route('frontend.news')); ?>" class="thm-btn"><?php echo app('translator')->get('frontend.titles.learn_more'); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="swiper-pagination" id="main-slider-pagination"></div>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/main-slider-section.blade.php ENDPATH**/ ?>