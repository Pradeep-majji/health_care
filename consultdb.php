<?php
include "connect.php";
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $bloodgroup=$_POST['bloodgroup'];
    $gender=$_POST['gender'];
    $doctor=$_POST['doctor'];
    $slots=$_POST['slots'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];
    $cause=$_POST['cause'];
    
}
$sql="INSERT INTO consult (name,bloodgroup,gender,availabledoctors,availableslots,phone,email,address,cause) VALUES('$name','$bloodgroup','$gender','$doctor','$slots','$phone','$email','$address','$cause')";

$result=$conn->query($sql);

if($result==TRUE){
    header("Location:p.php");
}
else{
    echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>