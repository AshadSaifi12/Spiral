<?php
$conn=mysqli_connect("127.0.0.1","root","","Spiral");

if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
$name =  $_POST['Name'];
$email =  $_POST['Email'];
$pass =  $_POST['Password'];
if(($email==null) || ($name==null) || ($pass)==null){
    header("Location: SIGNUP.php");
    exit;
}
$sql="INSERT INTO users(email,name,password) VALUES ('$email','$name','$pass')";
$result=mysqli_query($conn,$sql);
if((!$result)){
    
    header("Location: SIGNUP.php");

    }
else{
    header("Location: LOGIN.php");
}
mysqli_close($conn);