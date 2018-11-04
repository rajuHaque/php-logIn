<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Ookayama Limited</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Md. Toffazal Hossain">
	<meta name="description" content="Okapia Mobile Brand">
	<meta name="keywords" content="Okapia Mobile Sales, Service Centre, Accessories Sales">

    
    <!-- Favicons -->
	<link rel="apple-touch-icon" href="img/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="img/favicon.ico">
	
	
	
    <!-- fontawesome CSS -->
    <link rel="stylesheet" href="css/all.css">
    
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
	<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/source-sans-pro.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/home.css">
	
</head>



<body id="pagetop" style="background-color: white !important;">
<!-- .............. Nav Section............... -->	
	<nav class="navbar navbar-toggleable-md navbar-inverse navbar-fixed-top" id="mainNav">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu" aria-controls="menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- ========== Company Logo =============== -->
                <img class="img-fluid" style="height: 70px; width: 50px;" src="images/logo.png" alt="company logo">
				
			</div>

			<div class="collapse navbar-collapse " id="menu">
				<ul class="nav navbar-nav ml-auto navbar-right">
					<li class="nav-item">
						<a class="nav-link page-scroll <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'active';} ?>" href="index.php">HOME</a>
					</li>
					<li class="nav-item" >
						<a class="nav-link page-scroll" href="about.html">ABOUT</a>
					</li>
					<li >
						<a class="nav-link page-scroll"  href="portfolio-list.html">PRODUCT
<!--							<ul class="dropdown-menu">
								<li><a href="portfolio-list.html">BAR PHONE</a></li>
								<li><a href="portfolio-details.html">SMART PHONE</a></li>
							</ul>-->
						</a>
					</li>
					<li >
						<a class="nav-link page-scroll"  href="gallery.html">SUPPORT
<!--							<ul class="dropdown-menu">
								<li><a href="blog-list.html">SERVICE CENTER</a></li>
								<li><a href="blog-detailes.html">COLLECTION POINT</a></li>
							</ul>-->
						</a>
					</li>
<!--					<li>
						<a href="gallery.html " class="">GALLERY</a>
					</li>-->
					<li class="nav-item">
						<a href="contact.php" class="nav-link page-scroll <?php if(basename($_SERVER['PHP_SELF'])=='contact.php'){echo 'active';} ?>">CONTACT</a>
					</li>
				</ul>
				
			</div>
		</div>
	</nav> 
<!-- .............. End Nav Section............... -->

