<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.png">
        <title><?php wp_title(); ?></title>
        <?php wp_head(); ?>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-67863715-1', 'auto');
          ga('send', 'pageview');
        </script>
    </head>
    <body <?php body_class(); ?>>
        <button class="close-btn"><i class="fi-list"></i></button>
    <div class="mobile-nav-container">
        <nav class="mobile-nav">
            <ul>
                <li><a href="/" class="current">Home</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="jobs.html">Jobs</a></li>
                <li><a href="contact-us.html">Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <div id="contentarea">
        <header>
            <div class="row">
                <div class="large-12 columns">
                    <div class="branding left">
                        <a href="<?php get_home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/assets/img/caskadia_logo.png" class="logo" alt="Caskadia" width="248" height="50"></a>
                    </div>
                    <nav class="nav main-nav right">
                        <?php wp_nav_menu( array('menu' => 'Main nav' )); ?>
                    </nav>
                </div>
            </div>
        </header>