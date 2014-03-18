<?php
add_editor_style();

add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );
register_nav_menu( 'main-menu', 'Main Menu' );

function get_dir_path(){
  return str_replace('/libs', '/', dirname(__FILE__));
}

//Paths
define('PATH_TEMPLATE', get_bloginfo('template_directory'));
define('PATH_IMAGES', get_bloginfo('template_directory') . '/assets/images');
define('PATH_URL', get_bloginfo('url'));
