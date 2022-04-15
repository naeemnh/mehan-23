<!-- Begin Footer Area -->
<div class="footer-area bg-smoke_color">
    <div class="footer-top_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row footer-widgets_wrap">
                        <div class="col-lg-4 col-md-6">
                            <div class="footer-widgets_area">
                                <div class="logo">
                                    <?php humanhub_the_custom_logo(); ?>
                                    <!-- <a href="index.html">
                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/logo/mehan_white.png" alt="Footer Logo" />
                                    </a> -->
                                </div>
                                <!-- <p class="short-desc mb-0">
                                    Enrich your Human Capital Experience
                                    <br />
                                    Share, Network, Collaborate, Innovate, Learn, Transform, Do it again.
                                </p> -->
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6">
                            <div class="footer-widgets_area">
                                <h3 class="widgets-heading mb-0">Explore</h3>
                                <div class="footer-widgets">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-1',
                                        'container_class' => '',
                                        'container' => '',
                                        'menu_class' => '',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-widgets_area p-md-0">
                                <h3 class="widgets-heading mb-0" style="visibility:hidden">Explore</h3>
                                <div class="footer-widgets">
                                    <?php
                                    wp_nav_menu(array(
                                        'theme_location' => 'footer-menu-2',
                                        'container_class' => '',
                                        'container' => '',
                                        'menu_class' => '',
                                    ));
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <!-- <div class="footer-widgets_area latest-tweets_widget p-md-0">
                                <div class="newsletter-area newsletter-form_wrap pb-5">
                                    <h3 class="sub-heading mb-0">
                                        <i class="ion-android-send"></i> Newsletter
                                    </h3>
                                    <form action="" class="newsletters-form validate" id="mc-embedded-subscribe-form">
                                        <div class="mc-form subscribe-form">
                                            <input id="mc-email" class="newsletter-input" type="email" autocomplete="off" placeholder="Email">
                                            <button class="newsletter-btn text-uppercase" id="mc-submit">Subscribe</button>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <?php echo do_shortcode("[zcwp id = 1]"); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom_area">
        <div class="container">
            <div class="footer-bottom_nav">
                <div class="row">
                    <div class="col-lg-7 col-sm-6">
                        <div class="copyright">
                            <span>Copyright 2022 &copy;
                                <a href="<?php echo home_url() ?>">Mehan Limited.</a>
                            </span>
                        </div>
                    </div>
                    <div class="col-lg-5 col-sm-6">
                        <div class="footer-right_area">
                            <ul class="social-link">
                                <li class="facebook">
                                    <a href="https://www.facebook.com" data-bs-toggle="tooltip" target="_blank" title="Facebook">
                                        <i class="ion-social-facebook"></i>
                                    </a>
                                </li>
                                <li class="twitter">
                                    <a href="https://twitter.com" data-bs-toggle="tooltip" target="_blank" title="Twitter">
                                        <i class="ion-social-twitter"></i>
                                    </a>
                                </li>
                                <li class="youtube">
                                    <a href="https://www.youtube.com/" data-bs-toggle="tooltip" target="_blank" title="Youtube">
                                        <i class="ion-social-youtube"></i>
                                    </a>
                                </li>
                                <li class="skype">
                                    <a href="https://skype.com/" data-bs-toggle="tooltip" target="_blank" title="Skype">
                                        <i class="ion-social-skype"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer Area End Here -->

<!-- Scroll To Top Start -->
<a class="scroll-to-top" href=""><i class="ion-chevron-up"></i></a>
<!-- Scroll To Top End -->
</div>

<!-- JS
============================================ -->

<!-- jQuery JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/jquery-3.6.0.min.js"></script>
<!-- jQuery Migrate JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<!-- Modernizer JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/modernizr-3.11.2.min.js"></script>
<!-- Bootstrap JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/vendor/bootstrap.bundle.min.js"></script>

<!-- Slick Slider JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/slick.min.js"></script>
<!-- Counterup JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.counterup.min.js"></script>
<!-- Nice Select JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.nice-select.min.js"></script>
<!-- Jquery-ui JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.ui.touch-punch.min.js"></script>
<!-- Waypoints JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/waypoints.min.js"></script>
<!-- Wow JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/wow.min.js"></script>
<!-- Animated Headlines JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/animated-headlines.js"></script>
<!-- Magnific Popup JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.magnific-popup.min.js"></script>
<!-- datetimepicker JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/plugins/jquery.datetimepicker.full.min.js"></script>

<!-- Main JS -->
<script src="<?php echo get_template_directory_uri() ?>/assets/js/main.js"></script>
<?php wp_footer(); ?>
</body>

</html>