<!DOCTYPE HTML>
<html>
<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(65709457, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/65709457" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="yandex-verification" content="077261c7d5f428c9" />
    <title>NV PROblog</title>
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
            'theme_location' => 'header_menu',
            'container' => false,
        ))
        ?>
        <div class="search-bar">
            <ul>
                <li>
                    <form action="<?php echo site_url() ?>">
                        <input type="text" name="s">
                        <input type="submit" value="<?php the_search_query();?>" />
                    </form>
                </li>
            </ul>
        </div>
    </div>
    <!-- End-Header-->
    <div class="clear"> </div>
    <!-- content-gallery-->
</div>