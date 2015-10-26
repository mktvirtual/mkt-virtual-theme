<?php
/**
 * Init
 */

/**
 * Theme support
 */
add_theme_support('post-thumbnails');
add_theme_support('menus');
add_theme_support('post-thumbnails');

/**
 * Menus
 */
register_nav_menu('main-menu', 'Menu Principal');

/**
 * Path constants
 */
define('PATH_TEMPLATE', get_bloginfo('template_directory'));
define('PATH_IMAGES', get_bloginfo('template_directory') . '/assets/img');
define('PATH_URL', get_bloginfo('url'));
