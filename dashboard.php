<?php

include 'head2.php';

include "config.php";
$user=$_SESSION["user"];

$sql = "Select * from dashboard where username='$user'";
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
  <th>Train Name</th>
  <th>Sourse</th>
  <th>Destination</th>
  <th>Time</th>
  <th>Sit</th>
  <th>Cost</th>
  <th>Acn</th>
  <th>Download</th>
  
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
	echo'<tr class="alt">
        <td>'.$row["train"].'</td>
        <td>'.$row["sourse"].'</td>
        <td>'.$row["destination"].'</td>
        <td>'.$row["date"].'</td>
        <td>'.$row["sit"].'</td>
        <td>'.$row["cost"].'</td>
        <td>'.$row["ac"].'</td>
		<td><a target="_blank" href="download.php?tname='.$row["train"].'&s='.$row["sourse"].'&d='.$row["destination"].'&dt='.$row["date"].'&cost='.$row["cost"].'&sit='.$row["sit"].'">Click Here</a></td>
		
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