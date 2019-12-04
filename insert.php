<?php
include "config.php";

$name=$_POST["name"];
$un=$_POST["username"];
$add=$_POST["address"];
$mob=$_POST["mobile"];
$bn=$_POST["bankname"];
$acn=$_POST["acn"];
$pass=$_POST["password"];
$email=$_POST["email"];
$sql = "INSERT INTO user_info
(fullname, username,address,mobile,bankname,acn,password,email)
VALUES ('$name','$un','$add','$mob','$bn','$acn','$pass','$email')";


if ($conn->query($sql) === TRUE) {
     header('location: login.php');
} else {
    echo "<script>alert('User Already Exist');</script>";
	header('location: signup.php');
}


?>