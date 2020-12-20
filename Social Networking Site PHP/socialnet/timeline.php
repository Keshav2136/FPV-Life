<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>
<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/timeline.css">
	</head>

<body>
<?php include ('session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Biobook"><b>biobook</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label class="active"><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li>
				<li><a href="photos.php" title="Settings"><label>Photos</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="clip2">
				<a href="updatecover.php" title="Change Cover Photo"><img src="<?php echo $row['cover_picture'] ?>"></a>


				
		</div>	
		
		<div id="left-nav">
				
				<div class="clip1">

				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<label><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></label>
					<br />
					<b>(<?php echo $username ?>)</b>
				</div>
		</div>
	
		<div id="right-nav">
			<h1>Update Status</h1>
	<div>
			<form method="post" enctype="multipart/form-data">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<input type="file" name="image">
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
			
<?php
	include('includes/database.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location="upload/" . $_FILES["image"]["name"];
									$user=$_SESSION['id'];
									$content=$_POST['content'];
									$time=time();
									
									$update=mysql_query(" INSERT INTO post (user_id,post_image,content,created)
									VALUES ('$id','$location','$content','$time') ") or die (mySQL_error());

									}
										header('location:timeline.php');
									
									
									}
							}
?>
			
	</div>
	
		</div>
		

 	
		
<?php
	include("includes/database.php");
			$query=mySQL_query("SELECT * from user where user_id='$id' order by user_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($query)){
				$id = $row['user_id'];
?>	
		<div id="left-nav1">
			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
			</table>
		</div>
<?php
}
?>


		

<?php
	include("includes/database.php");
			$query=mySQL_query("SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($query)){
				$posted_by = $row['firstname']." ".$row['lastname'];
				$location = $row['post_image'];
				$profile_picture = $row['profile_picture'];
				$content=$row['content']; 
				$time=$row['created'];	
				$post_id = $row['post_id'];
?>
		<div id="right-nav1">
		
			
			<div class="profile-pics">
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
			
		<br />
		
			<div class="post-content">

			<div class="delete-post">
			<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete">X</button></a>
			</div>
			
			<p><?php echo $row['content']; ?></p>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		
			</div>

<?php
	include("includes/database.php");
			$comment=mySQL_query("SELECT * from comments where post_id='$post_id' order by post_id DESC") or die(mySQL_error());
			while($row=mySQL_fetch_array($comment)){
			$comment_id=$row['comment_id'];
			$content_comment=$row['content_comment'];
			$time=$row['created'];	
			$post_id=$row['post_id'];
			$user=$_SESSION['id'];
			
?>			
			<div class="comment-display"<?php echo $comment_id ?>>

					<div class="delete-post">
					<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
					</div>
					
				<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-comment"><?php echo $time = time_stamp($time); ?></b></div>
				<div class="comment"><?php echo $row['content_comment']; ?></div>
			
			</div>
			<br />

<?php
}
?>
			

		 <form  method="POST">			
			<div class="comment-area">
			
						<?php $image=mysql_query("select * from user where user_id='$id'")or die(mysql_error());
							while($row=mysql_fetch_array($image)){
							

							?>
						<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
						<?php } ?>
			
			<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
			<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
			<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
			<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
			<input type="submit" name="post_comment" value="Enter" class="btn-comment">
			
			</div>
		</form>
		
<?php
	include ('includes/database.php');
	
	if (isset($_POST['post_comment']))
	{
		$user=$_SESSION['id'];
		$content_comment=$_POST['content_comment'];
		$post_id=$_POST['post_id'];
		$user_id=$_POST['user_id'];
		$time=time();
		

		{
			mySQL_query("INSERT INTO comments (post_id,user_id,name,content_comment,image,created)
			VALUES ('$post_id','$id','$user_id','$content_comment','$profile_picture','$time')")
			or die (mySQL_error());
			echo "<script>window.location='timeline.php'</script>";
		}
			
	}
	
?>

			
		</div>
	<?php
	}
	?>
	
		
	</div>

</body>

</html>