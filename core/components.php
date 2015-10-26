<?php
/**
 * Component Helpers
 */

/**
 * Get a component from the components folder. It allows the use of arguments
 *
 * @param string $path Path to the component file
 * @param array  $args Array of arguments to pass to the component file
 */
function get_component($path, $args = array()) {
    ob_start();
        include(locate_template($path.'.php'));
        $component = ob_get_contents();
    ob_end_clean();

    return $component;
}

/**
 * Echo a component from the components folder. It allows the use of arguments
 * Works as a simple wrapper to get_component
 *
 * @param string $path Path to the component file
 * @param array  $args Array of arguments to pass to the component file
 */
function the_component($path, $args = null) {
    echo get_component($path, $args);
}
