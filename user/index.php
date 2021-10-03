<?php include "includes/head.php" ?>
 <?php include 'includes/session.php'; ?>
<html>
        <head>
            <style>
                body 
                {
                    background: lightblue ;
                   
           
                }
            </style>
        </head>
        <body>
	<div class="container">
		<div class="row">
			<div class="col-12 py-5">
				<h4 class="card-title"> Job Lists </h4>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Company</th>
							<th>Status</th>	
							<th>Interview</th>														
							<th>Time</th>
						</tr>
					</thead>
					<tbody>
						<?php 
							$user = $_SESSION["id"];

							$sql = "SELECT * FROM ((join_job 
							INNER JOIN posts ON j_post=p_code)
							INNER JOIN user ON j_company= u_id) WHERE j_user='$user'";
							$query = mysqli_query($con,$sql);
							while($job = mysqli_fetch_assoc($query)){


								$approved = "Time - ".$job['p_interview']." <br> address - ".$job['u_address']." 
								<br> phone - ".$job['u_phone'];

						 ?>
						<tr>
							<td><?php echo $job["j_id"] ?></td>
							<td><?php echo $job["p_title"] ?></td>
							<td><?php echo $job["u_company"] ?></td>
							<td><?php echo $job["j_status"]?"approved":"waiting"; ?></td>
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




