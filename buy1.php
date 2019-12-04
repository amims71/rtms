<center>
<form style="" method="get" action="main.php">
					
			
			<p>Source</p>
		
		    <select style=" weight:500px; height: 30px ; margin:10px;"  name="s" required > 
			<option value="" selected="selected"></option>
			<?php
include "config.php";
$sql = "Select name from station";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
    }
}
?>
		
			</select>
			<br>
			<p>Destination</p>
		
		    <select style=" weight:500px; height: 30px ; margin:10px;"  name="D" required>
			<option value="" selected="selected"></option>
			 <?php
			 $sql = "Select name from station";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
    }
}
			 ?>
			</select
			<br>
			 <p>
              <label for="modlgn_username">No of Sit</label> <br>
			  <select style=" weight:500px; height: 30px ; margin:10px;" name="sit" required>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
				<option value="4">Four</option>
             </select>
		    </p>
			<br>
			<p>
              <label for="modlgn_username">Select A Class</label> <br>
			 <select style=" weight:500px; height: 30px ; margin:10px;" name="cls" required>
				<option value="1">Vip</option>
				<option value="2">Normal</option>

             </select>
		    </p>
			<br><br>
		    <input type="submit" style=" weight:100px; height: 30px ; margin:10px;" name="Submit" value="Next">
		
		</form>
		
		</label>
	</center>