<?php 
	include "base.php";
	session_start();
 ?>
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
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <a class="navbar-brand" href="<?php echo $url; ?>">Home</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation" style="">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarColor01">
	    <ul class="navbar-nav mr-auto">
	      
	      <?php 

	      	$sql = "SELECT * FROM menu WHERE m_status=1";
	      	$query = mysqli_query($con,$sql);
	      	while($menu = mysqli_fetch_assoc($query)){
	       ?>
	      <li class="nav-item">
	        <a class="nav-link" href="<?php echo $url.'?menu='.$menu['m_code'] ?>"><?php echo $menu["m_name"] ?></a>
	      </li>
	  	  <?php } ?>
	     
	    </ul>

	    <form method="post" action="search.php" class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" name="search_key" placeholder="Search" type="text">
	      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</nav>
