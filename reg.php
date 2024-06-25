<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                        <link rel="stylesheet" href="css/reg.css">
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
	
<!-- SECTION START-->
<section>
	<!-- Middle Row-->
<div id="middlebar">
			<div class="grid-container">
				<!-- IMAGE-->
					<div class="image">
						<a href="home.php"><img src="images/cf.png"></a>
					</div>
				
			</div>	
			<!-- Login Form-->
			<div id="login">
					<div class="log">
						<div class="font">
							<i class="fa fa-user fa-3x"></i>
						</div>
						<!-- Form Details-->
						<div class="form-det">
							<form method="POST"action="">

								<span>UserName</span>  <input type="text" id="uname" name="uname" placeholder="Enter Your username"required><br><br>
								<span>Password</span>  <input type="password" id="password" name="password" placeholder="Enter Password"required><br><br>
								<span>E-mail</span>  <input type="text" id="email" name="email" placeholder="Enter Email"required>
								<input type="submit" value="Register"name="sub">
							</form>
							
						<!-- FORM DETAIL CLOSE-->	
						</div>
						<!-- LINK-->
						<div class="notaccount">
							<a href="login.php"><p>Already registered,Please Login</p></a>
						</div>
						<!-- LINK CLOSE-->
					</div>
					
			</div>
			<!--LOGIN FORM CLOSE-->			


</section>
<!-- SECTION CLOSE-->
<?php
							if(isset($_POST['sub']))
							{	
							$user=$_POST['uname'];
							$pwd=$_POST['password'];
							$email=$_POST['email'];
							$q="insert into login values('$user','$pwd','$email')";
							$data=mysqli_query($conn,$q);
							if($data)
							{
								echo"Data Inserted";
							}
							else
							{
								echo"data Not Inserted";
							}
							}	
							?>

</body>
</html>