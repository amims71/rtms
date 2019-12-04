<?php
include "config.php";

$name=$_POST["name"];
$p1=$_POST["des"];

$sql = "insert into station (name,description) values('$name','$p1')";


if ($conn->query($sql) === TRUE) {
   header('location: station.php?st=suceess');
	
} else {
    echo "<script>alert('User Already Exist');</script>";
	
}


?>