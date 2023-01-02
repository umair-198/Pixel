<?php
class My_Search extends WP_Widget {

public function __construct() {
    parent::__construct("my-search", "My Search");

    add_action("widgets_init", function(){
  
     register_widget("My_Search");
    });
}
public function form( $instance ) {
    // outputs the options form in the admin
    if ( isset( $instance['title'] ) ) {
        $title = $instance['title'];
    } else {
        $title = __( 'Search Here', 'pixel' );
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

    if ( ! empty( $title ) ) {?>
        
         <h5 style="font-size: 16px; font-weight: 700; margin-bottom: 20px;text-transform: capitalize;"><?php echo $title; ?></h5>
    
    <?php	}
    ?>
    
                <form class="sidebar-search-form" method="get" action="<?php print site_url(); ?>" >
                    <input type="text" name="s" value="<?php if (isset($_GET['s'])) {print $_GET['s'];} ?>" placeholder="Search.....">
                    <button><i class="ion-ios-search-strong"></i></button>
                </form><?php
}



public function update( $new_instance, $old_instance ) {
    // processes widget options to be saved
    $instance          = [];
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

    return $instance;
}
}
$my_search = new My_Search();

?>