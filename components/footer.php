<?php
/**
 * Footer
 */
?>

<footer class="footer" role="contentinfo">
    <div class="container">
        Copyright © 2015 · Todos os direitos reservados · Isabel Soares <a href="#"><i class="icon-linkedin"></i></a>
    </div>
</footer>

<?php
the_component('components/javascript-globals');
the_component('components/browser-sync');

/**
 * Default scripts of the webpage
 */
global $js;

$default_scripts = array(
	'../assets/bower_components/jquery/dist/jquery.min.js',
	'../assets/bower_components/slick.js/slick/slick.min.js',
	'../assets/js/default.js'
);

populate_array($js, $default_scripts, true);
get_scripts();
wp_footer();
