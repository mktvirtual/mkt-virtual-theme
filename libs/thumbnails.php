<?php
if ( function_exists( 'add_image_size' ) ) add_theme_support( 'post-thumbnails' );
if ( function_exists( 'add_image_size' ) ) {
  add_image_size('post', 630, true);
}

update_option('thumbnail_size_w', 150);
update_option('thumbnail_size_h', 150);

update_option('medium_size_w', 295);
update_option('medium_size_h', 600);

update_option('large_size_w', 630);
update_option('large_size_h', 800);
