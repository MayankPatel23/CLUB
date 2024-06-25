

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
<h1> Women  Categories</h1>


<form method="POST"action="managecat.php">
  <fieldset id="fieldset-sign-up">
    <legend>Add Categories</legend>
    <label>
      ID
      <input type="text"
             name="cat_id"
             >
    </label>
    <label>
      Title
      <input type="text"
             name="cat_title" 
             >
    </label>
    
    </label>
    <input type="submit" name="sub"value="Add" class="next">
  </fieldset>


</form>

<form method="POST"action="managecat.php"class="form2">
  <fieldset id="fieldset-sign-up">
    <legend>Delete Categories</legend>

    <label>
      ID
      <input type="text"
             name="cat_id"
             required>
    </label>
   
    <input type="submit" name="sub1"value="Delete" class="next">
  </fieldset>


</form>

<?php
  if(isset($_POST['sub']))
  {
    $cat_id=$_POST['cat_id'];
    $cat_title=$_POST['cat_title'];
  

    $sql="insert into categories(cat_id,cat_title) values('$cat_id','$cat_title')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successful</p>";
    }
  }
?>


<?php
  if(isset($_POST['sub1']))
  {
    $cat_id=$_POST['cat_id'];
 

   $sql="delete from categories where cat_id='$cat_id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successfully Deleted</p>";
    }
  }
?>



















<h1> Men  Categories</h1>


<form method="POST"action="managecat.php">
  <fieldset id="fieldset-sign-up">
    <legend>Add Categories</legend>
    <label>
      ID
      <input type="text"
             name="mid"
             >
    </label>
    <label>
      Title
      <input type="text"
             name="mtitle" 
             >
    </label>
    
    </label>
    <input type="submit" name="sub2"value="Add" class="next">
  </fieldset>


</form>

<form method="POST"action="managecat.php"class="form2">
  <fieldset id="fieldset-sign-up">
    <legend>Delete Categories</legend>

    <label>
      ID
      <input type="text"
             name="mid"
             required>
    </label>
   
    <input type="submit" name="sub3"value="Delete" class="next">
  </fieldset>


</form>

<?php
  if(isset($_POST['sub2']))
  {
    $mid=$_POST['mid'];
    $mtitle=$_POST['mtitle'];
  

    $sql="insert into mencat(mid,mtitle) values('$mid','$mtitle')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successful</p>";
    }
  }
?>


<?php
  if(isset($_POST['sub3']))
  {
    $mid=$_POST['mid'];
 

   $sql="delete from mencat where mid='$mid'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successfully Deleted</p>";
    }
  }
?>


























<h1> Women Shoes Categories</h1>


<form method="POST"action="managecat.php">
  <fieldset id="fieldset-sign-up">
    <legend>Add Categories</legend>
    <label>
      ID
      <input type="text"
             name="wsid"
             >
    </label>
    <label>
      Title
      <input type="text"
             name="wstitle" 
             >
    </label>
    
    </label>
    <input type="submit" name="sub4"value="Add" class="next">
  </fieldset>


</form>

<form method="POST"action="managecat.php"class="form2">
  <fieldset id="fieldset-sign-up">
    <legend>Delete Categories</legend>

    <label>
      ID
      <input type="text"
             name="wsid"
             required>
    </label>
   
    <input type="submit" name="sub5"value="Delete" class="next">
  </fieldset>


</form>

<?php
  if(isset($_POST['sub4']))
  {
    $wsid=$_POST['wsid'];
    $wstitle=$_POST['wstitle'];
  

    $sql="insert into womenshoescat(wsid,wstitle) values('$wsid','$wstitle')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successful</p>";
    }
  }
?>


<?php
  if(isset($_POST['sub5']))
  {
    $wsid=$_POST['wsid'];
 

   $sql="delete from womenshoescat where wsid='$wsid'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successfully Deleted</p>";
    }
  }
?>






















<h1> Men Shoes Categories</h1>


<form method="POST"action="managecat.php">
  <fieldset id="fieldset-sign-up">
    <legend>Add Categories</legend>
    <label>
      ID
      <input type="text"
             name="mshid"
             >
    </label>
    <label>
      Title
      <input type="text"
             name="mshtitle" 
             >
    </label>
    
    </label>
    <input type="submit" name="sub6"value="Add" class="next">
  </fieldset>


</form>

<form method="POST"action="managecat.php"class="form2">
  <fieldset id="fieldset-sign-up">
    <legend>Delete Categories</legend>

    <label>
      ID
      <input type="text"
             name="mshid"
             required>
    </label>
   
    <input type="submit" name="sub7"value="Delete" class="next">
  </fieldset>


</form>

<?php
  if(isset($_POST['sub6']))
  {
    $mshid=$_POST['mshid'];
    $mshtitle=$_POST['mshtitle'];
  

    $sql="insert into menshoescat(mshid,mshtitle) values('$mshid','$mshtitle')";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successful</p>";
    }
  }
?>


<?php
  if(isset($_POST['sub7']))
  {
    $mshid=$_POST['mshid'];
 

   $sql="delete from menshoescat where mshid='$mshid'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successfully Deleted</p>";
    }
  }
?>



</body>
</html>
