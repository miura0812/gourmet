<?php
add_action('init',function(){
    //アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');
    //グローバルメニューのサポート
    register_nav_menus([
        'global_nav' => 'グローバルナビゲーション'
    ]);
});

function get_eyecatch_default(){
    if(has_post_thumbnail()):
        $id = get_post_thumbnail_id();
        $img = wp_get_attachment_image_src($id,'full');
    endif;
    return $img;
}

function get_nav_menu(){
if(has_nav_menu('global_nav')) {
    $menu_name = 'global_nav';
    $locations = get_nav_menu_locations();
    $menu = wp_get_nav_menu_object($locations[$menu_name]);
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    return $menu_items;
} else {
    return [];
}
}


?>