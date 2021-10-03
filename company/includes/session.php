<?php 


if (!isset($_SESSION["role"])) {
	echo "<script>location.href='$url/login.php'</script>";
}else{
	if($_SESSION['role'] !=3){
	echo "<script>location.href='$url/login.php'</script>";		
	}
}
 ?>
