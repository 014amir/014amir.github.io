	<?php
	session_start();
	

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}?>

	<!DOCTYPE html>
	<html lang="eng" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Tasks for Students</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/jquery-ui.css">				
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/owl.carousel.css">				
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		  <header id="header">
		    <div class="container main-menu">
		    	<div class="row align-items-center justify-content-between d-flex">
			      <div id="logo">
			        <a href="index.php"><img src="img/logo.png" width="150" height=60 alt="" title="ENU" /></a>
			      </div>
			      <nav id="nav-menu-container">
			        <ul class="nav-menu">
			          <li><a href="index.php">Home</a></li>
			          <li><a href="aboutus.php">About us</a></li>
			          <li><a href="topics.php">Topics</a></li>
			          <li><a href="tasks.php">Tasks</a></li>			        
				        <li><p><?php if(isset($_SESSION['username'])){ echo  $_SESSION['username'];
				        echo '<a style="font-size: 11px;color: white;" href="index.php?logout=`1`">&nbsp LogOut&nbsp</a>';} else{ echo '<li><a href="register.php">Registration</a></li>
<li><a href="login.php">Login</a></li>';} ?></p>
				        </li>
					</ul>
			      </nav><!-- #nav-menu-container -->		    		
		    	</div>
		    </div>
		  </header><!-- #header -->