<?php
/**
 * Content
 */
?>

<article class="post">
    <header class="post__header">
        <h2 class="post__title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <?php the_component('components/post-meta'); ?>
    </header>

    <div class="post__summary">
        <?php the_excerpt(); ?>
    </div>
</article>
