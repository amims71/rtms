<?php

include "config.php";

$id=$_GET["id"];

$sql = "Delete from train where id='$id'";
$result = $conn->query($sql);
echo "<script> alert('Deleted');
	window.close();</script>";
?>
