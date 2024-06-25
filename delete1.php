
<?php
include("db.php");
?>


<?php

$uname=$_GET['uname'];
$sql="delete from login where uname='$uname'";
$res=mysqli_query($conn,$sql);
if($res)
{
	
	include_once"manageuser.php";
}

?>