<?php
/**
 * Layout Loader
 *
 * Loads the right layout with the right content inside it
 */

ob_start();
    include mkt_template_path();
    $content = ob_get_contents();
ob_end_clean();

$layout = isset($layout) ? $layout : 'default';

the_component('layouts/'.$layout, array(
    'content' => $content
));
