<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="ThemeStarz">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Varela+Round" rel="stylesheet">
		<link rel="stylesheet" href="<?=base_url()?>/assets/bootstrap/css/bootstrap.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/fonts/font-awesome.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/selectize.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/owl.carousel.min.css" type="text/css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/style.css">
		<link rel="stylesheet" href="<?=base_url()?>/assets/css/user.css">
		<link href="<?=base_url()?>/assets/css/toastr.min.css" rel="stylesheet" type="text/css">
		<link href="<?=base_url()?>/assets/css/formValidation.min.css" rel="stylesheet" type="text/css">

		<script src="<?=base_url()?>/assets/js/jquery-3.2.1.min.js"></script>
		<script src="<?=base_url()?>/assets/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>/assets/js/popper.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>/assets/bootstrap/js/bootstrap.min.js"></script>
		<script src="<?=base_url()?>/assets/js/formValidation.min.js"></script>
        <script src="<?=base_url()?>/assets/js/bootstrap_validation.min.js"></script>
		<script src="<?=base_url()?>/assets/js/toastr.min.js"></script>
		<title>Sports Guru</title>
	</head>
	<body>
		<div class="page home-page">
		<!--*********************************************************************************************************-->
		<!--************ HERO ***************************************************************************************-->
		<!--*********************************************************************************************************-->
		<header class="hero">
		<div class="hero-wrapper">
		<!--============ Secondary Navigation ===============================================================-->
		<div class="secondary-navigation">
			<div class="container">
				<ul class="left">
					<li>
						<span>
						<i class="fa fa-phone"></i> +1 123 456 789
						</span>
					</li>
				</ul>
				<!--end left-->
				<ul class="right">
					<li>
						<a href="my-ads.html">
						<i class="fa fa-heart"></i>My Ads
						</a>
					</li>
					<li>
						<a href="<?=base_url()?>/register">
						<i class="fa fa-sign-in"></i>Register
						</a>
					</li>
					<!-- <li>
						<a href="register.html">
						<i class="fa fa-pencil-square-o"></i>Register
						</a>
					</li> -->
				</ul>
				<!--end right-->
			</div>
			<!--end container-->
		</div>
		<!--============ End Secondary Navigation ===========================================================-->
		<!--============ Main Navigation ====================================================================-->
		<div class="main-navigation">
		<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
		<a class="navbar-brand" href="index.html">
		<img src="<?=base_url()?>/assets/img/logo.png" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<!--Main navigation list-->
			<ul class="navbar-nav">
				<li class="nav-item  <?=($menu=='Home')?'active':""?>">
					<a class="nav-link" href="<?=base_url()?>">Home</a>
					<!-- <ul class="child">
						<li class="nav-item">
						    <a href="index.html" class="nav-link">Home 1</a>
						</li>
						<li class="nav-item">
						    <a href="index-2.html" class="nav-link">Home 2</a>
						</li>
						<li class="nav-item">
						    <a href="index-3.html" class="nav-link">Home 3</a>
						</li>
						<li class="nav-item">
						    <a href="index-4.html" class="nav-link">Home 4</a>
						</li>
						</ul> -->
				</li>
				<li class="nav-item <?=($menu=="List")?"active":""?>">
					<a class="nav-link" href="<?=base_url()?>/list">Listing</a>
					<!-- 1st level -->
					<!-- end 1st level -->
				</li>
				<!-- <li class="nav-item <?=($menu=="Details")?"active":""?>">
					<a class="nav-link" href="<?=base_url()?>/details">Pages</a>
					</li> -->
				<li class="nav-item <?=($menu=="Contact Us")?"active":""?>">
					<a class="nav-link" href="<?=base_url()?>/contact">Contact</a>
				</li>
				<li class="nav-item">
					<a href="<?=base_url()?>/register" class="btn btn-primary text-caps btn-rounded btn-framed">Register</a>
				</li>
			</ul>
			<!--Main navigation list-->
		</div>
		<!--end navbar-collapse-->