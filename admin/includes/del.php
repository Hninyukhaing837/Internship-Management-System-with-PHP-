<?php 

	include "../../includes/base.php";
	if(isset($_GET["post"])){
		$post = $_GET["post"];
		$sql = "DELETE FROM posts WHERE p_code='$post'";
		$job_sql = "DELETE FROM join_job WHERE j_post='$post'";
		mysqli_query($con,$job_sql);
		if(mysqli_query($con,$sql)){
			header("location:../post_list.php");
		}

	}else{
		header("locaiton:../post_list.php");
	}

 ?>