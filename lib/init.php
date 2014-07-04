<?php
add_editor_style();

add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-thumbnails');
register_nav_menu('main-menu', 'Menu Principal');

define('PATH_TEMPLATE', get_bloginfo('template_directory'));
define('PATH_IMAGES', get_bloginfo('template_directory') . '/assets/images');
define('PATH_URL', get_bloginfo('url'));
