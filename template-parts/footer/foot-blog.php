<!--Corporate 1 Client Section-->


<!--Corporate 1 Footer Section-->
<div class="co-footer-section-3 section bg-dark-light pt-120 pb-80">
    
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-3">
                <div id="primary" class="sidebar">

	<?php do_action( 'before_sidebar' ); ?>

	<?php if ( ! dynamic_sidebar( 'footerbar-1' ) ) : ?>

		<aside id="search" class="widget widget_search">
			<?php get_search_form(); ?>
		</aside><!-- #search -->

		<aside id="archives" class="widget">
			<h3 class="widget-title"><?php _e( 'Archives', 'shape' ); ?></h3>
			<ul>
				<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
			</ul>
		</aside><!-- #archives -->

		<aside id="meta" class="widget">
			<h3 class="widget-title"><?php _e( 'Meta', 'shape' ); ?></h3>
			<ul>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
				<?php wp_meta(); ?>
			</ul>
		</aside><!-- #meta -->

	<?php endif; ?>

</div><!-- #primary -->
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-3 widget-contact">
                <?php
		                    if ( is_active_sidebar( 'footerbar-3' ) ) {
		
					
					            dynamic_sidebar( 'footerbar-3' );
                                the_widget( 'Archives' );
				
		                    }
		            ?>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-40">
                <div class="co-footer-widget-3">
                <?php
		                    if ( is_active_sidebar( 'footerbar-4' ) ) {
		
					
					            dynamic_sidebar( 'footerbar-4' );
					
				
		                    }
		            ?>
                </div>
            </div>

        </div>
    </div>
    
</div>
    
<div class="co-footer-bottom-3 section bg-dark">
    <div class="container">
        <div class="row flex-column flex-lg-row justify-content-center justify-content-lg-between">
            <div class="co-copyright-3 col-auto">
                <?php
		            if ( is_active_sidebar( 'footerbar-2' ) ) {
		                dynamic_sidebar( 'footerbar-2' );
					}
		        ?>
            </div>
            <!-- <div class="co-footer-social-3 col-auto">
                <a href="#"><i class="icon-facebook"></i></a>
                <a href="#"><i class="icon-twitter"></i></a>
                <a href="#"><i class="icon-googleplus"></i></a>
                <a href="#"><i class="icon-dribbble"></i></a>
                <a href="#"><i class="icon-linkedin"></i></a>
            </div> -->
        </div>
    </div>
</div>





