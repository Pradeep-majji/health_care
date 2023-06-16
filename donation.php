<?php
include "connect.php";
if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $bloodgroup=$_POST['bloodgroup'];
    $gender=$_POST['gender'];
    $hospital=$_POST['hospital'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $email=$_POST['email'];

    
}
$sql="INSERT INTO donation (name,bloodgroup,hospital,email,phone,address,gender) VALUES('$name','$bloodgroup','$hospital','$email','$phone','$address','$gender')";

$result=$conn->query($sql);

if($result==TRUE){
    header("Location:donorform.php?error=successfully donated");
    exit();
}
else{
    echo "error".$sql."<br>".$conn->error;
}

$conn->close();
?>