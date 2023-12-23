<div class="site-header__header-two-wrap clearfix">
    <div class="site-header__header-two-wrap__top clearfix">
        <div class="site-header__header-tow-wrap__container clearfix">
            <div class="site-header__header-tow-wrap__top-inner clearfix">
                <div class="site-header__header-tow-wrap__top-inner__left float-left">
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
                <div class="site-header__header-tow-wrap__top-inner__right float-right">
                    <div class="site-header__header-tow-wrap__top-inner__social">
                        <a href="<?php echo settings('facebook'); ?>"><i class="fab fa-facebook-square"></i></a>
                        <a href="<?php echo settings('twitter'); ?>"><i class="fab fa-twitter"></i></a>
                        <a href="<?php echo settings('instagram'); ?>"><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo settings('dribbble'); ?>"><i class="fab fa-dribbble"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="main-nav__header-two">
        <div class="main-nav__header-two__container">
            <nav class="header-navigation stricky">
                <div class="main-nav__header-two__content-box">
                    <div class="main-nav__left main-nav__left-two">
                        <div class="logo-two">
                            
                            








                            <a href=""><img src="<?php echo e(asset('frontend/assets/images/logo_xazar.png')); ?>" alt=""></a>

                        </div>
                        <a href="#" class="side-menu__toggler">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div>
                    <div class="main-nav__main-navigation main-nav__main-navigation__two">
                        <ul class=" main-nav__navigation-box ">
                            <li class="dropdown <?php echo e(url()->current() == route('frontend.dashboard') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('frontend.dashboard')); ?>">Home</a>
                                
                                
                                
                                
                                
                            </li>


                            
                            
                            
                            
                            
                            
                            


                            <li class="dropdown <?php echo e(url()->current() == route('frontend.donations') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('frontend.donations')); ?>">Donations</a>
                                
                                
                                
                                
                            </li>
                            
                            
                            
                            
                            
                            
                            
                            <li class="dropdown <?php echo e(url()->current() == route('frontend.news') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('frontend.news')); ?>">News</a>
                                
                                
                                
                            </li>
                            <li class=" <?php echo e(url()->current() == route('frontend.contact') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('frontend.contact')); ?>">Contact</a>
                            </li>
                            <li class=" <?php echo e(url()->current() == route('frontend.volunteer') ? 'current' : ''); ?>">
                                <a href="<?php echo e(route('frontend.volunteer')); ?>">Gönüllü ol</a>
                            </li>
                            <li class="dropdown ">
                                <a href="">language</a>
                                <ul>
                                    <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li>
                                            <a href="<?php echo e(route('frontend.lang.switch', $lang->code)); ?>"><?php echo e($lang->name); ?></a>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <div class="main-nav__right-two">

                        <div class="main-nav__right__icon-search-box">
                            <a href="#" class="main-nav__search search-popup__toggler">
                                <i class="icon-magnifying-glass"></i>
                            </a>
                        </div>

                        <div class="main-nav__right__btn-one">
                            <a href="<?php echo e(route('frontend.donate')); ?>"><i class="fas fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/includes/header.blade.php ENDPATH**/ ?>