<?php
include "connect.php";
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $blood=$_POST['bloodgroup'];
}
$sql="INSERT INTO donor (dname,demail,dpassword,dbloodgroup,dphone) VALUES('$name','$email','$password','$blood','$phone')";

$result=$conn->query($sql);

if($result==TRUE){
    header("Location:donorlogin.php?error=successfully registered");
    exit();
}
else{
    echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>