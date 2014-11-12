<?php
/**
 * Content Single
 */
?>

<?php while (have_posts()) { the_post(); ?>
    <article class="post">
        <header class="post__header">
            <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_component('components/post-meta'); ?>
        </header>

        <div class="post__content">
            <?php the_content(); ?>
        </div>

        <footer class="post__footer">
            <?php wp_link_pages(array('before' => '<div class="pagination">', 'after' => '</div>')); ?>
        </footer>

        <?php comments_template(); ?>
    </article>

<?php } ?>
