<?php

include 'head.php';
if(isset($_GET["id"])){
	if($_GET["id"]==0)
	echo "<script>alert('Wrong Username or Password');</script>";
}
?>

<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">Admin Login</h4>
				<div id="loginbox" class="loginbox">
					<form action="login_.php" method="post" name="login" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Username</label>
					      <input id="modlgn_username" type="text" name="username" class="inputbox" size="18" autocomplete="off" required >
					    </p>
					    <p id="login-form-password">
					      <label for="modlgn_passwd">Password</label>
					      <input id="modlgn_passwd" type="password" name="password" class="inputbox" size="18" autocomplete="off" required>
					    </p>
					    <p id="login-form-remember">
					      <label for="modlgn_remember" class="checkbox">Remember me</label>
					      <input id="modlgn_remember" type="checkbox" name="remember" class="checkbox" value="yes" autocomplete="off">
					    </p>
					    <input type="submit" name="Submit" class="button" value="Login">
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



<?php
include 'footer.php';

?>