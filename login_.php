<?php
include "config.php";
session_start();

$un=$_POST["username"];
$pass=$_POST["password"];

$sql = "Select * from user_info where username='$un' and password='$pass' ";

$result = $conn->query($sql);

if ($result->num_rows>0) {
	
   $_SESSION["user"] = $un;
   //echo $_SESSION["user"];
  header('location: main.php');
} else {
    header('location: login.php?id=0');
}


?>