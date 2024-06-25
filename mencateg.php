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
                        				
						
							<a href='women.php'>
							<div class='item1'>Women's Clothing</div>
							</a>	

							<a href='men.php'>
							<div class='item1'>Men's Clothing</div>
							</a>	

							<a href='womens.php'>
							<div class='item1'>Women's Shoes</div>
							</a>	

							<a href='mens.php'>
							<div class='item1'>Men's Shoes</div>
							</a>	

								
						

					</div>
					</div>

<!-- LASTBAR ENDS-->


<!-- FILTER-->
<section id="filtersection">
				
							
							<h6>Home&nbsp; /&nbsp;<span>Women's Clothing</span></h6>

							
</section>
<section id="subcat">

	
						<?php 			
			$query="select * from mencat"; 			
			$run= mysqli_query($conn,$query); 			
			while ($row=mysqli_fetch_array($run)) 			 
				{ 				
					$mid=$row['mid']; 				
								
					$mtitle=$row['mtitle'];  				
					echo" 			
					<div class='subcat'>
			
					<h1><a href='mencateg.php?mid=$mid'>$mtitle</a></h1>
			
			
			</div> 				
					"; 			
				} 				
				?>

<div id="size">

	</div>


</section>
<section id="cat_img">
	<div class="subimage">
		<div id="nsection1">
		<div class="grid-container">
		
			 			
		
			<?php 	
			if(isset($_GET['mid']))	
			{
				$mid=$_GET['mid'];

			$query="select * from images where mid='$mid'"; 			
			$run= mysqli_query($conn,$query); 			
			while ($row=mysqli_fetch_array($run)) 			 
				{ 				
					$id=$row['id']; 				
					$image=$row['image'];  				
					$price=$row['price']; 				
					$d2=$row['d2'];  				
					echo" 			
					<div class='inimage'> 			
						<a href='shopping.php?id=$id'>
						<img src='$image'> 			
						<h6>$price &#8377;<span>$d2</span></h6></a>  			
					</div>  				
					"; 			
				} 
					}					
				?>

				<?php 	
			if(isset($_GET['smid']))	
			{
				$smid=$_GET['smid'];

			$query="select * from images where smid='$smid'"; 			
			$run= mysqli_query($conn,$query); 			
			while ($row=mysqli_fetch_array($run)) 			 
				{ 				
					$id=$row['id']; 				
					$image=$row['image'];  				
					$price=$row['price']; 				
					$d2=$row['d2'];  				
					echo" 			
					<div class='inimage'> 			
						<a href='shopping.php?id=$id'>
						<img src='$image'> 			
						<h6>$price &#8377;<span>$d2</span></h6></a>  			
					</div>  				
					"; 			
				} 
					}					
				?>
					


			

				
		</div>
				
		
	</div>
</div>



</section>
<div id="size1">
	<h5>Size</h5>
		<div class="squares">

				<?php 	
			


			$query="select * from sizem"; 			
			$run= mysqli_query($conn,$query); 			
			while ($row=mysqli_fetch_array($run)) 			 
				{ 				
					$smid=$row['smid']; 				
					$msize=$row['msize'];  				
					echo" 			
					<a href='mencateg.php?smid=$smid'>
					<div class='icon1'>
        			 <p>$msize</p>
      				</div></a>				
					"; 			
				} 
										
				?>			


      			
 		</div>
</div>

<div id="size-bottom">

</div>




<!-- FILTER END-->
</body>
</html>