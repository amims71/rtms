<?php
include "config.php";
include "head2.php";
$sql = "Select * from station";
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
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">Add A Station</h4>
				<div id="loginbox" class="loginbox">
					<form action="ads.php" method="post" name="login" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Station Name</label>
					      <input id="modlgn_username" type="text" name="name" class="inputbox" size="18" autocomplete="off" required >
					    </p><br>
						<p>
					      <label for="modlgn_username">Description</label><br>
					      <textarea rows="4" name="des" class="inputbox" cols="50" required ></textarea>
					    </p>
					   <br>
					    <input type="submit" name="Submit" class="button" value="Add">
					  </fieldset>
					 </form>
					 <br>
					 
				</div>
			</div>   
			</div>
		  <div class="bsidebar span_1_of_blog">
					
					
	     </div>
	   </div>
	   <div class="clear"></div>
	  </div>
   </div>


<div style="width:700px; margin:0 auto">
	<table id="passengers">
<tbody><tr>
  <th>Station Name</th>
  <th>Description</th>
  <th>Delete</th>
  <th>Update</th>
  
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    
	echo'<tr class="alt">
        <td>'.$row["name"].'</td>
        <td>'.$row["description"].'</td>
        <td><a target="_blank" href="delete1.php?id='.$row["id"].'">Click Here</a></td>
		<td><a target="_blank" href="update1.php?id='.$row["id"].'">Click Here</a></td>
		
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
include "footer.php";
?>