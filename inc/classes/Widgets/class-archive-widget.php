<?php
class My_Archives extends WP_Widget {

public function __construct() {
    parent::__construct("my-archives", "My Archives");

    add_action("widgets_init", function(){
  
     register_widget("My_Archives");
    });
}
public function form( $instance ) {
    // outputs the options form in the admin
    if ( isset( $instance['title'] ) ) {
        $title = $instance['title'];
    } else {
        $title = __( 'Archives', 'pixel' );
    }
    ?>
    <p>
        <label for="<?php echo $this->get_field_name( 'title' ); ?>"><?php _e( 'Title:', 'pixel' ); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>"
               name="<?php echo $this->get_field_name( 'title' ); ?>" type="text"
               value="<?php echo esc_attr( $title ); ?>"/>
    </p>
    <?php
}
public function widget( $args, $instance ) {
    extract( $args );

    $title = apply_filters( 'widget_title', $instance['title'] );

    echo $before_widget;

    ?>
        
         <h5 style="font-size: 16px; font-weight: 700; margin-bottom: 20px;margin-top: 60px;text-transform: capitalize;"><?php echo $title; ?></h5>
    
    <?php	
    ?>
                    
                    <ul>
                        <li><?php echo wp_get_archives();?></li>
                    </ul>
                        <?php
}



public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
}
}
$my_archives = new My_Archives();

?>