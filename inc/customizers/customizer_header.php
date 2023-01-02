<?php
// customize the header Button
function customizer_header_button($wp_customize){
    $wp_customize->add_section('header',[
        'title'=>__('Header Button','Daily'),
        'priority'=>70
    ]);

    // $wp_customize->add_setting( 'button_color', array(
    //     'capability'        => 'edit_theme_options',
    //     'default'           => 'red',
    // ) );
    // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'button_color',
    //     array(
    //         'label'    => __( 'Button Color', 'text-domain' ),
    //         'section'  => 'header',
    //         'settings' => 'button_color',
    //     )
    // ));

    $wp_customize->add_setting( 'header_button_text', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'BUY NOW',
    ) );
    $wp_customize->add_control( 'header_button_text',
        array(
            'label'    => __( 'Button Text', 'text-domain' ),
            'section'  => 'header',
            'settings' => 'header_button_text',
        )
    );

    $wp_customize->add_setting( 'header_button_link', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#',
    ) );
    $wp_customize->add_control( 'header_button_link',
        array(
            'label'    => __( 'Button Link', 'text-domain' ),
            'section'  => 'header',
            'settings' => 'header_button_link',
        )
    );
   
}
add_action( 'customize_register', 'customizer_header_button');

// Customize the home slider
function customizer_slider($wp_customize){
    $wp_customize->add_section('header_slider',[
        'title'=>__('Home Header Slider','Daily'),
        'priority'=>71
    ]);

    $wp_customize->add_setting( 'slide_1_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_1_image',
        array(
            'label'    => __( '1st Slide Image', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'slide_1_image',
        )
    ));

    $wp_customize->add_setting( 'header_slider_1_text_1', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'welcome pixel',
    ) );
    $wp_customize->add_control( 'header_slider_1_text_1',
        array(
            'label'    => __( 'Slide 1st Heading', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_1_text_1',
        )
    );

    $wp_customize->add_setting( 'header_slider_1_text_2', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'be the big of your success',
    ) );
    $wp_customize->add_control( 'header_slider_1_text_2',
        array(
            'label'    => __( 'Slide 2nd Heading', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_1_text_2',
        )
    );

    $wp_customize->add_setting( 'header_slider_button_text_1', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'learn more',
    ) );
    $wp_customize->add_control( 'header_slider_button_text_1',
        array(
            'label'    => __( 'Button Slide 1 Text', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_button_text_1',
        )
    );

    $wp_customize->add_setting( 'header_slider_button_link_1', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#',
    ) );
    $wp_customize->add_control( 'header_slider_button_link_1',
        array(
            'label'    => __( 'Button Slide 1 Link', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_button_link_1',
        )
    );

    $wp_customize->add_setting( 'slide_2_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'slide_2_image',
        array(
            'label'    => __( '2st Slide Image', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'slide_2_image',
        )
    ));
    
    $wp_customize->add_setting( 'header_slider_2_text_1', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'welcome pixel',
    ) );
    $wp_customize->add_control( 'header_slider_2_text_1',
        array(
            'label'    => __( 'Slide 1st Heading', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_2_text_1',
        )
    );

    $wp_customize->add_setting( 'header_slider_2_text_2', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'be the big of your success',
    ) );
    $wp_customize->add_control( 'header_slider_2_text_2',
        array(
            'label'    => __( 'Slide 2nd Heading', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_2_text_2',
        )
    );

    $wp_customize->add_setting( 'header_slider_button_text_2', array(
        'capability'        => 'edit_theme_options',
        'default'           => 'learn more',
    ) );
    $wp_customize->add_control( 'header_slider_button_text_2',
        array(
            'label'    => __( 'Button Slide 2 Text', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_button_text_2',
        )
    );

    $wp_customize->add_setting( 'header_slider_button_link_2', array(
        'capability'        => 'edit_theme_options',
        'default'           => '#',
    ) );
    $wp_customize->add_control( 'header_slider_button_link_2',
        array(
            'label'    => __( 'Button Slide 2 Link', 'text-domain' ),
            'section'  => 'header_slider',
            'settings' => 'header_slider_button_link_2',
        )
    );
   
}
add_action( 'customize_register', 'customizer_slider');
// customize the blog Banner
function customizer_banner($wp_customize){
    $wp_customize->add_section('header_banner',[
        'title'=>__('Blog Header Banner','Daily'),
        'priority'=>72
    ]);

    $wp_customize->add_setting( 'banner_image', array(
        'capability'        => 'edit_theme_options',
        'default'           => '',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'banner_image',
        array(
            'label'    => __( 'Banner Image', 'text-domain' ),
            'section'  => 'header_banner',
            'settings' => 'banner_image',
        )
    ));

    $wp_customize->add_setting( 'banner_heading', array(
        'capability'        => 'edit_theme_options',
        'default'           => '<?php single_post_title() ?>',
    ) );
    $wp_customize->add_control( 'banner_heading',
        array(
            'label'    => __( 'Banner Heading', 'text-domain' ),
            'section'  => 'header_banner',
            'settings' => 'banner_heading',
        )
    );
  
}
add_action( 'customize_register', 'customizer_banner');
?> 