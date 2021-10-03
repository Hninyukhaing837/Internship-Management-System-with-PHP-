<?php include "includes/header.php" ?>



<div class="container">
	<div class="row py-4">

        <?php
        print_r($_SESSION);
        ?>

<!--		--><?php //
//
//			if (isset($_GET["cat"])) {
//				$cat = $_GET["cat"];
//				$sql = "SELECT * FROM posts WHERE p_cat=$cat ORDER BY p_id DESC";
//			}else{
//				$sql = "SELECT * FROM posts ORDER BY p_id DESC";
//			}
//
//			$query = mysqli_query($con,$sql);
//			$row = mysqli_num_rows($query);
//
//			if(!$row){
//
//				echo '<div class="col-12 alert alert-dismissible alert-warning">
//					  <button type="button" class="close" data-dismiss="alert">&times;</button>
//					  <h4 class="alert-heading">Sorry - There is no Post in this Category <a href="'.$url.'" class="btn btn-primary">GO HOME</a>.</h4>
//					</div>';
//
//			}
//
//
//
//			while ($post = mysqli_fetch_assoc($query)) {
//
//		?>
<!---->
<!--		<div class="col-12 col-md-4">-->
<!--			<div class="card bg-light mb-3">-->
<!--			  <div class="card-header">--><?php //echo $post["p_time"] ?><!--</div>-->
<!--			  <div class="card-body">-->
<!--			    <h4 class="card-title">--><?php //echo $post["p_header"] ?><!--</h4>-->
<!--			    <p class="card-text">--><?php //echo $post["p_body"] ?><!--</p>-->
<!--			  </div>-->
<!--			</div>-->
<!--		</div>-->
<!---->
<!--		--><?php //} ?>

		
	</div>
</div>


<?php //echo $_GET["cat"]; ?>

<?php include "includes/footer.php" ?>



