
<?php
/**
 * Author Header Template Part.
 *
 * @package Pixel
 */

$author_email = get_the_author_meta( 'user_email' );

?>

	<!--author-col-one-->
	
	<div class="image float-left">
		<?php
		$id=get_the_author_ID();
		$user = get_user_by('id', $id);;

		if ( $user ) :
			?>
			<img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
		<?php endif; ?>
	</div>
	<!--author-col-two-->
	<div class="content fix">
		<?php
		if ( ! empty( get_the_author() ) ) {
			printf(
				'<h5 class="inline-block uppercase">%s</h5>',
				get_the_author()
			);
		}
		// If a user has filled out their description, show a bio on their entries.
		if ( get_the_author_meta( 'description' ) ) : ?>
					<p><?php the_author_meta( 'description' ); ?></p>
			
		<?php endif; ?>
	</div>

