<?php
session_start();
include "connect.php";
if(isset($_POST['demail']) && isset($_POST['dpass']))
{
    function clear($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
$email = clear($_POST['demail']);
$password = clear($_POST['dpass']);

if(empty($email)) {
    header ("Location:donorlogin.php?error=User email is reqired");
    exit();
}
else if(empty($password)){
    header ("Location:donorlogin.php?error=Password is reqired");
    exit();
}

$sql="SELECT * FROM donor WHERE demail='$email'";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) === 1){
    $row=mysqli_fetch_assoc($result);
    if($row['demail']===$email && password_verify($password,$row['dpassword'])){
        echo "logged in";
        $_SESSION['demail']=$row['demail'];
        $_SESSION['dname']=$row['dname'];
        $_SESSION['did']=$row['did'];
        header("Location: donorform.php");
        exit();
    }
    else{
        header("Location:donorlogin.php?error=User email and password is incorrect iam");
        exit();
    }
}
else{
    header("Location: signin.php?error=User email or password is incorrect");
    exit();
}
