<?php 

	$servername = "localhost"; 
	$username = "id15520675_guest"; 
	$password = "Maestrocg@23"; 
	$database = "id15520675_users"; 

	// Create a connection 
	$conn = mysqli_connect($servername, 
		$username, $password, $database); 

	// Code written below is a step taken 
	// to check that our Database is 
	// connected properly or not. If our 
	// Database is properly connected we 
	// can remove this part from the code 
	// or we can simply make it a comment 
	// for future reference. 

	if($conn) { 
		echo "success"; 
	} 
	else { 
		die("Oops, Error". mysqli_connect_error()); 
	} 
?>