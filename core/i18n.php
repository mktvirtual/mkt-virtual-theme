<?php
/**
 * Base Wrapper
 */

/**
 * Language array to qtranslate
 *
 * @param array $texts Texts in each language
 */
function mkt_i18n($texts){
    $output = '';
    foreach ($texts as $language => $text) {
        $output = $output . '<!--:' . $language . '-->' . $text . '<!--:-->';
    }
    _e($output);
}

/**
 * @param string $text Filter text using qtranslate
 */
function mkt_qtranslate_filter($text){
    return __($text);
}
add_filter('wpseo_title', 'mkt_qtranslate_filter', 10, 1);
add_filter('wpseo_metadesc', 'mkt_qtranslate_filter', 10, 1);
add_filter('wpseo_metakey', 'mkt_qtranslate_filter', 10, 1);
add_filter('wpseo_opengraph_title', 'mkt_qtranslate_filter', 10, 1);
