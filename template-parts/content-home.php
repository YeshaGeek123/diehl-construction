<!-- Start of Main Banner -->
<section class="main-banner bg-img sec-1920" style="background-image: url('<?php the_field('home_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title"><?php the_field('home_banner_title'); ?></h1>
                    <h3 class="h3-title"><?php the_field('home_banner_sub_title'); ?></h3>
                    <div class="banner-btn">
                        <?php
							//Phone number
							$phone = get_field('phone_number','option');
							$val = array("(", ")", " ", "-", ".");
							$replace = array("", "", "", "", "");
							//Phone link
							$phone_link = str_replace($val, $replace, $phone);
							?>
                        <a href="tel:<?php echo $phone_link; ?>" title="Call <?php echo $phone; ?>" class="sec-btn">
                            Call <span class="callus"><?php echo $phone; ?></span>
                        </a>
                        <a href="javascript:void(0)" title="Get A Free Estimate" class="sec-btn outline-btn">Get A Free Estimate</a>
                    </div>
                </div>
                <div class="banner-info">
                    <?php
                    if(have_rows('home_banner_services_list')):
                        while(have_rows('home_banner_services_list')): the_row();
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
            <div class="col-lg-6 order-2 order-lg-1">
                <div class="about-content">
                    <h2 class="h2-title"><?php the_field('about_us_title'); ?></h2>
                    <div class="about-text">
                        <?php the_field('about_us_content'); ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
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
    <img width="1900" height="85" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/yellow-shep.svg" alt="Yellow Shep" class="img-shep">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title white-text text-center">
                    <h2 class="h2-title"><?php the_field('our_service_main_title'); ?></h2>
                </div>
            </div>
        </div>
    </div>
    <div class="service-list-wp">
        <?php
        if(have_rows('our_services_list')):
            while(have_rows('our_services_list')): the_row();
                if(get_row_index() % 2 != 0):
        ?>
        <div class="service-list odd">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="service-img-wp">
                            <div class="service-img bg-img" style="background-image: url('<?php the_sub_field('our_services_list_image'); ?>');"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="service-content">
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
        <?php else: ?>
        <div class="service-list even">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 order-2 order-lg-1">
                        <div class="service-content">
                            <div class="service-text">
                                <h3 class="h3-title"><?php the_sub_field('our_services_list_title'); ?></h3>
                                <?php the_sub_field('our_services_list_content'); ?>
                                <a href="<?php the_sub_field('our_services_list_page_link') ?>" title="<?php the_sub_field('our_services_list_title'); ?>, Learn More" class="sec-btn blue-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2">
                        <div class="service-img-wp">
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
<section class="gallery-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title white-text text-center">
                    <h2 class="h2-title">Gallery</h2>
                </div>
            </div>
        </div>
        <div class="row gallery-slider">
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/waterproffing-img-1.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/gallery-img-1.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/gallery-img-2.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/gallery-img-3.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/basement-repair-img-1.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/dirt-work-img.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/about-us-img.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
            <div class="col-lg-3">
                <a href="#" class="gallery-img-wp">
                    <div class="gallery-img bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/window-installation-img.jpg');">
                        <span><img width="35" height="36" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/search-icon.svg" alt="Search Icon"></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End of Gallery -->