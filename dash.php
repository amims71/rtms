<?php

include "config.php";
session_start();
$s=$_SESSION["p1"];
$d=$_SESSION["p2"];
$sit=$_SESSION["cls"]." ".$_SESSION["sit"];
$tname=$_POST["tname"];
$date=$_POST["date"];
$cost=$_POST["cost"];
$user=$_SESSION["user"];

$sql = "Select bankname,acn from user_info where username='$user'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $bank=$row["bankname"];
	 $acn=$row["acn"];
	
	 
    }
}
$sql = "Select time from train where name='$tname'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
     $time=$date."-".$row["time"];
	
	 
    }
}

$sql ="INSERT INTO `dashboard`(`username`, `train`, `sourse`, `destination`, `date`, `sit`, `cost`, `bank`, `ac`)
VALUES ('$user','$tname','$s','$d','$time','$sit','$cost','$bank','$acn')";
$result = $conn->query($sql);
header('location: dashboard.php');

?>