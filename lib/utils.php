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
