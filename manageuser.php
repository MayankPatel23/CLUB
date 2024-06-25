
<?php
include("db.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/admin.css">
</head>
<body>

<ul>
  <li><a class="active" href="admin.php">Home</a></li>
  <li><a href="manageproducts.php">Manage Products</a></li>
  <li><a href="managecat.php">Manage Categories</a></li>
  <li><a href="manageuser.php">Manage Users</a></li>
  
  <li><a href="home.php">Logout</a></li>
</ul>
<table id="customers">
  <tr>
    <th>UserName</th>
    <th>Password</th>
    <th>Email</th>
    <th>Operation</th>

  </tr>
<?php


$sql="select * from login";
 $res=mysqli_query($conn,$sql);
 $total=mysqli_num_rows($res);
 if($total!=0)
 {
 	while($row=mysqli_fetch_assoc($res))
 	{
 		
 		echo"<tr>
			<td>".$row['uname']."</td>
    		<td>".$row['password']."</td>
    		<td>".$row['email']."</td>
    		<td><a style='text-decoration:none;color:black;'href='delete1.php?uname=$row[uname]'onclick='return checkdelete()'>Delete</a></td>
  			</tr>";
 	}
 }
?>


<script type="text/javascript">
  function checkdelete()
  {
    confirm('Are yo sure you want to delete!!!');
  }
</script>

  
  
</table>




</body>
</html>
