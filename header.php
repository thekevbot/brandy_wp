<!DOCTYPE html>
<html>
<head>
    <title>Brandy Maddison Events</title>

    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body>
    <header>
        <nav class="container main-nav-wrapper">
            <ul class="social-nav social-dark">
                <li class="social-btn"><a href="<?php the_field('facebook_url', 'option'); ?>"><i class="icon icon-facebook"></i></a></li>
                <li class="social-btn"><a href="<?php the_field('twitter_url', 'option'); ?>"><i class="icon icon-twitter"></i></a></li>
                <li class="social-btn"><a href="<?php the_field('pinterest_url', 'option'); ?>"><i class="icon icon-pinterest"></i></a></li>
                <li class="social-btn"><a href="<?php the_field('instagram_url', 'option'); ?>"><i class="icon icon-instagram"></i></a></li>
            </ul>
            <a class="btn btn-gold btn-xs" id="client-login" href="<?php the_field('client_login_url', 'option'); ?>"><span>Client Login</span></a>
            <ul class="main-nav">
                <li class="nav-cell nav-left">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-left', 'menu_id' => 'menu-left') ); ?>
                </li>
                <li class="nav-cell nav-logo">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php bloginfo('template_directory'); ?>/img/logo-bme.svg" alt="Brandy Maddison Events"/>
                    </a>
                </li>
                <li class="nav-cell nav-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'menu-right', 'menu_id' => 'menu-right') ); ?>
                </li>
                <li class="btn-mobile-menu"><a href="javascript:;">Menu</a></li>
            </ul>
        </nav>
    </header>
