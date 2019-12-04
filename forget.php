<?php
error_reporting(0);
include 'head.php';
include "config.php";

if(isset($_GET["us"])){
$k=$_GET["us"];
$sql = "Select *  from user_info Where email='$k' or username='$k'";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
$row = $result->fetch_assoc();
$account="avirtualbank@gmail.com";
$password="admin.bank";
$to=$row["email"];
$from="avirtualbank@gmail.com";
$from_name="Admin RTMS";
$msg="Hi,<strong> your password is </strong>".$row['password']; // HTML message
$subject="Forget Password";
/*End Config*/

include("phpmailer/class.phpmailer.php");
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet = 'UTF-8';
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth= true;
$mail->Port = 465; // Or 587
$mail->Username= $account;
$mail->Password= $password;
$mail->SMTPSecure = 'ssl';
$mail->From = $from;
$mail->FromName= $from_name;
$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body = $msg;
$mail->addAddress($to);
if(!$mail->send()){
 echo "Mailer Error: " . $mail->ErrorInfo;
}else{
 echo "<script>alert('Password has been sent....');</script>";
}
}
else{
	echo "<script>alert('No record Found');</script>";
}
}

?>
<div class="main">
     <div class="wrap">
      	 <div class="section group">
				<div class="cont span_2_of_blog">
				  <div class="login-title">
           		<h4 class="title">Reset Password </h4>
				<div id="loginbox" class="loginbox">
					<form action="forget.php" method="get" name="login" id="login-form">
					  <fieldset class="input">
					    <p id="login-form-username">
					      <label for="modlgn_username">Username or Email</label>
					      <input id="modlgn_username" type="text" name="us" class="inputbox" size="18" autocomplete="off">
					    </p>
					     </br>

					    <input type="submit" name="Submit" class="button" value="Submit">

					    
					  </fieldset>
					 </form>
				</div>
			</div>   
			</div>
		 
	   <div class="clear"></div>
	   
	   <?php
include 'footer.php';
?>