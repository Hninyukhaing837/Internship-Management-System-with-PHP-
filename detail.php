<?php include "includes/head.php" ?>
	<?php 

		if (isset($_GET["post"])) {
			$post = $_GET["post"];
			$sql = "SELECT p_count FROM posts WHERE p_code='$post'";
			$query = mysqli_query($con,$sql);
			$post_count = mysqli_fetch_assoc($query);
			$post_count_update = $post_count["p_count"] +1;
			$sql = "UPDATE posts SET p_count=$post_count_update WHERE p_code='$post'";
			$query = mysqli_query($con,$sql);
		}

	 ?>
	
	<div class="container">
		<div class="row">
			<div class="col-12 py-5">

				<?php 

					if (isset($_GET["post"])) {

						$sql = "SELECT * FROM posts WHERE p_code = '$post'";

					}else{

						$sql = "SELECT * FROM posts";
					}
					$query=mysqli_query($con,$sql);
					while($post = mysqli_fetch_assoc($query)){

						$post_time = explode(" ", $post["p_time"]);
						$date = $post_time[0];
						$time = $post_time[1];

						$p_count = $post["p_count"];
						$p_viwer = $post["p_count"]>1?"viwers":"viwer";
						$viwer_count = $p_count." ".$p_viwer;

				 ?>

				<div class="jumbotron" style="background-color: #ffeedd;">
				  <h1 class="card-title"><?php echo $post["p_title"]; ?></h1>
				  <p class="lead"><?php echo html_entity_decode($post["p_body"]); ?></p>
				  <hr class="my-4">
				  <p style="background-color: #aaffff;">Post Date - <?php echo $date; ?></p>
				  <p class="lead">				   
				    <a class="btn btn-info btn-lg" role="button"><?php echo $viwer_count;  ?></a>
				    <?php 
				    	if (isset($_SESSION["role"])) {	
				    		if ($_SESSION["role"] == 2) {
				    			echo '<a href="user/join.php?post_id='.$post["p_code"].'&company_id='.$post['p_user'].'" class="btn btn-primary btn-lg" target="_blink" role="button">join</a>';
				    		}
				    	}else{
				    		echo '<a href="login.php" target="_blink" class="btn btn-primary btn-lg" role="button">join</a>';
				    	}		    		
				     ?>				    
				   
				  </p>
				</div>

				<?php } ?>

			</div>
		</div>		
	</div>
<?php include "includes/footer.php" ?>






