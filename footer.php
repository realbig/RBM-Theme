<?php
/**
 * The theme's footer file that appears on EVERY page.
 *
 * @since 0.1.0
 * @package RBMTheme
 */

// Don't load directly
if ( ! defined( 'ABSPATH' ) ) {
	die;
}
?>

</div> <!-- #site-content -->

<footer id="site-footer" class="row expand">

	<hr/>

	<div class="footer-social columns small-12">
		<h2 class="font-special">
			Connect with us.
		</h2>

		<ul class="footer-social-list">
			<a href="#" class="footer-social-icon force-color"><span class="icon-facebook"></span></a>
			<a href="#" class="footer-social-icon force-color"><span class="icon-twitter"></span></a>
			<a href="#" class="footer-social-icon force-color"><span class="icon-linkedin"></span></a>
			<a href="#" class="footer-social-icon force-color"><span class="icon-google"></span></a>
		</ul>

		<p class="footer-phone">
			Call Us:
			<br/>
			<span class="phone-number">
				<?php if ( wp_is_mobile() ) : ?>
					<a href="tel:555-555-5555" class="button">
						555-555-5555
					</a>
				<?php else: ?>
					555-555-5555
				<?php endif; ?>
			</span>
		</p>
	</div>

	<div class="footer-search columns small-12">
		<?php get_search_form(); ?>
	</div>

	<div class="footer-menu columns small-12">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'footer',
			'container' => false,
		));
		?>
	</div>

	<div class="footer-copyright columns small-12">
		<small>&copy <?php echo date( 'Y' ); ?> Real Big Marketing</small>
	</div>

</footer>

</div> <!-- #wrapper -->

<?php wp_footer(); ?>

</body>
</html>