<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: About
 *
 * This template is a full-width version of the page.php template file. It removes the sidebar area.
 *
 * @package WooFramework
 * @subpackage Template
 */
	get_header();
	global $woo_options;
?>

	<div class="wrapper wrapper-yellow wrapper-about">
			<div class="container">
				<div class="row">

					<header class="col-md-12">
						<?php woo_breadcrumbs(); ?>
						<h1 class="page-title underbold"><?php the_title(); ?></h1>
					</header>
					
			</div><!-- row -->
		</div><!-- container -->

<div class="container">
       
    <div id="content" class="page">
    
    	<?php woo_main_before(); ?>
    	
		<section id="main">
           
        <?php
        	if ( have_posts() ) { $count = 0;
        		while ( have_posts() ) { the_post(); $count++;
        ?>                                                             
                <article <?php post_class(); ?>>
					
					
                    
                    <section class="entry page-content">
	                	<?php the_content(); ?>
	               	</section><!-- /.entry -->

					<?php edit_post_link( __( '{ Edit }', 'woothemes' ), '<span class="small">', '</span>' ); ?>

                </article><!-- /.post -->
                                                    
			<?php
					} // End WHILE Loop
				} else {
			?>
				<article <?php post_class(); ?>>
                	<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
                </article><!-- /.post -->
            <?php } ?>  
        
		</section><!-- /#main -->
		
		<?php //woo_main_after(); ?>
		
    </div><!-- /#content -->
		</div><!-- container -->
	</div><!-- wrapper yellow -->
<?php get_footer(); ?>