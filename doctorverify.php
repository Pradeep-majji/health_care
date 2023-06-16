<?php
session_start();
include "connect.php";
if(isset($_POST['email']) && isset($_POST['pass']))
{
    function clear($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$email = clear($_POST['email']);
$password = clear($_POST['pass']);

if(empty($email)) {
    header ("Location:doctorlogin.php?error=User email is reqired");
    exit();
}
else if(empty($password)){
    header ("Location:doctorlogin.php?error=Password is reqired");
    exit();
}

$sql="SELECT * FROM doctor WHERE demail='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1){
    $row=mysqli_fetch_assoc($result);
    if($row['demail']===$email && password_verify($password,$row['dpassword'])){
        echo "logged in";
        $_SESSION['demail']=$row['demail'];
        $_SESSION['dname']=$row['dname'];
        $_SESSION['did']=$row['did'];
        header("Location: doctorform.php");
        exit();
    }
    else{
        header("Location:doctorlogin.php?error=User email and password is incorrect ");
        exit();
    }
}
else{
    header("Location: doctorlogin.php?error=User email or password is incorrect");
    exit();
}
