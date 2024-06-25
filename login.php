<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                        <link rel="stylesheet" href="css/login.css">
	                  		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	                     	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
                           	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
                           	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                           	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                          	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                           	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
                           	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
                         	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
                           	<meta charset="utf-8">
                           	<meta name="viewport" content="width=device-width, initial-scale=1">
                        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                         	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
                           	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>
<body>
	
<!-- SECTION STARTS-->
<section>
	<!-- MIDDLE ROW-->
<div id="middlebar">
	<!-- TOP BAR-->
			<div class="grid-container">
					<!-- IMAGE-->
					<div class="image">
						<a href="home.php"><img src="images/cf.png"></a>
					</div>
					<!-- IMAGE CLOSE-->	
				
			</div>
			<!-- LOGIN FORM-->	
			<div id="login">
					<div class="log">
						<div class="font">
							<i class="fa fa-user fa-3x"></i>
						</div>
						<div class="form-det">
							<form method="POST"action="">
								<span>UserName</span><br>  <input type="text" id="uname" name="uname" placeholder="Enter Your username"required><br><br><br>
								<span>Password</span>  &nbsp;&nbsp;<input type="password" id="password" name="password" placeholder="Enter Password"required>
								<input type="submit" value="Login"name="sub">
							</form>

						</div>
						<!--LINK-->
						<div class="notaccount">
							<a href="reg.php"><p>Don't have an Account,Register as New User</p></a>
						</div>
						<!--LINK CLOSE-->
					</div>
					
			</div>
			<!-- LOGIN FORM CLOSE-->			


</section>
<!-- SECTION CLOSE-->
							


							<?php
							if(isset($_POST['sub']))
							{
								
								$user=$_POST['uname'];
								$pwd=$_POST['password'];
								$q="select * from login where uname='$user' && password='$pwd'";
								$data=mysqli_query($conn,$q);
								$total=mysqli_num_rows($data);
								if($total)
								{
									header('location:home.php');
								}
								else 
								{
									if($user=='admin' && $pwd=='admin')
									{
										header('location:admin.php');
									}
								}	

							}
							?>





							
							


</body>
</html>