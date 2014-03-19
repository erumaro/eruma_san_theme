<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="keywords" content="portfolio, webbdesign, web design, webbutvecklare, web developer, front-end utvecklare, front-end developer, wordpress, responsiv design, responsive design">
    <meta name="description" content="Eruma är front-end utvecklaren Tobias Åruds portfolio.">  
    <meta name="author" content="Tobias Årud"> 
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <title><?php
    /*
    * Print the <title> tag based on what is being viewed.
    */
    global $page, $paged;

    wp_title( '|', true, 'right' );

    // Add the blog name.
    bloginfo( 'name' );

    // Add the blog description for the home/front page.
    $site_description = get_bloginfo( 'description', 'display' );
    if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

    // Add a page number if necessary:
    if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', 'erumasan' ), max( $paged, $page ) );

    ?></title>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+("devicePixelRatio" in window ? ","+devicePixelRatio : ",1")+'; path=/';</script>
    <?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
    <!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header role="banner" class="site-header clearfix">
        <nav class="top-navigation clearfix">
            <div class="wrapper">
                <?php wp_nav_menu( array( 'theme_location' => 'topnav' ) ); ?>
                <ul id="top-social">
                    <li id="linkedin"><a href="http://www.linkedin.com/in/tobiasarud">LinkedIn</a></li>
                    <li id="facebook"><a href="http://www.facebook.com/tobias.arud">Facebook</a></li>
                    <li id="googleplus"><a href="https://plus.google.com/u/0/110183922780257889839/posts">Google+</a></li>
                    <li id="twitter"><a href="https://twitter.com/Eruvaeron">Twitter</a></li>
                    <li id="tumblr"><a href="http://eruma.tumblr.com/">Tumblr</a></li>
                    <li id="spotify"><a href="http://open.spotify.com/user/erumaro">Spotify</a></li>
                    <li id="rss"><a href="http://www.eruma.se/feed/rss2/">RSS</a></li>
                </ul>
            </div>
        </nav>
        <div id="logonav" class="wrapper">
            <h1 class="site-title">
                <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logo.png"  alt="<?php bloginfo( 'name' ); ?>" />
                </a>
            </h1>
            <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
            <nav role="navigation" class="site-navigation main-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            </nav><!-- .site-navigation .main-navigation -->
        </div>
    </header>
    <div class="divider wrapper"></div>
    <div id="main" class="site-main wrapper clearfix">