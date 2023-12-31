<section class="you-can-help" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/you_can_help_bg.jpg')); ?>)">
    <div class="you-can-help-img"><img src="<?php echo e(asset('frontend/assets/images/resources/you_can_help_img.png')); ?>" alt=""></div>
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="you-can-help__left">
                    <div class="block-title text-left">
                        <h4><?php echo app('translator')->get('frontend.titles.help_the_people'); ?></h4>
                        <h2><?php echo app('translator')->get('frontend.titles.help_the_people_des'); ?></h2>
                    </div>
                    <div class="you-can-help__three-icon">
                        <ul class="list-unstyled">
                            <li>
                                <div class="icon-box">
                                    <span class="icon-vegetable"></span>
                                </div>
                                <div class="text">
                                    <p><?php echo app('translator')->get("frontend.titles.food"); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-water-1"></span>
                                </div>
                                <div class="text">
                                    <p><?php echo app('translator')->get("frontend.titles.water"); ?></p>
                                </div>
                            </li>
                            <li>
                                <div class="icon-box">
                                    <span class="icon-stethoscope"></span>
                                </div>
                                <div class="text">
                                    <p><?php echo app('translator')->get("frontend.titles.medical"); ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                <div class="you-can-help__right">
                    <div class="you-can-help__give-box">
                        <div class="you-can-help__give-text-box">
                            <p><?php echo app('translator')->get("frontend.titles.give_education_to_kids"); ?></p>
                        </div>
                        <div class="you-can-help__icon-box">
                            <span class="icon-graduated"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/you_can_help.blade.php ENDPATH**/ ?>