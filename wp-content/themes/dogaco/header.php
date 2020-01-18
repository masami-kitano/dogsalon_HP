<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
		  <meta name="keywords" content="DogAco,dogaco,ドッグアコ、堺市,トリミングサロン,ドッグサロン">
		  <meta property="og:title" content="Dog Aco" />
		  <meta property="og:type" content="website" />
		  <meta property="og:url" content="https://www.dogaco-trimming.com/" />
		  <meta property="og:site_name" content="DogAco" />
		  <meta property="og:description" content="DogAcoは堺市にあるトリミングサロンです。" />
		  <meta name="twitter:card" content="summary" />
		  <meta name="twitter:title" content="Dog Aco" />
		  <meta name="twitter:description" content="DogAco" />
        <title>Dog Aco | <?php wp_title('|', true, 'right'); ?> 堺市堺区にあるトリミングサロン</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no,">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/reset.css">
        <link rel='stylesheet' id='top-css'  href='<?php bloginfo('template_directory'); ?>/css/style.css' type='text/css'>
        <link rel="shortcut icon" href="https://dogaco-trimming.com/wp-content/themes/dogaco/img/DogAco.ico">
        <link  rel="stylesheet" href="https://dogaco-trimming.com/wp-content/themes/dogaco/js/slick.css">
        <link rel="stylesheet" href="https://dogaco-trimming.com/wp-content/themes/dogaco/js/slick-theme.css">
        <link rel="stylesheet" href="https://use.typekit.net/sys4qmp.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <?php wp_head(); ?>
    </head>
    <body>
       <div class="foot-animation">
          <img class="footprint-head footprint-header1" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
          <img class="footprint-head footprint-header2" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
          <img class="footprint-head footprint-header3" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
          <img class="footprint-head footprint-header4" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
          <img class="footprint-head footprint-header5" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
          <img class="footprint-head footprint-header6" src="<?php bloginfo('template_directory'); ?>/img/footprint-animation.png" alt="dogaco">
       </div>
       <header id="header" class="container">
          <div class="header-logo">
              <a href="<?php echo home_url('/'); ?>">
                  <img src="<?php bloginfo('template_directory'); ?>/img/dogaco-logo.png" alt="ロゴマーク" width="153" height="auto">
              </a>
           </div>
           <nav class="global-nav">
              <?php wp_nav_menu(); ?>
           </nav>
           <div id="js-hamburger" class="hamburger">
                <span class="hamburger__line hamburger__line--1"></span>
                <span class="hamburger__line hamburger__line--2"></span>
                <span class="hamburger__line hamburger__line--3"></span>
           </div>
           <div id="js-black-bg" class="black-bg"></div>
       </header><!-- /header -->
    <?php wp_head(); ?>
