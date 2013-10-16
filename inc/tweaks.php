<?php
function erumasan_page_menu_args($args){
    $args['show_home'] = true;
    return $args;
}
add_filter('wp_page_menu_args', 'erumasan_page_menu_args');

function erumasan_body_classes($classes){
    if(is_multi_author()){
        $classes[] = 'group-blog';
    }
    
    return $classes;
}
add_filter('body_class', 'erumasan_body_classes');

function erumasan_enhanced_image_navigation($url, $id){
    if(!is_attachment() && !wp_attachment_is_image($id))
        return $url;
    $image = get_post($id);
    if(!empty($image->post_parent) && $image->post_parent !=$id)
        $url .= '#main';
    return $url;
}
add_filter('attachment_link', 'erumasan_enhanced_image_navigation', 10, 2);