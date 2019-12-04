<?php 
session_start();
if(isset($_SESSION["user"])){
$un=$_SESSION["user"];
}
else{
header('location: login.php');
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Railway Tickets Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis' rel='stylesheet' type='text/css'>
<link href="css/calendar-eightysix-default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/calendar-eightysix-osx-dashboard.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/calendar-eightysix-vista.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/mootools-1.2.4-core.js"></script>
<script type="text/javascript" src="js/mootools-1.2.4.2-more.js"></script>
<script type="text/javascript" src="js/calendar-eightysix-v1.0.1.js"></script>
<script type="text/javascript">
		window.addEvent('domready', function() {
			new CalendarEightysix('exampleI', 	 { 'offsetY': -4 });
			new CalendarEightysix('exampleII', 	 { 'startMonday': true, 'format': '%m.%d.%Y', 'slideTransition': Fx.Transitions.Back.easeOut, 'draggable': true, 'offsetY': -4 });
	});	
</script>

</head>
<body>
  <div class="header-top">
	<div class="wrap">
        <div class="logo">
			<a href="main.php"><img height="56px" src="images/rtms.png" alt=""/></a>
		</div>
		<div class="cssmenu">
		  <nav id="nav" role="navigation">
			<a href="#nav" title="Show navigation">Show navigation</a>
			<a href="#" title="Hide navigation">Hide navigation</a>
			<ul class="clearfix">
				<li class="active"><a href="main.php">Home</a></li>
				<li><a href="man.php"><span>Add Train</span></a></li>
			    <li><a href="view.php">View User</a></li>
				<li><a href="station.php">Station</a></li>
				<li><a href="dashboard.php">DashBoard</a></li>
			
				<div class="clear"></div>
			</ul>
			
			<div class="buttons">
	
		
		    </nav>
		  </div>
		  <div class="buttons">
		  
				<div class="login_btn">

					<a href="login.html">Logged as: <?php echo $un;?></a>
				</div>
				<div class="get_btn">
					<a href="logout.php">Logout</a>
				</div>
				<div class="clear"></div>
		   </div>
	     <div class="clear"></div>
		
     </div>
    </div>