<section class="counter-one jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
         style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/counter_one_bg.jpg')); ?>)">
    <div class="container">
        <ul class="counter-one__box list-unstyled">
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="100ms">
                <div class="counter-one__icon">
                    <i class="icon-campaign"></i>
                </div>
                <h3 class="counter"><?php echo settings('successful_campaigns_number'); ?></h3>
                <p class="counter-one__text"><?php echo settings('successful_campaigns'); ?></p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="200ms">
                <div class="counter-one__icon">
                    <i class="icon-budget"></i>
                </div>
                <h3 class="counter"><?php echo settings('raised_funds_number'); ?></h3>
                <p class="counter-one__text"><?php echo settings('raised_funds'); ?></p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="300ms">
                <div class="counter-one__icon">
                    <i class="icon-social-campaign"></i>
                </div>
                <h3 class="counter"><?php echo settings('satisfied_donors_number'); ?></h3>
                <p class="counter-one__text"><?php echo settings('satisfied_donors'); ?></p>
            </li>
            <li class="counter-one__single wow fadeInLeft" data-wow-delay="400ms">
                <div class="counter-one__icon">
                    <i class="icon-help"></i>
                </div>
                <h3 class="counter"><?php echo settings('best_volunteers_number'); ?></h3>
                <p class="counter-one__text"><?php echo settings('best_volunteers'); ?></p>
            </li>
        </ul>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/counter_one.blade.php ENDPATH**/ ?>