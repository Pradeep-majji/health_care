<?php
include "connect.php";
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $special=$_POST['Specialization'];
}
$sql="INSERT INTO doctor (dname,dspeciality,demail,dpassword,dphone) VALUES('$name','$special','$email','$password','$phone')";

$result=$conn->query($sql);

if($result==TRUE){
    header("Location:doctorlogin.php?error=successfully registered");
    exit();
}
else{
    echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>