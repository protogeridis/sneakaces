<?php
// File Security Check
if ( ! empty( $_SERVER['SCRIPT_FILENAME'] ) && basename( __FILE__ ) == basename( $_SERVER['SCRIPT_FILENAME'] ) ) {
    die ( 'You do not have sufficient permissions to access this page!' );
}
?>
<?php get_header(); ?>

<div id="content" class="col-full">

   <?php woo_main_before(); ?>



   <div class="wrapper wrapper-yellow">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <div class="content-404">
                    <header>
                        <h1><?php _e( 'Error 404 - Page not found!', 'woothemes' ); ?></h1>
                    </header>
                    <section class="entry">
                        <p><?php _e( 'The page you trying to reach does not exist, or has been moved. Please use the menus or the search box to find what you are looking for.', 'woothemes' ); ?></p>
                    </section>

                </div><!-- content 404 -->
            </div><!-- col md 12-->
        </div><!-- row -->
    </div>   <!-- container -->
</div><!-- wrapper-->

<?php woo_main_after(); ?>


</div><!-- /#content -->

<?php get_footer(); ?>