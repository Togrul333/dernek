<footer class="site-footer" style="background-image: url(<?php echo e(asset('frontend/assets/images/backgrounds/site_footer_bg.jpg')); ?>)">
    <div class="container">
        <div class="site-footer__one-top">
            <div class="row">
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                    <div class="footer-widget__column footer-widget__about">
                        <div class="footer-widget__logo">
                            <a href=""><img src="<?php echo e(asset('frontend/assets/images/resources/footer-logo.png')); ?>" alt=""></a>
                        </div>
                        <p class="footer-widget__text"><?php echo settings('footer_text'); ?></p>
                        <div class="site-footer__social">
                            <a href="<?php echo settings('twitter'); ?>"><i class="fab fa-twitter"></i></a>
                            <a href="<?php echo settings('facebook'); ?>" class="clr-fb"><i class="fab fa-facebook-square"></i></a>
                            <a href="<?php echo settings('dribbble'); ?>" class="clr-dri"><i class="fab fa-dribbble"></i></a>
                            <a href="<?php echo settings('instagram'); ?>" class="clr-ins"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="footer-widget__column footer-widget__explore clearfix">
                        <h3 class="footer-widget__title">Explore</h3>
                        <ul class="footer-widget__explore-list list-unstyled">
                            <li><a href="<?php echo e(route('frontend.donations')); ?>">Donations</a></li>




                        </ul>
                        <ul class="footer-widget__explore-list footer-widget__explore-list-two list-unstyled">
                            <li><a href="<?php echo e(route('frontend.news')); ?>">News</a></li>
                            <li><a href="<?php echo e(route('frontend.contact')); ?>">Contact</a></li>


                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                    <div class="footer-widget__column footer-widget__contact">
                        <h3 class="footer-widget__title">Contact</h3>
                        <ul class="list-unstyled footer-widget__contact-list">
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
                            <li>
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="text">
                                    <p><?php echo settings('location'); ?></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                    <div class="footer-widget__column footer-widget__support">
                        <h3 class="footer-widget__title">Support</h3>
                        <p class="footer-widget__support-text"><?php echo settings('footer_support_text'); ?></p>
                        <div class="footer-widget__support-btn">
                            <a href=""><i class="fas fa-heart"></i>Donate</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="site-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="site-footer-bottom__inner">
                    <div class="site-footer-bottom__left">
                        <p>© Copyright 2023

                        </p>
                    </div>





                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\kurs\Dernek_main\dernek\resources\views/frontend/layouts/footer.blade.php ENDPATH**/ ?>