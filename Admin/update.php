<?php

include "config.php";
include 'head2.php';
$id=$_GET["id"];
$sql = "Select * from train where id='$id'";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    
	        $name=$row["name"];
            $p1=$row["place1"];
            $p2=$row["place2"];
			$p3=$row["route"];
			$time=$row["time"];
			$vip=$row["vip"];
			$normal=$row["normal"];
     
	 
    }
?>
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
         
				<div id="loginbox" class="loginbox">
					<form action="update_.php" method="post" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Train Name</label>
					      <input id="modlgn_username" type="text" name="name" class="inputbox" size="18" value="<?php echo $name;?>" autocomplete="off" required >
					    </p>
						<p>
					      <label for="modlgn_username">Sourse</label>
					      <input id="modlgn_username" type="text" name="p1" class="inputbox" size="18" value="<?php echo $p1;?>" autocomplete="off" required >
					    </p>
						<p>
					      <label for="modlgn_username">Destination</label>
					      <input id="modlgn_username" type="text" name="p2" class="inputbox" size="18" value="<?php echo $p2;?>"autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Route</label>
					      <input id="modlgn_username" type="text" name="route" class="inputbox" size="18" value="<?php echo $p3;?>" autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Time</label>
					      <input id="modlgn_username" type="text" name="time" class="inputbox" size="18" value="<?php echo $time;?>" autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Vip Sit Cost</label>
					      <input id="modlgn_username" type="text" name="vip" class="inputbox" size="18" value="<?php echo $vip;?>" autocomplete="off" required >
					    </p>
						
						<p >
					      <label for="modlgn_username">Normal Cost</label>
					      <input id="modlgn_username" type="text" name="normal" class="inputbox" size="18" value="<?php echo $normal;?>" autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">ID</label>
					      <input id="modlgn_username" type="text" name="id" class="inputbox" size="18" value="<?php echo $id;?>" autocomplete="off" readonly >
					    </p>
						
					    <input type="submit" name="Submit" class="button" value="Edit">
					  </fieldset>
					 </form>
					 
				</div>
			</div>   
			</div>
		  <div class="bsidebar span_1_of_blog">
					
					
	     </div>
	   </div>
	   <div class="clear"></div>
	  </div>
   </div>


<?php
include 'footer.php';

?>