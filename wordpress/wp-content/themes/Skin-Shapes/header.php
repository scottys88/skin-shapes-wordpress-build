<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="/skin-shapes-wordpress/favicon.ico" />
		<?php wp_head() ?>
		<title><?php bloginfo('title'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		
	</head>

	<body>


			<div id="topNavDesktop">
				<ul class="desktop-menu">
					<li class="header-link"><a href="home">Home</a></li>
					<li class="header-link"><a href="about">About</a></li>
					<li class="header-link"><a href="shop">Shop</a></li>
					<li class="header-link"><a href="contact">Contact</a></li>
					<li class="header-link"><a href="cart">Cart</a></li>
				</ul>
			</div>

			<div id="topNavMobile" class="clearfix">
				<div class="menuButton pull-right"><i class="ion-navicon-round mobile-menu-toggle pull-left"></i></div>
				<br><ul class="mobile-menu inactive">
					<li><a class="header-link-mobile" href="home"><!--<i class="ion-ios-home mobile-menu-icon"></i>-->Home</a></li>
					<li><a class="header-link-mobile" href="about"><!--<i class="ion-ios-lightbulb mobile-menu-icon"></i>-->About</a></li>
					<li><a class="header-link-mobile" href="shop"><!--<i class="ion-android-favorite mobile-menu-icon"></i>-->Shop</a></li>
					<li><a class="header-link-mobile" href="contact"><!--<i class="ion-android-call mobile-menu-icon"></i>-->Contact</a>
					<li><a class="header-link-mobile" href="cart"><!--<i class="ion-android-call mobile-menu-icon"></i>-->Cart</a></li>
					<li><p class="mobile-menu-p"><?php bloginfo('description'); ?></p></li>
				</ul>

			</div>
