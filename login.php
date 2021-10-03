<?php include "includes/head.php" ?>
<?php 
	
	if (isset($_SESSION["name"])) {
		session_unset();
		session_destroy();
	}
?>

	<div class="container-fluid">
		<div class="row">
			<div class="col-12 col-md-6 col-lg-4 m-auto">
				<div class="card my-5">
					<h4 class="card-header">LOGIN FORM</h4>
					<div class="p-5">

					<?php 

						if(isset($_POST["login"])){
							if(empty($_POST["uname"]) || empty($_POST["pass"])){
								echo "<div class='alert alert-danger'>Pls fill all inputs</div>";
							}else{
								$uname = text_filter($_POST["uname"]);
								$pass = text_filter($_POST["pass"]);

								$sql = "SELECT * FROM user WHERE u_uname='$uname'";
								$query = mysqli_query($con,$sql);
								if($user = mysqli_fetch_assoc($query)){
									if (password_verify($pass,$user["u_password"])) {
										
											$_SESSION["name"] = $user["u_name"];
											$_SESSION["uname"] = $user["u_uname"];
											$_SESSION["role"] = $user["u_role"];
											$_SESSION["status"] = $user["u_status"];
											$_SESSION["id"] = $user["u_id"];
											if ($_SESSION["role"] == 1) {
												header("location:admin/index.php");
											}else if($_SESSION["role"] == 2){
												header("location:user/index.php");
											}else if($_SESSION["role"] == 3){
												header("location:company/index.php");	
											}
											
											

									}else{
										echo "<div class='alert alert-danger'>User Password wrong !!!!</div>";
									}
								}else{
									
									echo "<div class='alert alert-danger'>User Name wrong !!!!</div>";

								}

							}
						}

					 ?>
					<form method="post">
						<div class="form-group">
							<label>User Name</label>
							<input type="text" name="uname" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control">
						</div>
						<div class="form-group">
							<input type="submit" name="login" class="btn btn-primary">
							<a href="signup.php" class="btn btn-info">Sing Up</a>
						</div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>
