<?php

//const for public info
define('SITE_URL',get_home_url());
define('THEME_DIR',get_template_directory_uri());


//set theme support
function karin_setup() :void
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'karin_setup');



//enqueue style and js theme


function set_style_scripts():void
{

    //set css for theme
    wp_enqueue_style( 'karin-style', THEME_DIR.'/public/styles/final.css' , array(), '1.0', 'all' );
    wp_enqueue_style('karin-swiper',THEME_DIR.'/node_modules/swiper/swiper-bundle.css');

    //set js for theme
    wp_enqueue_script('karin-swiper-js',THEME_DIR.'/node_modules/swiper/swiper-bundle.min.js' , array(), '1.0', true );
    wp_enqueue_script('karin-app-js',THEME_DIR.'/public/scripts/app.js', array(), '1.0',  true);
    wp_enqueue_script('karin-slider-js',THEME_DIR.'/public/scripts/slider.js' , array(), '1.0', true);
    wp_enqueue_script('karin-time-js',THEME_DIR.'/public/scripts/timer.js' , array(), '1.0',  true);

}


add_action('after_setup_theme', 'set_style_scripts');

