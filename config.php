<?php
//header('Content-Type: text/html; charset=utf-8');
$servername = "localhost";
$username = "root";
$password = "1";
$dbname = "rtms";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
//$conn->set_charset("utf8");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
