<!DOCTYPE HTML>
<html class="no-js" <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta name="author" content="Octopus Digital">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="<?php echo PATH_IMAGES.'/favicon.png' ?>">
    <link rel="alternate" type="application/+xml" href="<?php bloginfo('rss2_url'); ?>">
    <title><?php wp_title(); ?></title>
    

    <link href='https://fonts.googleapis.com/css?family=Droid+Sans:400,700|Droid+Serif:400,700|Ubuntu:400,300' rel='stylesheet' type='text/css'>

    <?php

    // Default css
    global $css;

    $default_stylesheets = array(
        'css/main.css',
        'css/sprites.css',
        '../assets/bower_components/normalize.css/normalize.css',
        '../assets/bower_components/slick.js/slick/slick.css',
        '../assets/bower_components/slick.js/slick/slick-theme.css'
    );
    populate_array($css, $default_stylesheets);
    get_stylesheets();

    wp_head();
    ?>

    <script async src="<?php echo PATH_TEMPLATE.'/assets/bower_components/modernizr-shim/modernizr.min.js' ?>"></script>
</head>
