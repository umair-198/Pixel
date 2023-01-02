<?php
/**
 * Post Card
 *
 * Note: Should be called with The Loop
 */

if ( empty( get_the_ID() ) ) {
	return null;
}

$post_permalink = get_the_permalink();
$post_title = get_the_title();
?>

<section id="post-<?php the_ID(); ?>" class="card">
	
<div class="card-body">
		<a href="<?php echo esc_url( $post_permalink ); ?>" class="block">
			<figure class="img-container">
				<?php the_post_thumbnail( 'post-thumbnail', [ 'class' => 'absolute w-full h-full left-0 top-0 object-cover' ] ); ?>
			</figure>
		</a>
	
	
		<a href="<?php echo esc_url( $post_permalink ); ?>" title="<?php echo esc_html( $post_title ); ?>">
			<?php the_title( '<h2 class="card-title">', '</h2>' ); ?>
		</a>
		<div class="card-text">
			<?php mytheme_the_excerpt( 300 ); ?>
		</div>
		<a href="<?php echo esc_url( $post_permalink ); ?>" class="btn btn-primary" title="<?php echo esc_html( $post_title ); ?>">
			<?php esc_html_e( 'View Mor', 'pixel' ); ?>
		</a>
	</div>
	
	
</section>
                        
                        
<!--                         
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">//<php the_title(); ?></h4>
                                <p class="card-text"><php the_excerpt(); ?></p>
                                <a href="#" class="btn btn-primary">Go somewhere</a> 
                            </div>
                        </div> -->