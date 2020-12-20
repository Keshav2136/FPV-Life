<?php
include("includes/database.php");
session_start();
if (!isset($_SESSION['id'])){
header('location:index.php');
}

$id = $_SESSION['id'];

$query=mysql_query ("SELECT * FROM user WHERE user_id ='$id'") or die(mysql_error());
$row=mysql_fetch_array($query);
$cover_picture=$row['cover_picture'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];
?>