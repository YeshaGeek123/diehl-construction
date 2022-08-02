<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package diehl-construction
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/fonts/Roboto-Medium.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/fonts/Saira-Regular.woff2" as="font" type="font/woff2" crossorigin>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary" title="Skip to content"><?php esc_html_e('Skip to content', 'diehl-construction'); ?></a>

		<!-- Header Start -->
		<header id="masthead" class="site-header">
			<div class="container">
				<div class="row">
					<div class="col-lg-2">
						<div class="site-branding">
							<?php the_custom_logo(); ?>
						</div>
					</div>
					<div class="col-lg-10">
						<div class="header-info for-des text-right">
							<?php
							//Phone number
								$phone = get_field('phone_number','option');
								$val = array("(", ")", " ", "-", ".");
								$replace = array("", "", "", "", "");
								//Phone link
								$phone_link = str_replace($val, $replace, $phone);
							?>
							<ul>
								<li>
									<a href="tel:<?php echo $phone_link ?>" title="<?php echo $phone; ?>"><?php echo $phone; ?></a>
								</li>
								<li><a href="mailto:<?php the_field('email','options'); ?>" title="<?php the_field('email','options'); ?>"><?php the_field('email','options'); ?></a></li>
								<li>
									<a href="<?php the_field('facebook_link','options'); ?>" target="_blank" title="Follow On Facebook"><i class="fab fa-facebook-f"></i></a>
								</li>
								<li>
									<a href="<?php the_field('twitter_link','options'); ?>" target="_blank" title="Follow On Twitter"><i class="fab fa-twitter"></i></a>
								</li>
							</ul>
						</div>
						<div class="header-menu">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
									<span></span>
									<span></span>
									<span></span>
								</button>
								<div class="header-mobile-menu">
									<?php
									wp_nav_menu(
										array(
											'theme_location' => 'menu-1',
											'menu_id'        => 'primary-menu',
										)
									);
									?>
								</div>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header End -->