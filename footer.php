<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Footer Template
 *
 * Here we setup all logic and XHTML that is required for the footer section of all screens.
 *
 * @package WooFramework
 * @subpackage Template
 */
global $woo_options;
global $tdurl;
?>

<div class="wrapper wrapper-footer">
	<div class="container">
		<?php

		$total = 4;
		if ( isset( $woo_options['woo_footer_sidebars'] ) && ( $woo_options['woo_footer_sidebars'] != '' ) ) {
			$total = $woo_options['woo_footer_sidebars'];
		}

		if ( ( woo_active_sidebar( 'footer-1' ) ||
			woo_active_sidebar( 'footer-2' ) ||
			woo_active_sidebar( 'footer-3' ) ||
			woo_active_sidebar( 'footer-4' ) ) && $total > 0 ) {

				?>
				<?php woo_footer_before(); ?>

				<div class="row">
						<section id="footer-widgets">

					<?php $i = 0; while ( $i < $total ) { $i++; ?>
					<?php if ( woo_active_sidebar( 'footer-' . $i ) ) { ?>

					<div class="col-md-3 footer-widget-<?php echo $i; ?>">
						<?php woo_sidebar( 'footer-' . $i ); ?>
					</div>

					<?php } ?>
					<?php } // End WHILE Loop ?>

					<div class="col-md-3 widget footer-widget">
						<!-- Begin MailChimp Signup Form -->
							<div id="mc_embed_signup">
								<form action="http://sneakaces.us6.list-manage.com/subscribe/post?u=77b17aa87ce15751633681191&amp;id=cbcda0a63f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
									<h3>Subscribe to our mailing list</h3>
									<p><?php _e( 'Do you wish to receive all the latest news, sick deals and new product updates? Join our newsletter and we will keep you posted.', 'sneakaces' ) ?></p>
									<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
									<input type="submit" value="I'm in" name="subscribe" id="mc-embedded-subscribe" class="button">
								</form>
							</div>

							<!--End mc_embed_signup-->
					</div>

				</section><!-- /#footer-widgets  -->
				</div><!-- row -->


				<div class="row footer-bottom">
					<div class="col-md-4">
						<ul id="social-links" class="list-unstyled list-inline list-social">
							<li><a target="_blank" rel="nofollow" href="http://www.facebook.com/sneakaces" data-social="facebook"><i class="fa fa-2x fa-facebook"></i></a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.twitter.com/sneakaces" data-social="twitter"><i class="fa fa-2x fa-twitter"></i></a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.pinterest.com/sneakaces" data-social="pinterest"><i class="fa fa-2x fa-instagram"></i></a></li>
							<li><a target="_blank" rel="nofollow" href="http://www.instagram.com/sneakaces" data-social="instagram"><i class="fa fa-2x fa-pinterest"></i></a></li>
							<li><a target="_blank" rel="nofollow" href="http://sneakaces.tumblr.com" data-social="tumblr"><i class="fa fa-2x fa-tumblr"></i></a></li>
						</ul>
					</div><!-- col-md-4 -->
					<div class="col-md-4">
						<p class="copyright">&copy; Sneakaces&trade; 2014 All rights reserved. Since the end</p>
					</div><!-- col-md-4 -->

					<div class="col-md-4">
						<ul class="credit-cards">
							<li><img src="<?php echo $tdurl; ?>/images/paypal.png" alt="Paypal"></li>
							<li><img src="<?php echo $tdurl; ?>/images/credit-cards/visa.png" alt="Visa"></li>
							<li><img src="<?php echo $tdurl; ?>/images/credit-cards/mastercard.png" alt="Mastercard"></li>
							<li><img src="<?php echo $tdurl; ?>/images/credit-cards/maestro.png" alt="Maesto"></li>
							<li><img src="<?php echo $tdurl; ?>/images/credit-cards/diners.png" alt="Diners"></li>
						</ul>	
					</div><!-- col md 4 -->
				
				</div><!-- row -->



				<?php } // End IF Statement ?>

			</div><!-- container -->
		</div><!-- wrapper footer -->


		


	 <?php wp_footer(); ?>
	 <?php woo_foot(); ?>

	 	<script src="<?php echo $tdurl; ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?php echo $tdurl; ?>/vendor/bxslider/jquery.bxslider.min.js"></script>
		<script src="<?php echo $tdurl; ?>/vendor/responsivenav/responsive-nav.min.js"></script>
		<script src="<?php echo $tdurl; ?>/vendor/masonry/masonry.pkgd.min.js"></script>
		<script src="<?php echo $tdurl; ?>/vendor/masonry/imagesloaded.pkgd.min.js"></script>
		<script src="<?php echo $tdurl; ?>/vendor/main.js"></script>
		

	 <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-39879674-1', 'sneakaces.com');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>

	</body>
	</html>