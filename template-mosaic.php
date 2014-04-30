<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Mosaic
 *
 * The blog page template displays the "mosaic-style" template on a sub-page. 
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options;
 global $tdurl; 
 get_header();
 
/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */
	
	$settings = array(
					'thumb_w' => 787, 
					'thumb_h' => 300, 
					'thumb_align' => 'alignleft'
					);
					
	$settings = woo_get_dynamic_values( $settings );
?>

<div class="wrapper wrapper-black wrapper-black-header">
			<div class="container">
				<div class="row">

					<header class="col-md-12">
						<?php woo_breadcrumbs(); ?>
						<h1 class="page-title underbold"><?php the_title(); ?></h1>
					</header>
					
			</div><!-- row -->
		</div><!-- container -->
	</div><!-- wrapper black -->


<div class="wrapper wrapper-black">
<div class="lookbook">
	<?php the_content(); ?>
</div><!-- lookbook -->
         </div><!-- wrapper black -->
<?php get_footer(); ?>