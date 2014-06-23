<?php
function get_scripts(){
    global $js;
    if (isset($js)):
    foreach ($js as $script) { ?>
        <script src="<?php echo PATH_TEMPLATE ?>/assets/<?php echo $script; ?>"></script>
    <?php
    }
    endif;
}

function get_stylesheets(){
    global $css;
    if (isset($css)):
    foreach ($css as $stylesheet) { ?>
        <link rel="stylesheet" href="<?php echo PATH_TEMPLATE ?>/assets/<?php echo $stylesheet; ?>" />
    <?php
    }
    endif;
}
