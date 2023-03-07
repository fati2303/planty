<?php

/**
 ** activation theme
 **/
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_filter('wp_nav_menu_items', 'add_admin_link', 10, 2);
function add_admin_link($items, $args)
{
    if (is_user_logged_in() && $args->menu == 303) {
        $items .= '<li class="menu-items"><a href="/planty/wp-admin">Admin</a></li>';
    }
    return $items;
}
