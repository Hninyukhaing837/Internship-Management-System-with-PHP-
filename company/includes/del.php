<?php 

	include "../../includes/base.php";
	if(isset($_GET["post"])){
		$post = $_GET["post"];
		$sql = "DELETE FROM posts WHERE p_code='$post'";
		if(mysqli_query($con,$sql)){
			header("location:../post_list.php");
		}

	}else{
		header("locaiton:../post_list.php");
	}

 ?>