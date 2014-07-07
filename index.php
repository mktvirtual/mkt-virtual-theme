<?php
/**
 * Index page
 */

// $css[] = 'css/index.css'
// $js[] = 'css/index.js'
?>

<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) { ?>
    <div class="alert alert--warning">
        <?php _e('Desculpe, nenhum resultado foi encontrado.'); ?>
    </div>
<?php } ?>

<?php while (have_posts()) { the_post(); ?>
    <?php get_template_part('templates/content', get_post_format()); ?>
<?php } ?>

<?php get_template_part('templates/pagination'); ?>
