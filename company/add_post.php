<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>

	<div class="container">
		<div class="row">

			<?php if (isset($_GET["post"])) { ?>

			<div class="col-12 py-5">
				<h4 class="card-title">Edit Post</h4>
				<?php 
					$post = $_GET['post'];
					$sql = "SELECT * FROM posts WHERE p_code = '$post'";
					$query = mysqli_query($con,$sql);
					$edit = mysqli_fetch_assoc($query);


					if (isset($_POST["update"])) {
						if (empty($_POST["title"]) || empty($_POST["menu"]) || empty($_POST["body"])) {
							echo "<div class='alert alert-danger'>Pls fill all inputs</div>";
						}else{
							$title = text_filter($_POST["title"]);
							$menu = text_filter($_POST["menu"]);
							$body = text_filter($_POST["body"]);
							$interview = text_filter($_POST["interview"]);

							
							$sql = "UPDATE posts SET p_title='$title',p_menu='$menu',p_body='$body',p_interview='$interview' WHERE p_code='$post'";
							if(mysqli_query($con,$sql)){
								echo "<div class='alert alert-success'>Post edited</div>";
							}else{
								echo "<div class='alert alert-danger'>Post edit Fail</div>";
							}
						}
					}

				 ?>
				<form method="post">
					<div class="form-group">
						<label>Post Title</label>
						<input type="text" name="title" class="form-control" value="<?php echo $edit["p_title"] ?>" required="">
					</div>
					<div class="form-group">
						<label>Select Menu</label>
						<select class="form-control" name="menu" required="">
							 <?php 

						      	$sql = "SELECT * FROM menu WHERE m_status=1";
						      	$query = mysqli_query($con,$sql);
						      	while($menu = mysqli_fetch_assoc($query)){
						       ?>						      
								<option value="<?php echo $menu['m_code'] ?>" <?php echo $menu["m_code"]==$edit["p_menu"]?"selected":"" ?>>
									<?php echo $menu["m_name"] ?>										
								</option>
						  	  <?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Interview Date</label>
						<input type="date" name="interview" value="<?php echo $edit['p_interview'] ?>" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Post content</label>
						<textarea type="text" id="body" name="body" class="form-control" required="">
							<?php echo $edit["p_body"] ?>
						</textarea>
					</div>
					<div class="form-group">
						<input type="submit" name="update" class="btn btn-primary" value="Update">
					</div>
				</form>
				<script type="text/javascript">
					$('#body').summernote({
				        // placeholder: 'Hello stand alone ui',
				        tabsize: 2,
				        height: 300
				      });
				</script>
			</div>

			<?php }else{ ?>

			<div class="col-12 py-5">
				<h4 class="card-title">Add Job Post</h4>
				<?php 

					if (isset($_POST["post"])) {
						if (empty($_POST["title"]) || empty($_POST["menu"]) || empty($_POST["body"])) {
							echo "<div class='alert alert-danger'>Pls fill all inputs</div>";
						}else{
							$title = text_filter($_POST["title"]);
							$menu = text_filter($_POST["menu"]);
							$body = text_filter($_POST["body"]);
							$interview = text_filter($_POST["interview"]);
							$user = $_SESSION["id"];
							$code = md5($title).md5(rand(0,10));
							$sql = "INSERT INTO posts (p_title,p_menu,p_body,p_user,p_code,p_interview) VALUES 
							('$title','$menu','$body','$user','$code','$interview')";
							if(mysqli_query($con,$sql)){
								echo "<div class='alert alert-success'>Post Added</div>";
							}else{
								echo "<div class='alert alert-danger'>Post Added Fail</div>";
							}
						}
					}

				 ?>
				<form method="post">
					<div class="form-group">
						<label>Post Title</label>
						<input type="text" name="title" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Select Menu</label>
						<select class="form-control" name="menu" required="">
							 <?php 

						      	$sql = "SELECT * FROM menu WHERE m_status=1";
						      	$query = mysqli_query($con,$sql);
						      	while($menu = mysqli_fetch_assoc($query)){
						       ?>						      
								<option value="<?php echo $menu['m_code'] ?>">
									<?php echo $menu["m_name"] ?>										
								</option>
						  	  <?php } ?>
						</select>
					</div>
					<div class="form-group">
						<label>Interview Date</label>
						<input type="date" name="interview" class="form-control" required="">
					</div>
					<div class="form-group">
						<label>Post cotent</label>
						<textarea type="text" id="body" name="body" class="form-control" required=""></textarea>
					</div>

					<div class="form-group">
						<input type="submit" name="post" class="btn btn-primary" value="post">
					</div>
				</form>
				<script type="text/javascript">
					$('#body').summernote({
				        // placeholder: 'Hello stand alone ui',
				        tabsize: 2,
				        height: 300
				      });
				</script>
			</div>

			<?php } ?>
			
		</div>
	</div>
<?php include "includes/footer.php" ?>