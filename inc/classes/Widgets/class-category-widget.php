<?php
class My_Category extends WP_Widget {

public function __construct() {
    parent::__construct("my-category", "My Category");

    add_action("widgets_init", function(){
  
     register_widget("My_Category");
    });
}
public function form( $instance ) {
    // outputs the options form in the admin
    if ( isset( $instance['title'] ) ) {
        $title = $instance['title'];
    } else {
        $title = __( 'Categories', 'pixel' );
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
        
         <h5 style="font-size: 16px; font-weight: 700; margin-bottom: 20px;margin-top: 60px;text-transform: capitalize;"><?php echo $title; ?></h5>
    
    <?php	}
    ?>
    
                    <?php $cat=get_categories( ['taxonomy'=>'category'] ); ?>                      
                    <ul>
                        <?php foreach($cat as $catvalue)
                        {?>
                            <li><a href="<?php echo get_category_link( $catvalue->term_id ) ;?>"><?php echo $catvalue->name;echo '&nbsp; ';?>(<?php echo $catvalue->category_count;?>)</a></li>
                        <?php
                        }?>
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
$my_category = new My_Category();

?>