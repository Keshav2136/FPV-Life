<?php

//Database connection.

$con = MySQLi_connect(

   "localhost", //Server host name.

   "id15520675_search", //Database username.

   "Maestrocg@23", //Database password.

   "id15520675_livesearch" //Database name or anything you would like to call it.

);



//Check connection

if (MySQLi_connect_errno()) {

   echo "Failed to connect to MySQL: " . MySQLi_connect_error();

}

?>