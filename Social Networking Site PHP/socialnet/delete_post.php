<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query
	mysql_query("DELETE FROM post WHERE post_id = '$get_id'")
	or die(mysql_error());  	
	header("Location: home.php");

?>
