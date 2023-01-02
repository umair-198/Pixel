<?php
get_header( 'blog' );
?>

<!--Corporate Portfolio Section 1-->
<div class="co-blog-section section pt-140">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12 mb-50">
                
           
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
                <?php the_posts_pagination( array(
    'mid_size'  => 1,
    'prev_text' => __( '<i class="ion-android-arrow-back"></i>', 'textdomain' ),
    'next_text' => __( '<i class="ion-android-arrow-forward"></i>', 'textdomain' ),
) ); ?>
            
            </div>

            
            <?php get_template_part( 'sidebar' ); ?>

</div><!-- #primary -->
                
            </div>

        </div>
        
    </div>
    </div>
    </div>

</div></div></div></div>
<?php

get_footer( 'blog' );
?>