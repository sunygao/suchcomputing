<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title><?= $settings->getPageTitle() ?></title>

	<!-- BEGIN: meta tags -->
		<meta charset="UTF-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="shortcut icon" href="favicon.ico"/> 

		<meta name="description" content="<?= $settings->description ?>">
		<meta name="keywords" content=""/>
		<meta name="author" content="">
	<!-- END: meta tags -->

	<!-- BEGIN: OG FBook meta tags -->
		<meta property="og:type" content="website"/> 
		<meta property="og:image" content="<?= $settings->protocol ?>://<?= $settings->server_name ?>/media/images/share/global_share[500x500].png" />
		<meta property="og:url" content="<?= $settings->protocol ?>://<?= $settings->server_name ?>"/> 
		<meta property="og:title" content="<?= $settings->getPageTitle() ?>" /> 
		<meta property="og:site_name" content="<?= $settings->title ?>"/> 
		<meta property="og:description" content="<?= $settings->description ?>"/> 
	<!-- END: OG FBook meta tags -->

	<!-- BEGIN: Twitter Card meta tags -->
		<meta name="twitter:card" content="summary">
		<meta name="twitter:url" content="<?= $settings->protocol ?>://<?= $settings->server_name ?>">
		<meta name="twitter:title" content="<?= $settings->getPageTitle() ?>">
		<meta name="twitter:description" content="<?= $settings->description ?>">
		<meta name="twitter:image" content="<?= $settings->protocol ?>://<?= $settings->server_name ?>/media/images/share/global_share[500x500].png">
		<meta name="twitter:site" content="<?= $settings->twitter ?>">
	<!-- END: Twitter Card meta tags -->

	<!-- BEGIN: <?= $settings->environment ?> styles -->
		<link rel="stylesheet" type="text/css" href="<?= $settings->css_path ?>"/>
		<script type="text/javascript">
			document.write('<link rel="stylesheet" href="styles/javascript.css" />'); 
		</script>
	<!-- END: <?= $settings->environment ?> styles -->

	<script>
		/*<![CDATA[*/
			document.createElement('header');
			document.createElement('hgroup');
			document.createElement('nav');
			document.createElement('footer');
			document.createElement('article');
			document.createElement('section');
			document.createElement('main');
		/*]]>*/
	</script>
</head>
<body class="<?php if (isset($class)) echo $class; ?>">
	<?php 
		$items = Content::getInstance()->getItems();
	?>
	<div id="page-wrapper">
		<header id="menu">
			<h1><a href="./">Suny Gao</a></h1>
			<ul id="nav">
				<!-- <li id="back_to_menu">
					<a href="#menu">Menu</a>
				</li> -->
				<li>
					<a href="./">Projects</a>
					<?php if (isset($settings->page) && $settings->page == 'home') {
						$links = '';

						foreach($items as $item) {
							$links .= '<li>
								<a href="#'. $item->id .'">
									' . $item -> title . '
								</a>
							</li>';
						} 
	
						echo 
							'<ul id="project_list">' . $links . '</ul>';
					} ?>
				</li>
				<li>
					<a href="/about">About</a>
				</li>
				<li>
					<a href="#todo">Resume</a>
				</li>
				<li id="contact">
					<a href="mailto:suny.gao@gmail.com" id="email">Email</a>
					<a href="http://lnkd.in/bhzhDQt" target="_blank" id="linked_in">LinkedIn</a>
				</li>
			</ul>
		</header>

		<main id="main-content" role="main">
