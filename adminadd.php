<?php
include("db.php");
?>



<!DOCTYPE html>
<html>
<head>
	<title>Admin Add</title>
</head>
<body>

	<h1>Add Women Clothes</h1>
	<form method="POST"action="">
		ID : <input type="text" name="id"><br><br>
		Image : <input type="text" name="image"><br><br>
		Description : <input type="text" name="description"><br><br>
		Price : <input type="text" name="price"><br><br>
		d2 : <input type="text" name="d2"><br><br>
		Gender : <input type="text" name="gender"><br><br>
		Offer Price: <input type="text" name="ofprice"><br><br>
		Type : <input type="text" name="type"><br><br>
		 <input type="submit" name="sub"><br><br>
		


		<?php
			if(isset($_POST['sub']))
			{
				$id=$_POST['id'];
				$image=$_POST['image'];
				$description=$_POST['description'];
				$price=$_POST['price'];
				$d2=$_POST['d2'];
				$gender=$_POST['gender'];
				$ofprice=$_POST['ofprice'];
				$type=$_POST['type'];

							$q="insert into images values('$id','$image','$description','$price','$d2','$gender','$ofprice','$type')";
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


		




	</form>









</body>
</html>