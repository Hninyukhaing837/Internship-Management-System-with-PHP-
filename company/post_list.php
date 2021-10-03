<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>

	<div class="container">
		<div class="row">
			<div class="col-12 py-5">

				<table class="table">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Menu</th>
							<!--<th>User</th>-->
							<th>Viewer</th>
							<th>Control</th>
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<?php 

					
						$user = $_SESSION['id'];
						$sql = "SELECT * FROM posts INNER JOIN menu ON posts.p_menu=menu.m_code WHERE p_user=$user";
					
						$query=mysqli_query($con,$sql);
						while($post = mysqli_fetch_assoc($query)){

						$post_time = explode(" ", $post["p_time"]);
						$date = $post_time[0];
						$time = $post_time[1];

						$p_count = $post["p_count"];
						$p_viwer = $post["p_count"]>1?"viwers":"viwer";
						$viwer_count = $p_count." ".$p_viwer;

						 ?>				

						<tr>
							<td><?php echo $post["p_id"]; ?></td>
							<td><?php echo $post["p_title"]; ?></td>
							<td><?php echo $post["m_name"]; ?></td>
							<!--<td><?php echo $post["p_user"]; ?></td>-->
							<td><?php echo $post["p_count"]; ?></td>
							<td>
								<a href="includes/del.php?post=<?php echo $post['p_code'] ?>" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</a>
								<a href="add_post.php?post=<?php echo $post['p_code'] ?>" class="btn btn-info">
									<i class="fa fa-pencil-square"></i>
								</a>
							</td>
							<td><?php echo $post["p_time"]; ?></td>
						</tr>
				<?php } ?>
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
<?php include "includes/footer.php" ?>
