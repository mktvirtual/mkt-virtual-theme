<?php
/**
 * Footer
 */
?>

<footer class="footer" role="contentinfo">
    <div class="container">
        <?php get_template_part('templates/copyrights'); ?>
    </div>
</footer>

<?php
get_template_part('templates/javascript-globals');
get_template_part('templates/browser-sync');

/**
 * Default scripts of the webpage
 */
global $js;

// $default_scripts = array();
// populate_array($js, $default_scripts, true);
get_scripts();

wp_footer();
