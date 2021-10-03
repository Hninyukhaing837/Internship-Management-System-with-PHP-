 
<?php include "includes/head.php" ?>
	<?php 

		if (isset($_GET["menu"])) {
			$menu = $_GET["menu"];
			$sql = "SELECT m_count FROM menu WHERE m_code='$menu'";
			$query = mysqli_query($con,$sql);
			$menu_count = mysqli_fetch_assoc($query);
			$menu_count_update = $menu_count["m_count"] +1;
			$sql = "UPDATE menu SET m_count=$menu_count_update WHERE m_code='$menu'";
			$query = mysqli_query($con,$sql);
		}

	 ?>
	

	<div class="container">
		<div class="row py-5">
			<div class="col-12 col-md-8 col-lg-8 ">

				<?php 

					if (isset($_GET["menu"])) {
						$sql = "SELECT * FROM posts WHERE p_menu = '$menu'";
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
				  <h1 class="card-title" ><?php echo $post["p_title"]; ?></h1>
				  <p class="lead"><?php echo html_entity_decode($post["p_body"]); ?></p>
				  <hr class="my-4">
				  <p style="background-color: #aaffff;">Post Date - <?php echo $date; ?></p>
				  <p class="lead">
				    <a class="btn btn-primary btn-lg" href="detail.php?post=<?php echo $post["p_code"] ?>" role="button">detail</a>
				    <a class="btn btn-info btn-lg" role="button"><?php echo $viwer_count;  ?></a>
				  </p>
				</div>

				<?php } ?>

			</div>
			<div class="col-12 col-md-4 col-lg-4">
				<?php 

					if (isset($_SESSION["name"])) {
						

				 ?>
				<div class="card" style="background-color: #f4d03f;">
				  <div class="card-body">
				    <h4 class="card-title"><?php echo $_SESSION["name"] ?></h4>
				    <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
				    <p class="card-text">Please click Dashboard to view what job we got.</p>
				    <?php 
				    	if ($_SESSION["role"] == 1) {
				    		echo '<a href="'.$url."/admin".'" target="_blink" class="btn btn-primary">Dashboard</a>';
				    	}else if($_SESSION["role"] == 2){
				    		echo '<a href="'.$url."/user".'" target="_blink" class="btn btn-primary">Dashboard</a>';

				    	}else if($_SESSION["role"] == 3){
				    		echo '<a href="'.$url."/company".'" target="_blink" class="btn btn-primary">Dashboard</a>';

				    	}
				     ?>

				    
				    <a href="<?php echo $url; ?>/login.php" class="btn btn-secondary">Log Out</a>
				    
				  </div>
				</div>
				<?php } ?>
				<div class="card mb-3" style="background-color: #bbffcc;">
				  <h3 class="card-header">JOB LISTS</h3>				 
				 <ul class="list-group">
			    <?php 

			      	$sql = "SELECT * FROM menu WHERE m_status=1";
			      	$query = mysqli_query($con,$sql);
			      	while($menu = mysqli_fetch_assoc($query)){
			      		$code = $menu["m_code"];
			      		$job_sql = "SELECT COUNT(p_menu) FROM posts WHERE p_menu='$code'";
			      		$job_query = mysqli_query($con,$job_sql);
			      		$job_count = mysqli_fetch_assoc($job_query);

			    ?>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <?php echo $menu["m_name"] ?>
				    <span class="badge badge-primary badge-pill"><?php echo $job_count["COUNT(p_menu)"] ?></span>
				  </li>
				<?php } ?> 
				</ul>
				  
				  <div class="card-footer text-muted">
				    Good Luck !
				  </div>
				</div>
				<?php 

					if (!isset($_SESSION["name"])) {
						

				 ?>
				<div class="card" style="background-color: #fedcba;">
				  <div class="card-body">
				    <h4 class="card-title">Hello Guest</h4>
				    <!-- <h6 class="card-subtitle mb-2 text-muted"></h6> -->
				    <p class="card-text">Please Login or Singup to our website to join works.</p>
				    <a href="<?php echo $url; ?>/login.php" target="_blink" class="btn btn-primary">Login</a>
				    <a href="<?php echo $url ?>/signup.php" target="_blink" class="btn btn-info">Sign up</a>
				  </div>
				</div>
				<?php } ?>

				
			</div>
		</div>		
	</div>
<?php include "includes/footer.php" ?>




