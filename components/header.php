<?php
/**
 * Header
 */
?>

<header class="header" role="banner">
    <div class="container">
        <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>

        <nav class="header__nav" role="navigation">
            <?php
            if (has_nav_menu('main-menu')) {
                wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu'));
            }
            ?>
        </nav>
    </div>
</header>
