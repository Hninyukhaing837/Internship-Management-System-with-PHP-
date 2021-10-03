<?php 

if (!isset($_SESSION["role"])) {
	echo "<script>location.href='$url/login.php'</script>";
}else{
	if($_SESSION['role'] !=1){
	echo "<script>location.href='$url/login.php'</script>";		
	}
}	

 ?>