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

<div class="wrapper wrapper-black">
          
                        <div id="collage" class="effect-parent">
                            <img src="<?php echo $tdurl ?>/images/mosaic/1.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/2.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/3.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/4.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/5.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/6.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/7.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/8.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/9.jpg" alt="">
                            <img src="<?php echo $tdurl ?>/images/mosaic/10.jpg" alt="">
                        </div><!-- collage -->
                   <script>
                   jQuery(window).load(function () {
    jQuery('#collage').collagePlus({
        'targetHeight'    :200,
        'fadeSpeed' : 2000,
        'effect' : "effect-2",
        'allowPartialLastRow' : false
    });
});</script>


         </div><!-- wrapper black -->
<?php get_footer(); ?>