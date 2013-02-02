<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package sorgarden
 * @since sorgarden 1.0
 */
?>
		<div id="secondary" class="widget-area" role="complementary">
			<?php do_action( 'before_sidebar' ); ?>
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside  class="widget">
					Here we have som sidebar content, since non is defined in admin
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
