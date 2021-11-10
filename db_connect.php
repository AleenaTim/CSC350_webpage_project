<?php 

	// connect to the database
	$con = mysqli_connect('127.0.0.1', 'root', '', 'occss');

	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}

?>
