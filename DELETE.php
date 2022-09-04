<?php
session_start();
$conn=mysqli_connect("127.0.0.1","root","","Spiral");
if(!$conn){
    echo "Connection failed: " . mysqli_connect_error();
    exit; 
}
$title =  $_POST['title'];
$email=$_SESSION['email'];
$sql3="SELECT * FROM descrip";
$result3=mysqli_query($conn,$sql3);
if(!$result3){
    echo "Connection failed: " . mysqli_error($conn);
    
}

while($row1=mysqli_fetch_assoc($result3)){

    if( ($row1['title']==$title) && ($row1['email']==$email))
    {
        if (($title==null)){
            header("Location: main.php");
            exit;
        }
        else{
        $sql2="DELETE FROM descrip WHERE title='$title' AND email='$email';";
        $result2=mysqli_query($conn,$sql2);
        }
    }

        header("Location: main.php");
    }
    mysqli_close($conn);
?>