<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query
	mysql_query("DELETE FROM comments WHERE comment_id = '$get_id'")
	or die(mysql_error());  	
	header("Location: home.php");

?>
