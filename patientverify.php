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
    header ("Location:patientlogin.php?error=User email is reqired");
    exit();
}
else if(empty($password)){
    header ("Location:patientlogin.php?error=Password is reqired");
    exit();
}

$sql="SELECT * FROM patient WHERE email='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1){
    $row=mysqli_fetch_assoc($result);
    if($row['email']===$email && password_verify($password,$row['password'])){
        echo "logged in";
        $_SESSION['email']=$row['email'];
        $_SESSION['name']=$row['name'];
        $_SESSION['id']=$row['id'];
        header("Location: p.php");
        exit();
    }
    else{
        header("Location:patientlogin.php?error=User email and password is incorrect");
        exit();
    }
}
else{
    header("Location: patientlogin.php?error=User email or password is incorrect");
    exit();
}
