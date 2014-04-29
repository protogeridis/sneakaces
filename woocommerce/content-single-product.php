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
				<li><a href="#sizing-product" data-toggle="tab">Sizing Guide</a></li>

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

				<div class="tab-pane fade" id="sizing-product">
					<ul id="sizingTab" class="nav nav-tabs">
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Men<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class=""><a href="#menhoodies" data-toggle="tab">Hoodies</a></li>
								<li class=""><a href="#mentees" data-toggle="tab">Tees</a></li>
								<li class=""><a href="#menzips" data-toggle="tab">Zips</a></li>
								<li class=""><a href="#menbaseball" data-toggle="tab">Baseball Tees</a></li>
								<li class=""><a href="#mencrew" data-toggle="tab">Crew Necks</a></li>
								<li class=""><a href="#mensweat" data-toggle="tab">Sweatpants</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li class=""><a href="#womenhoodies" data-toggle="tab">Hoodies</a></li>
								<li class=""><a href="#womenzips" data-toggle="tab">Zips</a></li>
								<li class=""><a href="#womencrew" data-toggle="tab">Crew Necks</a></li>
								<li class=""><a href="#womensweat" data-toggle="tab">Sweatpants</a></li>
							</ul>
						</li>
					</ul>

					<div id="sizingTabContent" class="tab-content">

						<!--Men Hoodies -->
						<div class="tab-pane fade active in" id="menhoodies">
							<h2>Men's Hoodies</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>57 cm</td>
										<td>61 cm</td>
										<td>65 cm</td>
										<td>69 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>66 cm</td>
										<td>68 cm</td>
										<td>71 cm</td>
										<td>74 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men hoodies -->

						<!--Men Zip -->
						<div class="tab-pane fade" id="menzips">
							<h2>Men's Zips</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>55 cm</td>
										<td>58 cm</td>
										<td>61 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>71 cm</td>
										<td>72.5 cm</td>
										<td>74 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men zip -->

						<!--Men Baseball -->
						<div class="tab-pane fade" id="menbaseball">
							<h2>Men's Baseball Tees</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>49.5 cm</td>
										<td>52 cm</td>
										<td>54.5 cm</td>
										<td>57 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>73 cm</td>
										<td>75 cm</td>
										<td>77 cm</td>
										<td>79 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men baseball -->

						<!--Men Tees -->
						<div class="tab-pane fade" id="mentees">
							<h2>Men's Tees</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>53 cm</td>
										<td>56 cm</td>
										<td>60 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>72 cm</td>
										<td>74 cm</td>
										<td>76 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men tees -->

						<!--Men crew -->
						<div class="tab-pane fade" id="mencrew">
							<h2>Men's Crew Necks</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>57 cm</td>
										<td>60 cm</td>
										<td>63 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>71.5 cm</td>
										<td>73.5 cm</td>
										<td>75.5 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men crew -->


						<!--Men sweat -->
						<div class="tab-pane fade" id="mensweat">
							<h2>Men's Sweatpants</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>50 cm</td>
										<td>52 cm</td>
										<td>55 cm</td>
										<td>57 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>108 cm</td>
										<td>109 cm</td>
										<td>110 cm</td>
										<td>111 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /men sweat -->

						<!--Women Hoodies -->
						<div class="tab-pane fade" id="womenhoodies">
							<h2>Women's Hoodies</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>47 cm</td>
										<td>49.5 cm</td>
										<td>52 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>58 cm</td>
										<td>60 cm</td>
										<td>63 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /women hoodies -->

						<!--Women Zips -->
						<div class="tab-pane fade" id="womenzips">
							<h2>Women's Zips</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>45 cm</td>
										<td>48 cm</td>
										<td>51 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>66 cm</td>
										<td>67.5 cm</td>
										<td>69 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /women zips -->

						<!--Women Crew -->
						<div class="tab-pane fade" id="womencrew">
							<h2>Women's Crew Necks</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>51 cm</td>
										<td>53.5 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>68 cm</td>
										<td>69.5 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /women crew -->

						<!--Women sweat -->
						<div class="tab-pane fade" id="womensweat">
							<h2>Women's Sweatpants</h2>
							<table class="table table-striped">
								<thead>
									<tr>
										<th>Distance</th>
										<th>S</th>
										<th>M</th>
										<th>L</th>
										<th>XL</th>
									</tr>
								</thead>
								<tbody>

									<tr>
										<td>A-B</td>
										<td>45 cm</td>
										<td>47 cm</td>
										<td>50 cm</td>
										<td>54 cm</td>
									</tr>
									<tr>
										<td>G-D</td>
										<td>98 cm</td>
										<td>99 cm</td>
										<td>102 cm</td>
										<td>105 cm</td>
									</tr>
								</tbody>
							</table>
						</div>
						<!-- /women sweat -->





					</div>
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