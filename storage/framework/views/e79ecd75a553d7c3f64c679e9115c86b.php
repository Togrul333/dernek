<section class="popular-causes-two">
    <div class="container">
        <div class="block-title text-center">
            <h4></h4>
            <h2><?php echo app('translator')->get('frontend.titles.our_popular_causes'); ?></h2>
        </div>
        <div class="row">
            <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="popular-causes__sinlge">
                        <div class="popular-causes__img">
                            <img src="<?php echo e($donation->first_image); ?>" alt="">
                            <div class="popular-causes__category">
                            </div>
                        </div>
                        <div class="popular-causes__content">
                            <div class="popular-causes__title" style="">
                                <h3><a href="<?php echo e(route('frontend.donations.detail',['donation'=>$donation])); ?>"
                                    ><?php echo e(\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)); ?></a></h3>
                                <p><?php echo e(\Illuminate\Support\Str::limit($donation->translate(locale())->content,100)); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/popular_causes.blade.php ENDPATH**/ ?>