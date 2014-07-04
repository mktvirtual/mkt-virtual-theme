<?php
/**
 * Base Wrapper
 */

get_template_part('templates/head');
?>
<body <?php body_class() ?>>
    <?php
        do_action('get_header');
        get_template_part('templates/header');
    ?>

    <div class="container" id="container" role="document">
        <main class="main" role="main">
            <?php include mkt_template_path(); ?>
        </main>
    </div>

    <?php get_template_part('templates/footer'); ?>
</body>
</html><?php // closes <html> from templates/head ?>
