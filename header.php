<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-BR"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="pt-BR"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="pt-BR"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="pt-BR"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <title><?php wp_title(); ?></title>
  <link rel="icon" href="<?php echo PATH_IMAGES.'/favicon.png' ?>">
  <link rel="alternate" type="application/+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php site_url(); ?>/feed/">
  <meta name="viewport" content="width=1024">
  <meta name="author" content="">

  <?php

  // Default css
  global $css;

  $default_stylesheets = array(
    'css/page.defaults.css'
  );
  populate_array($css, $default_stylesheets;

  get_stylesheets();
  wp_head();
  ?>

  <script src="<?php echo PATH_TEMPLATE.'/assets/bower_components/modernizr-shim/modernizr.min.js' ?>"></script>
</head>
<body <?php body_class() ?>>
  <div class="root" id="root">
    <?php
    /**
     * Site content
     */
    ?>
