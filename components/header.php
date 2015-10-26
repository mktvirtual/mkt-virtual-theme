<?php
/**
 * Header
 */
?>

<header class="header" role="banner">
    <div class="container" itemscope itemtype="http://schema.org/ImageObject">
        <?php if (is_front_page()): ?>
            <span class="logo">
                <img itemprop="contentUrl" itemprop="image" src="<?php bloginfo('template_directory'); ?>/assets/img/isabel-soares.png" alt="Isabel Soares - Desenvolvimento Humano e Organizacional">
            </span>
        <?php else: ?>
            <a class="logo" rel="Index" href="<?php bloginfo('url'); ?>"><img itemprop="contentUrl" itemprop="image" src="<?php bloginfo('template_directory'); ?>/assets/img/isabel-soares.png" alt="Isabel Soares - Desenvolvimento Humano e Organizacional"></a>
        <?php endif ?>

        <nav class="header__nav" role="navigation">
            <?php
            if (has_nav_menu('main-menu')) {
                wp_nav_menu(array('theme_location' => 'main-menu', 'menu_class' => 'main-menu'));
            }
            ?>
        </nav>
    </div>
</header>
<div class="sticky-header"></div>
