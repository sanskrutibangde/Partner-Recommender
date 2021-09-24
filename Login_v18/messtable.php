<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<title>MESS request Table</title>
</head>
<body style="background-color: lightblue">
	<nav class="navbar navbar-light bg-secondary">
	  <div class="container-fluid">
	    <span class="navbar-brand mb-0 h1  text-light ps-4">FeedBack By Students</span>
	  </div>
	</nav>
	<br><br>
	<?php
		$_S
		if(isset($_COOKIE["userid"])){
			$serevername = "localhost";
		    $username    = "root";
		    $password    = "";
		    $dbname      = "id17607845_guesting";

		    $conn = new mysqli($serevername,$username,$password,$dbname);
		    $messem = $_COOKIE['userid'];
		    if($conn->connect_error){
		        die("connetion failed" . $conn->connect_error);
		    }
		    $sql = "SELECT  `Email`, `Recommendation`, `Comment`, `Value`, `ServiceFood` FROM `messreview` WHERE `name` = '$mess'";

		    $result = $conn->query($sql);
		 if($result)
		{
		    if($result->num_rows > 0){
		    	 echo'<div class="justify-content-center ps-5">';
		    	while($row = $result->fetch_assoc()){
		    		
		    		//echo "<br>";
		    		echo '

		    	<br><br>

		    	<div class="card col-4" style="width: 50%;">
		    	<div class="card-body text-center bg-primary text-light">
				    <h5 class="card-title">'.$row['Email'].'</h5>
				    <p class="card-text">Recommendation :  <b>'.$row['Recommendation'].'</b></p>
				 </div>
				 <ul class="list-group list-group-flush">
				    <li class="list-group-item"> Comment : '.$row['Comment'].'</li>
				    
				  </ul>
				  <ul class="list-group list-group-flush">
				    <li class="list-group-item">Value : <b>'.$row['Value'].'</b></li>
				    <li class="list-group-item">Food Service Rating : <b>'.$row['ServiceFood'].'</b></li>
				  </ul>
			  	
	  			</div>
	  			
		    		';
		    	
		    	}echo'</div>';
		     
		    }
		    else{
		    	echo "<h1> No result for you</h1>";
		    }
	}
		
}else 
			//echo "<h1>Session expired</h1>"; 

	?>
</body>
</html>