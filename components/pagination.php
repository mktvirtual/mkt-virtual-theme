<?php
/**
 * Pagination
 */
?>

<?php if ($wp_query->max_num_pages > 1) { ?>
    <ul class="pagination">
        <li class="pagination__previous"><?php next_posts_link('&larr; Posts anteriores'); ?></li>
        <li class="pagination__next"><?php previous_posts_link('Próximos posts &rarr;'); ?></li>
    </ul>
<?php } ?>
