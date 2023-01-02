<?php
/**
 * Template for post entry header
 *
 * @package Mytheme
 */

$the_post_id   = get_the_ID();
$hide_title    = get_post_meta( $the_post_id, '_hide_page_title', true );
$heading_class = ( ! empty( $hide_title ) && 'yes' === $hide_title ) ? 'hide d-none' : '';

$has_post_thumbnail = get_the_post_thumbnail( $the_post_id );
?>
<?php if (has_post_thumbnail()):?>
                    <div class="co-blog-media mb-35">
                        <!-- <img src="<?php //echo get_template_directory_uri()?>/assets/img/corporate/blog/3.jpg" alt=""> -->
                        
                        
                            <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                        
                    </div>
<?php endif; ?>            

<div class="co-blog-content">
	<?php echo get_template_part( 'template-parts/blog-post/post','categories'  )?>
	<?php 	// Title
	if ( is_single() || is_page() ) {
		printf(
			'<h1 class="title-1">%2$s</h1>',
			esc_attr( $heading_class ),
			wp_kses_post( get_the_title() )
		);
	} else {
		printf(
			'<h4 class="title"><a href="%1$s">%2$s</a></h4>',
			esc_url( get_the_permalink() ),
			wp_kses_post( get_the_title() )
		);
	}

	?>

