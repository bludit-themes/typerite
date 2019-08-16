<!DOCTYPE html>
<html class="no-js" lang="<?php echo Theme::lang() ?>">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <?php echo Theme::metaTags('title') ?>
    <?php echo Theme::metaTags('description') ?>
    <meta name="author" content="">
    <meta name="generator" content="Bludit">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <?php echo Theme::css('css/base.css') ?>
    <?php echo Theme::css('css/vendor.css') ?>
    <?php echo Theme::css('css/main.css') ?>

    <!-- script
    ================================================== -->
    <?php echo Theme::js('js/modernizr.js') ?>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo Theme::src('apple-touch-icon.png') ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo Theme::src('favicon-32x32.png') ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo Theme::src('favicon-16x16.png') ?>">
    <link rel="manifest" href="<?php echo Theme::src('site.webmanifest') ?>">

</head>

<body>

    <!-- preloader
    ================================================== -->
    <div id="preloader">
        <div id="loader" class="dots-fade">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <div id="top" class="s-wrap site-wrapper">

        <!-- site header
        ================================================== -->
        <header class="s-header">

            <div class="header__top">
                <div class="header__logo">
                    <a class="site-logo" href="<?php echo Theme::siteUrl() ?>">
                        <img src="<?php echo ($site->logo()?$site->logo():Theme::src('images/logo.svg')) ?>" alt="Homepage">
                    </a>
                </div>

                <?php if (pluginActivated('pluginSearch')): ?>
                <div class="header__search">

                    <form role="search" method="get" class="header__search-form" action="#">
                        <label>
                            <span class="hide-content">Search for:</span>
                            <input id="search-input" type="search" class="header__search-field" placeholder="Type Keywords" value="" name="s" title="Search for:" autocomplete="off">
                        </label>
                        <input type="button" onClick="searchNow()" class="header__search-submit" value="Search">
                    </form>

                    <a href="#0" title="Close Search" class="header__search-close">Close</a>

                    <script>
                        function searchNow() {
                            var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                            window.open(searchURL + document.getElementById("search-input").value, "_self");
                        }
                        document.getElementById("search-input").onkeypress = function(e) {
                            if (!e) e = window.event;
                            var keyCode = e.keyCode || e.which;
                            if (keyCode == '13') {
                                searchNow();
                                return false;
                            }
                        }
                    </script>

                </div>  <!-- end header__search -->
                <a href="#0" class="header__search-trigger"></a>
                <?php endif ?>

                <a href="#0" class="header__menu-toggle"><span>Menu</span></a>

            </div> <!-- end header__top -->

            <nav class="header__nav-wrap">

                <ul class="header__nav">
                    <li class="current"><a href="<?php echo Theme::siteUrl() ?>" title="">Home</a></li>

                    <!-- Categories -->
		            <li class="has-children">
                        <a href="#0" title="">Categories</a>
                        <ul class="sub-menu">
                        <?php foreach ($categories->db as $categoryKey=>$categoryFields): ?>
                        <li><a href="<?php echo DOMAIN_CATEGORIES.$categoryKey ?>"><?php echo $categoryFields['name'] ?></a></li>
                        <?php endforeach ?>
                        </ul>
                    </li>

                    <!-- Static pages -->
                    <?php foreach ($staticContent as $staticPage): ?>
                    <li><a href="<?php echo $staticPage->permalink() ?>" title=""><?php echo $staticPage->title() ?></a></li>
                    <?php endforeach ?>

                </ul> <!-- end header__nav -->

                <ul class="header__social">
                    <?php foreach (Theme::socialNetworks() as $key=>$label): ?>
                    <li class="ss-<?php echo $key ?>">
                        <a href="<?php echo $site->{$key}() ?>">
                            <span class="screen-reader-text"><?php echo $label ?></span>
                        </a>
                    </li>
                    <?php endforeach ?>
                </ul>

            </nav> <!-- end header__nav-wrap -->

        </header> <!-- end s-header -->

        <!-- site content
        ================================================== -->
        <?php
            if ($WHERE_AM_I == 'page') {
                include(THEME_DIR.'page.php');
            } else {
                include(THEME_DIR.'home.php');
            }
        ?>

        <!-- footer
        ================================================== -->
        <footer class="s-footer">
            <div class="row">
                <div class="column large-full footer__content">
                    <div class="footer__copyright">
                        <span><?php echo $site->footer() ?></span>
                        <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
                        <span>Powered by <a href="https://www.bludit.com.com/">Bludit</a></span>
                    </div>
                </div>
            </div>

            <div class="go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </footer>

    </div> <!-- end s-wrap -->


    <!-- Java Script
    ================================================== -->
    <?php echo Theme::jquery() ?>
    <?php echo Theme::js('js/plugins.js') ?>
    <?php echo Theme::js('js/main.js') ?>

</body>