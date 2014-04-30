<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header('shop'); ?>

<?php if(is_shop()){ ?>


<?php }?>

<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
		do_action('woocommerce_before_main_content');
		?>

		<div class="wrapper wrapper-black" style="display:none;">
			<div class="container">
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
			</div><!-- container -->
		</div><!-- wrapper black -->

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

		<div class="wrapper wrapper-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php woo_breadcrumbs(); ?>
						<h1 class="page-title underbold"><?php woocommerce_page_title(); ?></h1>
					</div>
					<div class="col-md-6">
						<?php do_action( 'woocommerce_archive_description' ); ?>
					</div><!-- col md 4 -->

					<?php /* Let's call the results count */ ?>	

					<?php if ( have_posts() ) :
					global $woocommerce, $wp_query;

					if ( ! woocommerce_products_will_display() )
						return;
					?>

					<div class="col-md-2">
						<div class="woocommerce-result-count">
							<?php /*
							$paged    = max( 1, $wp_query->get( 'paged' ) );
							$per_page = $wp_query->get( 'posts_per_page' );
							$total    = $wp_query->found_posts;
							$first    = ( $per_page * $paged ) - $per_page + 1;
							$last     = min( $total, $wp_query->get( 'posts_per_page' ) * $paged );

							if ( 1 == $total ) {
								_e( '<h4>1</h4><p>Item</p>', 'woocommerce' );
							} elseif ( $total <= $per_page || -1 == $per_page ) {
								printf( __( '<h4>%d</h4><p>Items</p>', 'woocommerce' ), $total );
							} else {
								printf( _x( 'Showing %1$d–%2$d of %3$d results', '%1$d = first, %2$d = last, %3$d = total', 'woocommerce' ), $first, $last, $total );
							}
							 End of Results Count */
							?>
						</div><!-- result count -->
					<?php endif; ?>

				</div><!-- col md 4 -->
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- wrapper grey -->

<?php endif; ?>
<div class="container container-category">
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

<div class="category-image">
	<?php 
// verify that this is a product category page
if (is_product_category()){
    global $wp_query;
    // get the query object
    $cat = $wp_query->get_queried_object();
    // get the thumbnail id user the term_id
    $thumbnail_id = get_woocommerce_term_meta( $cat->term_id, 'thumbnail_id', true ); 
    // get the image URL
    $image = wp_get_attachment_url( $thumbnail_id ); 
    // print the IMG HTML
    echo '<img src="'.$image.'" alt="" />';
}else if(is_shop()){ 

 echo '<img src="' . $tdurl . '/images/catalog/catalog_shop.jpg" alt="" />';
}
 ?>
</div>

	<?php if ( have_posts() ) : ?>

	<section class="product-list-controls clearfix">
		<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

	</section><!-- controls -->


	<?php woocommerce_product_loop_start(); ?>

	<?php woocommerce_product_subcategories(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<?php woocommerce_get_template_part( 'content', 'product' ); ?>

<?php endwhile; // end of the loop. ?>

<?php woocommerce_product_loop_end(); ?>

<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
				?>

			<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php woocommerce_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

		</div><!-- col-md-10 -->
			<!--<div class="col-md-2"><?php /* dynamic_sidebar( 'commerce-controls' ); */ ?> </div> -->

		<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action('woocommerce_after_main_content');
		?>
	


</div><!-- row -->
	</div><!-- container -->
	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action('woocommerce_sidebar');
		?>

		<?php get_footer('shop'); ?>