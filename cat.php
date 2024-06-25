<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                       	<link rel="stylesheet" href="css/style2.css">
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
	                       
	                       
<body>
	<!-- HEADER STARTS-->

<section id="header">
	         <!-- TOPBAR STARTS-->
                 

<!-- MIDDLEBAR STARTS-->
<div id="middlebar">
			<div class="grid-container">
				<!-- IMAGE-->
				<div class="image">
				<a href="home.php"><img src="images/cf.png"></a>
				</div>
				<!-- IMAGE ENDS-->
				<!-- SEARCH BOX-->
			<div class="searchbox">
			    <form class="example" action="home1.php"method="POST">
  				<input type="text" placeholder="What are You looking for?" name="search">
 				<button type="submit"name="sub"><i class="fa fa-search"></i></button>
				</form>
			</div>
			
			<!-- SEARCH BOX ENDS-->
			<!-- CART-->

			<a href="cart.php"><div class="cart">
					<i class="fal fa-shopping-cart fa-2x ">&nbsp;<span style="font-size: 17px;margin-left: -10px;">

					(<?php
							
							$sql="select * from cart";
							$res=mysqli_query($conn,$sql);
							$total=mysqli_num_rows($res);
							
							echo $total;
							

						?>

						)








				</span></i></a>
			</div>
			<!-- CART ENDS-->
			<!-- LOGIN SIGNUP -->

			<div class="loginsign">
				<a class="lsa"href="login.php"id="lsf"><h6>Log In / Sign Up</h6></a>
			</div>
			<!-- LOGIN SIGNUP ENDS-->
			</div>
			<!-- GRID CONTAINER ENDS -->

</div>
<!-- MIDDLEBAR ENDS -->
              
<!-- LASTBAR STARTS-->

<div id="lastbar">
                    
					<div id="catbar">
						<div class="grid-container">
                        <?php 			
						$query="select * from categories"; 			
						$run= mysqli_query($conn,$query); 			
						while ($row=mysqli_fetch_array($run)) 			 
						{ 				
							$id=$row['id']; 				
							$name=$row['name'];  				
							echo"
							<a href='cat.php?id=$id'>
							<div class='item1'>$name</div>
							</a>";		
						}
						?>

					</div>
					</div>

<!-- LASTBAR ENDS-->


<!-- FILTER-->
<section id="filtersection">
				<?php 	
						$id=$_GET['id'];		
						$query="select * from categories where id='$id'"; 			
						$run= mysqli_query($conn,$query); 			
						while ($row=mysqli_fetch_array($run)) 			 
						{ 				
							$id=$row['id']; 				
							$name=$row['name']; 
							echo"
							<h6>Home&nbsp; /&nbsp;<span>$name</span></h6>

							";	
						}
				?>
</section>
<!-- FILTER END-->
</body>
</html>