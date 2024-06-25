<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
    <head>
	      <title>E-Commerce Website</title>
	                       <link rel="stylesheet" href="css/cart.css">
	                       <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


   

    <!-- Styles -->
 

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />
   <link href="https://fonts.googleapis.com/css?family=Fjalla+One&display=swap" rel="stylesheet">
	                       
	                       <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	                      <link href="https://fonts.googleapis.com/css?family=Oswald:700&display=swap" rel="stylesheet">
                           <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
                           <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.1.0/css/all.css">
                           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<section id="header">
	         <!-- TOPBAR STARTS-->
                   <div id="topbar">
	                  
                      
                   </div>
                 

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
</section>
<section id="shopping">
	<h1>Shopping Cart <span>Price</span><span1>Delete</span1></h1>

	<?php
		$sel="select * from cart";
		$run=mysqli_query($conn,$sel);
		while($row=mysqli_fetch_array($run))
		{
			
				$id=$row['id'];
			
				$runs="select * from images where id='$id'";
				$run_pro=mysqli_query($conn,$runs);
				while($row1=mysqli_fetch_array($run_pro))
				{
						$description=$row1['description'];
						$image=$row1['image'];
						$ofprice=$row1['ofprice'];

						echo"

							<div class='clearfix cartimage'>
								<img src='$image'/>
								
								<a href=''><div>$description</div></a>
								<div class='price '>$ofprice</div>
							
								<div class='price2'>
								
								<a style='text-decoration:none;'href='delete.php?id=$row[id]'onclick='return checkdelete()'>Delete</a>
								
								</div>	
																
							</div>

						";
				}
		}
	?>

	
</section>
<section id="checkout">
	<div class="backcheckout">
	<h4 class="summary">Summary</h4>
	<p>Subtotal</p>
	<p>Estimated Delivery & Handling  : <span>0.00</span> </p>
	<span id="total">Total :<span style="margin-left: 325px;">


		<?php
		error_reporting(0);
		$price=0;
		$sel="select * from cart";
		$run=mysqli_query($conn,$sel);
		while($row=mysqli_fetch_array($run))
		{
			
				$id=$row['id'];
			
				$runs="select * from images where id='$id'";
				$run_pro=mysqli_query($conn,$runs);
				while($row1=mysqli_fetch_array($run_pro))
				{
						
						 $price+=$row1['ofprice'];

						

						
				}
				
		}
		echo $price;
	?>
		
		
		



	</span></span>
	<div class="checkout-btn">
			<form method="POST"action="checkout.php">
					<input style='margin-left:30px;margin-top:30px;'type='submit' class='button button2'value='CHECKOUT'>
			</form>
	</div>
	</div>

</section>
<script type="text/javascript">
	
function checkdelete()
{
	confirm('Are yo sure you want to delete!!!');
}
</script>

<script type="text/javascript">


</script>

</body>
</html>