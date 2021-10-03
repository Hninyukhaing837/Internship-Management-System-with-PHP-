<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-12 col-md-4 col-lg-4 py-5" >
				<h4 class="title">Add new Menu</h4>
				<?php 

					if (isset($_POST["add"])) {
						if(empty($_POST["menu"])){
							echo "<scirp>alert('pls fill menu name.')</script>";
						}else{
							$menu = text_filter($_POST["menu"]);
							$m_code = md5($menu).md5(rand(1,1000));
							$sql = "INSERT INTO menu (m_name,m_code) VALUES ('$menu','$m_code')";
							if(mysqli_query($con,$sql)){
								echo "<script>location.href='settings.php'</script>";
							}else{
								echo "<div class='alert alert-warning'>Menu Adding Fail !</div>";
							}
						}
					}

				 ?>
				<form method="post" class="form-inline">
			      <input class="form-control mr-sm-2" placeholder="Menu Name" name="menu" type="text">
			      <button class="btn btn-secondary my-2 my-sm-0" name="add" type="submit">ADD</button>
			    </form>
			    <ul class="list-group">
			    <?php 

			      	$sql = "SELECT * FROM menu";
			      	$query = mysqli_query($con,$sql);
			      	while($menu = mysqli_fetch_assoc($query)){
			    ?>
				  <li class="list-group-item d-flex justify-content-between align-items-center">
				    <a href="controllers/menu_controller.php?id=<?php echo $menu['m_code'] ?>&status=<?php echo $menu['m_status'] ?>" class="btn btn-<?php echo $menu['m_status']==1?'danger':'success' ?>"><i class="fa fa-trash"></i></a><?php echo $menu["m_name"] ?>
				    <span class="badge badge-primary badge-pill"><?php echo $menu["m_count"] ?></span>
				  </li>
				<?php } ?> 
				</ul>		    
			      	
			  	
			</div>
			<div class="col-12 col-md-8 col-lg-8" ></div>
		</div>
	</div>
<?php include "includes/footer.php" ?>