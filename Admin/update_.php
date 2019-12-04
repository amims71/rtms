<?php
include "config.php";

$name=$_POST["name"];
$p1=$_POST["p1"];
$p2=$_POST["p2"];
$p3=$_POST["route"];
$time=$_POST["time"];
$vip=$_POST["vip"];
$nor=$_POST["normal"];
$id=$_POST["id"];
$sql = "UPDATE  train  SET  name ='$name', place1 ='$p1', place2 ='$p2', route ='$p3', time ='$time', vip ='$vip', normal='$nor' WHERE id='$id'";


if ($conn->query($sql) === TRUE) {
   header('location: main.php?st=suceess');
	
} else {
    echo "<script>alert('User Already Exist');</script>";
	
}


?>