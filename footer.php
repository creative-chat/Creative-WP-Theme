<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			// do_action( 'storefront_footer' );
			?>

			<style>
				.footer-center { text-align: center; margin: 35px 0 35px 0; }
				.site-footer { padding: unset; }
				.site-footer { background-color: #1e1e1f; color: #fff; }
				.site-footer a:not(.button):not(.components-button) { color: #fff; text-decoration: none; }
			</style>

			<div class="footer-center">
                <p>Copyright  © 2020  <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>.  All rights reserved.</p>
            </div>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
