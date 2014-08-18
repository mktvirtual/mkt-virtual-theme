<?php
/**
 * Utils
 */

/**
 * Debugs any value with <pre> tag wrapping it
 *
 * @param any $value Value to be debugged
 */
function debug($value) {
    echo '<pre class="debug">';
    var_dump($value);
    echo '</pre>';
}

/**
 * Debugs WordPress global $wp_query
 */
function debug_query() {
    global $wp_query;
    debug($wp_query);
}

/**
 * Populates array with values from an array
 *
 * @param array $target Array to be populated
 * @param array $values Values to populate $target
 * @param bool $beginning Populate unshifting array
 */
function populate_array(&$target, $values, $beginning = false) {
    if ($beginning) {
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
