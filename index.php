<?php
/**
 * Index page
 */

// $css[] = 'css/index.css'
// $js[] = 'css/index.js'
// $layout = 'blue';
?>
<?php if (!have_posts()) { ?>
    <div class="alert alert--warning">
        <?php _e('Desculpe, nenhum resultado foi encontrado.'); ?>
    </div>
<?php } ?>

<?php while (have_posts()) { the_post(); ?>
    <?php the_component('components/content'); ?>
<?php } ?>

<?php the_component('components/pagination'); ?>
