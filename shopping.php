<?php
include("db.php");
?>

<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                       	<link rel="stylesheet" href="css/style1.css">
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

							if(isset($_POST['sub']))
								{
	

							$sql="select * from cart";
							$res=mysqli_query($conn,$sql);
							$total=mysqli_num_rows($res);
							

							?>

	<META HTTP-EQUIV="refresh" CONTENT="0">
							<?php
						}
							else
							{
							$sql="select * from cart";
							$res=mysqli_query($conn,$sql);
							$total=mysqli_num_rows($res);

							}
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

<!-- PRODUCTS SECTION STARTS-->
<div id="nsection">
		<div class="row">
			<?php
			error_reporting(0);
			$id=$_GET['id'];
			$query="select * from images where id='$id'";
			$run= mysqli_query($conn,$query);
			while ($row=mysqli_fetch_array($run))
			 {
				$id=$row['id'];
				$image=$row['image'];
				$price=$row['price'];
				$ofprice=$row['ofprice'];
				$d2=$row['d2'];
				$description=$row['description'];

				echo"
			    <div class='imgstack'>
			             
                    <img src='$image'>
                         
                           
                                
                                <div class='but1'>
                                	<form method='POST'action=''>
                                		<a href='shopping.php?id=$id'><input type='submit' class='button button2' value='ADD TO BAG'name='sub'></a>
                                   		<input style='margin-left:3px;margin-top:0px;'type='submit' class='button button2'value='BUY NOW'>
                                   		
                               		</form>
                               		
                           		</div>     

			    </div>
			    <div class='detail'>
			        <h3>$description</h3>
			        <h2>M.R.P. : <del>&nbsp;$price &nbsp;&#8377;  &nbsp;</h2></del>
			        <h4>Deal Of the day : &#8377; $ofprice</h4>
			        <div class='circle-text'>
			       		 $d2
			        </div>
			        <div class='quant'>
			        	



			        </div>
			        
			    </div

				";
			}
				?>

		</div>
</div>
</section>
<?php
	if(isset($_POST['sub']))
	{
		$id=$_GET['id'];
		
		
		
		$q="insert into cart values('$id')";
		$run= mysqli_query($conn,$q);
		if($run)
		{
			
			
		}
	}
?>

<!-- COUNT ITEMS IN CART-->


<!-- PRODUCTS SECTION ENDS-->
</body>
</html>