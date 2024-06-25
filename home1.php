<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                       	<link rel="stylesheet" href="css/style.css">
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
	<!-- HEADER STARTS-->

<section id="header">
	         <!-- TOPBAR STARTS-->

                   <!-- TOP BAR ENDS-->

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
			<!-- ROW ENDS -->

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
<section>
	<div class="css-slider-wrapper">
      <input type="radio" name="slider" class="slide-radio1" checked id="slider_1">
      <input type="radio" name="slider" class="slide-radio2" id="slider_2">
      <input type="radio" name="slider" class="slide-radio3" id="slider_3">
      <input type="radio" name="slider" class="slide-radio4" id="slider_4">

      <!-- Slider Pagination -->
      <div class="slider-pagination">
        <label for="slider_1" class="page1"></label>
        <label for="slider_2" class="page2"></label>
        <label for="slider_3" class="page3"></label>
        <label for="slider_4" class="page4"></label>
      </div>

      <!-- Slider #1 -->
      <div class="slider slide-1">
        <img src="images/model-3.png" alt="">
        <div class="slider-content">
          <h4>New Product</h4>
          <h2>Denim Longline T-Shirt Dress With Split</h2>
          <button type="button" class="buy-now-btn" name="button">$130</button>
        </div>
        <div class="number-pagination">
          <span>1</span>
        </div>
      </div>

      <!-- Slider #2 -->
      <div class="slider slide-2">
        <img src="images/model-2.png" alt="">
        <div class="slider-content">
          <h4>New Product</h4>
          <h2>Denim Longline T-Shirt Dress With Split</h2>
          <button type="button" class="buy-now-btn" name="button">$130</button>
        </div>
        <div class="number-pagination">
          <span>2</span>
        </div>
      </div>

      <!-- Slider #3 -->
      <div class="slider slide-3">
        <img src="images/model-1.png" alt="">
        <div class="slider-content">
          <h4>New Product</h4>
          <h2>Denim Longline T-Shirt Dress With Split</h2>
          <button type="button" class="buy-now-btn" name="button">$130</button>
        </div>
        <div class="number-pagination">
          <span>3</span>
        </div>
      </div>

      <!-- Slider #4 -->
      <div class="slider slide-4">
        <img src="images/model-4.png" alt="">
        <div class="slider-content">
          <h4>New Product</h4>
          <h2>Denim Longline T-Shirt Dress With Split</h2>
          <button type="button" class="buy-now-btn" name="button">$130</button>
        </div>
        <div class="number-pagination">
          <span>4</span>
        </div>
      </div>
    </div>

	
</section>
<!-- PRODUCTS SECTION STARTS-->
<div id="nsection">
		<div class="grid-container">
		
			 <?php
				if(isset($_POST['sub']))
				{
					
					$search=$_POST['search'];
					$query="select * from images where description LIKE '%$search%'"; 			
					$run= mysqli_query($conn,$query); 
					if(mysqli_num_rows($run)<1)
					{
							echo"
								 <div class='info-msg'>
 								 	
 								   <h1>  <span style='color:#f15440;text-transform:uppercase;'>$search</span> not Found!!!!!</h1>
								 	</div>
							";
					}
					else
					{


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
				}

			?>	
				
		</div>
</div>
</section>
<!-- PRODUCTS SECTION ENDS-->
</body>
</html>