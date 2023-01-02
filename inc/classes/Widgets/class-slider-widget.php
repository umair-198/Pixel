<?php
class My_Slider extends WP_Widget {

public function __construct() {
    parent::__construct("my-slider", "My Slider");

    add_action("widgets_init", function(){
  
     register_widget("My_Slider");
    });
}
public function form( $instance ) {
    // outputs the options form in the admin
    if ( isset( $instance['title'] ) ) {
        $title = $instance['title'];
    } else {
        $title = __( 'Slider', 'pixel' );
    }
    if ( isset( $instance['images'] ) ) {
        $images = $instance['images'];
    } else {
        $images = __( 'Slider', 'pixel' );
    }
    ?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
               name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
               value="<?php echo esc_attr( $title ); ?>"/>
    </p>
    <p>
        <label for="<?php echo $this->get_field_name( 'images' ); ?>"><?php _e( 'images:', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'images' ); ?>"
               name="<?php echo $this->get_field_name( 'images' ); ?>" type="file"
               value="<?php echo esc_attr( $images ); ?>" multiple >
    </p>
    <?php
}
public function widget( $args, $instance ) {
    extract( $args );

    $title = apply_filters( 'widget_title', $instance['title'] );

    echo $before_widget;

    if ( ! empty( $title ) ) {?>
        
         <h5 style="font-size: 16px; font-weight: 700; margin-bottom: 20px;margin-top: 60px;text-transform: capitalize;"><?php echo $title; ?></h5>
    
    <?php	}
    ?>
                <div class="mp-client-slider text-center">
                    <div class="single-client"><img src="<?php echo get_template_directory_uri()?>/assets/img/minimal/client/1.png" alt=""></div>
                </div>
                    
                        <?php
}



public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
}
}
$my_slider = new My_Slider();

?>