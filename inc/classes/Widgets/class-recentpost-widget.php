<?php
class My_Post extends WP_Widget {

public function __construct() {
    parent::__construct("my-post", "MY Latest Post");

    add_action("widgets_init", function(){
  
     register_widget("My_Post");
    });
}
public function form( $instance ) {
    // outputs the options form in the admin
    if ( isset( $instance['title'] ) ) {$title = $instance['title'];} else {$title = __( 'Latest Post', 'pixel' );}
    $num    = isset( $instance['num'] ) ? absint( $instance['num'] ) : 3;
    $excerpt    = isset( $instance['excerpt'] ) ? absint( $instance['excerpt'] ) : 5;
    $show_excerpt = isset( $instance['show_excerpt'] ) ? (bool) $instance['show_excerpt'] : true;
    $show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : true;	?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
               name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
               value="<?php echo esc_attr( $title ); ?>"/>
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'num' ); ?>"><?php _e( 'Number of Posts', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'num' ); ?>"
               name="<?php echo $this->get_field_name( 'num' ); ?>" type="number" min="1"
               value="<?php echo esc_attr( $num ); ?>"/>
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'excerpt' ); ?>"><?php _e( 'Length Of Excerpt', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'excerpt' ); ?>"
               name="<?php echo $this->get_field_name( 'excerpt' ); ?>" type="number" min="1"
               value="<?php echo esc_attr( $excerpt ); ?>"/>
    </p>
    <label for="<?php echo $this->get_field_id( 'show_excerpt' ); ?>"><?php _e( 'Display post Excerpt?' ); ?></label>
	<input class="checkbox" type="checkbox" <?php checked( $show_excerpt ); ?> id="<?php echo $this->get_field_id( 'show_excerpt' ); ?>" name="<?php echo $this->get_field_name( 'show_excerpt' ); ?>" />
    <label for="<?php echo $this->get_field_id( 'show_date' ); ?>"><?php _e( 'Display post date?' ); ?></label>
	<input class="checkbox" type="checkbox" <?php checked( $show_date ); ?> id="<?php echo $this->get_field_id( 'show_date' ); ?>" name="<?php echo $this->get_field_name( 'show_date' ); ?>" />
    <?php
}
public function widget( $args, $instance ) {
    extract( $args );

    $title = apply_filters( 'widget_title', $instance['title'] );
    $num = apply_filters( 'widget_title', $instance['num'] );
    $excerpt = apply_filters( 'widget_title', $instance['excerpt'] );
    $show_excerpt = apply_filters( 'widget_title', $instance['show_excerpt'] );
    $show_date = apply_filters( 'widget_title', $instance['show_date'] );
    echo $before_widget;

    if ( ! empty( $title ) ) {?>
        
         <h5 class="sidebar-title" style="margin-top: 60px;"><?php echo $title; ?></h5>
    
    <?php	}
    
                    $homepost = new WP_Query( apply_filters(
                        'widget_posts_args',
                        array(
                            'posts_per_page'      => $num
                        ),
                        $instance
                    ) );
        	

                    while ( $homepost-> have_posts() ) {
                    $homepost-> the_post();   ?>
                    <div class="co-sidebar-post fix">
                        <a href="<?php the_permalink();?>" class="image float-left"><img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""></a>
                        <div class="content fix">
                            <a href="<?php the_permalink();?>" class="title"><?php the_title() ?></a>
                            <?php
                            if ($show_excerpt) {
                            ?><p style="color:black;"><?php if ( has_excerpt() ) {
                                echo wp_trim_words( get_the_excerpt() , $excerpt );
                                } else {
                                    echo wp_trim_words( get_the_content() , $excerpt );
                                    }  ?></p>
                                <?php } if($show_date){ ?><span class="date"><?php the_date() ?></span><?php } ?>
                        </div>
                    </div>
                    
                    <?php
                        } wp_reset_postdata();
                    
}



public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    $instance['num'] = ( ! empty( $new_instance['num'] ) ) ? strip_tags( $new_instance['num'] ) : '';
    $instance['excerpt'] = ( ! empty( $new_instance['excerpt'] ) ) ? strip_tags( $new_instance['excerpt'] ) : '';
    $instance['show_excerpt'] = ( ! empty( $new_instance['show_excerpt'] ) ) ? strip_tags( $new_instance['show_excerpt'] ) : '';
    $instance['show_date'] = ( ! empty( $new_instance['show_date'] ) ) ? strip_tags( $new_instance['show_date'] ) : '';

    return $instance;
}
}
$my_post = new My_Post();

?>