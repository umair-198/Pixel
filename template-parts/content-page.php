<div class="entry-content">
	<?php
	the_content();
	wp_link_pages(
		array(
			'before' => '<div class="page-links" style="background-color: white;">' . esc_html__( 'Pages:', 'pixel' ),
			'after'  => '</div>',
		)
	);
	?>
</div>