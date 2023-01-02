<?php
get_header( 'blog' );
?>

<!--Corporate Portfolio Section 1-->
<div class="co-blog-section section pt-140">
    <div class="container">
        <div class="row">
           
            <div class="col-lg-8 col-12 mb-50">
                
            <!-- load post-content.php from template part -->
                <?php
                //get_template_part( 'template-parts/blog-post/post','content' )
                get_template_part( 'template-parts/content' )
                ?>
                <!-- Pagination -->
                <!-- <ul class="co-pagination">
                    <li><a href="#"><i class="ion-android-arrow-back"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#"><i class="ion-android-arrow-forward"></i></a></li>
                </ul> -->
                <?php pixel_pagination(); ?>
                <!-- Author Bio -->
                <?php $author = get_queried_object();?>
                <div class="co-author-bio fix">
                <?php get_template_part( 'template-parts/author/header' ); ?>
                </div>


                
                <!-- Comment Wrapper -->


                <div class="co-comment-wrapper fix">
                
                
                <?php
                    if ( comments_open()) {
                       
                        comments_template();   
                    }
                ?>
                    
                   
                    
                </div>
                


            </div>

           
            <div class="col-lg-4 col-12 mb-50">
                
            <div id="primary" class="sidebar">

	<?php do_action( 'before_sidebar' ); ?>

	<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

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
        
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</div>
<?php
get_footer( 'blog' );
?>