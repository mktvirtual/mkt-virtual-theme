<?php
/**
 * Base Wrapper
 */
wp_reset_query();
the_component('components/head');
?>
<body <?php body_class() ?>>
    <?php
        do_action('get_header');
        the_component('components/header');
    ?>

    <div class="container" id="container" role="document">
        <main class="main" role="main">
            <?php echo $args['content']; ?>
        </main>
    </div>

    <?php the_component('components/footer'); ?>
</body>
</html><?php // closes <html> from components/head ?>
