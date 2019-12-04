<?php

include "config.php";
include 'head2.php';
$id=$_GET["id"];
$sql = "Select * from station where id='$id'";
$result = $conn->query($sql);
    while($row = $result->fetch_assoc()) {
    
	        $name=$row["name"];
            $des=$row["description"];
           
			
     
	 
    }
?>
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
         
				<div id="loginbox" class="loginbox">
					<form action="update_1.php" method="post" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Station Name</label>
					      <input id="modlgn_username" type="text" name="name" class="inputbox" size="18" value="<?php echo $name;?>" autocomplete="off" required >
					    </p><br>
						<p>
					      <label for="modlgn_username">Description</label><br>
					      <textarea rows="4" name="des" class="inputbox" cols="50"><?php echo $des;?> </textarea>
					    </p>
						
						<p >
					      <label for="modlgn_username">ID</label>
					      <input id="modlgn_username" type="text" name="id" class="inputbox" size="18" value="<?php echo $id;?>" autocomplete="off" readonly >
					    </p>
						<br>
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