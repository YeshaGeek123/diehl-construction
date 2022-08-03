<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package diehl-construction
 */

get_header();
?>

<!-- Start of Inner Banner -->
<section class="inner-banner sec-1920 bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/contact-banner-img.jpg');">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="banner-content text-center">
					<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s">oops! that page can't be found.</h1>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End of Inner Banner -->
<div class="error-404 not-found text-center">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<img width="1200" height="937" src="<?php echo home_url(); ?>/wp-content/themes/diehl-construction/assets/images/404.svg" alt="404 Not Found!">
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
