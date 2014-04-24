<?php
/**
 * Empty cart page
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

wc_print_notices();

?>

<p class="alert alert-warning cart-empty"><?php _e( '<b>Your cart is currently empty.</b> Why don\'t you browse through the categories listed below?', 'woocommerce' ) ?></p>

<?php do_action( 'woocommerce_cart_is_empty' ); ?>

<div class="row">
	<div class="col-md-12">
						<?php

						$args = array(
							'menu' => 45,
							'menu_class' => 'categories-menu clearfix'
							);

						wp_nav_menu( $args );

						?>
					</div><!-- col md 12 -->
</div><!-- row -->

<p class="return-to-shop"><a class="button wc-backward" href="<?php echo apply_filters( 'woocommerce_return_to_shop_redirect', get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?php _e( 'Return To Shop', 'woocommerce' ) ?></a></p>