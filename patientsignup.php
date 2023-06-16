<?php
include "connect.php";
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
}
$sql="INSERT INTO patient (name,email,password,phone) VALUES('$name','$email','$password','$phone') ";

$result=$conn->query($sql);

if($result==TRUE){
    header("Location:patientlogin.php?error=successfully registered");
    exit();
}
else{
    echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>