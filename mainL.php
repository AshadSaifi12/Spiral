<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","","Spiral");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
$title =  $_POST['title'];
$_SESSION['title']=$title;
$des =  $_POST['descrip'];
$email=$_SESSION['email'];
if (($title==null)||($des==null)){
    header("Location: main.php");
    exit;
}
$sql4 = "INSERT INTO descrip(title,descrip,email) VALUES ('$title','$des','$email')";
$result=mysqli_query($conn,$sql4);
if(!$result){
    
}
else{
    header("Location: main.php");
}