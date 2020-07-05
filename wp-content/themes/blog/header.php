<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Problog Website Template | Home :: W3layouts</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href='//fonts.googleapis.com/css?family=Carrois+Gothic+SC' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body>
<!-- Start-wrap -->
<!-- Start-Header-->
<div class="header">
    <div class="wrap">
        <!-- Start-logo-->
        <div class="logo">
            <a href="index.php"><img src="<?php echo get_stylesheet_directory_uri()?>/images/logo.png" title="logo" /></a>
        </div>
        <!-- End-Logo-->
        <!-- Start-Header-nav-->
        <div class="clear"> </div>
        <!-- End-Header-nav-->
    </div>
</div>
<div class="header-nav1">
    <div class="wrap">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'head_menu',
            'container' => false,
        ))
        ?>
        <div class="search-bar">
            <ul>
                <li><input type="text"></li>
                <li><form><input type="submit" value="" /></form></li>
            </ul>
        </div>
    </div>
    <!-- End-Header-->
    <div class="clear"> </div>
    <!-- content-gallery-->
</div>