<?php

//include "config.php";
include 'head2.php';

?>
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
         
				<div id="loginbox" class="loginbox">
					<form action="insert.php" method="post" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Train Name</label>
					      <input id="modlgn_username" type="text" name="name" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
						<p>
					      <label for="modlgn_username">Sourse</label>
					      <input id="modlgn_username" type="text" name="p1" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
						<p>
					      <label for="modlgn_username">Destination</label>
					      <input id="modlgn_username" type="text" name="p2" class="inputbox" size="18" autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Route</label>
					      <input id="modlgn_username" type="text" name="route" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Time</label>
					      <input id="modlgn_username" type="text" name="time" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
						<p >
					      <label for="modlgn_username">Vip Sit Cost</label>
					      <input id="modlgn_username" type="text" name="vip" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
						
						<p >
					      <label for="modlgn_username">Normal Cost</label>
					      <input id="modlgn_username" type="text" name="normal" class="inputbox" size="18"  autocomplete="off" required >
					    </p>
			
						
					    <input type="submit" name="Submit" class="button" value="Add">
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