<!doctype html>
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php wp_title(''); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
		
	<meta name="description" content="Description">
	<meta name="keywords" content="Keywords">
	<meta name="author" content="Terence Devine, info@terencedevine.com">
	
	<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico">
	<link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/img/apple-touch-icon.png">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<script src="<?php bloginfo('template_url'); ?>/js/lib/modernizr-ck.js"></script>
	
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css">
	
	<?php wp_head(); ?>

</head>
<body <?php body_class($class); ?>>
	<div class="wrap">
		<header role="banner">
			<hgroup>
				<h1><a href="<?php echo get_option('home'); ?>">
					<img src="<?php bloginfo('template_url'); ?>/img/logo.png" alt="<?php bloginfo('name'); ?>" width="400" height="52">
				</a></h1>
				<h2><?php bloginfo('description'); ?></h2>
			</hgroup>
			<nav class="main-nav">
				<?php wp_nav_menu( array(
					'menu' => 'Main Navigation',
					'container' => false
				) ); ?>
			</nav>
		</header>
	</div>