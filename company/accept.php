<?php include "includes/head.php" ?>
<?php include 'includes/session.php'; ?>

<?php 

	if(isset($_GET["job_id"])){
		$id = $_GET["job_id"];
		$sql = "UPDATE join_job SET j_status=1 WHERE j_id=$id";
		if(mysqli_query($con,$sql)){
			header("location:index.php");
		}
	}

 ?>

<?php include "includes/footer.php" ?>
