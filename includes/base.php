<?php 

	$url = "http://localhost/ims";

	$con = mysqli_connect("localhost","root","","ims");

	function text_filter($in){
		$in = trim($in);
		$in = stripcslashes($in);
		$in = htmlentities($in, ENT_QUOTES);				
		return $in;
	}

 ?>