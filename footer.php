<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diehl-construction
 */

?>

<!-- Footer Start -->
<footer class="site-footer">
	<div class="top-footer sec-1920">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact-form white-text">
						<h3 class="h3-title">Contact</h3>
						<?php
						echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
						?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer-content">
						<div class="footer-logo">
							<a href="<?php echo home_url(); ?>" class="custom-logo-link" title="Diehl Construction">
								<img width="149" height="97" src="<?php the_field('footer_logo', 'options'); ?>" alt="Logo">
							</a>
							<a href="<?php echo home_url(); ?>" title="Best Winner">
								<img width="93" height="99" src="<?php the_field('best_winner_logo', 'options'); ?>" alt="Best Winner">
							</a>
						</div>
						<div class="footer-text">
							<?php the_field('footer_content', 'options'); ?>
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
										<a href="tel:<?php echo $phone_link; ?>" class="link" title="<?php echo $phone; ?>">
											<span class="callus"><?php echo $phone; ?></span>
										</a>
									</span>
								</li>
								<li>
									<span class="icon"><i class="fas fa-paper-plane"></i></span>
									<span class="text">
										<span class="title">Email</span>
										<a href="mailto:<?php the_field('email', 'options'); ?>" class="link" title="<?php the_field('email', 'options'); ?>">
											<?php the_field('email', 'options'); ?>
										</a>
									</span>
								</li>
								<li>
									<span class="icon"><i class="fas fa-map-marker-alt"></i></span>
									<span class="text">
										<span class="title">Address</span>
										<a href="<?php the_field('address_link', 'options'); ?>" target="_blank" class="link" title="<?php the_field('address', 'options'); ?>">
											<?php the_field('address', 'options'); ?>
										</a>
									</span>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="footer-menu text-center">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer-menu',
								'menu_id'        => 'footer-menu',
							)
						);
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom-box">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-12">
					<div class="footer-bottom-text">
						<div class="copy-right">
							<p>&copy; <?php echo date('Y'); ?> Deihl Construction</p>
						</div>
						<div class="footer-bottom-link">
							<ul>
								<li><a href="<?php echo home_url(); ?>/privacy-policy" title="Privacy Policy">Privacy Policy</a></li>
								<li><a href="<?php echo home_url(); ?>/terms-of-use" title="Terms of Use">Terms of Use</a></li>
								<li><a href="<?php echo home_url(); ?>/cookie-policy" title="Cookies Policy">Cookie Policy</a></li>
							</ul>
						</div>
						<div class="footer-other-link">
							<p>Web Design &amp; Digital Marketing with <span><i class="fa fa-heart" aria-hidden="true"></i></span> by <a href="https://www.dotcomdesign.com" target="_blank" title="Dotcom Design" class="dotcom-link">Dotcom Design</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!-- Footer End -->

<!-- CTA  Button Start -->
<div class="cta-btn">
	<a href="javascript:void(0);" data-toggle="modal" data-target="#get_an_estimate_modal" class="sec-btn" title="Get a free estimate"><span>Get a free estimate</span></a>
</div>
<!-- CTA  Button Start -->
</div><!-- #page -->
<?php wp_footer(); ?>

<!-- Estimate Form  -->
<div class="modal common-popup estimate-popup" id="get_an_estimate_modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="popup-title">
				<h2 class="h2-title">Get A Free Estimate</h2>
				<button type="button" class="close close-popup" data-dismiss="modal"><i class="fas fa-times"></i></button>
			</div>
			<div class="common-popup-overflow">
				<div class="common-popup-text" data-simplebar>
					<div class="contact-form">
						<?php echo do_shortcode('[contact-form-7 id="138" title="Estimate Form"]'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

</body>

</html>