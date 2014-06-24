<?php
/**
 * Footer
 */
?>

 </div> <?php // close tag of #root ?>

<?php
/**
 * Javascript Global Variables
 */
?>
<script>
	GLOBAL_VARS = {
		// URL_BASE é a URL do tema
		URL_BASE: '<?php echo PATH_TEMPLATE ?>',
		ROOT_URL: '<?php echo PATH_URL ?>'
	};
</script>

<?php
/**
 * Browser sync
 */
if($_SERVER['SERVER_PORT'] == '8888'){
	echo '<script type=\'text/javascript\'>//<![CDATA[
;document.write("<script async src=\'//HOST:3000/browser-sync-client.1.1.0.js\'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>';
}

/**
 * Default scripts of the webpage
 */
global $js;

// $default_scripts = array();
// populate_array($js, $default_scripts, true);

get_scripts();
wp_footer();
?>

</body>
</html>
