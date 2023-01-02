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
                    
                    <!-- Blog Media -->
                    <?php if (has_post_thumbnail()):?>
                    <div class="co-blog-media mb-35">
                        <!-- <img src="<?php //echo get_template_directory_uri()?>/assets/img/corporate/blog/3.jpg" alt=""> -->
                        
                        
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        
                    </div>
                    <?php endif; ?>
                    <!-- Blog Content -->
                    <div class="co-blog-content">
                        
                        <?php echo get_template_part( 'template-parts/blog-post/post','categories'  )?>
                        <h4 class="title"><a href="<?php the_permalink(); ?>"><?php echo the_title( ); ?></a></h4>
                        <p><?php
                        echo get_the_excerpt();
                        ?></p>
                        
                        <!-- Meta -->
                        <div class="co-blog-meta fix">
                            
                            <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" class="author float-left">
                          
                                
                                <span><?php the_author();?></span>
                            </a>
                            <div class="date-comment float-left">
                                <a href="<?php the_permalink(); ?>"><?php echo get_the_date() ?></a>
                                <a href="<?php echo get_comments_link()?>">
                            <?php
                                $comments_num = get_comments_number();
	                            if( comments_open() ){
		                            if( $comments_num == 0 ){
			                            $comments = __('No Comments');
		                            } elseif ( $comments_num > 1 ){
			                            $comments= $comments_num . __(' Comments');
		                            } else {
			                            $comments = __('1 Comment');
		                            }
		                           
	                            } else {
		                            $comments = __('Comments are closed');
	                            }
                                echo $comments;
                                ?>
                                
                            </a>
                            </div>
                            <div class="button float-right">
                                <a href="corporate-blog-details.html" class="btn btn-border-gradient btn-hover-gradient">read more</a>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
    <?php endwhile;?>
    <?php  else: ?>
    <?php  get_template_part( 'template-parts/content','none' ); ?>
<?php endif; ?>
                

                
