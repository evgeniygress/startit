<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Meta Tags -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
        <meta name="description" content="Carrby - Agency Template">
        <meta name="author" content="">



        <!-- Favicon and Touch Icons -->
        <link href="images/favicon.png" rel="shortcut icon" type="image/png">

        <?php wp_head(); ?>
    </head>
        <body>   
            <!-- Start Header -->
            <header id="header" class="header">
                <div class="navigation">
                    <div class="container">
                        <nav id="flexmenu">
                            <div class="logo">
                                <a href="#"><img src="<?php the_field('header-logo'); ?>" alt="logo"></a>
                            </div>
                            <div class="nav-inner">
                                <div id="mobile-toggle" class="mobile-btn"></div>
                                <?php if ( has_nav_menu('menutop') ) wp_nav_menu( array('theme_location' => 'menutop', 'menu_class' => 'main-menu')); ?>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>