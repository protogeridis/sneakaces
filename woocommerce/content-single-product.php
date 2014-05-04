<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * Override this template by copying it to yourtheme/woocommerce/content-single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */
global $product;
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
?>

<?php
	/**
	 * woocommerce_before_single_product hook
	 *
	 * @hooked woocommerce_show_messages - 10
	 */
	do_action( 'woocommerce_before_single_product' );
	?>

	<div itemscope itemtype="http://schema.org/Product" id="product-<?php the_ID(); ?>" <?php post_class('single-product-view'); ?>>

		<?php
		/**
		 * woocommerce_show_product_images hook
		 *
		 * @hooked woocommerce_show_product_sale_flash - 10
		 * @hooked woocommerce_show_product_images - 20
		 */
		do_action( 'woocommerce_before_single_product_summary' );
		?>


		<div class="summary entry-summary">

			<?php 
		/* Calculate if user can get free shipping by adding to cart 

		global $woocommerce;
		$totalamount = floatval( preg_replace( '#[^\d.]#', '', $woocommerce->cart->get_cart_total() ) );

		if($totalamount < 100){
			$product = new WC_Product( get_the_ID() );
			$productprice = $product->price;

			if(($productprice + $totalamount) > 100){
				echo '<div class="alert alert-success">By adding this product to your cart, you will be eligible for Free Shipping!</div>';
			}
		}*/

		?>
		<?php echo $product->get_categories( ', ', '<div class="posted_in">' . _n( '&larr; Back to', '', sizeof( get_the_terms( $post->ID, 'product_cat' ) ), 'woocommerce' ) . ' ', '</div>' ); ?>

			<?php
			/**
			 * woocommerce_single_product_summary hook
			 *
			 * @hooked woocommerce_template_single_title - 5
			 * @hooked woocommerce_template_single_price - 10
			 * @hooked woocommerce_template_single_excerpt - 20
			 * @hooked woocommerce_template_single_add_to_cart - 30
			 * @hooked woocommerce_template_single_meta - 40
			 * @hooked woocommerce_template_single_sharing - 50
			 */
			do_action( 'woocommerce_single_product_summary' );
			?>

			<!-- Entry Social -->
			<div class="entry-social">
				<div class="fb-like" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
				<div class="tweet">
					<a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				</div>
				<div class="plusone">
					<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
					<g:plusone size="medium"></g:plusone>
				</div>
			</div><!-- entry social -->

		</div><!-- .summary -->


		<div class="clear"></div>
		<div class="grey">


			<ul id="product-tabs" class="nav nav-tabs grey-tabs">
				<li class="active"><a href="#washing" data-toggle="tab">Washing Instructions</a></li>

			</ul>
			<div id="producttabcontent" class="tab-content">
				<div class="tab-pane fade in active" id="washing">
					<ul class="wash-list">
						<li class="wash wash-1">
							Wash at 30°C.
						</li>
						<li class="wash wash-2">
							Do not Bleach.
						</li>
						<li class="wash wash-3">
							Iron at medium temperature and inside out.
						</li>
						<li class="wash wash-4">
							Do not dry clean.
						</li>
						<li class="wash wash-5">
							Do not Tumble Dry.
						</li>
					</ul>
				</div><!-- tp -->

			

			</div>



			<div class="clear"></div>
		</div><!-- grey -->


		<?php
		/**
		 * woocommerce_after_single_product_summary hook
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
		?>

	</div><!-- #product-<?php the_ID(); ?> -->

	<?php do_action( 'woocommerce_after_single_product' ); ?>