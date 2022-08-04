<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920 bg-img" style="background-image: url('<?php the_field('service_banner_image'); ?>');">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-content text-center">
                    <h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Inner Banner -->

<!-- Start of Service Details -->
<div class="service-details-sec">
    <?php
    if(have_rows('service_description')):
        while(have_rows('service_description')): the_row();
        $service_image = get_sub_field('service_description_image');
        $service_title = get_sub_field('service_description_title');
        $service_content = get_sub_field('service_description_content');
        $service_reason_to_repair = get_sub_field('reasons_to_repair');
            if(get_row_index() % 2 != 0):
    ?>
                <div class="service-list even">
                    <div class="container">
                        <div class="row">
                            <?php
                            if(!empty($service_content)):
                            ?>
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="service-content wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-text">
                                        <?php echo $service_content; ?>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endif;
                            ?>
                            <?php
                            if(!empty($service_image)):
                            ?>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="service-img-wp wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                    <div class="service-img bg-img" style="background-image: url('<?php echo $service_image; ?>');"></div>
                                </div>
                            </div>
                            <?php
                            endif;
                            ?>
                        </div>
                    </div>
                </div>
    <?php else: 
                if(!empty($service_reason_to_repair)):
    ?>
                    <div class="service-list odd">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 wow">
                                    <div class="service-img-wp wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-img bg-img" style="background-image: url('<?php echo $service_image; ?>');"></div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-content wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                                        <div class="service-text">
                                            <h3 class="h3-title"><?php echo  $service_title;  ?></h3>
                                            <ul>
                                            <?php
                                            if(have_rows('reasons_to_repair')):
                                                while(have_rows('reasons_to_repair')): the_row();
                                            ?>
                                                <li><?php the_sub_field('reasons_to_repair_points'); ?></li>
                                            <?php
                                                endwhile;
                                            endif;
                                            ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    <?php
                endif;
            endif;
        endwhile;
    endif;
    ?>
</div>
<!-- End of Service Details -->