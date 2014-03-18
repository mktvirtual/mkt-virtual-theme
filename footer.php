<?php
/**
 * Footer
 */
?>
 </div> <?php // close tag of #root ?>

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
	$ifconfig = shell_exec('ifconfig');
	preg_match('/(inet\s(\d{3}\.\d{3}\.\d.*\.(\d{2}))\snetmask)/', $ifconfig, $matches);
	$serverIP = $matches[2];
	echo "<script src='http://$serverIP:3000/socket.io/socket.io.js'></script>";
	echo "<script src='http://$serverIP:3001/browser-sync-client.min.js'></script>";
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
