<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>

	<div class="container-fluid">
		<?php 

			$user_id = $_SESSION["id"];			
			$post_id = $_GET["post_id"];			
			$company_id = $_GET["company_id"];

			function check_join($user_id,$post_id){
				global $con;
				$sql = "SELECT * FROM join_job WHERE j_user='$user_id' AND j_post='$post_id'";
				$query = mysqli_query($con,$sql);
				if(mysqli_fetch_assoc($query)){
					return 1;
				}else{
					return 0;
				}
			}
			if(!check_join($user_id,$post_id)){

				$sql = "INSERT INTO join_job (j_user,j_company,j_post) VALUES ('$user_id','$company_id','$post_id')";
				if(mysqli_query($con,$sql)){
					header("location:index.php");
				}else{
					echo "db fail";
				}
			}else{
				header("location:$url/detail.php?post=$post_id");
			}

			

		 ?>
	</div>
<?php include "includes/footer.php" ?>
