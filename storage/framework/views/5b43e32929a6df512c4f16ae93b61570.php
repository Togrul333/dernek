<div class="site-header__header-one-wrap clearfix">
    <div class="container">

        <div class="site-header__logo-box float-left">
            <div class="site-header__logo">
                <a href="<?php echo e(route('frontend.dashboard')); ?>"><img src="<?php echo e(asset('frontend/assets/images/logo_xazar.png')); ?>" alt=""></a>
            </div>
        </div>

        <header class="main-nav__header-one">
            <div class="main-nav__header-one__top clearfix">
                <div class="main-nav__header-one__top-left">
                    <ul class="list-unstyled">
                        <li>
                            <div class="icon">
                                <i class="fas fa-phone-square-alt"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:<?php echo settings('phone'); ?>"><?php echo settings('phone'); ?></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:<?php echo settings('email'); ?>"><?php echo settings('email'); ?></a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="main-nav__header-one__top-right">
                    <div class="main-nav__header-one__top-social">
                        <a href="<?php echo settings('facebook'); ?>"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?php echo settings('twitter'); ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo settings('instagram'); ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo settings('dribbble'); ?>"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
            <nav class="header-navigation stricky">
                <div class="container clearfix">
                    <div class="main-nav__left main-nav__left-one float-left">
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                        <div class="main-nav__main-navigation clearfix">
                            <ul class=" main-nav__navigation-box float-left">
                                <li class="dropdown <?php echo e(url()->current() == route('frontend.dashboard') ? 'current' : ''); ?>">
                                    <a href="<?php echo e(route('frontend.dashboard')); ?>"><?php echo app('translator')->get('frontend.titles.home'); ?></a>
                                </li>
                                <li class="dropdown <?php echo e(url()->current() == route('frontend.donations') ? 'current' : ''); ?>">
                                    <a href="<?php echo e(route('frontend.donations')); ?>"><?php echo app('translator')->get('frontend.titles.donations'); ?></a>
                                </li>

                                <li class="dropdown <?php echo e(url()->current() == route('frontend.news') ? 'current' : ''); ?>">
                                    <a href="<?php echo e(route('frontend.news')); ?>"><?php echo app('translator')->get('frontend.titles.news'); ?></a>
                                </li>
                                <li class="<?php echo e(url()->current() == route('frontend.contact') ? 'current' : ''); ?>">
                                    <a href="<?php echo e(route('frontend.contact')); ?>"><?php echo app('translator')->get('frontend.titles.contact'); ?></a>
                                </li>



                                <li class="dropdown ">
                                    <a href=""><?php echo app('translator')->get('frontend.titles.language'); ?></a>
                                    <ul>
                                        <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><a href="<?php echo e(route('frontend.lang.switch', $lang->code)); ?>"><?php echo e($lang->name); ?></a></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="main-nav__right main-nav__right-one float-right">
                        <div class="main-nav__right__btn-one">
                            <a href="<?php echo e(route('frontend.donate')); ?>"><i class="fas fa-heart"></i><?php echo app('translator')->get('frontend.titles.donate'); ?></a>
                        </div>
                        <div class="main-nav__right__icon-search-box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/header_two.blade.php ENDPATH**/ ?>