<?php
/*
*
* Template Name:Blog Posts
*
*/
//get Blog Posts

 ?>
 <?php if (have_posts()):?>
    <?php while (have_posts()): the_post();?>
                <!-- Blog -->
                <div class="co-blog">
                    <?php if (is_single()) { 
                        get_template_part( 'template-parts/components/blog/entry-header' );
                        ?>
                        <div class="co-blog-meta co-single-blog-meta fix">
                           <?php get_template_part( 'template-parts/components/blog/entry-meta' ); 
                        ?>
                        </div><br><br><br>
                        <?php 
                            get_template_part( 'template-parts/components/blog/entry-content' );
                    } 
                    else{
                        get_template_part( 'template-parts/components/blog/entry-header' );
                        get_template_part( 'template-parts/components/blog/entry-content' );
                        get_template_part( 'template-parts/components/blog/entry-meta' );
                        } ?>     
                        
                </div>
                    
                </div>
    <?php endwhile;?>
    <?php  else: ?>
    <?php  get_template_part( 'template-parts/content','none' ); ?>
<?php endif; ?>
                

                
