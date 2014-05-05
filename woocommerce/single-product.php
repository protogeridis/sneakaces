<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>






<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
		?>

		<?php while ( have_posts() ) : the_post(); ?>

		<div class="wrapper wrapper-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="post-navigation">
							<?php previous_post_link('&laquo; %link'); ?>  
							<?php next_post_link('%link &raquo;'); ?> 
						</nav>

						<?php woocommerce_breadcrumb(); ?> 



					</div><!-- col md 12 -->
				</div><!-- row -->
			</div><!-- container -->
		</div><!-- wrapper grey -->
		<div class="container container-product">

			<div class="row">
				<div class="col-md-2">

					<?php

					$args = array(
						'menu' => 45,
						'menu_class' => 'categories-menu categories-menu-vertical'
						);

					wp_nav_menu( $args );

					?>

				</div><!-- col-md-2 -->
				<div class="col-md-10">

					<?php echo '<div class="sku">' . $product->sku . '</div>'; ?>
					<?php woocommerce_get_template_part( 'content', 'single-product' ); ?>

				<?php endwhile; // end of the loop. ?>

				<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
		?>



		<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action('woocommerce_sidebar');
		?>
	</div><!-- column -->
</div><!-- row -->
</div><!-- container -->


<?php get_footer('shop'); ?>