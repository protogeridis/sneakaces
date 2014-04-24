<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
	die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Single Post Template
 *
 * This template is the default page template. It is used to display content when someone is viewing a
 * singular view of a post ('post' post_type).
 * @link http://codex.wordpress.org/Post_Types#Post
 *
 * @package WooFramework
 * @subpackage Template
 */
get_header();
global $woo_options;

/**
 * The Variables
 *
 * Setup default variables, overriding them if the "Theme Options" have been saved.
 */

$settings = array(
	'thumb_single' => 'false', 
	'single_w' => 787, 
	'single_h' => 300, 
	'thumb_single_align' => 'alignright'
	);

$settings = woo_get_dynamic_values( $settings );
?>

<div class="wrapper wrapper-grey">


	<div class="container">

		<section class="arrow-navigation">
			<?php previous_post_link( '%link', '<span class="arrow-nav arrow-prev"><i class="fa fa-angle-left"></i></span>' ); ?>
			<?php next_post_link( '%link', '<span class="arrow-nav arrow-next"><i class="fa fa-angle-right"></i></span>' ); ?>
	
		</section><!-- arrow navigation -->

		<div class="row">

			<div class="col-md-4">
				<div class="related-container clearfix">
					<h2 class="section-title">Good Reads</h2>
					<ul class="related-post-list">

						<?php
						$currentid = get_the_ID();
						$args = array(
							'post_type' => 'post',
							'showposts' => 8,
							'post__not_in' => array($currentid),
							);
							$myposts = get_posts( $args ); ?>

							<?php foreach ( $myposts as $post ) : setup_postdata($post); ?> 

							<?php if ($currentid == get_the_ID()) continue; ?>

							<li class="related-post clearfix">
								<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
								<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></p>
							</li><!-- sidebar post -->

						<?php endforeach; ?>

					</ul>
				</div><!-- related post container -->
			</div><!-- col md 3 -->

			<div class="col-md-8">



				<div id="content" class="blog-content">

					<?php woo_main_before(); ?>

					<section>

						<?php
						if ( have_posts() ) { $count = 0;
							while ( have_posts() ) { the_post(); $count++;
								?>
								<article <?php post_class(); ?>>

									<section class="post-content">

										<header>

											<h1 class="page-title"><?php the_title(); ?></h1>

											<div class="post-meta">
												<aside><?php the_category(); ?></aside>
												<aside><?php the_date(); ?></aside>
											</div><!-- post meta -->

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

										</header>

										<section class="entry fix">
											<?php the_content(); ?>
											<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'woothemes' ), 'after' => '</div>' ) ); ?>
										</section>

									</section>

								</article><!-- .post -->

								<?php woo_subscribe_connect(); ?>

								<nav id="post-entries" class="fix">
									<div class="nav-prev fl"><?php previous_post_link( '%link', '<span class="meta-nav">&larr;</span> %title' ); ?></div>
									<div class="nav-next fr"><?php next_post_link( '%link', '%title <span class="meta-nav">&rarr;</span>' ); ?></div>
								</nav><!-- #post-entries -->
								<?php
            	// Determine wether or not to display comments here, based on "Theme Options".
								if ( isset( $woo_options['woo_comments'] ) && in_array( $woo_options['woo_comments'], array( 'post', 'both' ) ) ) {
									comments_template();
								}

				} // End WHILE Loop
			} else {
				?>
				<article <?php post_class(); ?>>
					<p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
				</article><!-- .post -->             
				<?php } ?>  

			</section><!-- #main -->

			<?php woo_main_after(); ?>


		</div><!-- #content -->

	</div><!-- col md 9 -->
</div><!-- row -->

</div><!-- container -->
</div><!-- wrapper grey -->
<?php get_footer(); ?>