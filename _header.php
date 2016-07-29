<?php 
	
	include('_functions.php');
	
	$mainTitle = '<span>622</span> Villa with a View';
	$subTitle = 'St. Thomas, USVI';
	
?><!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo strip_tags($mainTitle) . ' - ' . $subTitle; ?></title>
	<meta name="description" content="Queue">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,200,700|Great+Vibes|Allura' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/normalize.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">	
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/weather.css">
</head>
<body class="<?php echo $page; ?>">
	<header>
		<nav>
			<ul class="mobile-hamburger">
				<li><a href="#"><i class="fa fa-bars" aria-hidden="true"></i></a>
			</ul>
			<ul class="main-menu">
				<li><a href="/">Home</a></li>
				<li><a href="rooms">Rooms</a></li>
				<li><a href="directions">Directions</a></li>
				<li><a href="attractions">Attractions</a></li>
				<li><a href="dining">Dining</a></li>
			</ul>
			<ul>
				<li class="nav-right"><a href="/#book"><i class="fa fa-bed" aria-hidden="true"></i> Book A Room</a></li>
			</ul>
		</nav>
	</header>

	<main>
		<div class="page-title page-title-<?php echo $page; ?>">
			<?php if($page == 'index'): ?>
				<h1 class="main-title"><?php echo $mainTitle; ?></h1>
				<h2 class="sub-title"><?php echo $subTitle; ?></h2>
			<?php else: ?>
				<div class="main-title"><?php echo $mainTitle; ?></div>
				<div class="sub-title"><?php echo $subTitle; ?></div>
			<?php endif; ?>
		</div>