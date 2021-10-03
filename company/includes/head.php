<?php 
	include "../includes/base.php";
	session_start();
 ?>
 <?php include 'session.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo "php class"; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/font-awesome.css">
	<script type="text/javascript" src="<?php echo $url; ?>/assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $url; ?>/assets/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo $url; ?>/assets/css/summernote-lite.css">
	<script type="text/javascript" src="<?php echo $url; ?>/assets/js/summernote-lite.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="<?php echo $url; ?>/company">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      
	
		
		<li class="nav-item">
		<a class="nav-link" href="<?php echo $url; ?>/company/add_post.php">Add Job Post</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="<?php echo $url; ?>/company/post_list.php">Post List</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="<?php echo $url; ?>">Job</a>
		</li>

	  	 
	     
	    </ul>
	    <div class="form-inline my-2 my-lg-0">
	      
	      <a class="btn btn-secondary" href="<?php echo $url; ?>/login.php">Log Out</a>
	    </div>
	  </div>
	</nav>
