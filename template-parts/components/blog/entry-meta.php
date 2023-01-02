<?php
/**
 * Template for entry meta
 *
 * @package Mytheme
 */

?>

<div class="co-blog-meta fix">
					<a href="<?php echo get_author_posts_url(get_the_author_meta('ID'));?>" class="author float-left">
					<?php
		$id=get_the_author_ID();
		$user = get_user_by('id', $id);;

		if ( $user ) :
			?>
			<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
		<?php endif; ?>
                                
						  <span><?php the_author();?></span>
					</a>
					<?php if (is_single()) {
						?><div class="date-comment float-right">
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
				<?php	} else{?>
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
					  </div><?php }?>
					  <div class="button float-right">
					  <?php echo pixel_excerpt_more(); ?>
					</div>
</div>
