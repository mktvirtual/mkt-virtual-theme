<?php
function debug_query(){
	global $wp_query;
	debug($wp_query);
}

function debug($value=''){
	echo '<pre class="debug">';
	var_dump($value);
	echo '</pre>';
}

function truncate($text, $length, $ending = '...', $exact = true) {
  if (strlen($text) <= $length) {
    return $text;
  } else {
    $truncate = substr($text, 0, $length - strlen($ending));
    if (!$exact) {
      $spacepos = strrpos($truncate, ' ');
    if (isset($spacepos)) {
      return substr($truncate, 0, $spacepos) . $ending;
    }
    }
    return $truncate . $ending;
  }
}

// populate an array with values from another array
function populate_array(&$target, $values, $begining=false){
  if ($begining) {
    if (isset($target)) {
      foreach ($target as $tgt) {
        $values[] = $tgt;
      }
    }
    $target = $values;
  } else {
    foreach ($values as $value) {
      $target[] = $value;
    }
  }
}

// get a template file and apply arguments if wanted
function get_template_file($file, $args = null){
  include(locate_template($file));
}
