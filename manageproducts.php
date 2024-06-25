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

<h1>Manage Products</h1>




<form method="POST"action="manageproducts.php">
  <fieldset id="fieldset-sign-up">
    <legend>Add Products</legend>
    <label>
      ID
      <input type="text"
             name="id"
             >
    </label>
    <label>
      Image
      <input type="text"
             name="image" 
             >
    </label>
    <label>
      Description
      <input type="text"
              name="description" 
             >
    </label>
    <label>
      Price
      <input type="text" 
             name="price" 
             >
    </label>

    <label>
      Offer %
      <input type="text" 
             name="d2" 
             >
    </label>
     <label>
      gender
      <input type="text" 
             name="gender" 
             >
    </label>

     <label>
     Offer Price
      <input type="text" 
             name="ofprice" 
             >
    </label>

     <label>
      Type
      <input type="text" 
             name="type" 
             >
    </label>
    

     <label>
      Type1
      <input type="text" 
             name="type1" 
             >
    </label>

     <label>
      Category Id(Women)
      <input type="text" 
             name="cat_id" 
             >
    </label>

     <label>
      Size ID(Women)
      <input type="text" 
             name="s_id" 
             >
    </label>
    <label>
      Category Id(men)
      <input type="text" 
             name="mid" 
             >
    </label>

     <label>
      Size ID(men)
      <input type="text" 
             name="smid" 
             >
    </label>

     <label>
      Category Id(Wshoes)
      <input type="text" 
             name="wsid" 
             >
    </label>

     <label>
      Size ID(Wshoesize)
      <input type="text" 
             name="wshid" 
             >
    </label>

    <label>
      Category Id(Mshoes)
      <input type="text" 
             name="mshid" 
             >
    </label>

     <label>
      Size ID(Mshoesize)
      <input type="text" 
             name="mshoeid" 
             >
    </label>
    <input type="submit" name="sub"value="Add" class="next">
  </fieldset>


</form>




<form method="POST"action="manageproducts.php"class="form1">
  <fieldset id="fieldset-sign-up">
    <legend>Delete Products</legend>

    <label>
      ID
      <input type="text"
             name="id"
             required>
    </label>
   
    <input type="submit" name="sub1"value="Delete" class="next">
  </fieldset>


</form>

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
    $type1=$_POST['type1'];
    $cat_id=$_POST['cat_id'];
    $s_id=$_POST['s_id'];
    $mid=$_POST['mid'];
    $smid=$_POST['smid'];
    $wsid=$_POST['wsid'];
    $wshid=$_POST['wshid'];
    $mshid=$_POST['mshid'];
    $mshoeid=$_POST['mshoeid'];


    $sql="insert into images(id,image,description,price,d2,gender,ofprice,type,type1,cat_id,mid,wsid,mshid,s_id,smid,wshid,mshoeid) values('$id','$image','$description','$price','$d2','$gender','$ofprice','$type','$type1','$cat_id','$mid','$wsid','$mshid','$s_id','$smid','$wshid','$mshoeid')";
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
    $id=$_POST['id'];
 

   $sql="delete from images where id='$id'";
    $res=mysqli_query($conn,$sql);
    if($res)
    {
      echo"<p style='margin-left:628px;'>Successfully Deleted</p>";
    }
  }
?>
  


</body>
</html>



    




  


</body>
</html>
