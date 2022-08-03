<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package diehl-construction
 */

get_header();
?>

<main id="primary" class="site-main">
	<!-- Banner Start -->
	<section class="inner-banner sec-1920 bg-img" style="background-image: url('<?php echo home_url(); ?>/wp-content/uploads/2022/08/contact-banner-img.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-content text-center">
						<h1 class="h1-title wow fadeup-animation" data-wow-duration="0.8s" data-wow-delay="0.1s"> <?php the_title(); ?></h1>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="sample-page-content">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<?php
					while (have_posts()) :
						the_post();

						get_template_part('template-parts/content', 'page');

						// If comments are open or we have at least one comment, load up the comment template.
						if (comments_open() || get_comments_number()) :
							comments_template();
						endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div>
	</div>

</main><!-- #main -->

<?php
get_footer();
