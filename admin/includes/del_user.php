
<?php 

	include "../../includes/base.php";
	if(isset($_GET["u_id"])){
		$id = $_GET["u_id"];
		
		$user_sql = "DELETE FROM user WHERE u_id='$id'";
		mysqli_query($con,$user_sql);		
		$sql = "DELETE FROM posts WHERE p_user='$id'";
		$job_sql = "DELETE FROM join_job WHERE j_user='$id' OR j_company='$id'";
		mysqli_query($con,$job_sql);
		if(mysqli_query($con,$sql)){
			header("location:../user_list.php");
		}

	}else{
		header("locaiton:../user_list.php");
	}

 ?>