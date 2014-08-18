<!DOCTYPE HTML>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Mkt Virtual">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <link rel="icon" href="<?php echo PATH_IMAGES.'/favicon.png' ?>">
    <link rel="alternate" type="application/+xml" href="<?php bloginfo('rss2_url'); ?>">

    <?php

    // Default css
    global $css;

    $default_stylesheets = array(
        'css/main.css'
    );
    populate_array($css, $default_stylesheets);
    get_stylesheets();

    wp_head();
    ?>

    <script src="<?php echo PATH_TEMPLATE.'/assets/bower_components/modernizr-shim/modernizr.min.js' ?>"></script>
</head>
