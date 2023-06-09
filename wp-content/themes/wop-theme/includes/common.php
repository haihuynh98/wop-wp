<?php
/**
 * Enqueue scripts and styles.
 */
function wop_scripts()
{
    wp_enqueue_style('gfont-poppins', 'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap');
    wp_enqueue_style('gfont-sora', 'https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&display=swap');
    wp_enqueue_style('gfont-lexend', 'https://fonts.googleapis.com/css2?family=Lexend+Deca:wght@100;200;300;400;500;600;700;800;900&display=swap');
    wp_enqueue_style('wop-plugins', ASSETS_URL . '/css/plugins.css');
    wp_enqueue_style('wop-plugins-style', ASSETS_URL . '/css/style.css');
    wp_enqueue_style('wop-style', ASSETS_URL . '/css/wop-style.css');
    wp_enqueue_style('wop-phone-button', ASSETS_URL . '/css/phone-button.css');

    wp_enqueue_script('wop-jquery', ASSETS_URL . '/js/jquery-3.6.0.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-jquery-migrate', ASSETS_URL . '/js/jquery-migrate-3.4.0.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-plugins', ASSETS_URL . '/js/plugins.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-ScrollTrigger', ASSETS_URL . '/js/ScrollTrigger.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-parallax', ASSETS_URL . '/js/parallax.min.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-hscroll', ASSETS_URL . '/js/hscroll.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-plugin-scripts', ASSETS_URL . '/js/scripts.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-scripts', ASSETS_URL . '/js/wop-script.js', array(), _S_VERSION, true);
    wp_enqueue_script('wop-videopopup', ASSETS_URL . '/js/videopopup.js', array(), _S_VERSION, true);
}
add_action('wp_enqueue_scripts', 'wop_scripts');


function get_wop_top_menu()
{
    $locations = get_nav_menu_locations();
    $theme_location = 'menu-1';
    $menu = get_term($locations[$theme_location], 'nav_menu');

    return get_menu_items($menu->term_id);
}

function get_menu_items($menu_id)
{
    $menu_items = wp_get_nav_menu_items($menu_id);
    $menu_array = array();

    foreach ($menu_items as $item) {
        $menu_item = array(
            'title' => $item->title,
            'url' => $item->url,
            'children' => array()
        );

        if ($item->menu_item_parent) {
            $parent_id = $item->menu_item_parent;
            $menu_array[$parent_id]['children'][] = $menu_item;
        } else {
            $menu_array[$item->ID] = $menu_item;
        }
    }

    return $menu_array;
}

function get_child_of_page($parent_page)
{
    // Lấy danh sách các trang con
    $subpages = get_pages(
        array(
            'child_of' => $parent_page,
			'sort_column' => 'menu_order'
        )
    );

    $result = [];

    // Hiển thị liên kết của các trang con
    foreach ($subpages as $key => $subpage) {
        $result[$key]=['id' =>$subpage->ID, 'url'=>get_permalink($subpage->ID), 'title' => $subpage->post_title];
     
    }
    return $result;
}
