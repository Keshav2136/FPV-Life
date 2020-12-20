					
<?php
include('includes/database.php');

						if(isset($_POST['submit']))
						{
							$email=$_POST['email'];
							$password=$_POST['password'];
						{
							$result = mysql_query("SELECT * FROM user WHERE email = '$email' and password='$password'")
							or die(mysql_error());
							
							$row = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['user_id'];
										header("location:home.php");
									}
						}				
						}
?>