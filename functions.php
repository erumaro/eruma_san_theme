<?php

/** Remove Query strings from Static Resources. */
function _remove_script_version( $src ){
    $parts = explode( '?', $src );
    return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );

if(!function_exists('erumasan_setup')):
    function erumasan_setup(){
    require(get_template_directory().'/inc/template-tags.php');
    require(get_template_directory().'/inc/tweaks.php');
    add_theme_support('automatic-feed-links');
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'erumasan'),
        'topnav' => __('Top Menu', 'erumasan')
    ));
    }
endif;
add_action('after_setup_theme', 'erumasan_setup');

function erumasan_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Primary Widget Area', 'erumasan' ),
        'id' => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
 
    register_sidebar( array(
        'name' => __( 'Secondary Widget Area', 'erumasan' ),
        'id' => 'sidebar-2',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Left Footer Area', 'erumasan' ),
        'id' => 'sidebar-3',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Center Left Footer Area', 'erumasan' ),
        'id' => 'sidebar-4',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Center Right Footer Area', 'erumasan' ),
        'id' => 'sidebar-5',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
    
    register_sidebar( array(
        'name' => __( 'Right Footer Area', 'erumasan' ),
        'id' => 'sidebar-6',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'erumasan_widgets_init' );

function erumasan_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('tweetcss', get_template_directory_uri() . '/tweet.css', array(), 'all' );
    
    wp_deregister_script('jquery');
    wp_deregister_script('jquery-ui-core');
    wp_enqueue_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js');
    
    wp_enqueue_script('twitterfetcher', get_template_directory_uri().'/js/twitterFetcher_v10_min.js');
    wp_enqueue_script('small-menu', get_template_directory_uri().'/js/small-menu.js', array('jquery'), '20120206', true);
    wp_enqueue_script('jscustom', get_template_directory_uri().'/js/custom.js');
}
add_action('wp_enqueue_scripts', 'erumasan_scripts');
?>