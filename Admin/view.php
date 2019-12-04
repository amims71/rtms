<?php

include 'head2.php';

include "config.php";
$user=$_SESSION["user"];

$sql = "Select * from user_info";
$result = $conn->query($sql);
?>

<style>
	
table#passengers {
    font-size:16px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
}

#passengers td, #passengers th {
    border: 1px solid #ddd;
    text-align: left;
    padding: 8px;
}

#passengers tr:nth-child(even){background-color: #f2f2f2}

#passengers th {
    padding-top: 11px;
    padding-bottom: 11px;
    background-color: #4d4d4d;
    color: white;
}

</style>

</head>

<body>


<div style="width:700px; margin:0 auto">
	<table id="passengers">
<tbody><tr>
  <th>Name</th>
  <th>Username</th>
  <th>Address</th>
  <th>Email</th>
  <th>Mobile</th>
  
 
  
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
	echo'<tr class="alt">
        <td>'.$row["fullname"].'</td>
        <td>'.$row["username"].'</td>
        <td>'.$row["address"].'</td>
        <td>'.$row["email"].'</td>
        <td>'.$row["mobile"].'</td>
 
		';
	
	 
    }
}

?>

<!--<tr class="alt">
<td>Amimul Ehshan</td>
<td>Train A</td>
<td>Dhaka</td>
<td>Rajshahi</td>
<td>0800</td>
</tr>-->

</tbody></table>

</div>

<?php

include 'footer.php';


?>