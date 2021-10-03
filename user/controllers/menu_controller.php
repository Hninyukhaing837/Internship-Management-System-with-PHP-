<?php 

	include "../../includes/base.php";
	include "../includes/session.php";


	if (isset($_GET["id"])) {
		$id = $_GET["id"];
		$status = $_GET["status"]?"0":"1";
		$sql = "UPDATE menu SET m_status=$status WHERE m_code='$id'";
		if(mysqli_query($con,$sql)){
			header("location:../settings.php");
		}


	}

 ?>