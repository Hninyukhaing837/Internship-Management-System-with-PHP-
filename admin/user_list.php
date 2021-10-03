<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-12 py-5">

				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Type</th>
							<th>Control</th>
							<th>Adress</th>
							<th>Phone</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<?php 

					

						$sql = "SELECT * FROM user WHERE u_role!=1";
					
						$query=mysqli_query($con,$sql);
						while($post = mysqli_fetch_assoc($query)){						

						 ?>				

						<tr>
							<td><?php echo $post["u_id"]; ?></td>
							<td><?php echo $post["u_name"]; ?></td>
							<td><?php echo $post["u_role"]==2?"student":"company"; ?></td>
							<td>
								<a href="includes/del_user.php?u_id=<?php echo $post['u_id'] ?>" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</a>
							</td>
							<td><?php echo $post["u_address"]; ?></td>
							<td><?php echo $post["u_phone"]; ?></td>
							<td><?php echo $post["u_time"]; ?></td>
							
						</tr>
				<?php } ?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>
