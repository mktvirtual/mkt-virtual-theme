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
