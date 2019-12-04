<?php

$sql = "Select * from train";
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
  <th>Delete</th>
  <th>Update</th>
  
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
	echo'<tr class="alt">
        <td>'.$row["name"].'</td>
        <td>'.$row["place1"].'</td>
        <td>'.$row["place2"].'</td>
        <td>'.$row["time"].'</td>
   
		<td><a target="_blank" href="delete.php?id='.$row["id"].'">Click Here</a></td>
		<td><a target="_blank" href="update.php?id='.$row["id"].'">Click Here</a></td>
		
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
