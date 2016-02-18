<!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8"/>
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
    <script src="http://html5shiv.googlecode.com/svn/trunk/htlm5.js"></script>
</head>
<body>
<header>
    <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
    <?php if (is_user_logged_in ()) { ?>
        <a href="<?php echo wp_logout_url(esc_url(home_url('/'))); ?>"> Déconnexion </a>
    <?php } else { ?>
        <a href="<?php echo wp_login_url(esc_url(home_url('/'))); ?>"> Connexion </a>
    <?php } ?>
    <?php wp_nav_menu(array(
        'theme_location'    => 'header_menu',
        'container'		 	=> 'nav',
    )); ?>
</header>