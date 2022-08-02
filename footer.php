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

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'diehl-construction' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'diehl-construction' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'diehl-construction' ), 'diehl-construction', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php
//Footer menu

	// wp_nav_menu(
	// array(
	// 		'theme_location' => 'footer-menu',
	// 		'menu_id'        => 'footer-menu',
	// 	)
	// );
									
// same contact form in contact page
//echo do_shortcode('[contact-form-7 id="5" title="Contact Form"]');
?>
<?php wp_footer(); ?>

</body>
</html>
