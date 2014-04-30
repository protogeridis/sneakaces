<?php
// File Security Check
if ( ! function_exists( 'wp' ) && ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?><?php
/**
 * Index Template
 *
 * Here we setup all logic and XHTML that is required for the index template, used as both the homepage
 * and as a fallback template, if a more appropriate template file doesn't exist for a specific context.
 *
 * @package WooFramework
 * @subpackage Template
 */
get_header();
global $woo_options;
global $tdurl; 
?>
<div class="wrapper wrapper-black">
	<!-- slider -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="bxslider">
					<li class="bxslide">
						<img src="<?php echo $tdurl;?>/images/slider/slider_1.jpg" alt="Sales Sneak Aces" />
						<div class="slide-caption">
							<small>New Arrival</small>
							<h2>Oldschool Snapbacks</h2>
							<p>Get them for limited time at 10% off.</p>
							<a href="#">View Product</a>

						


						</div>

						<div class="slide-annotations">
								<div class="annotation">
				
										<?php 
							
							$_pfid = 29;
							$_pf = new WC_Product_Factory();  
							$_product = $_pf->get_product($_pfid);
							/* echo '<a href="'.site_url().'?p='.$_pfid.'">'.$_product->get_image().'</a>'; */
							 echo '<a href="'.site_url().'?p='.$_pfid.'" style="top:100px;left:430px">+</a>'; 
							?>

						
									<div class="annotation-box">
										
									</div><!-- annotation-box -->
								</div><!-- annotation -->
						</div><!-- annotations -->
					</li><!-- slide -->

					<li class="bxslide">
						<img src="<?php echo $tdurl;?>/images/slider/slider_2.jpg" alt="Sales Sneak Aces" />
						<div class="slide-caption">
							<small>Member Exclusive</small>
							<h2>Get a 20% discount coupon with every order</h2>
							<p>Valid until September 31th.</p>
							<a href="#">View Product</a>
						</div><!-- caption -->
						
					</li><!-- slide -->

					<li class="bxslide">
						<img src="<?php echo $tdurl;?>/images/slider/slider_3.jpg" alt="Sales Sneak Aces" />
						<div class="slide-caption">
							<small>New Arrival</small>
							<h2>Oldschool Snapbacks</h2>
							<p>Get them for limited time at 10% off.</p>
							<a href="#">View Product</a>
						</div>
					</li><!-- slide -->
				</ul>
			</div>
		</div>
	</div>
	<!-- end of slider -->


</div><!-- wrapper-slider -->

<div class="container">
	<div class="front-text">
		<div class="row">
			<div class="col-md-8">
				<small class="underbold">Sneakaces™</small>
				<h1 class="front-big">For the Abnormal and the Unusual</h1>
				<p class="front-small">Sneak Aces designs and manufactures high quality streetwear, targeted at the shouters, the unordinary. We support and elevate the Street Culture that was born through action sports, and we are a family of the like-minded.</p>
			</div><!-- col-md-8 -->

			<div class="col-md-4">
				<!-- Begin MailChimp Signup Form -->

				<div class="yellow-block">
					<div id="mc_embed_signup">
						<span class="underbold">Newsletter</span>
						<h3>Want to receive cool Updates?</h3>
						<p>New arrivals, offers, coupons and news.</p>
						<form action="http://sneakaces.us6.list-manage.com/subscribe/post?u=77b17aa87ce15751633681191&amp;id=cbcda0a63f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
						</form>
					</div><!-- mc embed signup -->
				</div><!-- yellow block -->

				<!--End mc_embed_signup-->
			</div>

		</div><!-- row -->
	</div><!-- front text -->

	<div class="main-mosaic">
		<div class="row">
			<div class="col-md-12">
				<div class="main-mosaic-inner">
					<div class="mosaic-left">
						<img src="<?php echo $tdurl;?>/images/mosaic-big.jpg" alt="Mosaic Big" />
					</div>
					<div class="mosaic-right">
						<div class="mosaic-upper mosaic-first">
							<img src="<?php echo $tdurl;?>/images/mosaic1.png" alt="Slider Image">
						</div>
						<div class="mosaic-upper">
							<img src="<?php echo $tdurl;?>/images/mosaic2.png" alt="Slider Image">
						</div>
						<div class="mosaic-lower mosaic-first">
							<img src="<?php echo $tdurl;?>/images/mosaic3.png" alt="Slider Image">
						</div>
						<div class="mosaic-lower mosaic-yellow">
							<p>New Collection</p>
						</div>
					</div>
				</div><!-- main mosaic inner -->
			</div>
		</div>

	</div><!-- main mosaic-->



	<div id="content" class="<?php if ( $woo_options[ 'woo_homepage_banner' ] == "true" ) echo 'with-banner'; ?> <?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "false" ) echo 'no-sidebar'; ?>">

		<?php woo_main_before(); ?>



		<?php mystile_homepage_content(); ?>		



<?php /* Start of custom Featured Products */ ?>

<?php $query_args = array('posts_per_page' => $number, 'no_found_rows' => 1, 'post_status' => 'publish', 'post_type' => 'product' );

		$query_args['meta_query'] = $woocommerce->query->get_meta_query();
		$query_args['meta_query'][] = array(
			'key' => '_featured',
			'value' => 'yes'
		);

		$r = new WP_Query($query_args);

		if ($r->have_posts()) : ?>
		<div class="featured-products">
		<h2 class="underbold">Featured Products</h2>
		<ul class="products">
		<?php while ($r->have_posts()) : $r->the_post(); global $product; ?>

		<li class="product"><a href="<?php echo esc_url( get_permalink( $r->post->ID ) ); ?>" title="<?php echo esc_attr($r->post->post_title ? $r->post->post_title : $r->post->ID); ?>">
			<?php echo $product->get_image('shop_catalog'); ?>
			<div class="featured-left"><h3><?php if ( $r->post->post_title ) echo get_the_title( $r->post->ID ); else echo $r->post->ID; ?></h3>
			<p class="product-category"><?php echo $product->get_categories(); ?></p></div>
		</a> <div class="featured-right"><span class="price"><?php echo $product->get_price_html(); ?></span></div></li>

		<?php endwhile; ?>
		</ul>
		</div>

		<?php endif; 

		/* End of Custom Featured Products */
		?>




		<?php woo_loop_before(); ?>

		<?php if ( $woo_options[ 'woo_homepage_blog' ] == "true" ) { 
			$postsperpage = $woo_options['woo_homepage_blog_perpage'];
			?>

			<?php

			$the_query = new WP_Query( array( 'posts_per_page' => $postsperpage ) );

			if ( have_posts() ) : $count = 0;
			?>

			<?php /* Start the Loop */ ?>
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); $count++; ?>

			<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to overload this in a child theme then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
					?>

					<?php 
					endwhile; 
				// Reset Post Data
					wp_reset_postdata();
					?>



				<?php else : ?>

				<article <?php post_class(); ?>>
					<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
				</article><!-- /.post -->

			<?php endif; ?>

			<?php } // End query to see if the blog should be displayed ?>

			<?php woo_loop_after(); ?>


			<?php woo_main_after(); ?>

			<?php if ( $woo_options[ 'woo_homepage_sidebar' ] == "true" ) get_sidebar(); ?>

		</div><!-- /#content -->
		
	</div><!-- container -->
	<?php get_footer(); ?>