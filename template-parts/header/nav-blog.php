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


<!--Corporate Page Banner Section-->
<div class="co-page-banner-section section"  style="background-image: url(<?php echo get_theme_mod('banner_image')?>)">
    
    <div class="container-fluid">
        <div class="row">
            
            <div class="co-page-banner text-center col-12">
                <h1><?php 
                if (is_home()) {
                    echo get_theme_mod('banner_heading');
                }
                else {
                    echo wp_title($sep = '');
                }
                ?></h1>
            </div>
            
        </div>
    </div>
    
</div>