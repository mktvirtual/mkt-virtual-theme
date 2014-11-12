<?php
/**
 * Browser sync
 */
if($_SERVER['SERVER_PORT'] == '8888'){
    echo '<script type=\'text/javascript\'>//<![CDATA[
;document.write("<script async src=\'//HOST:3000/browser-sync/browser-sync-client.js\'><\/script>".replace(/HOST/g, location.hostname));
//]]></script>';
}
