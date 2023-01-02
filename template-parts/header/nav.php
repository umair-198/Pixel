<div class="header-section section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <!--Logo-->
                <div class="float-left">
                    <a href="<?php bloginfo('url'); ?>" class="header-logo site-logod"><?php if ( has_custom_logo() ) : ?>
		            <div id="site-logo"><?php the_custom_logo(); ?></div>
	                <?php endif; ?>
	            <div id="logo-name">
                    <span  class="site-logodd" ><?php echo get_bloginfo( 'name' ); ?></span>
                    <?php
                    if (get_bloginfo( 'description' )) {?>
                        <p class="tagline"><?php echo get_bloginfo( 'description' ); ?></p>
                         <?php
                    } ?></div>
                    </a>
                </div>
                <!--Menu-->
                <div class="float-right">
                <?php
                    wp_nav_menu( 
                            [
                            'theme_location'=>'pixel-header-menu',
                            'container_class'=>'main-menu multi-page-menu text-black'
                            ]
                    )

                ?>
                    <!-- <a href="#" class="btn btn-border-gradient btn-hover-gradient">buy now</a> -->
                    <?php 
                    //add http prefix to url when missing
                    $url=get_theme_mod('header_button_link');
                    if  ( $ret = parse_url($url) ) {

                        if ( !isset($ret["scheme"]) )
                         {
                         $url = "https://{$url}";
                         }
                  }
                  $button_text=get_theme_mod('header_button_text');
                    if($button_text||$url) {?>
                    <a href="<?php echo $url;?>" class="btn btn-border-gradient btn-hover-gradient box"><?php echo $button_text;?></a>
                    <?php } ?>
                </div>
                <!--Mobile Menu-->
                <div class="mobile-menu multi-page text-black"></div>
            </div>
        </div>
    </div>
</div>

<!--Corporate Hero Section 1-->
<div class="co-hero-section-1 section">
    
    <!--Creative 1 Hero Slider-->
    <div class="co-hero-slider-1 hero-slider">
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-1" style="background-image: url('<?php echo get_theme_mod( 'slide_1_image' ) ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-1">
                            <h4><?php echo get_theme_mod( 'header_slider_1_text_1' ) ?></h4>
                            <h1><?php echo get_theme_mod( 'header_slider_1_text_2' ) ?></h1>
                            <!-- <a href="corporate-about.html" class="btn btn-white btn-lg btn-hover-gradient">Learn More</a> -->
                            <?php 
                                 //add http prefix to url when missing
                                $urls=get_theme_mod('header_slider_button_link_2');
                                if  ( $ret = parse_url($urls) ) {

                                    if ( !isset($ret["scheme"]) )
                                    {
                                        $urls = "https://{$urls}";
                                    }
                                }
                            $button_texts=get_theme_mod('header_slider_button_text_1');
                            if($button_texts||$urls) {?>
                            <a href="<?php echo $urls;?>" class="btn btn-white btn-lg btn-hover-gradient"><?php echo $button_texts;?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Hero Slide Item-->
        <div class="co-hero-slide-item-1" style="background-image: url('<?php echo get_theme_mod( 'slide_2_image' ) ?>;">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <!--Hero Slide Content-->
                        <div class="co-hero-slide-content-1">
                            <h4><?php echo get_theme_mod( 'header_slider_2_text_1' ) ?></h4>
                            <h1><?php echo get_theme_mod( 'header_slider_2_text_2' ) ?></h1>
                            <!-- <a href="corporate-about.html" class="btn btn-white btn-lg btn-hover-gradient">Learn More</a> -->
                            <?php 
                                 //add http prefix to url when missing
                                $urls=get_theme_mod('header_slider_button_link_2');
                                if  ( $ret = parse_url($urls) ) {

                                    if ( !isset($ret["scheme"]) )
                                    {
                                        $urls = "https://{$urls}";
                                    }
                                }
                            $button_texts=get_theme_mod('header_slider_button_text_2');
                            if($button_texts||$urls) {?>
                            <a href="<?php echo $urls;?>" class="btn btn-white btn-lg btn-hover-gradient"><?php echo $button_texts;?></a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>