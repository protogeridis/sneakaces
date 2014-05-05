<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php
/**
 * Template Name: Blog
 *
 * The blog page template displays the "blog-style" template on a sub-page. 
 *
 * @package WooFramework
 * @subpackage Template
 */

 global $woo_options;
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

<div class="wrapper wrapper-grey">
            <div class="container">
                <div class="row">

                    <header class="col-md-10">
                        <?php woo_breadcrumbs(); ?>
                        <h1 class="page-title underbold"><?php the_title(); ?></h1>
                    </header>

                    <div class="col-md-2">
                        <div class="woocommerce-result-count">
                            <h4><?php $count_posts = wp_count_posts();
echo $count_posts->publish; ?></h4>
                            <p>Posts</p>
                        </div><!-- result count -->
                    </div>
          
                    
            </div><!-- row -->
        </div><!-- container -->
   

<div class="container">
    <!-- #content Starts -->
    <div id="content" class="blog-list">
    
        <?php woo_main_before(); ?>

        <div class="row">
            <div class="col-md-12">
                
         
        
        <section id="blog" class="">       
		
		<?php woo_loop_before(); ?>

        <?php
        	if ( get_query_var( 'paged') ) { $paged = get_query_var( 'paged' ); } elseif ( get_query_var( 'page') ) { $paged = get_query_var( 'page' ); } else { $paged = 1; }
        	
        	$query_args = array(
        						'post_type' => 'post', 
        						'paged' => $paged
        					);
        	
        	$query_args = apply_filters( 'woo_blog_template_query_args', $query_args ); // Do not remove. Used to exclude categories from displaying here.
        	
        	remove_filter( 'pre_get_posts', 'woo_exclude_categories_homepage' );
        	
        	query_posts( $query_args );
        	
        	if ( have_posts() ) {
        		$count = 0;
        		while ( have_posts() ) { the_post(); $count++;
        ?>                                                            
            <!-- Post Starts -->
            <?php $myrand = rand(0,1);
            if($count == 1){ ?>
             <article <?php post_class('blog-post big-size'); ?>>
                <?php  }else{ ?>
                 <article <?php post_class('blog-post grid-size'); ?>>
           <?php  }?>

           

        
        <section class="post-content">
           <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
            
            <header>
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                <?php the_category(); ?>
            </header>
    
            <section class="entry">
            <?php if ( isset( $woo_options['woo_post_content'] ) && $woo_options['woo_post_content'] == 'content' ) { the_content( __( 'Continue Reading &rarr;', 'woothemes' ) ); } else { the_excerpt(); } ?>
            </section>
    
            <p><?php the_date(); ?></p>
              
        </section><!--/.post-content -->

    </article><!-- /.post -->
                                                
        <?php
        		} // End WHILE Loop
        	
        	} else {
        ?>
            <article <?php post_class(); ?>>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'woothemes' ); ?></p>
            </article><!-- /.post -->
        <?php } // End IF Statement ?> 

        <div class="clear"></div>
        
        <?php woo_loop_after(); ?>  
        </section><!-- /#blog -->

           </div><!-- col md 12 -->
        </div><!-- row -->
    
        <?php woo_pagenav(); ?>
		<?php wp_reset_query(); ?>                

       
        

    </div><!-- /#content -->    
		</div>
         </div><!-- wrapper grey -->
<?php get_footer(); ?>