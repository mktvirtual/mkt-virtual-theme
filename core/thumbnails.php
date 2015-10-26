<?php
/**
 * Thumbnails
 */

/**
 * Default WordPress sizes
 */
update_option('thumbnail_size_w', 150);
update_option('thumbnail_size_h', 150);

update_option('medium_size_w', 295);
update_option('medium_size_h', 600);

update_option('large_size_w', 630);
update_option('large_size_h', 800);

/**
 * Custom sizes
 */
if (function_exists('add_image_size')) {
    add_image_size('slideshow', 940, 413, true);
}

