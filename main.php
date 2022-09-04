<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","","Spiral");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Spiral</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
  <img  id="img" src="Frontend/html.php/validation/bgimg2.webp" style="width:100vw;height:100vh;z-index:-1;">
  <nav class="navbar .bg-success" style="z-index: 1;margin-top: -100vh;">
  <div class="container-fluid">
    <a class="navbar-brand"  style="background-color: burlywood;"href="Profile.html">
      <img src="Frontend/html.php/Spiral.jpg" alt="" width="150" height="70" class="d-inline-block align-text-top">
      Spiral
    </a>
    <h1 style="color: red;font-style: oblique;background-color: cornsilk;">
    <?php
    echo "WELCOME" . " " . $_SESSION['name'];
    ?>
    </h1>   
    <a class="navbar-brand" style="background-color: burlywood;font-style: italic;" href="LOGIN.php">
      LOGOUT
    </a>
  </div>
  
</nav>
<div>

<div>
<form method="POST" action="mainL.php">
  <div class="form-group">
    <label  style="font-size: 184%;color: darkgreen;">TITLE<label>
    <input style="margin-left: 31px;" type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label style="font-size: 184%;color: darkgreen;">DESCRIPTION</label>
    <input type="text"  name="descrip" id="descrip" placeholder="Description">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
</div>
<form method="POST" style="padding-top: 4vh;" action="DELETE.php">
  <div class="form-group">
    <label style="font-size: 184%;color: darkgreen;">TITLE<label>
    <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title TO DELETE">
  </div>
  <div class="form-group">
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>
<div>
<?php
$sql3="SELECT * FROM descrip";
$result3=mysqli_query($conn,$sql3);
if(!$result3){
    echo "Connection failed: " . mysqli_error($conn);
    
}?><h1 style="font-style: italic;color: crimson;" style="color: brown;">ALL NOTES!!</h1>
<h5><?php

while($row1=mysqli_fetch_assoc($result3)){

    if(($row1['email']==$_SESSION['email']) && ($row1['title']!=NULL) && ($row1['descrip']!=NULL)){

    echo "TITLE : " . $row1['title'] . "<br/>";
    echo "DESCRIPTION : " . $row1['descrip'] . "<br/>";
    echo  "<br/>";
    }
}
mysqli_close($conn);
?>
</h5>
</div>


</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
