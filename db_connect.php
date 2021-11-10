<?php 

	// connect to the database
	$con = mysqli_connect('db_connect', 'b3fe0f59ce8455', '', 'occss');

	// check connection
	if(!$con){
		echo 'Connection error: '. mysqli_connect_error();
	}

