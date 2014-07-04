<?php
/**
 * Browser sync
 */
if($_SERVER['SERVER_PORT'] == '8888'){
    echo '<script type=\'text/javascript\'>//<![CDATA[
;document.write("<script async src=\'//HOST:3000/browser-sync-client.1.1.0.js\'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>';
}
