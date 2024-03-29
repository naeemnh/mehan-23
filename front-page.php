<?php

/**
 * Template Name: Home Page
 * Template Post Type: page
 */
get_header();
if (have_posts()) : while (have_posts()) : the_post(); ?>

        <!-- Begin Slider Area -->
        <div class="slider-area">
            <div class="ademy-element-carousel home-slider arrow-style" data-slick-options='{
                "slidesToShow": 1,
                "slidesToScroll": 1,
                "infinite": true,
                "arrows": true,
                "dots": false,
                "autoplay" : true,
                "fade" : true,
                "autoplaySpeed" : 10000,
                "pauseOnHover" : false,
                "pauseOnFocus" : false
                }' data-slick-responsive='[
                {"breakpoint":768, "settings": {
                "slidesToShow": 1
                }},
                {"breakpoint":575, "settings": {
                "slidesToShow": 1
                }}
            ]'>
                <?php for ($i = 0; $i < 3; $i++) : ?>
                    <div class="slide-item bg-1 animation-style-01" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/slider/home-slide-<?php echo $i + 1 ?>.jpg)">
                        <div class="slide-content">
                            <h1 class="heading intro pb-1 mb-0">
                                <?php echo (get_language() == 'en') ? 'Mehan' : 'مهن' ?>
                            </h1>
                            <h1 class="heading cd-headline letters type mb-0">
                                <?php echo (get_language() == 'en') ? 'Success through people' : 'النجاح من خلال الناس' ?>
                            </h1>
                            <h1 class="sub-heading cd-headline letters type white-color pb-2 mb-0">
                                <?php echo (get_language() == 'en') ? 'We stand for innovation and continuous transformation' : 'ندعم الابتكار والتحول المستمر ' ?>
                            </h1>
                            <?php if (get_language() == 'en') { ?>
                                <div class="button-wrap position-center pb-3">
                                    <a class="ademy-btn btn-transparent white-border with-border_radius active" href="<?php echo get_site_url() ?>/employers">Employers
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                    <a class="ademy-btn btn-transparent white-border with-border_radius" href="<?php echo get_site_url() ?>/job-seekers">Job Seekers
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </div>
                            <?php } else { ?>
                                <div class="button-wrap position-center pb-3">
                                    <a class="ademy-btn btn-transparent white-border with-border_radius active" href="<?php echo get_site_url() ?>/ar/أرباب-العمل/">
                                        أرباب العمل
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                    <a class="ademy-btn btn-transparent white-border with-border_radius" href="<?php echo get_site_url() ?>/ar/الباحثين-عن-عمل/">
                                        الباحثين عن عمل
                                        <i class="ion-android-arrow-forward"></i>
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php endfor; ?>
            </div>
        </div>
        <!-- Slider Area End Here -->

        <!-- Begin Introduction Area - Our Story-->
        <div id="welcome" class="introduction-area">
            <div class="container">
                <div class="section-title pb-5">
                    <!-- <h6 class="heading mb-0">Our Story</h6> -->
                    <h2 class="sub-heading mb-0">
                        <?php if (get_language() == 'en') : ?>
                            Our <span>Story</span>
                        <?php else : ?>
                            <span>قصتنا</span>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ademy-element-carousel introduction-slider">
                            <div class="intro-item">
                                <div class="intro-content">
                                    <!-- <h3 class="heading mb-0">Our Story</h3> -->
                                    <?php if (get_language() == 'en') : ?>
                                        <p class="short-desc">
                                            Mehan was founded as a boutique talent acquisition agency in 2018, catering to private, semi government, and government sectors in the UAE.
                                        </p>
                                        <p class="short-desc">
                                            Venturing into innovative human capital business ideas in a continuously changing world, was only a matter of time.
                                        </p>
                                        <p class="short-desc">
                                            As we value and encourage continuous learning and transformation, we are in the business of influencing how human capital is practiced for the betterment of the human experience in the workplace.
                                        </p>
                                    <?php else : ?>
                                        <p class="short-desc">
                                            تأسست شركة مهن كوكالة متخصصة في استقطاب المواهب في عام 2018 لتقدم خدماتها للقطاعات الخاصة وشبه الحكومية والحكومية في الإمارات العربية المتحدة.
                                        </p>
                                        <p class="short-desc">
                                            وكانت المغامرة في ممارسات رأس المال البشري المبتكرة في عالم مستمر التغير مسألة وقت لأننا نقدر ونشجع التعلم والتحول المستمر، فتخصصنا في مجال التأثير على ممارسات رأس المال البشري لتحسين تجربة الإنسان في مكان العمل.
                                        </p>
                                    <?php endif; ?>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="introduction-img_area">
                            <div class="inner-img">
                                <?php if (get_field('intro_image')) : ?>
                                    <img class="img-full" src="<?php the_field('intro_image') ?>" alt="Introduction Image" />
                                <?php else : ?>
                                    <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/home-story-img1.png" alt="Introduction Image" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Introduction Area End Here -->

        <!-- Begin Talent Acquisition Introduction Area -->
        <div id="welcome" class="introduction-area bg-smoke_color">
            <div class="container">
                <div class="section-title pb-5">
                    <!-- <h6 class="heading mb-0">Human Hub</h6> -->
                    <h2 class="sub-heading mb-0">
                        <?php if (get_language() == 'en') : ?>
                            <span>Talent</span> Acquisition
                        <?php else : ?>
                            اكتساب <span>موهبة</span>
                        <?php endif; ?>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="introduction-img_area">
                            <div class="inner-img">
                                <?php if (get_field('talent_acquisition_image')) : ?>
                                    <img class="img-full mx-auto" style="width: 80%" src="<?php the_field('talent_acquisition_image') ?>" alt="Introduction Image" />
                                <?php else : ?>
                                    <img class="img-full mx-auto" style="width: 80%" src="<?php echo get_template_directory_uri() ?>/assets/images/introduction/group-1501.png" alt="Introduction Image" />
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ademy-element-carousel introduction-slider">
                            <div class="intro-item">
                                <div class="intro-content">
                                    <p class="short-desc">
                                        <?php if (get_language() == 'en') : ?>
                                            At Mehan, we help businesses headhunt the most suitable talented Emirati professionals for their Emiratization roles as well as the world’s talented professionals for their middle and senior management roles through extensive client communication, best executive search and constant networking.
                                        <?php else : ?>
                                            هي منصة رأس المال البشري للتعلم المستمر التي يسمح لمحترفي رأس المال البشري والطلاب بالتحول، والنمو، وتبادل المعرفة، والابتكار والتقدم في حياتهم المهنية من خلال التعاون مع غيرهم من المتخصصين في رأس المال البشري عن طريق منصات افتراضية وواقعية.
                                        <?php endif; ?>
                                    </p>
                                    <div class="intro-btn_wrap">
                                        <a class="ademy-btn denim-color_btn fullwidth-btn" href="<?php echo get_site_url(); ?>/about-us">
                                            <?php echo get_language() == 'en' ? 'Learn more' : 'تعرف على المزيد' ?>
                                            <i class="ion-android-arrow-forward"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Talent Acquisition Introduction Area End Here -->

        <!-- Begin Latest News Area -->
        <?php if (get_language() == 'en') : ?>
            <div id="latestnews" class="latest-news_area">
                <div class="container">
                    <div class="section-title pb-4">
                        <h2 class="sub-heading text-capitalize mb-0">
                            Our latest <span>blogs</span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <!-- Tab Buttons -->
                                <div class="col-lg-12">
                                    <div class="tab-section_area">
                                        <div class="latest-news_tab">
                                            <ul class="nav latest-news_menu">
                                                <li>
                                                    <a class="active" data-bs-toggle="tab" href="#all">All</a>
                                                </li>
                                                <li>
                                                    <a data-bs-toggle="tab" href="#hr-guides">HR Guides</a>
                                                </li>
                                                <li><a data-bs-toggle="tab" href="#development">Development</a></li>
                                                <li>
                                                    <a data-bs-toggle="tab" href="#career">Career</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- Tab Panels -->
                                <div class="col-lg-12">
                                    <div class="tab-content latest-news_content">
                                        <div id="all" class="tab-pane active show" role="tabpanel">
                                            <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "infinite": false,
                                                "arrows": false,
                                                "dots": false,
                                                "spaceBetween": 30
                                                }' data-slick-responsive='[
                                                {"breakpoint": 1200, "settings": {
                                                "slidesToShow": 3
                                                }},
                                                {"breakpoint": 992, "settings": {
                                                "slidesToShow": 2
                                                }},
                                                {"breakpoint": 768, "settings": {
                                                "slidesToShow": 1
                                                }}
                                            ]'>
                                                <?php
                                                $args = [
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 10,
                                                    'lang' => [get_language()],
                                                ];
                                                $loop = new WP_Query($args);
                                                while ($loop->have_posts()) : $loop->the_post();
                                                ?>
                                                    <div class="slide-item">
                                                        <div class="single-item img-zoom_effect">
                                                            <div class="single-img">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                                                        <img class="img-full" src="<?php the_post_thumbnail_url('medium') ?>" alt="Latest News Image" />
                                                                    <?php else : ?>
                                                                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                                    <?php endif; ?>
                                                                </a>
                                                                <div class="inner-btn">
                                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
                                                                </div>
                                                            </div>
                                                            <div class="single-item_content">
                                                                <div class="inner-content">
                                                                    <h4 class="heading mb-0">
                                                                        <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                                                    </h4>
                                                                    <h3 class="sub-heading mb-0">
                                                                        <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
                                                                    </h3>
                                                                    <p class="short-desc mb-0">
                                                                        <?php echo get_the_excerpt() ?>
                                                                    </p>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ion-ios-person"></i>
                                                                                <?php the_author() ?>
                                                                            </a>
                                                                        </li>
                                                                        <!-- <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-eye"></i>
                                                                    <span>342 views</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                    <span>0 like</span>
                                                                </a>
                                                            </li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                                wp_reset_postdata(); ?>
                                            </div>
                                        </div>
                                        <div id="hr-guides" class="tab-pane" role="tabpanel">
                                            <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "infinite": false,
                                                "arrows": false,
                                                "dots": false,
                                                "spaceBetween": 30
                                                }' data-slick-responsive='[
                                                {"breakpoint": 1200, "settings": {
                                                "slidesToShow": 3
                                                }},
                                                {"breakpoint": 992, "settings": {
                                                    "slidesToShow": 2
                                                }},
                                                {"breakpoint": 768, "settings": {
                                                    "slidesToShow": 1
                                                }}
                                            ]'>
                                                <?php
                                                $args = [
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 10,
                                                    'cat' => get_category_by_slug('hr-guides')->term_id,
                                                    'lang' => [get_language()],
                                                ];
                                                $loop = new WP_Query($args);
                                                while ($loop->have_posts()) : $loop->the_post();
                                                ?>
                                                    <div class="slide-item">
                                                        <div class="single-item img-zoom_effect">
                                                            <div class="single-img">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                                                        <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                                    <?php else : ?>
                                                                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                                    <?php endif; ?>
                                                                </a>
                                                                <div class="inner-btn">
                                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
                                                                </div>
                                                            </div>
                                                            <div class="single-item_content">
                                                                <div class="inner-content">
                                                                    <h4 class="heading mb-0">
                                                                        <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                                                    </h4>
                                                                    <h3 class="sub-heading mb-0">
                                                                        <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
                                                                    </h3>
                                                                    <p class="short-desc mb-0">
                                                                        <?php echo get_the_excerpt() ?>
                                                                    </p>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ion-ios-person"></i>
                                                                                <?php the_author() ?>
                                                                            </a>
                                                                        </li>
                                                                        <!-- <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-eye"></i>
                                                                    <span>342 views</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                    <span>0 like</span>
                                                                </a>
                                                            </li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                                wp_reset_postdata() ?>
                                            </div>
                                        </div>
                                        <div id="development" class="tab-pane" role="tabpanel">
                                            <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "infinite": false,
                                                "arrows": false,
                                                "dots": false,
                                                "spaceBetween": 30
                                                }' data-slick-responsive='[
                                                {"breakpoint": 1200, "settings": {
                                                "slidesToShow": 3
                                                }},
                                                {"breakpoint": 992, "settings": {
                                                    "slidesToShow": 2
                                                }},
                                                {"breakpoint": 768, "settings": {
                                                    "slidesToShow": 1
                                                }}
                                            ]'>
                                                <?php
                                                $args = [
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 10,
                                                    'cat' => get_category_by_slug('development')->term_id,
                                                    'lang' => [get_language()],
                                                ];
                                                $loop = new WP_Query($args);
                                                while ($loop->have_posts()) : $loop->the_post();
                                                ?>
                                                    <div class="slide-item">
                                                        <div class="single-item img-zoom_effect">
                                                            <div class="single-img">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                                                        <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                                    <?php else : ?>
                                                                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                                    <?php endif; ?>
                                                                </a>
                                                                <div class="inner-btn">
                                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
                                                                </div>
                                                            </div>
                                                            <div class="single-item_content">
                                                                <div class="inner-content">
                                                                    <h4 class="heading mb-0">
                                                                        <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                                                    </h4>
                                                                    <h3 class="sub-heading mb-0">
                                                                        <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
                                                                    </h3>
                                                                    <p class="short-desc mb-0">
                                                                        <?php echo get_the_excerpt() ?>
                                                                    </p>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ion-ios-person"></i>
                                                                                <?php the_author() ?>
                                                                            </a>
                                                                        </li>
                                                                        <!-- <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-eye"></i>
                                                                    <span>342 views</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                    <span>0 like</span>
                                                                </a>
                                                            </li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                                wp_reset_postdata() ?>
                                            </div>
                                        </div>
                                        <div id="career" class="tab-pane" role="tabpanel">
                                            <div class="ademy-element-carousel latest-news_slider" data-slick-options='{
                                                "slidesToShow": 3,
                                                "slidesToScroll": 1,
                                                "infinite": false,
                                                "arrows": false,
                                                "dots": false,
                                                "spaceBetween": 30
                                                }' data-slick-responsive='[
                                                {"breakpoint": 1200, "settings": {
                                                "slidesToShow": 3
                                                }},
                                                {"breakpoint": 992, "settings": {
                                                    "slidesToShow": 2
                                                }},
                                                {"breakpoint": 768, "settings": {
                                                    "slidesToShow": 1
                                                }}
                                            ]'>
                                                <?php
                                                $args = [
                                                    'post_type' => 'post',
                                                    'post_status' => 'publish',
                                                    'posts_per_page' => 10,
                                                    'cat' => get_category_by_slug('career')->term_id,
                                                    'lang' => [get_language()],
                                                ];
                                                $loop = new WP_Query($args);
                                                while ($loop->have_posts()) : $loop->the_post();
                                                ?>
                                                    <div class="slide-item">
                                                        <div class="single-item img-zoom_effect">
                                                            <div class="single-img">
                                                                <a href="<?php the_permalink() ?>">
                                                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                                                        <img class="img-full" src="<?php the_post_thumbnail_url() ?>" alt="Latest News Image" />
                                                                    <?php else : ?>
                                                                        <img class="img-full" src="<?php echo get_template_directory_uri() ?>/assets/images/latest-news/medium-size/1.jpg" alt="Latest News Image" />
                                                                    <?php endif; ?>
                                                                </a>
                                                                <div class="inner-btn">
                                                                    <a class="ademy-btn denim-color_btn with-border_radius btn-md_size" href="<?php the_permalink() ?>">Read more</a>
                                                                </div>
                                                            </div>
                                                            <div class="single-item_content">
                                                                <div class="inner-content">
                                                                    <h4 class="heading mb-0">
                                                                        <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo get_the_category()[0]->name; ?></a>
                                                                    </h4>
                                                                    <h3 class="sub-heading mb-0">
                                                                        <a href="<?php echo the_permalink() ?>"><?php the_title() ?></a>
                                                                    </h3>
                                                                    <p class="short-desc mb-0">
                                                                        <?php echo get_the_excerpt() ?>
                                                                    </p>
                                                                </div>
                                                                <div class="entry-meta">
                                                                    <ul>
                                                                        <li>
                                                                            <a href="javascript:void(0)">
                                                                                <i class="ion-ios-person"></i>
                                                                                <?php the_author() ?>
                                                                            </a>
                                                                        </li>
                                                                        <!-- <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-eye"></i>
                                                                    <span>342 views</span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)">
                                                                    <i class="ion-android-favorite-outline"></i>
                                                                    <span>0 like</span>
                                                                </a>
                                                            </li> -->
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile;
                                                wp_reset_postdata() ?>
                                            </div>
                                        </div>
                                        <div class="btn-wrap">
                                            <a class="ademy-btn fullwidth-btn denim-color_btn with-border_radius" href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Go to blog</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <!-- Latest News Area End Here -->

        <!-- Begin Testimonials Area -->
        <?php
        $args = [
            'post_type' => 'testimonial',
            'post_status' => 'publish',
            'posts_per_page' => 10,
            'lang' => [get_language()],
        ];
        $loop = new WP_Query($args);
        if ($loop->have_posts()) : ?>

            <div class="testimonials-area">
                <div class="container">
                    <div class="section-title pb-4">
                        <!-- <h6 class="heading text-uppercase mb-0">Satisfied clients</h6> -->
                        <h2 class="sub-heading text-capitalize mb-0">
                            <?php if (get_language() == 'en') : ?>
                                Testimonials
                            <?php else : ?>
                                الموافقات
                            <?php endif; ?>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="ademy-element-carousel testimonial-slider" data-slick-options='{
                                "slidesToShow": 1,
                                "slidesToScroll": 1,
                                "infinite": true,
                                "arrows": false,
                                "dots": true,
                                "spaceBetween": 30,
                                "autoplay" : true,
                                "autoplaySpeed" : 7500,
                            }' data-slick-responsive='[
                                {"breakpoint": 1200, "settings": { "slidesToShow": 1 }},
                                {"breakpoint": 992, "settings": { "slidesToShow": 1 }},
                                {"breakpoint": 768, "settings": { "slidesToShow": 1 }}
                            ]'>
                                <?php while ($loop->have_posts()) : $loop->the_post(); ?>
                                    <div class="slide-item">
                                        <div class="single-item">
                                            <div class="single-img">
                                                <a href="javascript:void(0)">
                                                    <?php if (get_the_post_thumbnail_url()) : ?>
                                                        <img src="<?php the_post_thumbnail_url() ?>" alt="Testimonial Image" />
                                                    <?php else : ?>
                                                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/Qasr Al Watan.png" alt="Testimonial Image" />
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;
        wp_reset_postdata(); ?>
        <!-- Testimonials Area End Here -->

<?php
    endwhile;
endif;
get_footer(); ?>