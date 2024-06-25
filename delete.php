<?php
include("db.php");
$id=$_GET['id'];
$q=mysqli_query($conn,"DELETE FROM cart WHERE id='$id'");
if($q)
{
	include_once"cart.php";
}
?>