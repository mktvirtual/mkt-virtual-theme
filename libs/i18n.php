<?php
// Enable qTranslate for WordPress SEO
function qtranslate_filter($text){
  return __($text);
}
add_filter('wpseo_title', 'qtranslate_filter', 10, 1);
add_filter('wpseo_metadesc', 'qtranslate_filter', 10, 1);
add_filter('wpseo_metakey', 'qtranslate_filter', 10, 1);
add_filter('wpseo_opengraph_title', 'qtranslate_filter', 10, 1);

function langs($arr){
  $temp = '';
  foreach ($arr as $key => $value) {
    $temp = $temp . '<!--:' . $key . '-->' . $value . '<!--:-->';
  }
  _e($temp);
}