<div class="col-xl-4 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="100ms">
    <div class="popular-causes__sinlge">
        <div class="popular-causes__img">
            <img src="<?php echo e($donation->first_image); ?>" alt="">
            <div class="popular-causes__category">
            </div>
        </div>
        <div class="popular-causes__content">
            <div class="popular-causes__title">
                <h3>
                    <a href="<?php echo e(route('frontend.donations.detail',['donation'=>$donation])); ?>"
                    ><?php echo e(\Illuminate\Support\Str::limit($donation->translate(locale())->title,30)); ?></a>
                </h3>
                <p><?php echo e(\Illuminate\Support\Str::limit($donation->translate(locale())->content,20)); ?></p>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/pages/donations/inc/donation-card.blade.php ENDPATH**/ ?>