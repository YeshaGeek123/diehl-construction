<!-- Start of Main Banner -->
<section class="main-banner bg-img sec-1920" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('home_banner_title'); ?></h1>
                    <h3 class="h3-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s"><?php the_field('home_banner_sub_title'); ?></h3>
                    <div class="banner-btn wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <?php
                        //Phone number
                        $phone = get_field('phone_number', 'option');
                        $val = array("(", ")", " ", "-", ".");
                        $replace = array("", "", "", "", "");
                        //Phone link
                        $phone_link = str_replace($val, $replace, $phone);
                        ?>
                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn">
                            Call &nbsp; <span class="callus"><?php echo $phone; ?></span>
                        </a>
                        <a href="javascript:void(0)" data-toggle="modal" data-target="#get_an_estimate_modal" title="Get A Free Estimate" class="sec-btn outline-btn">Get A Free Estimate</a>
                    </div>
                </div>
                <div class="banner-info wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.4s">
                    <?php
                    if (have_rows('home_banner_services_list')) :
                        while (have_rows('home_banner_services_list')) : the_row();
                    ?>
                            <div class="banner-info-box white-text">
                                <h4><?php the_sub_field('home_banner_services_list_name'); ?></h4>
                                <div class="banner-info-text">
                                    <?php the_sub_field('home_banner_services_list_content'); ?>
                                </div>
                            </div>
                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Start of Main Banner -->

<!-- Start of About Us -->
<section class="about-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="about-img-wp">
                    <div class="about-img bg-img" style="background-image: url('<?php the_field('about_us_image'); ?>');"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of About Us -->

<!-- Start of Services -->
<section class="our-service-sec sec-1920">
    <span class="img-shep">
        <img width="1900" height="85" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/yellow-shep.svg" alt="Yellow Shep" class="img-shep">
    </span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title white-text text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('our_service_main_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="service-list-wp">
        <?php
        if (have_rows('our_services_list')) :
            while (have_rows('our_services_list')) : the_row();
                if (get_row_index() % 2 != 0) :
        ?>
                    <div class="service-list odd">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6">
                                    <div class="service-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('our_services_list_image'); ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-text">
                                            <h3 class="h3-title"><?php the_sub_field('our_services_list_title'); ?></h3>
                                            <?php the_sub_field('our_services_list_content'); ?>
                                            <a href="<?php the_sub_field('our_services_list_page_link') ?>" title="<?php the_sub_field('our_services_list_title'); ?>, Learn More" class="sec-btn blue-btn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php else : ?>
                    <div class="service-list even">
                        <div class="container">
                            <div class="row align-items-center">
                                <div class="col-lg-6 order-2 order-lg-1">
                                    <div class="service-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-text">
                                            <h3 class="h3-title"><?php the_sub_field('our_services_list_title'); ?></h3>
                                            <?php the_sub_field('our_services_list_content'); ?>
                                            <a href="<?php the_sub_field('our_services_list_page_link') ?>" title="<?php the_sub_field('our_services_list_title'); ?>, Learn More" class="sec-btn blue-btn">Learn More</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 order-1 order-lg-2">
                                    <div class="service-img-wp wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('our_services_list_image'); ?>');"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        <?php
                endif;
            endwhile;
        endif;
        ?>


    </div>
</section>
<!-- End of Services -->

<!-- Start of Gallery -->
<section class="gallery-sec sec-1920">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title white-text text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('gallery_main_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <div class="col-lg-12 gallery-slider">
                <?php
                $gallery_image = get_field('gallery_images');
                if (isset($gallery_image) && !empty($gallery_image)) :
                    $counter = 1;
                    foreach ($gallery_image as $key => $image) :
                ?>
                        <a href="<?php echo $image['url']; ?>" class="gallery-img-wp" data-fancybox="gallery" title="Gallery Image <?php echo $counter++; ?>">
                            <div class="gallery-img bg-img" style="background-image: url('<?php echo $image['url']; ?>');">
                                <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                            </div>
                        </a>
                <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- End of Gallery -->

<!-- Start of Testimonial -->
<section class="testimonial-sec sec-1920">
    <span class="img-shep">
        <img width="1900" height="85" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/yellow-shep.svg" alt="Yellow Shep">
    </span>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title text-center">
                    <h2 class="h2-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_field('testimonial_main_title'); ?></h2>
                </div>
            </div>
        </div>
        <div class="row testimonial-slider wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.2s">
            <?php
            $testimonial_list = get_posts(array(
                'post_type' => 'testimonials',
                'post_status' => 'publish',
                'order'          => 'ASC',
                'posts_per_page' => -1
            ));
            if ($testimonial_list) :
                foreach ($testimonial_list as $testimonial) :
            ?>
                    <div class="col-lg-6">
                        <div class="testimonial-content">
                            <h4><?php echo $testimonial->post_title; ?></h4>
                            <ul>
                                <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/star.svg" alt="Star"></li>
                                <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/star.svg" alt="Star"></li>
                                <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/star.svg" alt="Star"></li>
                                <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/star.svg" alt="Star"></li>
                                <li><img width="15" height="14" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/star.svg" alt="Star"></li>
                            </ul>
                            <div class="overflow-text" data-simplebar>
                                <p>
                                    <?php echo $testimonial->post_content; ?>
                                </p>
                            </div>
                        </div>
                    </div>
            <?php
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>
<!-- End of Testimonial -->