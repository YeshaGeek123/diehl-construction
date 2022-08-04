<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920 bg-img" style="background-image: url('<?php the_field('contact_banner_image'); ?>');">
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

<!-- Start of Main Contact -->
<section class="main-contact-sec">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 order-2 order-lg-1 wow left-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="main-contact-content">
                    <h3 class="h3-title"><?php the_field('contact_details_title'); ?></h3>
                    <div class="footer-text">
                        <?php the_field('contact_details_content'); ?>
                    </div>
                    <div class="contact-link">
                        <?php
                        //Phone number
                        $phone = get_field('phone_number', 'option');
                        $val = array("(", ")", " ", "-", ".");
                        $replace = array("", "", "", "", "");
                        //Phone link
                        $phone_link = str_replace($val, $replace, $phone);
                        ?>
                        <ul>
                            <li>
                                <span class="icon"><i class="fas fa-phone"></i></span>
                                <span class="text">
                                    <span class="title">Phone</span>
                                    <a href="tel:<?php echo $phone_link; ?>" title="<?php echo $phone; ?>">
                                        <span class="link callus"><?php echo $phone; ?></span>
                                    </a>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-paper-plane"></i></span>
                                <span class="text">
                                    <span class="title">Email</span>
                                    <a href="mailto:<?php the_field('email', 'options'); ?>" title="<?php the_field('email', 'options'); ?>">
                                        <span class="link"><?php the_field('email', 'options'); ?></span>
                                    </a>
                                </span>
                            </li>
                            <li>
                                <span class="icon"><i class="fas fa-map-marker-alt"></i></span>
                                <span class="text">
                                    <span class="title">Address</span>
                                    <a href="<?php the_field('address_link', 'options'); ?>" target="_blank" title="<?php the_field('address', 'options'); ?>">
                                        <span class="link"><?php the_field('address', 'options'); ?></span>
                                    </a>
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-social-link">
                        <a href="<?php the_field('facebook_link', 'options'); ?>" target="_blank" title="Follow us on Facebook" class="fb">
                            <span><i class="fab fa-facebook-f"></i></span>
                            Follow us on Facebook
                        </a>
                        <a href="<?php the_field('twitter_link', 'options'); ?>" target="_blank" title="Follow us on Twitter" class="tw">
                            <span><i class="fab fa-twitter"></i></span>
                            Follow us on Twitter
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 wow right-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">
                <div class="contact-form white-text">
                    <h3 class="h3-title">Contact</h3>
                    <?php
                    echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End of Main Contact -->