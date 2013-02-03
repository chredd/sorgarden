<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package sorgarden
 * @since sorgarden 1.0
 */
?>

</div><!-- .row-fluid -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		
			<?php if ( ! dynamic_sidebar( 'sidebar-footer' ) ) : ?>

				<aside  class="widget">
					Here we have som sidebar content, since non is defined in admin
				</aside>

			<?php endif; // end sidebar widget area ?>

		<div class="site-info">

		</div><!-- .site-info -->
	</footer><!-- #colophon .site-footer -->
</div><!-- #page .hfeed .site -->

<?php wp_footer(); ?>

</body>
</html>