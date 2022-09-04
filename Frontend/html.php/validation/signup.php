<?php
$conn=mysqli_connect("127.0.0.1","root","","Spiral");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
$name =  $_POST['Name'];
$email =  $_POST['Email'];
$num=  $_POST['PhoneNumber'];
$pass =  $_POST['Password'];
$sql="INSERT INTO users(name,email,number,password) VALUES ('$name','$email','$num','$pass')";
$result=mysqli_query($conn,$sql);
if((!$result)){
    if(($email==NULL) or ($name==NULL) or ($num==NULL) or ($pass==NULL)){
        
        echo "ALL FEILDS ARE NECESSARY";
        header("Location:SIGNUP.php");
    }
    else{
    echo "USER ALREADY EXIST" . "<br/>";
    header("Location:SIGNUP.php");
    exit;
    }
}else{
echo "Registration Complete". "<br/>";
echo"Welcome". "<br/>";
?>
<h1><?php
    echo $name . "<br/>";
?>
    </h1
    ?><?php
    header("Location:LOGIN.php");
}
mysqli_close($conn);