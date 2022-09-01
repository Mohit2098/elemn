<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package wpcplant
 */

if ( ! wpcplant_is_active_sidebar() ) {
	return;
}
?>

<div id="secondary" class="widget-area" role="complementary">
	<?php
	if ( wpcplant_is_woo_activated() && is_woocommerce() ) {
		dynamic_sidebar( 'sidebar-shop' );
	} else {
		dynamic_sidebar( 'sidebar-1' );
	}
	?>
</div><!-- #secondary -->
