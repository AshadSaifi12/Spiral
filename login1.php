<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","","Spiral");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
$email =  $_POST['Email'];
$pass =  $_POST['Password'];
$_SESSION['email']=$email;
$sql2="SELECT * FROM users";
$result2=mysqli_query($conn,$sql2);
if(!$result2){
    echo "Connection failed: " . mysqli_error($conn);
    header("Location: LOGIN.php");
}
while($row=mysqli_fetch_assoc($result2)){
    $count=0;
    if (($row['email']==$email) and ($row['password']==$pass)){
        $count=$count+1; 
        $_SESSION['name']=$row['name'];
        break;
    }
}
if($count!=0){
  header("Location: main.php");
}
else{
    header("Location: LOGIN.php");
}
mysqli_close($conn);