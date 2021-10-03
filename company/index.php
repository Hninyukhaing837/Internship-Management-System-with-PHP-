<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>
 
	<div class="container">
		<div class="row">
			<div class="col-12 py-5">
				<h4 class="card-title"> Requested Lists </h4>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>User</th>
							<th>Status</th>	
							<th>Interview</th>														
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$company = $_SESSION["id"];

							$sql = "SELECT * FROM ((join_job 
							INNER JOIN posts ON j_post=p_code)
							INNER JOIN user ON j_user= u_id) WHERE j_company='$company'";
							$query = mysqli_query($con,$sql);
							while($job = mysqli_fetch_assoc($query)){


								$approved = "Name - ".$job['u_name']."<br>Time - ".$job['p_interview']." <br> address - ".$job['u_address']."<br> phone - ".$job['u_phone'];

						 ?>
						<tr>
							<td><?php echo $job["j_id"] ?></td>
							<td><?php echo $job["p_title"] ?></td>
							<td><?php echo $job["u_name"] ?></td>
							<td><?php echo $job["j_status"]?"submitted":'<a href="accept.php?job_id='.$job['j_id'].'" class="btn btn-primary">accept</a>'; ?></td>
							<td><?php echo $job["j_status"]?$approved:"-"; ?></td>
							<td><?php echo $job["j_time"] ?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<div class="col-12 col-md-4 col-lg-4">
				
			</div>
		</div>
	</div>

<?php include "includes/footer.php" ?>








