<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Header Template
 *
 * Here we setup all logic and XHTML that is required for the header section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options, $woocommerce;
global $tdurl;
$tdurl = get_template_directory_uri(); 
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="<?php if ( $woo_options['woo_boxed_layout'] == 'true' ) echo 'boxed'; ?> <?php if (!class_exists('woocommerce')) echo 'woocommerce-deactivated'; ?>">
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>" />

	<title><?php woo_title(''); ?></title>
	<?php woo_meta(); ?>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="screen" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,800,700,600,300&subset=latin,greek' rel='stylesheet' type='text/css'>
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo $tdurl; ?>/vendor/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $tdurl; ?>/vendor/responsivenav/responsive-nav.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $tdurl; ?>/vendor/bxslider/jquery.bxslider.css" />
	<link rel="shortcut icon" href="<?php echo $tdurl; ?>/favicon.ico" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php
	wp_head();
	woo_head();
	?>

</head>

<body <?php body_class(); ?>>
	<?php woo_top(); ?>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=1459168790983096";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <nav class="nav-collapse">
    <?php wp_nav_menu( array( 'depth' => 1, 'menu' => 14)); ?> 
    </nav>



	<div class="wrapper-top">
		<div id="header" class="header">
			<div class="container">
				
				

<?php woo_header_before(); ?>

				<div class="row">
					<div class="col-md-3">
						<div class="header-branding relative">
							<a id="toggle" class="closed mobile-nav"><i class="fa fa-bars fa-2x"></i></a>
							<a href="<?php echo get_site_url(); ?>" class="logo header-logo"></a>
						</div><!-- header branding -->
					</div><!-- col md 3 -->
					<div class="col-md-6 forcestatic">
						
						
							<?php woo_nav_before(); ?>

									<nav id="navigation" role="navigation">

										<?php
										if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'primary-menu' ) ) {
											wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'main-nav', 'menu_class' => 'nav fr', 'theme_location' => 'primary-menu' ) );
										} else {
											?>
											<ul id="main-nav" class="nav nav-main">
												<?php if ( is_page() ) $highlight = 'page_item'; else $highlight = 'page_item current_page_item'; ?>
												<li class="<?php echo $highlight; ?>"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php _e( 'Home', 'woothemes' ); ?></a></li>
												<?php wp_list_pages( 'sort_column=menu_order&depth=6&title_li=&exclude=' ); ?>
											</ul><!-- /#nav -->
											<?php } ?>

										</nav><!-- /#navigation -->

										<?php woo_nav_after(); ?>


									</div><!-- col-md-6 -->

									<div class="col-md-3">
										<nav role="navigation">
										<?php if ( function_exists( 'has_nav_menu' ) && has_nav_menu( 'top-menu' ) ) { ?>
										<?php wp_nav_menu( array( 'depth' => 6, 'sort_column' => 'menu_order', 'container' => 'ul', 'menu_id' => 'top-nav', 'menu_class' => 'nav fl', 'theme_location' => 'top-menu' ) ); ?>
										<?php } ?>
										<?php
										if ( class_exists( 'woocommerce' ) ) {
											echo '<ul class="nav wc-nav">';
											echo '<li class="cart"><a href="'. get_site_url() .'/cart/" class="amount">'.$woocommerce->cart->get_cart_total().'<span class="total">'.$woocommerce->cart->cart_contents_count.'</span></a></li>';
											echo '<li class="login-button"><a href="' . get_site_url() . '/my-account/">'. (is_user_logged_in() ? 'My Account' : 'Login/Register') .'</a></li>';
											/*echo '<li class="checkout"><a href="'.esc_url($woocommerce->cart->get_checkout_url()).'">'.__('Checkout','woothemes').'</a></li>';*/
											echo get_search_form();
											
											echo '</ul>';
										}
										?>
									</nav><!-- Woocommerce navigation -->


										
									</div><!-- col-md-4 -->
									
									
							


			

								
									
									

										<?php woo_content_before(); ?>
									
						</div><!-- col md 10 -->

					</div><!-- row -->


				</div><!-- container -->
			</div><!-- header -->
		</div><!-- wrapper top -->



