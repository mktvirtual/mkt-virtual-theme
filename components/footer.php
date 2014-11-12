<?php
/**
 * Footer
 */
?>

<footer class="footer" role="contentinfo">
    <div class="container">
        <?php the_component('components/copyrights'); ?>
    </div>
</footer>

<?php
the_component('components/javascript-globals');
the_component('components/browser-sync');

/**
 * Default scripts of the webpage
 */
global $js;

// $default_scripts = array();
// populate_array($js, $default_scripts, true);
get_scripts();

wp_footer();
