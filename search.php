<?php include "includes/head.php" ?>
	
	<div class="container">
		<div class="row">
			<div class="col-12 py-5">

				<?php 			

					$search_key = $_POST["search_key"];

					$sql = "SELECT * FROM posts WHERE p_title LIKE '%$search_key%'";
			
					$query=mysqli_query($con,$sql);
					while($post = mysqli_fetch_assoc($query)){

						$post_time = explode(" ", $post["p_time"]);
						$date = $post_time[0];
						$time = $post_time[1];

						$p_count = $post["p_count"];
						$p_viwer = $post["p_count"]>1?"viwers":"viwer";
						$viwer_count = $p_count." ".$p_viwer;

				 ?>

				<div class="jumbotron">
				  <h1 class="card-title"><?php echo $post["p_title"]; ?></h1>
				  <p class="lead"><?php echo html_entity_decode($post["p_body"]); ?></p>
				  <hr class="my-4">
				  <p>Post Date - <?php echo $date; ?></p>
				  <p class="lead">
				    <a class="btn btn-primary btn-lg" href="detail.php?post=<?php echo $post["p_code"] ?>" role="button">detail</a>
				    <a class="btn btn-info btn-lg" role="button"><?php echo $viwer_count;  ?></a>
				  </p>
				</div>

				<?php } ?>

			</div>
		</div>		
	</div>
<?php include "includes/footer.php" ?>




