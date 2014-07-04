<?php
/**
 * Content page
 */

while (have_posts()) {
    the_post();
    the_content();
    wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>'));
}
