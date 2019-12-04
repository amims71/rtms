</head>
<style type="text/css">h1 {
    text-align: center;
    font-size: 34
}

body {
    margin: 30px;
  background-color: darkgray ;
  border: 1px solid black;
  
  
    
}

p {
  margin-left: 50px
font-color:white;
font-weight: bold;

  }
  div.transbox {
  margin: 30px;
  background-color: white;
  border: 1px solid black;
  opacity: 0.6;
  filter: alpha(opacity=60);
}
h4{
    text-align: left;
    margin-left: 50px
}
#content {
    width: 1000px;
    margin:0 auto;
    padding: 5px;
    overflow:hidden;/*contain child floats*/
    background: none; 
}
#package_update {
    width: 500px;
    height: 150px;
    float: left;
    background: none;
    font-color: white;
}

#previous_update {
    width: 500px;
        height: 150px;
    float: right;
    background: none;
    font-color: white;
}
h3{
    text-align: right;
}
h5{
    text-align: right;
}
</style>
<body>

         <h1>Your Ticket Is Ready</h1>

         </div>
       </br>

       
       <div class="transbox">
       <h1>RTMS PROJECT</h1>
       </br>
       <h4>Serial No : <?php echo rand(1222,11222);?> </h4>
<div id="content">
    <div id="package_update">
	 <p>Tarin Name: <?php echo $_GET["tname"];?> </p>
    <p>From: <?php echo $_GET["s"];?></p>
	<p>To: <?php echo $_GET["d"];?></p>
	
    <p>No. Of Sits: <?php echo $_GET["sit"];?> </p>
    <p>Advance: <?php echo $_GET["cost"];?></p></div>
   
    <div id="previous_update">
    <p>Rent: <?php echo $_GET["cost"];?></p>
    <p>Due:0.00tk</p></div>
    </br>
    <h3>RTMS Approved</h3>
    <h5>Signeture</h5>
</div>
</div>
</body>