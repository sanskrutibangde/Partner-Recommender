<?php
    $serevername = "localhost";
    $username    = "root";
    $password    = "";
    $dbname      = "id17607845_guesting";

    $conn = new mysqli($serevername,$username,$password,$dbname);

    if($conn->connect_error){
        die("connetion failed" . $conn->connect_error);
    }

    if( isset($_POST['pg'])){
        $email = stripcslashes($_POST['email']);
        $pass = stripcslashes($_POST['pass']);
        $email = mysqli_real_escape_string($conn,$email);
        $pass  = mysqli_real_escape_string($conn,$pass);

    setcookie('userid',$email,time()+3600,"/");
    $sql = "SELECT * FROM pg WHERE Email = '$email' and Password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
    	$message = "Logged In!!";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	
    	header("refresh:0.5;  url=pgpanel.html");
    }
    else{
    	$message = "Wrong credential";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	header("refresh:0.5; url=pglogin.html");
    }
    $conn->close();
	}
	
	else if (isset($_POST['student'])) {
		$email = stripcslashes($_POST['email']);
        $pass = stripcslashes($_POST['pass']);
        $email = mysqli_real_escape_string($conn,$email);
        $pass  = mysqli_real_escape_string($conn,$pass);

    
    $sql = "SELECT * FROM student WHERE Email = '$email' and Password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
    	$message = "Logged In!!";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	
    	header("refresh:0.5;  url=student-panel.html");
    }
    else{
    	$message = "Wrong credential";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	header("refresh:0.5; url=studentlogin.html");
    }
    $conn->close();
	}
	else if (isset($_POST['mess'])) {
		$email = stripcslashes($_POST['email']);
        $pass = stripcslashes($_POST['pass']);
        $email = mysqli_real_escape_string($conn,$email);
        $pass  = mysqli_real_escape_string($conn,$pass);

    setcookie('userid',$email,time()+3600,"/");
    $sql = "SELECT * FROM mess1 WHERE Email = '$email' and Password = '$pass'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1){
    	$message = "Logged In!!";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	
    	header("refresh:0.5;  url=messpanel.html");
    }
    else{
    	$message = "Wrong credential";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	header("refresh:0.5; url=messlogin.html");
    }
    $conn->close();
	}
	
?>