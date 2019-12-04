<?php
include "config.php";

$name=$_POST["name"];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["route"];
$time=$_POST["time"];
$vip=$_POST["vip"];
$nor=$_POST["normal"];


$sql = "INSERT INTO train
(name, place1,place2,route,time,vip,normal)
VALUES ('$name','$p1','$p2','$p3','$time','$vip','$nor')";


if ($conn->query($sql) === TRUE) {
     header('location: man.php?st=suceess');
} else {
    echo "<script>alert('User Already Exist');</script>";
	header('location: man.php?st=failed');
}


?>